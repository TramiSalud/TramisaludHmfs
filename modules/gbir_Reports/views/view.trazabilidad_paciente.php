<?php
require_once ("include/php-excel.class.php");

class ViewTrazabilidad_Paciente extends SugarView {

	function ViewTrazabilidad_Paciente() {
 		parent::SugarView();
	}

	function display() {


global $db;
global $app_strings;
global $app_list_strings;
global $mod_strings;
global $theme;
global $currentModule;
global $current_language;
global $gridline;
global $current_user;
global $sugar_flavor;

require_once("modules/".$currentModule."/calendar.class.php");
require_once("modules/".$currentModule."/cms_seo.class.php");
require_once("modules/".$currentModule."/db_criteria.class.php");


$theme_path = "themes/".$theme."/";
$image_path = $theme_path."images/";

$image_path_default = "themes/default/images/";

require_once($theme_path.'layout_utils.php');

// Get all current user ACL roles.



if (empty($_REQUEST['start_date'])) $_REQUEST['start_date']= '';
if (empty($_REQUEST['end_date'])) $_REQUEST['end_date']= '';


?>

<h1>INFORME TRAZABILIDAD PACIENTES</h1>

<p><div>

	<table border="0" cellpadding="0" cellspacing="0" width="730">
		<tr>
			<td class="tabForm">

				<form name=reportfm action="<?php echo $_SERVER['PHP_SELF']; ?>"
					method="get">


					<input type="hidden" name="module"
						value="<?php echo $currentModule; ?>"> <input type="hidden"
						name="action" value="trazabilidad_paciente" /> <strong>Consultas:</strong> <br /><br />

					</select> <strong>Fecha Inicial:</strong> <input
						autocomplete="off" type="text" name="start_date" id="start_date"
						value="<?php echo htmlspecialchars($_REQUEST['start_date']); ?>"
						title='' tabindex='1' size="11" maxlength="10"> <img border="0"
						src="themes/default/images/jscalendar.gif" alt="Start Date"
						id="start_date_trigger" align="absmiddle" />
					<script type="text/javascript">

							Calendar.setup ({
							inputField : "start_date",
							//daFormat : "%m/%d/%Y",
							daFormat : "%Y/%m/%d",
							button : "start_date_trigger",
							singleClick : true,
							//dateStr : "12/19/2009",
							dateStr : "2009/12/19",
							step : 1
							}
							);
							</script>
					&nbsp; <span class="FontSoftSmall">(Formato: aaaa/mm/dd)</span> <br />
					<br />
					</select> <strong>Fecha Final:&nbsp;&nbsp;</strong> <input
						autocomplete="off" type="text" name="end_date" id="end_date"
						value="<?php echo htmlspecialchars($_REQUEST['end_date']); ?>"
						title='' tabindex='1' size="11" maxlength="10"> <img border="0"
						src="themes/default/images/jscalendar.gif" alt="End Date"
						id="end_date_trigger" align="absmiddle" />
					<script type="text/javascript">

							Calendar.setup ({
							inputField : "end_date",
							daFormat : "%Y/%m/%d",
							button : "end_date_trigger",
							singleClick : true,
							dateStr : "2009/12/19",
							step : 1
							}
							);
							</script>
					&nbsp; <span class="FontSoftSmall">(Formato: aaaa/mm/dd)</span> <br />
					<br />
					
					<strong>&nbsp;&nbsp;Paciente:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
							<input type="text" name="users" id="users" value="<? echo $_REQUEST['users'] ?>">
							<br />
							<br />

					<input class="button" type="submit" name="submit"
						value="Generar Reporte" align="bottom"> <input type="hidden"
						name="report_trigger" value="yes">
						<input class="button" type="submit" name="submit" value="Generar Reporte Excel" align="bottom">
				</form>
			</td>
		</tr>
	</table>
	
	
	
<br />

<?php
if (!empty($_REQUEST['report_trigger'])) { 

	if ($_REQUEST['submit'] == 'Generar Reporte Excel'){
			ob_clean();
			echo "\xEF\xBB\xBF";
		$this->options['show_footer'] = false;
		
		
		date_default_timezone_set('America/Bogota');
		$today = date("Y/m/d");
		
		//echo $cuerpo;
		echo "<b>".'Fecha del Informe:  '."</b>"  . $today;
	
		?>	
	<?php 
	}
?>


<table border="0" cellpadding="2" cellspacing="3" width="730" class="h3Row">
	<tr>
		<td align="left" valign="top" colspan="2">
			<img src="<?php echo $image_path_default; ?>spacer.gif" alt="spacer" width="4" height="2" border="0">
			<h3 style="margin: 0px;">Informe Trazabilidad Pacientes </h3>
			<h3 style="margin: 0px;">Desde: <? echo $_REQUEST["start_date"] ?>  Hasta: <? echo $_REQUEST["end_date"] ?> </h3>
			<img src="<?php echo $image_path_default; ?>spacer.gif" alt="spacer" width="10" height="2" border="0">
		</td>
	</tr>
</table>

<?
	$querypac="SELECT * 
				FROM accounts p
				INNER JOIN accounts_cstm pc ON pc.id_c = p.id	WHERE p.deleted = 0 
				AND p.name = '".$_REQUEST["users"]."' ";

	$resultpac = $db->query($querypac);
	while ($paciente=$db->fetchByAssoc($resultpac))
	{
?>

<table>
	<h3 style="text-align">Datos del Paciente</h3>

	<tr>
		<td><strong>Documento:</strong></td>
		<td><? echo $paciente['name'] ?></td>
	</tr>
	<tr>
		<td><strong>Nombres:</strong></td>
		<td><? echo $paciente['primernombre_c'].' '.$paciente['segundonombre_c'] ?></td>
	</tr>
	<tr>
		<td><strong>Apellidos:</strong></td>
		<td><? echo $paciente['primerapellido_c'].' '.$paciente['segundoapellido_c'] ?></td>
	</tr>
	<tr>
		<td><strong>Tel. Personal:</strong></td>
		<td><? echo $paciente['telefonopersonal_c'] ?></td>
	</tr>
	<tr>
		<td><strong>Celular:</strong></td>
		<td><? echo $paciente['celular_c'] ?></td>
	</tr>
</table>

<?
	}
?>

<br/>
<h3 style="margin: 0px;">HISTORIAL DEL PACIENTE</h3>
<br/>
<table border="0" cellpadding="10" cellspacing="0" width="100%">
<h3 style="margin: 0px;">ANEXO 2 </h3>
<!--Anexo 2-->
<tr>
	<td class="listViewThS1" align="center"><strong>Nro Solicitud </strong></td>
	<td class="listViewThS1" align="center"><strong>Fecha de Solicitud</strong></td>
	<td class="listViewThS1" align="center"><strong>Fecha Env&iacute;o Correo</strong></td>
	<td class="listViewThS1" align="center"><strong>Diagn&oacute;stico Principal</strong></td>
	<td class="listViewThS1" align="center"><strong>EPS (Pagador)</strong></td>
	<td class="listViewThS1" align="center"><strong>Prestador (IPS)</strong></td>
	<td class="listViewThS1" align="center"><strong>Especialista</strong></td>
	<td class="listViewThS1" align="center"><strong>Creado Por</strong></td>
</tr>

<?

		$queryat2="SELECT 	
					a2.name AS Nro_Solicitud,
					DATE_FORMAT(a2.date_entered, '%Y/%m/%d') AS Fecha_Solicitud,
					DATE_FORMAT(a2_c.fecha_envio_correo_c, '%Y/%m/%d') AS Fecha_Envio_Solicitud,
					diag.`name` AS Diagnostico_Principal,
					eps.`name` AS EPS_Pagador,
					ips.name AS Prestador_IPS,
					CONCAT(esp.nombres, ' ', esp.apellidos) AS Especialista,
					CONCAT(users.first_name, ' ', users.last_name) AS Creado_Por
					FROM
						gbian_anexo2 a2
					LEFT JOIN gbian_anexo2_cstm a2_c ON a2_c.id_c = a2.id

					INNER JOIN gbian_anexo2_accounts_c p_a2 ON p_a2.gbian_anexo2_accountsgbian_anexo2_idb = a2.id
					INNER JOIN accounts p ON p.id = p_a2.gbian_anexo2_accountsaccounts_ida
					INNER JOIN accounts_cstm pc ON pc.id_c = p.id		
			
					LEFT JOIN cie_cie10 diag ON diag.id = a2_c.cie_cie10_id3_c			
		
					LEFT JOIN eps_eps eps ON eps.id = a2.eps_eps_id_c

					LEFT JOIN ips_ips ips ON ips.id = a2.ips_ips_id_c

					LEFT JOIN esp_especialista esp ON esp.id = a2_c.esp_especialista_id_c

					LEFT JOIN users ON users.id = a2.created_by				

					WHERE
						a2.deleted = 0
					AND p_a2.deleted = 0
					AND p.deleted = 0 
					AND p.name = '".$_REQUEST["users"]."' ";
					
					if (!empty($_REQUEST["start_date"]) && !empty($_REQUEST["end_date"]))
					{
						$queryat2 .= " AND a2.date_entered BETWEEN '".$_REQUEST["start_date"]."' AND DATE_ADD('".$_REQUEST["end_date"]."',INTERVAL 1 DAY) ";
					}
					
					$queryat2 .=" ORDER BY a2.date_entered";
					//var_dump($queryat2);
	$result2 = $db->query($queryat2);
	while ($resultado=$db->fetchByAssoc($result2))
	{
	
		$resultado['Tipo_Doc'] = $app_list_strings["tipo_documento_acc"][$resultado['Tipo_Doc']];
		
		$i++;
		if ($i%2==0)$color="#eee";
		else $color="#FFFFFF";
		
		?>
	
		<tr>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Nro_Solicitud']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Fecha_Solicitud']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Fecha_Envio_Solicitud']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Diagnostico_Principal']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['EPS_Pagador']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Prestador_IPS']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Especialista']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Creado_Por']; ?></strong></td>
		</tr>
<?php
	}
