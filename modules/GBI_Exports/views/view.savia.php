<?php

class ViewSavia extends SugarView {

	function ViewSavia() {
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

			$field_headings = array('EPS', 'CONVERSION', 'PRIORIDAD', 'TIPO_DOCUMENTO', 'DOCUMENTO', 'CODIGO_SERVICIO', 'FUENTE_ORDEN', 'CANTIDAD', 'FECHA_REMISION', 'CODIGO_ESPECIALIDAD', 'MOTIVO_CONSULTA', 'CODIGO_DIAGNOSTICO', 'TIPO_ORDEN', 'OBSERVACIONES', 'CREADO_POR');

			$row = array();
			$rows = array();
			foreach ($field_headings as $heading) {
				$row[$heading] = $heading;
			}
			$rows['Headings'] = $row;

			$query = "SELECT
	eps.`name` AS EPS,
	CASE
WHEN CUP_c.codmp_c != ''
AND CUP_c.codmp_c IS NOT NULL THEN
	'MP'
ELSE
	CASE
WHEN ips.nrodocumento = '890911816' THEN
	CASE
WHEN CUP_c.codiss_c IS NOT NULL
AND CUP_c.codiss_c != '' THEN
	'ISS'
ELSE
	'CUPS'
END
WHEN ips.nrodocumento = '890985703' THEN
	CASE
WHEN CUP_c.codsoat_c IS NOT NULL
AND CUP_c.codsoat_c != '' THEN
	'SOAT'
ELSE
	'CUPS'
END
ELSE
	'CUPS'
END
END AS CONVERSION,
 CASE
WHEN a3.prioridadatencion2 = 'prioritaria' THEN
	'SI'
WHEN a3.prioridadatencion2 = 'no_prioritaria' THEN
	'NO'
END AS PRIORIDAD,
 pc.tipo_documento_c AS TIPO_DOCUMENTO,
 p. NAME AS DOCUMENTO,
 CASE
WHEN CUP_c.codmp_c != ''
AND CUP_c.codmp_c IS NOT NULL THEN
	CUP_c.codmp_c
ELSE
	CASE
WHEN ips.nrodocumento = '890911816' THEN
	CASE
WHEN CUP_c.codiss_c IS NOT NULL
AND CUP_c.codiss_c != '' THEN
	CUP_c.codiss_c
ELSE
	CUP.`name`
END
WHEN ips.nrodocumento = '890985703' THEN
	CASE
WHEN CUP_c.codsoat_c IS NOT NULL
AND CUP_c.codsoat_c != '' THEN
	CUP_c.codsoat_c
ELSE
	CUP.`name`
END
ELSE
	CUP.`name`
END
END AS CODIGO_SERVICIO,
 a3_c.fuenteorden_c AS FUENTE_ORDEN,
 CUPS.cantidadcups AS CANTIDAD,
 DATE_FORMAT(a3.date_entered, '%Y/%m/%d') AS FECHA_REMISION,
 esp.cargo AS CODIGO_ESPECIALIDAD,
 a3_c.motivoconsulta_c AS MOTIVO_CONSULTA,
 diag.`name` AS CODIGO_DIAGNOSTICO,
 '' AS TIPO_ORDEN,
 CONCAT(
	REPLACE (
		REPLACE (
			REPLACE (
				REPLACE (
					a3.justificacionclinica,
					CHAR (10),
					''
				),
				CHAR (13),
				''
			),
			CHAR (9),
			''
		),
		CHAR (44),
		''
	),
	'^^',
	CASE
WHEN CUP_c.codmp_c != ''
AND CUP_c.codmp_c IS NOT NULL THEN
	CUP_c.nombreservmp_c
ELSE
	CASE
WHEN ips.nrodocumento = '890911816' THEN
	CASE
WHEN CUP_c.codiss_c IS NOT NULL
AND CUP_c.codiss_c != '' THEN
	CUP.nombreserviss
ELSE
	CUP.description
END
WHEN ips.nrodocumento = '890985703' THEN
	CASE
WHEN CUP_c.codsoat_c IS NOT NULL
AND CUP_c.codsoat_c != '' THEN
	CUP.nombreservsoat
ELSE
	CUP.description
END
ELSE
	CUP.description
END
END
) AS OBSERVACIONES,
 CONCAT(
	users.first_name,
	' ',
	users.last_name
) AS 'CREADO_POR'
FROM
	gbia3_anexo3 a3
INNER JOIN accounts_gbia3_anexo3_1_c p_a3 ON p_a3.accounts_gbia3_anexo3_1gbia3_anexo3_idb = a3.id
INNER JOIN accounts p ON p.id = p_a3.accounts_gbia3_anexo3_1accounts_ida
INNER JOIN accounts_cstm pc ON pc.id_c = p.id
LEFT JOIN gbia3_anexo3_gbia3_manejointegral_1_c a3_CUPS ON a3_CUPS.gbia3_anexo3_gbia3_manejointegral_1gbia3_anexo3_ida = a3.id
LEFT JOIN gbia3_manejointegral CUPS ON CUPS.id = a3_CUPS.gbia3_anexo3_gbia3_manejointegral_1gbia3_manejointegral_idb
LEFT JOIN gbicu_cups CUP ON CUP.id = CUPS.gbicu_cups_id_c
LEFT JOIN gbicu_cups_cstm CUP_c ON CUP_c.id_c = CUP.id
LEFT JOIN ips_ips ips ON ips.id = a3.ips_ips_id_c
LEFT JOIN gbia3_anexo3_cstm a3_c ON a3_c.id_c = a3.id
LEFT JOIN esp_especialista esp ON esp.id = a3_c.esp_especialista_id_c
LEFT JOIN cie_cie10 diag ON diag.id = a3.cie_cie10_id_c
LEFT JOIN gbia3_manejointegral_cstm CUPS_c ON CUPS.id = CUPS_c.id_c
LEFT JOIN eps_eps eps ON eps.id = a3.eps_eps_id_c
LEFT JOIN users ON users.id = a3.created_by
WHERE
	a3.deleted = 0
AND p_a3.deleted = 0
AND p.deleted = 0
AND a3_CUPS.deleted = 0
AND eps.`name` LIKE 'Savia Salud Electivo%'";

			if (!empty($_REQUEST["prioridad"]))
			{
				$query .= "AND a3.prioridadatencion2 = '".$_REQUEST["prioridad"]."' ";
			}

			if (!empty($_REQUEST["fecha_inicio"]) && !empty($_REQUEST["fecha_final"]))
			{
				$query .= "AND a3.date_entered BETWEEN '".$_REQUEST["fecha_inicio"]."' AND DATE_ADD('".$_REQUEST["fecha_final"]."',INTERVAL 1 DAY) ";
			}

			$query .= "ORDER BY a3.date_entered";

			//echo $query;
			//$acentos = $db->query("SET NAMES 'utf8'");
			$result = $db->query($query);
			while ($row = $db->fetchByAssoc($result)) {
				//var_dump($row);
				$rows[] = $row;
			}

			$filename = 'PACIENTES_SAVIA_'.date("dmY").".csv";
			$this->do_list_csv_output($rows, $filename);
			//var_dump($query);

		}// end of if ($_REQUEST['export_trigger']
		else
		{
			// display the form, or problem
			?>

			<h1>EXPORTAR PACIENTES DE SAVIA</h1>

			<p>
				<div>
				<table border="0" cellpadding="0" cellspacing="0" width="730"><tr>
					<tr>
						<td class="tabForm">
							<form name=reportfm action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
								<input type="hidden" name="module" value="<?php echo $currentModule; ?>">
								<input type="hidden" name="action" value="savia" />
								</br>
								<strong>Prioridad de la atención:&nbsp;</strong>
								<select size="1" style="margin: 0;" name="prioridad">
									<?php

										foreach ($app_list_strings["prioridadatencion_1"] as $key => $value) {
											$priori[$key] = $value;
											?>
											<option value="<?php echo $key; ?>"
												<?php if ($key == $_REQUEST['prioridad'])echo ' selected="selected"'; ?>
											><?php echo $value; ?></option>
											<?php
										}
									?>
								</select>
								<br><br>
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
