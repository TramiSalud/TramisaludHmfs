<?php

class ViewTareascat extends SugarView {

	function ViewTareascat() {
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

			$field_headings = array('Nro_Tarea', 'Paciente', 'Tipode_Tarea', 'Estado', 'Fecha_de_Tarea', 'Fecha_de_Realizacion', 'Duracion_en_Segundos', 'Duracion_en_Minutos', 'Duracion_en_Dias', 'Creado_Por', 'Realizado_Por');

			$row = array();
			$rows = array();
			foreach ($field_headings as $heading) {
				$row[$heading] = $heading;
			}
			$rows['Headings'] = $row;

			$query = "SELECT 
    task.NAME AS Nro_Tarea,
    pac.`name` AS Paciente,
    CASE
        WHEN task.tipo_de_tarea = '1' THEN 'Anexo Técnico Nro. 1'
        WHEN task.tipo_de_tarea = '2' THEN 'Anexo Técnico Nro. 2'
        WHEN task.tipo_de_tarea = '3' THEN 'Anexo Técnico Nro. 3'
        WHEN task.tipo_de_tarea = '4' THEN 'AT Nro. 3 de cierre'
        WHEN task.tipo_de_tarea = '11' THEN 'Anexo Técnico Nro. 2  y Anexo Técnico Nro. 3'
        WHEN task.tipo_de_tarea = '5' THEN 'AT NO POS'
        WHEN task.tipo_de_tarea = '6' THEN 'Gestión Telefónica'
        WHEN task.tipo_de_tarea = '7' THEN 'Anexo Extemporáneo'
        WHEN task.tipo_de_tarea = '8' THEN 'Otro'
        WHEN task.tipo_de_tarea = '9' THEN 'Corrección de Datos Paciente'
        WHEN task.tipo_de_tarea = '10' THEN 'Corrección de Pagadores'
    END AS Tipo_de_Tarea,
    CASE
        WHEN task.estado = '1' THEN 'Abierta'
        WHEN task.estado = '2' THEN 'Cerrada'
        WHEN task.estado = '3' THEN 'En Progreso'
    END AS Estado,
    DATE_FORMAT(task.date_entered, '%Y-%m-%d') AS Fecha_de_Tarea,
    DATE_FORMAT(task.date_modified, '%Y-%m-%d') AS Fecha_de_Realizacion,
    TIMESTAMPDIFF(SECOND,
        task.date_entered,
        task.date_modified) AS Duracion_en_Segundos,
    TIMESTAMPDIFF(MINUTE,
        task.date_entered,
        task.date_modified) AS Duracion_en_Minutos,
    TIMESTAMPDIFF(DAY,
        task.date_entered,
        task.date_modified) AS Duracion_en_Dias,
    CONCAT(users.first_name, ' ', users.last_name) AS Creado_Por,
    CONCAT(user_m.first_name, ' ', user_m.last_name) AS Realizado_Por
FROM
    tms_tms_centralautorizaciones task
        INNER JOIN
    accounts_tms_tms_centralautorizaciones_1_c task_pac ON task_pac.accounts_t6bd9aciones_idb = task.id
        INNER JOIN
    accounts pac ON pac.id = accounts_tms_tms_centralautorizaciones_1accounts_ida
        INNER JOIN
    accounts_cstm pac_c ON pac_c.id_c = pac.id
        LEFT JOIN
    tms_tms_centralautorizaciones_cstm task_c ON task_c.id_c = task.id
        LEFT JOIN
    users ON users.id = task.created_by
        LEFT JOIN
    users user_m ON user_m.id = task.modified_user_id
WHERE
    task.deleted = 0 ";
            if (!empty($_REQUEST["fecha_inicio"]) && !empty($_REQUEST["fecha_final"]))
			{
				$query .= "AND task.date_entered BETWEEN '".$_REQUEST["fecha_inicio"]."' AND DATE_ADD('".$_REQUEST["fecha_final"]."',INTERVAL 1 DAY) ";
			}

			$query .= "ORDER BY task.date_entered";

			//echo $query;
			//$acentos = $db->query("SET NAMES 'utf8'");
			$result = $db->query($query);
			while ($row = $db->fetchByAssoc($result)) {
				//var_dump($row);
				$rows[] = $row;
			}

			$filename = 'tareascat_'.date("dmY").".csv";
			$this->do_list_csv_output($rows, $filename);
			//var_dump($query);

		}// end of if ($_REQUEST['export_trigger']
		else
		{
			// display the form, or problem
			?>

			<h1>EXPORTAR TAREAS CAT</h1>

			<p>
				<div>
				<table border="0" cellpadding="0" cellspacing="0" width="730"><tr>
					<tr>
						<td class="tabForm">
							<form name=reportfm action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
								<input type="hidden" name="module" value="<?php echo $currentModule; ?>">
								<input type="hidden" name="action" value="tareascat" />
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