?>
<!--Anexo3-->
<table border="0" cellpadding="10" cellspacing="0" width="100%">
<br>
<h3 style="margin: 0px;">ANEXO 3</h3>
<tr>
	<td class="listViewThS1" align="center"><strong>Nro Solicitud </strong></td>
	<td class="listViewThS1" align="center"><strong>Fecha de Solicitud</strong></td>
	<td class="listViewThS1" align="center"><strong>Fecha Env&iacute;o Correo</strong></td>
	<td class="listViewThS1" align="center"><strong>Diagn&oacute;stico Principal</strong></td>
	<td class="listViewThS1" align="center"><strong>EPS (Pagador)</strong></td>
	<td class="listViewThS1" align="center"><strong>Prestador (IPS)</strong></td>
	<td class="listViewThS1" align="center"><strong>Especialista</strong></td>
	<td class="listViewThS1" align="center"><strong>Creado Por</strong></td>
</tr>


<?

		$queryat3="SELECT  
     			   a3.name AS Nro_Solicitud,
     			   DATE_FORMAT(a3.date_entered, '%Y/%m/%d') AS Fecha_Solicitud,
     			   DATE_FORMAT(a3_c.fecha_envio_correo_c, '%Y/%m/%d') AS Fecha_Envio_Solicitud,
     			   diag.`name` AS Diagnostico_Principal,
     			   eps.`name` AS EPS_Pagador,
     			   ips.name AS Prestador_IPS,
     			   CONCAT(esp.nombres, ' ', esp.apellidos) AS Especialista,
     			   CONCAT(users.first_name, ' ', users.last_name) AS Creado_Por
     			   FROM
     			    gbia3_anexo3 a3
     			   LEFT JOIN gbia3_anexo3_cstm a3_c ON a3_c.id_c = a3.id
			   
     			   INNER JOIN accounts_gbia3_anexo3_1_c p_a3 ON p_a3.accounts_gbia3_anexo3_1gbia3_anexo3_idb = a3.id
     			   INNER JOIN accounts p ON p.id = p_a3.accounts_gbia3_anexo3_1accounts_ida
     			   INNER JOIN accounts_cstm pc ON pc.id_c = p.id  
   			   
     			   LEFT JOIN cie_cie10 diag ON diag.id = a3.cie_cie10_id_c   
  			   
     			   LEFT JOIN eps_eps eps ON eps.id = a3.eps_eps_id_c
			   
     			   LEFT JOIN ips_ips ips ON ips.id = a3.ips_ips_id_c
			   
     			   LEFT JOIN esp_especialista esp ON esp.id = a3_c.esp_especialista_id_c
			   
     			   LEFT JOIN users ON users.id = a3.created_by 
			   
     			   WHERE
     			    a3.deleted = 0
     			   AND p_a3.deleted = 0
     			   AND p.deleted = 0
     			   AND p.name = '".$_REQUEST["users"]."' ";

					if (!empty($_REQUEST["start_date"]) && !empty($_REQUEST["end_date"]))
					{
						$queryat3 .= " AND a3.date_entered BETWEEN '".$_REQUEST["start_date"]."' AND DATE_ADD('".$_REQUEST["end_date"]."',INTERVAL 1 DAY) ";
					}

					$queryat3 .=" ORDER BY a3.date_entered";
					//var_dump($queryat3);
						
	$result3 = $db->query($queryat3);
	while ($resultado=$db->fetchByAssoc($result3))
	{
	
		$resultado['Tipo_Doc'] = $app_list_strings["tipo_documento_acc"][$resultado['Tipo_Doc']];
		
		$i++;
		if ($i%2==0)$color="#eee";
		else $color="#FFFFFF";
	
		?>
	
		<tr>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Nro_Solicitud']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Fecha_Solicitud']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Fecha_Envio_Solicitud']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Diagnostico_Principal']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['EPS_Pagador']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Prestador_IPS']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Especialista']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Creado_Por']; ?></strong></td>
		</tr>
