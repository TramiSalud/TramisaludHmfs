<?php

class ViewEnvio_A3 extends SugarView {

	function ViewEnvio_A3() {
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
	function list_row_to_csv(array $fields, $delimiter = ';', $enclosure = '', $mysql_null = false) { 
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
		global $app_list_strings;
		
//file_put_contents('\\\192.168.0.15\\htdocs\\tramisalud_dev_gbi\\modules\\GBI_Exports\\views\\log.txt', var_export($gridline, true), FILE_APPEND);		
		
		if (empty($_REQUEST['id'])) $_REQUEST['id'] = '';
		
		if (!empty($_REQUEST['export_trigger'])) {
			//ob_clean();
			$this->options['show_footer']=false;

			$field_headings = array('NRO. SOLICITUD', 'ENVIADO', 'CREADO POR');
			
			$row = array();
			$rows = array();
			foreach ($field_headings as $heading) {
				$row[$heading] = $heading;
			}
			$rows['Headings'] = $row;
		
			$query = "SELECT
						a3. NAME AS 'NRO. SOLICITUD',
						CASE
						WHEN a3_c.correo_enviado_c = 0 THEN
						'NO'
						WHEN a3_c.correo_enviado_c = 1 THEN
						'SI'
						END AS ENVIADO,
 						CONCAT(
						users.first_name,
						' ',
						users.last_name
						) AS 'CREADO POR'
						FROM
							gbia3_anexo3 a3
						LEFT JOIN gbia3_anexo3_cstm a3_c ON a3_c.id_c = a3.id
						LEFT JOIN users ON users.id = a3.created_by
						WHERE
							a3.deleted = 0 ";
			
			if (!empty($_REQUEST["fecha_inicio"]) && !empty($_REQUEST["fecha_final"]))
			{
				$query .= "AND a3.date_entered BETWEEN '".$_REQUEST["fecha_inicio"]."' AND DATE_ADD('".$_REQUEST["fecha_final"]."',INTERVAL 1 DAY) ";
			}
			
			$query .= "ORDER BY a3.date_entered ASC";

			//echo $query;
			//$acentos = $db->query("SET NAMES 'utf8'");
			$result = $db->query($query);
			while ($row = $db->fetchByAssoc($result)) {
				//var_dump($row);
				$rows[] = $row;
			} 

			$filename = 'ENVIOS_SOLICITUDES_ANEXO_3_'.date("dmY").".csv";
			$this->do_list_csv_output($rows, $filename);
			//var_dump($query);
			
		}// end of if ($_REQUEST['export_trigger']
		else 
		{
			// display the form, or problem
			?>

			<h1>EXPORTAR - ENVIO SOLICITUDES ANEXO 3</h1>

			<p>
				<div>
				<table border="0" cellpadding="0" cellspacing="0" width="730"><tr>
					<tr>
						<td class="tabForm">
							<form name=reportfm action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
								<input type="hidden" name="module" value="<?php echo $currentModule; ?>">
								<input type="hidden" name="action" value="envio_a3" /> 
								</br>
								<strong>Fecha de inicio:&nbsp;</strong>
								<input type="date" id="fecha_inicio" name="fecha_inicio">
								<strong>Fecha de Final:&nbsp;</strong>
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

		} // end of if else

	} // end of display
} // end of class

?>
