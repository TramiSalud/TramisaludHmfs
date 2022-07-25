<?php

class ViewGestion_cr extends SugarView {

	function ViewGestion_cr() {
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

			$field_headings = array('CONT', 'FECHA_SOLICITUD', 'CEDULA', 'APELLIDO1', 'APELLIDO2', 'NOMBRE1', 'NOMBRE2', 'AREA_SERVICIO', 'TELEFONO1', 'NOMBRE_ENTIDAD', 'MUNICIPIO', 'SEXO', 'EDAD', 'ESPECIALIDAD_REQUERIDA', 'ESPECIALIDAD_REMISION', 'MEDICO_RESPONSABLE', 'DIAGNOSTICO', 'NOMBRE_DIAGNOSTICO', 'RESPONSABLE', 'JUSTIFICACION', 'CAUSA_REMISION', 'FECHAHORA', 'DIF_DIAS', 'QUIENCONTESTA', 'RESPUESTA', 'AMBULANCIA', 'CUAL', 'DESTINO', 'OBSERVACIONES_AMBULANCIA', 'NOTA');
			
			$row = array();
			$rows = array();
			foreach ($field_headings as $heading) {
				$row[$heading] = $heading;
			}
			$rows['Headings'] = $row;
			
			
		
			$query = "SELECT 
    gbi_anexo9.name AS 'CONT',
    DATE_FORMAT(gbi_anexo9.date_entered, '%Y/%m/%d') AS 'FECHA_SOLICITUD',
    accounts.`name` AS 'CEDULA',
    accounts_cstm.primerapellido_c AS 'APELLIDO1',
    accounts_cstm.segundoapellido_c AS 'APELLIDO2',
    accounts_cstm.primernombre_c AS 'NOMBRE1',
    accounts_cstm.segundonombre_c AS 'NOMBRE2',
    CASE
        WHEN gbi_anexo9.servicio_soli = '' THEN ''
        WHEN gbi_anexo9.servicio_soli = 'consulta_externa' THEN 'Consulta Externa'
        WHEN gbi_anexo9.servicio_soli = 'hospitalizacion' THEN 'Hospitalización'
        WHEN gbi_anexo9.servicio_soli = 'urgencias' THEN 'Urgencias'
    END AS 'AREA_SERVICIO',
    accounts_cstm.telefonopersonal_c AS 'TELEFONO1',
    eps_eps.`name` AS 'NOMBRE_ENTIDAD',
    mun_municipio.`name` AS 'MUNICIPIO',
    CASE
        WHEN accounts_cstm.genero_c = '' THEN ''
        WHEN accounts_cstm.genero_c = 'F' THEN 'Mujer'
        WHEN accounts_cstm.genero_c = 'M' THEN 'Hombre'
    END AS 'SEXO',
    gbi_egreso_centro_regulador.edad_paciente AS 'EDAD',
    CASE
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '1' THEN 'AMBULANCIA PARA CITA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '2' THEN 'APOYO DE U.C.I.POST QURURGICA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '3' THEN 'APOYO DE U.C.E POSTQUIRURGICA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '4' THEN 'ARTERIOGRAFIA PULMONAR'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '5' THEN 'BOLSAS COLECTORAS PARA COLOSTOMIA E ILEOSTOMIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '6' THEN 'BRONCOSCOPIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '7' THEN 'CARDIOLOGIA INTERVENCIONISTA Y HEMODINAMICA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '8' THEN 'CIRUGIA BARIOTRICA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '9' THEN 'CIRUGIA CARDIOVASCULAR'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '10' THEN 'CIRUGIA DE CABEZA Y CUELLO'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '11' THEN 'CIRUGIA DE LA MAMA Y TUMORES DE TEJIDOS BLANDOS'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '12' THEN 'CIRUGIA DEL TORAX'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '13' THEN 'CIRUGIA MAXILOFACIAL'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '14' THEN 'CIRUGIA PEDRIATICA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '15' THEN 'CIRUGIA PLASTICA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '16' THEN 'CIRUGIA VASCULAR Y ANGIOLOGIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '17' THEN 'COLANGIORESONANCIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '18' THEN 'COLANGIO TRASOPERATORIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '19' THEN 'COLON POR ENEMA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '20' THEN 'COLOPROCTOLGIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '21' THEN 'DERMATOLOGIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '22' THEN 'DIALISIS AMBULATORIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '23' THEN 'DIALISIS INTRAHOSPITALARIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '24' THEN 'DOLOR Y CUIDADOS PALEATIVOS'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '25' THEN 'ECOCARDIO CON DOBUTAMINA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '26' THEN 'ECOGRAFIA DOPPLER PLACENTERA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '27' THEN 'ELECTROENCEFALOGRAMA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '28' THEN 'ELECTROMIOGRAFIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '29' THEN 'EMBOLIZACION'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '30' THEN 'ESOFAGO ESTOMAGO DUODENO'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '31' THEN 'ESPIROMETRIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '32' THEN 'GAMAGRAFIA OSEA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '33' THEN 'HOLTER'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '34' THEN 'INTERCONSULTA CARDIOLOGIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '35' THEN 'INTERCONSULTA HEPATOLOGIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '36' THEN 'INTERCONSULTA INFECTOLOGIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '37' THEN 'INTERCONSULTA NEFROLOGIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '38' THEN 'INTERCONSULTA NEUMOLOGIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '39' THEN 'INTERCONSULTA NEUROLOGIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '40' THEN 'INTERCONSULTA OFTALMOLOGIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '41' THEN 'INTERCONSULTA ONCOLOGIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '42' THEN 'MAMOGRAFIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '43' THEN 'MEDICINA DOMICILIARIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '44' THEN 'MEDICINA NUCLEAR'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '45' THEN 'NEONATOLOGIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '46' THEN 'NEUROLOGIA PEDIATRICA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '47' THEN 'ONCOLOGIA PEDIATRICA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '48' THEN 'OTORRINOLARINGOLOGIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '49' THEN 'OXIGENO DOMICILIARIO'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '50' THEN 'OXIGENO PORTATIL PARA TRANSPORTE'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '51' THEN 'REMISION MEDICINA INTERNA TERCER NIVEL'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '52' THEN 'REMISION ANESTESIA POR COMORBILIDADES'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '53' THEN 'REMISION CIRUGIA GENERAL TERCER NIVEL'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '54' THEN 'REMISION DIALISIS'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '55' THEN 'REMISION GASTROENTEROLOGIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '56' THEN 'REMISION GINECOOBSTETRICIA TERCER NIVEL'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '57' THEN 'REMISION GINECO ONCOLOGIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '58' THEN 'REMISION HEPATOLOGIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '59' THEN 'REMISION NEUMOLOGIA ADULTOS'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '60' THEN 'REMISION NEUMOLOGIA INFANTIL'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '61' THEN 'REMISION NEUROCIRUGIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '62' THEN 'REMISION NEUROLOGIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '63' THEN 'REMISION OFTALMOLOGIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '64' THEN 'REMISION ORTOPEDIA ONCOLOGIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '65' THEN 'REMISION ORTOPEDIA PEDIATRIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '66' THEN 'REMISION ORTOPEDIA PROTESIS'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '67' THEN 'REMISION ORTOPEDIA RECOSTRUCTIVA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '68' THEN 'REMISION ORTOPEDIA TERCER NIVEL'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '69' THEN 'REMISION PEDIATRIA TERCER NIVEL'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '70' THEN 'REMISION PSIQUIATRICA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '71' THEN 'REMISION U.C.E.'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '72' THEN 'REMISION U.C.I.'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '73' THEN 'REMISION UROLOGIA TERCER NIVEL'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '74' THEN 'REMISION GINECOLOGIA TERCER NIVEL'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '75' THEN 'RESONANCIA ABDOMINAL'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '76' THEN 'RESONANCIA COLUMNA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '77' THEN 'RESONANCIA PELVIS'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '78' THEN 'RESONANCIA RODILLA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '79' THEN 'REUMATOLOGIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '80' THEN 'TIENE CITA DESDE LA CASA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '81' THEN 'TOXICOLOGIA CLINICA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '82' THEN 'UCI NEONATAL'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '83' THEN 'UCI PEDIATRIA'
        WHEN gbi_anexo9_cstm.servicio_solicitud_refe_c = '84' THEN 'URODINAMIA'
    END AS 'ESPECIALIDAD_REQUERIDA',
    gbi_anexo9.cargoactividad AS 'ESPECIALIDAD_REMISION',
    CONCAT(gbi_anexo9.nombreespecialistaso,
            ' ',
            gbi_anexo9.apellidoespecialistaso) AS 'MEDICO_RESPONSABLE',
    cie_cie10.`name` AS 'DIAGNOSTICO',
    cie_cie10.description AS 'NOMBRE_DIAGNOSTICO',
    CONCAT(users.first_name, ' ', users.last_name) AS 'RESPONSABLE',
    REPLACE(REPLACE(gbi_anexo9.description,
            CHAR(13),
            ''),
        CHAR(10),
        '') AS 'JUSTIFICACION',
    '' AS 'CAUSA_REMISION',
    gbi_egreso_centro_regulador.date_entered AS 'FECHAHORA',
    TIMESTAMPDIFF(DAY,
        gbi_anexo9.date_entered,
        gbi_egreso_centro_regulador.date_entered) AS 'DIF_DIAS',
    gbi_egreso_centro_regulador.funcionario_eps AS 'QUIENCONTESTA',
    CASE
        WHEN gbi_egreso_centro_regulador_cstm.respuesta_c = '' THEN ''
        WHEN gbi_egreso_centro_regulador_cstm.respuesta_c = 'ea' THEN 'Examen Autorizado'
        WHEN gbi_egreso_centro_regulador_cstm.respuesta_c = 'er' THEN 'Examen Rechazao'
        WHEN gbi_egreso_centro_regulador_cstm.respuesta_c = 'm' THEN 'Muerte'
        WHEN gbi_egreso_centro_regulador_cstm.respuesta_c = 'a' THEN 'Aceptado'
        WHEN gbi_egreso_centro_regulador_cstm.respuesta_c = 'rm' THEN 'Remisión Cancelada'
        WHEN gbi_egreso_centro_regulador_cstm.respuesta_c = 'pda' THEN 'Paciente Dado de Alta'
        when gbi_egreso_centro_regulador_cstm.respuesta_c = 'tu' then 'Traslado Urgente'
        when gbi_egreso_centro_regulador_cstm.respuesta_c = 'av' then 'Alta Voluntaria'
    END 'RESPUESTA',
    CASE
        WHEN gbi_egreso_centro_regulador.tipo_am = '' THEN ''
        WHEN gbi_egreso_centro_regulador.tipo_am = 'basica' THEN 'Básica'
        WHEN gbi_egreso_centro_regulador.tipo_am = 'medicalizada' THEN 'Medicalizada'
    END AS 'AMBULANCIA',
    CASE
        WHEN gbi_egreso_centro_regulador_cstm.pambulancia_c = '' THEN ''
        WHEN gbi_egreso_centro_regulador_cstm.pambulancia_c = 'ABTAB' THEN 'AMBULANCIA TAB'
        WHEN gbi_egreso_centro_regulador_cstm.pambulancia_c = 'ABOTR' THEN 'AMBULANCIA OTRA'
        WHEN gbi_egreso_centro_regulador_cstm.pambulancia_c = 'ABINTEN' THEN 'AMBULANCIA INTENSIVA'
        WHEN gbi_egreso_centro_regulador_cstm.pambulancia_c = 'ABEMI' THEN 'AMBULANCIA EMI'
        WHEN gbi_egreso_centro_regulador_cstm.pambulancia_c = 'ABCR' THEN 'AMBULANCIA CERO RIESGOS'
        WHEN gbi_egreso_centro_regulador_cstm.pambulancia_c = 'ABB' THEN 'AMBULANCIA BOMBEROS'
        WHEN gbi_egreso_centro_regulador_cstm.pambulancia_c = 'ABBT' THEN 'AMBULANCIA BIOVITAL'
        WHEN gbi_egreso_centro_regulador_cstm.pambulancia_c = 'ABI' THEN 'AMBULANCIA INSTITUCIONAL'
        WHEN gbi_egreso_centro_regulador_cstm.pambulancia_c = 'ABAP' THEN 'AMBULANCIA ALPHA'
        WHEN gbi_egreso_centro_regulador_cstm.pambulancia_c = 'AHG' THEN 'AMBULANCIA HOME GROUP'
        WHEN gbi_egreso_centro_regulador_cstm.pambulancia_c = 'AR' THEN 'AMBULANCIA RENACER'
        WHEN gbi_egreso_centro_regulador_cstm.pambulancia_c = 'AS' THEN 'AMBULANCIA SUSMEDICAS'
        WHEN gbi_egreso_centro_regulador_cstm.pambulancia_c = 'APA' THEN 'AMBULANCIA PRONTO AMBULANCIA'
        WHEN gbi_egreso_centro_regulador_cstm.pambulancia_c = 'AE' THEN 'AMBULANCIA EMED'
        WHEN gbi_egreso_centro_regulador_cstm.pambulancia_c = 'AGS' THEN 'AMBULANCIA GRAN SALUD'
    END AS 'CUAL',
    IFNULL(ips_ips.`name`, ip2.`name`) AS 'DESTINO',
    REPLACE(REPLACE(gbi_egreso_centro_regulador.observaciones,
            CHAR(13),
            ''),
        CHAR(10),
        '') AS 'OBSERVACIONES_AMBULANCIA',
    '' AS 'NOTA'
FROM
    gbi_anexo9
        INNER JOIN
    accounts_gbi_anexo9_1_c ON gbi_anexo9.id = accounts_gbi_anexo9_1_c.accounts_gbi_anexo9_1gbi_anexo9_idb
        INNER JOIN
    accounts ON accounts.id = accounts_gbi_anexo9_1_c.accounts_gbi_anexo9_1accounts_ida
        INNER JOIN
    accounts_cstm ON accounts_cstm.id_c = accounts.id
        LEFT JOIN
    eps_eps ON eps_eps.id = gbi_anexo9.eps_eps_id_c
        LEFT JOIN
    mun_municipio ON mun_municipio.id = gbi_anexo9.mun_municipio_id_c
        INNER JOIN
    gbi_anexo9_cstm ON gbi_anexo9.id = gbi_anexo9_cstm.id_c
        LEFT JOIN
    cie_cie10 ON cie_cie10.id = gbi_anexo9_cstm.cie_cie10_id_c
        INNER JOIN
    users ON users.id = gbi_anexo9.created_by
        LEFT JOIN
    gbi_anexo9_gbi_egreso_centro_regulador_1_c ON gbi_anexo9.id = gbi_anexo9_gbi_egreso_centro_regulador_1gbi_anexo9_ida
        LEFT JOIN
    gbi_egreso_centro_regulador ON gbi_anexo95cdegulador_idb = gbi_egreso_centro_regulador.id
        LEFT JOIN
    gbi_egreso_centro_regulador_cstm ON gbi_egreso_centro_regulador.id = gbi_egreso_centro_regulador_cstm.id_c
        LEFT JOIN
    ips_ips ON ips_ips.id = gbi_egreso_centro_regulador.ips_ips_id_c
        LEFT JOIN
    ips_ips ip2 ON ip2.id = gbi_egreso_centro_regulador.ips_ips_id1_c
WHERE
    gbi_anexo9.deleted = 0
        AND accounts_gbi_anexo9_1_c.deleted = 0
        AND accounts.deleted = 0 ";
			
			if (!empty($_REQUEST["fecha_inicio"]) && !empty($_REQUEST["fecha_final"]))
			{
				$query .= "AND gbi_anexo9.date_entered BETWEEN '".$_REQUEST["fecha_inicio"]."' AND DATE_ADD('".$_REQUEST["fecha_final"]."',INTERVAL 1 DAY) ";
				
			}
			
			$query .= "GROUP BY gbi_anexo9.id
				ORDER BY gbi_anexo9.date_entered ASC";
			//echo $query;
			
			$db->query("SET SESSION group_concat_max_len = 10000");
			$result = $db->query($query);
			
			while ($row = $db->fetchByAssoc($result)) {
				//var_dump($row);
				$rows[] = $row;
			} 

			$filename = 'GESTION_CENTRO_REGULADOR_'.date("dmY").".csv";
			$this->do_list_csv_output($rows, $filename);
			//var_dump($query);
		}
		else
		{
			// display the form, or problem
			?>
			<h1>EXPORTAR GESTION CENTRO REGULADOR</h1>

			<p>
				<div>
				<table border="0" cellpadding="0" cellspacing="0" width="730"><tr>
					<tr>
						<td class="tabForm">
							<form name=reportfm action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
								<input type="hidden" name="module" value="<?php echo $currentModule; ?>">
								<input type="hidden" name="action" value="gestion_cr" />
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