<?php
	}
?>
<!--Anexo3 No Pos-->
<table border="0" cellpadding="10" cellspacing="0" width="100%">
<br>
<h3 style="margin: 0px;">ANEXO 3 NO POS </h3>
<tr>
	<td class="listViewThS1" align="center"><strong>Nro Solicitud </strong></td>
	<td class="listViewThS1" align="center"><strong>Fecha de Solicitud</strong></td>
	<td class="listViewThS1" align="center"><strong>Fecha Env&iacute;o Correo</strong></td>
	<td class="listViewThS1" align="center"><strong>Diagn&oacute;stico Principal</strong></td>
	<td class="listViewThS1" align="center"><strong>EPS (Pagador)</strong></td>
	<td class="listViewThS1" align="center"><strong>Prestador (IPS)</strong></td>
	<td class="listViewThS1" align="center"><strong>Especialista</strong></td>
	<td class="listViewThS1" align="center"><strong>Creado Por</strong></td>
</tr>


<?

		$queryat3np="SELECT  
     			   a3np.name AS Nro_Solicitud,
     			   DATE_FORMAT(a3np.date_entered, '%Y/%m/%d') AS Fecha_Solicitud,
     			   DATE_FORMAT(a3np_c.fecha_envio_correo_c, '%Y/%m/%d') AS Fecha_Envio_Solicitud,
     			   diag.`name` AS Diagnostico_Principal,
     			   eps.`name` AS EPS_Pagador,
     			   ips.name AS Prestador_IPS,
     			   CONCAT(esp.nombres, ' ', esp.apellidos) AS Especialista,
     			   CONCAT(users.first_name, ' ', users.last_name) AS Creado_Por
     			   FROM
     			    gbi_anexo3npos a3np
     			   LEFT JOIN gbi_anexo3npos_cstm a3np_c ON a3np_c.id_c = a3np.id
			   
     			   INNER JOIN accounts_gbi_anexo3npos_1_c p_a3np ON p_a3np.accounts_gbi_anexo3npos_1gbi_anexo3npos_idb = a3np.id
     			   INNER JOIN accounts p ON p.id = p_a3np.accounts_gbi_anexo3npos_1accounts_ida
     			   INNER JOIN accounts_cstm pc ON pc.id_c = p.id  
   			   
     			   LEFT JOIN cie_cie10 diag ON diag.id = a3np.cie_cie10_id_c   
  			   
     			   LEFT JOIN eps_eps eps ON eps.id = a3np.eps_eps_id_c
			   
     			   LEFT JOIN ips_ips ips ON ips.id = a3np.ips_ips_id_c
			   
     			   LEFT JOIN esp_especialista esp ON esp.id = a3np.esp_especialista_id_c
			   
     			   LEFT JOIN users ON users.id = a3np.created_by 
			   
     			   WHERE
     			    a3np.deleted = 0
     			   AND p_a3np.deleted = 0
     			   AND p.deleted = 0
					AND p.name = '".$_REQUEST["users"]."' ";

					if (!empty($_REQUEST["start_date"]) && !empty($_REQUEST["end_date"]))
					{
						$queryat3np .= " AND a3np.date_entered BETWEEN '".$_REQUEST["start_date"]."' AND DATE_ADD('".$_REQUEST["end_date"]."',INTERVAL 1 DAY) ";
					}

					$queryat3np .="ORDER BY a3np.date_entered";
						//var_dump($queryat3np);
	$result3np = $db->query($queryat3np);
	while ($resultado=$db->fetchByAssoc($result3np))
	{
	
		$resultado['Tipo_Doc'] = $app_list_strings["tipo_documento_acc"][$resultado['Tipo_Doc']];
		
		$i++;
		if ($i%2==0)$color="#eee";
		else $color="#FFFFFF";
		
		?>
	
		<tr>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Nro_Solicitud']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Fecha_Solicitud']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Fecha_Envio_Solicitud']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Diagnostico_Principal']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['EPS_Pagador']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Prestador_IPS']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Especialista']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Creado_Por']; ?></strong></td>
		</tr>
