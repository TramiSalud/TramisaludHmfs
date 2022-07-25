<?php
require_once ("include/php-excel.class.php");

class ViewPaciente_Urgencia_At2 extends SugarView {

	function ViewPaciente_Urgencia_At2() {
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
<h1> INFORME SEGUIMIENTO PACIENTE URGENCIAS AT2</h1>

<p><div>

	<table border="0" cellpadding="0" cellspacing="0" width="730">
		<tr>
			<td class="tabForm">

				<form name=reportfm action="<?php echo $_SERVER['PHP_SELF']; ?>"
					method="get">


					<input type="hidden" name="module"
						value="<?php echo $currentModule; ?>"> <input type="hidden"
						name="action" value="paciente_urgencia_at2" /> <strong>Consultas:</strong> <br /><br />

					</select> <strong>Fecha Inicial: </strong> <input
						autocomplete="off" type="text" name="start_date" id="start_date"
						value="<?php echo htmlspecialchars($_REQUEST['start_date']); ?>"
						title='' tabindex='1' size="11" maxlength="10"> <img border="0"
						src="themes/default/images/jscalendar.gif" alt="Start Date"
						id="start_date_trigger" align="absmiddle" />
					<script type="text/javascript">

							Calendar.setup ({
							inputField : "start_date",
							//daFormat : "%m/%d/%Y",
							daFormat : "%Y-%m-%d",
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
							daFormat : "%Y-%m-%d",
							button : "end_date_trigger",
							singleClick : true,
							dateStr : "2009/12/19",
							step : 1
							}
							);
							</script>
					&nbsp; <span class="FontSoftSmall">(Formato: aaaa/mm/dd)</span> <br />
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
		$today = date("d/m/Y");
		
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
			<h3 style="margin: 0px;">Informe Seguimiento Paciente Urgencias AT2 </h3>
			<h3 style="margin: 0px;">Desde: <? echo $_REQUEST["start_date"] ?>  Hasta: <? echo $_REQUEST["end_date"] ?> </h3>
			<img src="<?php echo $image_path_default; ?>spacer.gif" alt="spacer" width="10" height="2" border="0">
		</td>
	</tr>
</table>

<table border="0" cellpadding="10" cellspacing="0" width="100%">
<br>
<tr>
	<td class="listViewThS1" align="center"><strong>Nro Solicitud </strong></td>
	<td class="listViewThS1" align="center"><strong>Fecha Anexo</strong></td>
	<td class="listViewThS1" align="center"><strong>Fecha Ingreso Urgencias</strong></td>
	<td class="listViewThS1" align="center"><strong>Tipo Doc</strong></td>
	<td class="listViewThS1" align="center"><strong>Documento</strong></td>
	<td class="listViewThS1" align="center"><strong>Diagn&oacute;stico Principal</strong></td>
	<td class="listViewThS1" align="center"><strong>EPS (Pagador)</strong></td>
	<td class="listViewThS1" align="center"><strong>Fecha Env&iacute;o Correo</strong></td>
	<td class="listViewThS1" align="center"><strong>Creador Por</strong></td>
	<td class="listViewThS1" align="center"><strong>Nro. Autorizaci&oacute;n</strong></td>
	<td class="listViewThS1" align="center"><strong>Fecha Autorizaci&oacute;n</strong></td>
	<td class="listViewThS1" align="center"><strong>Prestador (IPS)</strong></td>
	<td class="listViewThS1" align="center"><strong>Creador Por</strong></td>
</tr>


<?

		$queryat2="SELECT 	
					a2.name AS Nro_Solicitud,
					DATE_FORMAT(a2.date_entered, '%Y/%m/%d') AS Fecha_Anexo,
					DATE_SUB(a2_c.fecha_ingreso_c,INTERVAL 5 HOUR) AS Fecha_Ingreso_Urgencias,
					pc.tipo_documento_c AS Tipo_Doc,
					p.name AS Documento,
					diag.`name` AS Diagnostico_Principal,
					eps.`name` AS EPS_Pagador,
					DATE_FORMAT(a2_c.fecha_envio_correo_c, '%Y/%m/%d') AS Fecha_Envio_Correo, 
					a4.name AS Nro_Autorizacion,
					DATE_FORMAT(a4_c.fecha_recibida_c, '%Y/%m/%d') AS Fecha_Autorizacion,
					ips.name AS Prestador_IPS,
					CONCAT(
	use2.first_name,
	' ',
	use2.last_name
) AS 'CREADO POR 2',
CONCAT(
	use4.first_name,
	' ',
	use4.last_name
) AS 'CREADO POR 4'
					FROM
						gbian_anexo2 a2
					LEFT JOIN gbian_anexo2_cstm a2_c ON a2_c.id_c = a2.id

					INNER JOIN gbian_anexo2_accounts_c p_a2 ON p_a2.gbian_anexo2_accountsgbian_anexo2_idb = a2.id
					INNER JOIN accounts p ON p.id = p_a2.gbian_anexo2_accountsaccounts_ida
					INNER JOIN accounts_cstm pc ON pc.id_c = p.id		
			
					LEFT JOIN cie_cie10 diag ON diag.id = a2_c.cie_cie10_id3_c			
		
					LEFT JOIN eps_eps eps ON eps.id = a2.eps_eps_id_c

					LEFT JOIN gbian_anexo2_gbia4_anexo4_1_c rel_a2_a4 ON rel_a2_a4.gbian_anexo2_gbia4_anexo4_1gbian_anexo2_ida = a2.id
					LEFT JOIN gbia4_anexo4 a4 ON a4.id = rel_a2_a4.gbian_anexo2_gbia4_anexo4_1gbia4_anexo4_idb
					LEFT JOIN gbia4_anexo4_cstm a4_c ON a4_c.id_c = a4.id

					LEFT JOIN ips_ips ips ON ips.id = a4.ips_ips_id_c
					
					LEFT JOIN users AS use2 ON use2.id = a2.created_by
					
					LEFT JOIN users AS use4 ON use4.id = a4.created_by

					WHERE
						a2.deleted = 0
					AND p_a2.deleted = 0
					AND p.deleted = 0
					AND (rel_a2_a4.deleted = 0 OR rel_a2_a4.deleted is null)
					AND (a4.deleted = 0 OR a4.deleted is null) ";
					
					if (!empty($_REQUEST["start_date"]) && !empty($_REQUEST["end_date"]))
					{
						$queryat2 .= " AND a2.date_entered BETWEEN '".$_REQUEST["start_date"]."' AND DATE_ADD('".$_REQUEST["end_date"]."',INTERVAL 1 DAY) ";
					}
					
					$queryat2 .=" ORDER BY a2.date_entered";
						
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
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Fecha_Anexo']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Fecha_Ingreso_Urgencias']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Tipo_Doc']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Documento']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Diagnostico_Principal']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['EPS_Pagador']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Fecha_Envio_Correo']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['CREADO POR 2']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Nro_Autorizacion']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Fecha_Autorizacion']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Prestador_IPS']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['CREADO POR 4']; ?></strong></td>
		</tr>
<?php
	}

	if ($_REQUEST['submit'] == 'Generar Reporte Excel'){
			
			
		
			$myarray = array();
			$xls = new Excel_XML;
			
				
			$xls->addArray($myarray);
			$xls->generateXML('Informe_Seguimiento_Paciente_Urgencias_AT2');
			
			
	}
// end of if ($_REQUEST['report_trigger']

	} // end of display
// end of class
}
}