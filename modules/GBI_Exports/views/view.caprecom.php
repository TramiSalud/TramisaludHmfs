<?php

class ViewCaprecom extends SugarView {

	function ViewCaprecom() {
 		parent::SugarView();
	}

	function do_list_csv_output($rows, $filename)
	{
		header("Content-type: application/octet-stream");
		//header("content-type:application/csv;charset=UTF-8");
		header("Content-Disposition: attachment; filename=\"$filename\""); 
		header("Content-Transfer-Encoding: binary"); 
		//header('Content-Encoding: UTF-8');
		echo "\xEF\xBB\xBF";
		if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE')) {
			// IE cannot download from sessions without a cache 
			header('Cache-Control: public'); 
		}
		foreach (array_keys($rows) as $key) {
			$row = $rows[$key];
			echo $this->list_row_to_csv($row);
		}
	}

	//function list_row_to_csv(array $fields, $delimiter = ',', $enclosure = '"', $mysql_null = false) { 
	function list_row_to_csv(array $fields, $delimiter = '|', $enclosure = '', $mysql_null = false) { 
		$delimiter_esc = preg_quote($delimiter, '/'); 
		$enclosure_esc = preg_quote($enclosure, '/'); 
	
		$output = array(); 
		foreach ($fields as $field) { 
			if ($field === null && $mysql_null) { 
				$output[] = 'NULL'; 
				continue; 
			} 
	
			$output[] = preg_match("/(?:${delimiter_esc}|${enclosure_esc}|\s)/", $field) ? ( 
				$enclosure . str_replace($enclosure, $enclosure . $enclosure, $field) . $enclosure 
			) : $field; 
		} 
	
		return (join($delimiter, $output) . "\n"); 
	}

	function display() {

	
		global $db;
		global $currentModule;
		
//file_put_contents('\\\192.168.0.15\\htdocs\\tramisalud_dev_gbi\\modules\\GBI_Exports\\views\\log.txt', var_export($gridline, true), FILE_APPEND);		
		//ob_clean();
		if (!empty($_REQUEST['export_trigger'])) {
			if (!empty($_REQUEST['fecha_inicio'])) $fecha_inicio = $_REQUEST['fecha_inicio'];
			if (!empty($_REQUEST['fecha_final']))  $fecha_final = $_REQUEST['fecha_final'];
			
			$this->options['show_footer']=false;

			$field_headings = array('EPS', 'FECHA REMISION', 'NOMBRE', 'DOCUMENTO', 'DIAGNOSTICO', 'PRIORIDAD', 'ESPECIALISTA QUIEN SOLICITA', 'SERVICIOS SOLICITADOS', 'CREADO POR');
			
			$row = array();
			$rows = array();
			foreach ($field_headings as $heading) {
				$row[$heading] = $heading;
			}
			$rows['Headings'] = $row;
			
			
		
			$query = "SELECT
					eps. NAME AS 'EPS',
					DATE_FORMAT(a3.date_entered, '%d/%m/%Y') AS 'FECHA REMISION',
					CONCAT(
						pc.primernombre_c,
						' ',
						pc.segundonombre_c,
						' ',
						pc.primerapellido_c,
						' ',
						pc.segundoapellido_c
					) AS NOMBRE,
					p.`name` AS 'DOCUMENTO',
					diag. NAME AS 'DIAGNOSTICO',
					CASE
				WHEN a3.prioridadatencion2 = 'prioritaria' THEN
					'SI'
				WHEN a3.prioridadatencion2 = 'no_prioritaria' THEN
					'NO'
				END AS 'PRIORIDAD',
				 CONCAT(e.nombres, ' ', e.apellidos) AS 'ESPECIALISTA QUIEN SOLICITA',
				 GROUP_CONCAT(
					CUPS_cstm.gbi_detalle_c SEPARATOR '^^'
				) AS 'SERVICIOS SOLICITADOS',
				CONCAT(
						users.first_name,
						' ',
						users.last_name
					) AS 'CREADO POR'
				FROM
					gbia3_anexo3 a3
				LEFT JOIN gbia3_anexo3_cstm a3_cstm ON a3.id = a3_cstm.id_c
				INNER JOIN accounts_gbia3_anexo3_1_c p_a3 ON a3.id = p_a3.accounts_gbia3_anexo3_1gbia3_anexo3_idb
				INNER JOIN accounts p ON p.id = p_a3.accounts_gbia3_anexo3_1accounts_ida
				INNER JOIN accounts_cstm pc ON pc.id_c = p.id
				LEFT JOIN eps_eps eps ON eps.id = a3.eps_eps_id_c
				LEFT JOIN cie_cie10 diag ON diag.id = a3.cie_cie10_id_c
				LEFT JOIN esp_especialista e ON e.id = a3_cstm.esp_especialista_id_c
				LEFT JOIN gbia3_anexo3_gbia3_manejointegral_1_c a3_CUPS ON a3_CUPS.gbia3_anexo3_gbia3_manejointegral_1gbia3_anexo3_ida = a3.id
				LEFT JOIN gbia3_manejointegral CUPS ON CUPS.id = a3_CUPS.gbia3_anexo3_gbia3_manejointegral_1gbia3_manejointegral_idb
				LEFT JOIN gbia3_manejointegral_cstm CUPS_cstm ON CUPS_cstm.id_c = CUPS.id
				LEFT JOIN users ON users.id = a3.created_by
				WHERE
					a3.deleted = 0
				AND p_a3.deleted = 0
				AND p.deleted = 0
				AND a3_CUPS.deleted = 0
				AND eps.`name` LIKE 'CAPRECOM%' ";
			
			if (!empty($_REQUEST["fecha_inicio"]) && !empty($_REQUEST["fecha_final"]))
			{
				$query .= "AND a3.date_entered BETWEEN '".$_REQUEST["fecha_inicio"]."' AND DATE_ADD('".$_REQUEST["fecha_final"]."',INTERVAL 1 DAY) ";
				
			}
			
			$query .= "GROUP BY a3.id
				ORDER BY a3.date_entered ASC";
			//echo $query;
			
			$db->query("SET SESSION group_concat_max_len = 10000");
			$result = $db->query($query);
			
			while ($row = $db->fetchByAssoc($result)) {
				//var_dump($row);
				$rows[] = $row;
			} 

			$filename = 'PACIENTES_CAPRECOM_'.date("dmY").".csv";
			$this->do_list_csv_output($rows, $filename);
			//var_dump($query);
		}
		else
		{
			// display the form, or problem
			?>
			<h1>EXPORTAR PACIENTES DE CAPRECOM</h1>

			<p>
				<div>
				<table border="0" cellpadding="0" cellspacing="0" width="730"><tr>
					<tr>
						<td class="tabForm">
							<form name=reportfm action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
								<input type="hidden" name="module" value="<?php echo $currentModule; ?>">
								<input type="hidden" name="action" value="caprecom" />
								</br>&nbsp;
								<strong>Fecha de inicio:</strong>
								<input type="date" id="fecha_inicio" name="fecha_inicio">
								<strong>Fecha de Final:</strong>
								<input type="date" id="fecha_final" name="fecha_final">
								<input class="button" type="submit" name="submit" value="Exportar" align="bottom" style="margin: 5px; vertical-align: middle; ">
								<input type="hidden" name="export_trigger" value="yes">
							</form>
						</td>
					</tr>
				</table>
				</div>
			</p>
			<?php
		}

	} // end of display
} // end of class

?>