<?php
}
?>
<!--Anexo4-->
<table border="0" cellpadding="10" cellspacing="0" width="100%">
<br>
<h3 style="margin: 0px;">ANEXO 4</h3>
<tr>
	<td class="listViewThS1" align="center"><strong>Nro Autorización </strong></td>
	<td class="listViewThS1" align="center"><strong>Fecha de Creación</strong></td>
	<td class="listViewThS1" align="center"><strong>Fecha Autorización</strong></td>
	<td class="listViewThS1" align="center"><strong>Tipo de Anexo</strong></td>
	<td class="listViewThS1" align="center"><strong>Nro Solicitud</strong></td>
	<td class="listViewThS1" align="center"><strong>EPS Autoriza</strong></td>
	<td class="listViewThS1" align="center"><strong>IPS Autoriza</strong></td>
	<td class="listViewThS1" align="center"><strong>Creado Por</strong></td>
</tr>


<?

		$queryat43="SELECT 	
					a4.name AS Nro_Autorizacion,
					DATE_FORMAT(a4.date_entered, '%Y/%m/%d') AS Fecha_Creacion,
					DATE_FORMAT(a4_c.fecha_recibida_c, '%Y/%m/%d') AS Fecha_Autorizacion,
					'ANEXO 3' AS Tipo_Anexo,
					a3.name AS Nro_Solicitud,
					eps.`name` AS EPS_Pagador,
					ips.name AS Prestador_IPS,
					CONCAT(users.first_name, ' ', users.last_name) AS Creado_Por
					FROM
						gbia4_anexo4 a4
					LEFT JOIN gbia4_anexo4_cstm a4_c ON a4_c.id_c = a4.id				

					LEFT JOIN gbia4_anexo4_gbia3_anexo3_c rel_a3_a4 ON rel_a3_a4.gbia4_anexo4_gbia3_anexo3gbia4_anexo4_idb = a4.id
					LEFT JOIN gbia3_anexo3 a3 ON a3.id = rel_a3_a4.gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida
					LEFT JOIN gbia3_anexo3_cstm a3_c ON a3_c.id_c = a3.id

					LEFT JOIN accounts_gbia3_anexo3_1_c p_a3 ON p_a3.accounts_gbia3_anexo3_1gbia3_anexo3_idb = a3.id
					LEFT JOIN accounts p ON p.id = p_a3.accounts_gbia3_anexo3_1accounts_ida
					LEFT JOIN accounts_cstm pc ON pc.id_c = p.id
					
					LEFT JOIN ips_ips ips ON ips.id = a4.ips_ips_id_c

					LEFT JOIN eps_eps eps ON eps.id = a3.eps_eps_id_c

					LEFT JOIN users ON users.id = a4.created_by 

					WHERE
						a4.deleted = 0
						AND a3.deleted = 0
						AND p.name = '".$_REQUEST["users"]."' ";
					
					if (!empty($_REQUEST["start_date"]) && !empty($_REQUEST["end_date"]))
					{
						$queryat43 .= " AND a4.date_entered BETWEEN '".$_REQUEST["start_date"]."' AND DATE_ADD('".$_REQUEST["end_date"]."',INTERVAL 1 DAY) ";
					}
					
					$queryat43 .=" ORDER BY a4.date_entered";
						//var_dump($queryat43);
	$result43 = $db->query($queryat43);
	while ($resultado=$db->fetchByAssoc($result43))
	{
	
		$resultado['Tipo_Doc'] = $app_list_strings["tipo_documento_acc"][$resultado['Tipo_Doc']];
		
		$i++;
		if ($i%2==0)$color="#eee";
		else $color="#FFFFFF";
		
		?>
	
		<tr>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Nro_Autorizacion']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Fecha_Creacion']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Fecha_Autorizacion']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Tipo_Anexo']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Nro_Solicitud']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['EPS_Pagador']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Prestador_IPS']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Creado_Por']; ?></strong></td>
		</tr>
