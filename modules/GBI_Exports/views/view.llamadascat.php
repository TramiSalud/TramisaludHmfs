<?php

class ViewLlamadascat extends SugarView {

	function ViewLlamadascat() {
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
		global $app_list_strings;

//file_put_contents('\\\192.168.0.15\\htdocs\\tramisalud_dev_gbi\\modules\\GBI_Exports\\views\\log.txt', var_export($gridline, true), FILE_APPEND);

		if (empty($_REQUEST['id'])) $_REQUEST['id'] = '';

		if (!empty($_REQUEST['export_trigger'])) {
			//ob_clean();
			$this->options['show_footer']=false;

			$field_headings = array('Nro_de_llamada', 'Paciente', 'Tipo_de_llamada', 'Estado_de_llamada', 'Fecha_de_llamada', 'Fecha_realizacion_de_Llamada', 'Duracion_de_Llamada', 'Creado_Por');

			$row = array();
			$rows = array();
			foreach ($field_headings as $heading) {
				$row[$heading] = $heading;
			}
			$rows['Headings'] = $row;

			$query = "SELECT
    call_at.name AS Nro_de_llamada,
    pac.`name` AS Paciente,
    CASE
        WHEN call_at.tipo_de_llamada = '' THEN 'Sin_indicar'
        WHEN call_at.tipo_de_llamada = '3' THEN 'Entrante'
        WHEN call_at.tipo_de_llamada = '4' THEN 'Saliente'
    END AS Tipo_de_llamada,
    CASE
        WHEN call_at.estado = '' THEN 'Sin_indicar'
        WHEN call_at.estado = '1' THEN 'Planificada'
        WHEN call_at.estado = '2' THEN 'Realizada'
        WHEN call_at.estado = '3' THEN 'No Realizada'
    END AS Estado_de_llamada,
    date_format(call_at.fecha_de_llamada,'%Y-%m-%d') AS Fecha_de_llamada,
    DATE_FORMAT(call_at.date_entered, '%Y-%m-%d') AS Fecha_realizacion_de_Llamada,
    call_at.duracion AS Duracion_de_Llamada,
    concat(
    users.first_name,
    ' ',
    users.last_name
    ) as Creado_Por
FROM
    tms_tms_catllamadas call_at
        INNER JOIN
    accounts_tms_tms_catllamadas_1_c call_pac ON call_pac.accounts_tms_tms_catllamadas_1tms_tms_catllamadas_idb = call_at.id
        INNER JOIN
    accounts pac ON pac.id = accounts_tms_tms_catllamadas_1accounts_ida
        INNER JOIN
    accounts_cstm pac_c ON pac_c.id_c = pac.id
        LEFT JOIN
    tms_tms_catllamadas_cstm call_at_c ON call_at_c.id_c = call_at.id
    LEFT JOIN
	users ON users.id = call_at.created_by
    where
    call_at.deleted = 0 ";
			if (!empty($_REQUEST["fecha_inicio"]) && !empty($_REQUEST["fecha_final"]))
			{
				$query .= "AND call_at.date_entered BETWEEN '".$_REQUEST["fecha_inicio"]."' AND DATE_ADD('".$_REQUEST["fecha_final"]."',INTERVAL 1 DAY) ";
			}

			$query .= "ORDER BY call_at.date_entered";

			//echo $query;
			//$acentos = $db->query("SET NAMES 'utf8'");
			$result = $db->query($query);
			while ($row = $db->fetchByAssoc($result)) {
				//var_dump($row);
				$rows[] = $row;
			}

			$filename = 'Llamadascat_'.date("dmY").".csv";
			$this->do_list_csv_output($rows, $filename);
			//var_dump($query);

		}// end of if ($_REQUEST['export_trigger']
		else
		{
			// display the form, or problem
			?>

			<h1>EXPORTAR LLAMADAS CAT</h1>

			<p>
				<div>
				<table border="0" cellpadding="0" cellspacing="0" width="730"><tr>
					<tr>
						<td class="tabForm">
							<form name=reportfm action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
								<input type="hidden" name="module" value="<?php echo $currentModule; ?>">
								<input type="hidden" name="action" value="llamadascat" />
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