<?php
	}

		$queryat42="SELECT 	
					a4.name AS Nro_Autorizacion,
					DATE_FORMAT(a4.date_entered, '%Y/%m/%d') AS Fecha_Creacion,
					DATE_FORMAT(a4_c.fecha_recibida_c, '%Y/%m/%d') AS Fecha_Autorizacion,
					'ANEXO 2' AS Tipo_Anexo,
					a2.name AS Nro_Solicitud,
					eps.`name` AS EPS_Pagador,
					ips.name AS Prestador_IPS,
					CONCAT(users.first_name, ' ', users.last_name) AS Creado_Por
					FROM
						gbia4_anexo4 a4
					LEFT JOIN gbia4_anexo4_cstm a4_c ON a4_c.id_c = a4.id				

					LEFT JOIN gbian_anexo2_gbia4_anexo4_1_c rel_a2_a4 ON rel_a2_a4.gbian_anexo2_gbia4_anexo4_1gbia4_anexo4_idb = a4.id
					LEFT JOIN gbian_anexo2 a2 ON a2.id = rel_a2_a4.gbian_anexo2_gbia4_anexo4_1gbian_anexo2_ida
					LEFT JOIN gbian_anexo2_cstm a2_c ON a2_c.id_c = a2.id

					LEFT JOIN gbian_anexo2_accounts_c p_a2 ON p_a2.gbian_anexo2_accountsgbian_anexo2_idb = a2.id
					LEFT JOIN accounts p ON p.id = p_a2.gbian_anexo2_accountsaccounts_ida
					LEFT JOIN accounts_cstm pc ON pc.id_c = p.id
					
					LEFT JOIN ips_ips ips ON ips.id = a4.ips_ips_id_c

					LEFT JOIN eps_eps eps ON eps.id = a2.eps_eps_id_c

					LEFT JOIN users ON users.id = a4.created_by 

					WHERE
						a4.deleted = 0
						AND a2.deleted = 0
						AND p.name = '".$_REQUEST["users"]."' ";
					
					if (!empty($_REQUEST["start_date"]) && !empty($_REQUEST["end_date"]))
					{
						$queryat42 .= " AND a4.date_entered BETWEEN '".$_REQUEST["start_date"]."' AND DATE_ADD('".$_REQUEST["end_date"]."',INTERVAL 1 DAY) ";
					}
					
					$queryat42 .=" ORDER BY a4.date_entered";
						//var_dump($queryat42);
	$result42 = $db->query($queryat42);
	while ($resultado=$db->fetchByAssoc($result42))
	{
	
		$resultado['Tipo_Doc'] = $app_list_strings["tipo_documento_acc"][$resultado['Tipo_Doc']];
		
		$i++;
		if ($i%2==0)$color="#eee";
		else $color="#FFFFFF";
		
		?>
	
		<tr>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Nro_Autorizacion']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Fecha_Creacion']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Fecha_Autorizacion']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Tipo_Anexo']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Nro_Solicitud']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['EPS_Pagador']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Prestador_IPS']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Creado_Por']; ?></strong></td>
		</tr>
<?php
	}
?>

<!--Anexo 9-->
<table border="0" cellpadding="10" cellspacing="0" width="100%">
<br>
<h3 style="margin: 0px;">ANEXO 9 </h3>
<tr>
	<td class="listViewThS1" align="center"><strong>Nro Solicitud </strong></td>
	<td class="listViewThS1" align="center"><strong>Fecha de Solicitud</strong></td>
	<td class="listViewThS1" align="center"><strong>EPS</strong></td>
	<td class="listViewThS1" align="center"><strong>IPS</strong></td>
	<td class="listViewThS1" align="center"><strong>Servicio para el cual solicita la Referencia</strong></td>
	<td class="listViewThS1" align="center"><strong>Servicio que Solicita</strong></td>
	<td class="listViewThS1" align="center"><strong>Especialista</strong></td>
	<td class="listViewThS1" align="center"><strong>Creado por</strong></td>
</tr>


<?

		$queryat9="SELECT  
					 a9.name AS Nro_Solicitud,
					 DATE_FORMAT(a9.date_entered, '%Y/%m/%d') AS Fecha_Solicitud,
					 eps.`name` AS EPS_Pagador,
					 ips.name AS Prestador_IPS,
					 cup.description AS Servicio_Para,
					 a9.servicio_soli AS Servicio_Que,
					 CONCAT(esp.nombres, ' ', esp.apellidos) AS Especialista,     			   
					 CONCAT(users.first_name, ' ', users.last_name) AS Creado_Por
					 FROM
					 gbi_anexo9 a9
					
					 INNER JOIN accounts_gbi_anexo9_1_c p_a9 ON p_a9.accounts_gbi_anexo9_1gbi_anexo9_idb = a9.id
					 INNER JOIN accounts p ON p.id = p_a9.accounts_gbi_anexo9_1accounts_ida
					 INNER JOIN accounts_cstm pc ON pc.id_c = p.id  
					
					 LEFT JOIN gbicu_cups cup ON cup.id = a9.gbicu_cups_id_c   
					
					 LEFT JOIN eps_eps eps ON eps.id = a9.eps_eps_id_c
					
					 LEFT JOIN ips_ips ips ON ips.id = a9.ips_ips_id_c
					
					 LEFT JOIN esp_especialista esp ON esp.id = a9.esp_especialista_id_c
					
					 LEFT JOIN users ON users.id = a9.created_by 
					
					 WHERE
					 a9.deleted = 0
					 AND p_a9.deleted = 0
					 AND p.deleted = 0
					 AND p.name = '".$_REQUEST["users"]."' ";
					
					if (!empty($_REQUEST["start_date"]) && !empty($_REQUEST["end_date"]))
					{
						$queryat9 .= " AND a9.date_entered BETWEEN '".$_REQUEST["start_date"]."' AND DATE_ADD('".$_REQUEST["end_date"]."',INTERVAL 1 DAY) ";
					}
					
					$queryat9 .=" ORDER BY a9.date_entered";
						
	$result9 = $db->query($queryat9);
	while ($resultado=$db->fetchByAssoc($result9))
	{
	
		$resultado['Tipo_Doc'] = $app_list_strings["tipo_documento_acc"][$resultado['Tipo_Doc']];
		$resultado['Servicio_Que'] = $app_list_strings["servicio_soli_list"][$resultado['Servicio_Que']];
		
		$i++;
		if ($i%2==0)$color="#eee";
		else $color="#FFFFFF";
		
		?>
	
		<tr>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Nro_Solicitud']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Fecha_Solicitud']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['EPS_Pagador']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Prestador_IPS']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Servicio_Para']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Servicio_Que']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Especialista']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Creado_Por']; ?></strong></td>
		</tr>
<?php 
}

	if ($_REQUEST['submit'] == 'Generar Reporte Excel'){
			
			
		
			$myarray = array();
			$xls = new Excel_XML;
			
				
			$xls->addArray($myarray);
			$xls->generateXML('Informe_Trazabilidad_Paciente');
			
			
	}
// end of if ($_REQUEST['report_trigger']

	} // end of display
// end of class
}
}