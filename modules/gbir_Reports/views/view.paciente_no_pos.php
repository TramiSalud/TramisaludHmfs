<?php
require_once ("include/php-excel.class.php");
include("include\FusionCharts\Includes\FusionCharts.php");


class ViewPaciente_No_Pos extends SugarView {

	function ViewPaciente_No_Pos() {
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



if (empty($_REQUEST['account_id'])) $_REQUEST['account_id']= '';
//if (empty($_REQUEST['gbi_centro_operaciones_0'])) $_REQUEST['gbi_centro_operaciones_0'] = '';
if (empty($_REQUEST['anoppto'])) $_REQUEST['anoppto'] = '';


?>
<h1>INFORME SEGUIMIENTO PACIENTE NO POS</h1>

<p><div>

	<table border="0" cellpadding="0" cellspacing="0" width="730">
		<tr>
			<td class="tabForm">

				<form name=reportfm action="<?php echo $_SERVER['PHP_SELF']; ?>"
					method="get">


					<input type="hidden" name="module"
						value="<?php echo $currentModule; ?>"> <input type="hidden"
						name="action" value="paciente_no_pos" /> <strong>Consultas:</strong> <br /><br />

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
<table border="0" cellpadding="0" cellspacing="0" width="730">
<tr><td align="left">
<br />
</td>
</tr>
</table>

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
			<h3 style="margin: 0px;">Informe Seguimiento Paciente No Pos </h3>
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
	<td class="listViewThS1" align="center"><strong>Tipo Doc</strong></td>
	<td class="listViewThS1" align="center"><strong>Documento</strong></td>
	<td class="listViewThS1" align="center"><strong>Diagnóstico Principal</strong></td>
	<td class="listViewThS1" align="center"><strong>Descripción CUPS</strong></td>
	<td class="listViewThS1" align="center"><strong>Cantidad CUPS</strong></td>
	<td class="listViewThS1" align="center"><strong>EPS (Pagador)</strong></td>
	<td class="listViewThS1" align="center"><strong>Fecha Envio Correo</strong></td>
	<td class="listViewThS1" align="center"><strong>Fecha Envio de Solicitud</strong></td>
	<td class="listViewThS1" align="center"><strong>Forma Envió Solicitud:</strong></td>
	<td class="listViewThS1" align="center"><strong>Creador Por</strong></td>
</tr>


<?

		$queryat3="SELECT 	
					a3.name AS Nro_Solicitud,
					DATE_FORMAT(a3.date_entered, '%Y/%m/%d') AS Fecha_Anexo,
					pc.tipo_documento_c AS Tipo_Doc,
					p.name AS Documento,
					diag.`name` AS Diagnostico_Principal,
					REPLACE(REPLACE(REPLACE(REPLACE(CUPS_a3_c.descripcion_cup_c , CHAR(10), ''), CHAR(13), ''), CHAR(9), ''), CHAR(44), '') AS Descripcion_CUPS,
					CUPS_a3.cantidad AS Cantidad_CUPS,
					eps.`name` AS EPS_Pagador,
					DATE_FORMAT(a3_c.fecha_envio_correo_c, '%Y/%m/%d') AS Fecha_Envio_Correo, 
					DATE_FORMAT(a3.fechaenviosolicitud, '%Y/%m/%d') AS Fecha_Envio_Solicitud, 
					a3.formaenvisolicitud AS Forma_Envio_Solicitud,
					CONCAT(
	users.first_name,
	' ',
	users.last_name
) AS 'CREADO POR'
					FROM
						gbi_anexo3npos a3
					LEFT JOIN gbi_anexo3npos_cstm a3_c ON a3_c.id_c = a3.id

					INNER JOIN accounts_gbi_anexo3npos_1_c p_a3 ON p_a3.accounts_gbi_anexo3npos_1gbi_anexo3npos_idb = a3.id
					INNER JOIN accounts p ON p.id = p_a3.accounts_gbi_anexo3npos_1accounts_ida
					INNER JOIN accounts_cstm pc ON pc.id_c = p.id

					LEFT JOIN gbi_anexo3npos_minpo_manejo_integra_1_c a3_CUPS ON a3_CUPS.gbi_anexo3npos_minpo_manejo_integra_1gbi_anexo3npos_ida = a3.id
					LEFT JOIN minpo_manejo_integra CUPS_a3 ON CUPS_a3.id = a3_CUPS.gbi_anexo3npos_minpo_manejo_integra_1minpo_manejo_integra_idb					
					LEFT JOIN minpo_manejo_integra_cstm CUPS_a3_c ON CUPS_a3.id = CUPS_a3_c.id_c		
			
					LEFT JOIN cie_cie10 diag ON diag.id = a3.cie_cie10_id_c			
		
					LEFT JOIN eps_eps eps ON eps.id = a3.eps_eps_id_c
					
					LEFT JOIN users ON users.id = a3.created_by

					WHERE
						a3.deleted = 0
					AND p_a3.deleted = 0
					AND p.deleted = 0
					AND a3_CUPS.deleted = 0 ";
					
					if (!empty($_REQUEST["start_date"]) && !empty($_REQUEST["end_date"]))
					{
						$queryat3 .= " AND a3.date_entered BETWEEN '".$_REQUEST["start_date"]."' AND DATE_ADD('".$_REQUEST["end_date"]."',INTERVAL 1 DAY) ";
					}
					
					$queryat3 .=" ORDER BY a3.date_entered";
						
	$result3 = $db->query($queryat3);
	while ($resultado=$db->fetchByAssoc($result3))
	{
	
		$resultado['Tipo_Doc'] = $app_list_strings["tipo_documento_acc"][$resultado['Tipo_Doc']];
		$resultado['Forma_Envio_Solicitud'] = $app_list_strings["forma_envio_list"][$resultado['Forma_Envio_Solicitud']];
		
		$i++;
		if ($i%2==0)$color="#eee";
		else $color="#FFFFFF";
		
		?>
	
		<tr>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Nro_Solicitud']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Fecha_Anexo']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Tipo_Doc']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Documento']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Diagnostico_Principal']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Descripcion_CUPS']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Cantidad_CUPS']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['EPS_Pagador']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Fecha_Envio_Correo']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Fecha_Envio_Solicitud']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Forma_Envio_Solicitud']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['CREADO POR']; ?></strong></td>
		</tr>
<?
	}
	
	$queryat3graeps="SELECT 	
					'Resultado' AS RESULT,
					eps.`name` AS EPS_Pagador,
					COUNT(*) AS TOTAL
					FROM
						gbi_anexo3npos a3
					LEFT JOIN gbi_anexo3npos_cstm a3_c ON a3_c.id_c = a3.id

					INNER JOIN accounts_gbi_anexo3npos_1_c p_a3 ON p_a3.accounts_gbi_anexo3npos_1gbi_anexo3npos_idb = a3.id
					INNER JOIN accounts p ON p.id = p_a3.accounts_gbi_anexo3npos_1accounts_ida
					INNER JOIN accounts_cstm pc ON pc.id_c = p.id

					LEFT JOIN gbi_anexo3npos_minpo_manejo_integra_1_c a3_CUPS ON a3_CUPS.gbi_anexo3npos_minpo_manejo_integra_1gbi_anexo3npos_ida = a3.id
					LEFT JOIN minpo_manejo_integra CUPS_a3 ON CUPS_a3.id = a3_CUPS.gbi_anexo3npos_minpo_manejo_integra_1minpo_manejo_integra_idb					
					LEFT JOIN minpo_manejo_integra_cstm CUPS_a3_c ON CUPS_a3.id = CUPS_a3_c.id_c				
		
					LEFT JOIN eps_eps eps ON eps.id = a3.eps_eps_id_c

					WHERE
						a3.deleted = 0
					AND p_a3.deleted = 0
					AND p.deleted = 0
					AND a3_CUPS.deleted = 0 ";
					
					if (!empty($_REQUEST["start_date"]) && !empty($_REQUEST["end_date"]))
					{
						$queryat3graeps .= " AND a3.date_entered BETWEEN '".$_REQUEST["start_date"]."' AND DATE_ADD('".$_REQUEST["end_date"]."',INTERVAL 1 DAY) ";
					}
					
					$queryat3graeps .=" GROUP BY EPS_Pagador
								 ORDER BY EPS_Pagador ";
	
	$ii = 0;
	$jj = 1;
	$matmat = array();
	$result3graeps = $db->query($queryat3graeps);
	while ($resultadograeps=$db->fetchByAssoc($result3graeps))
	{		
		if($ii == 0)
		{
			$eps1 = $resultadograeps['EPS_Pagador'];
		
			$graph1 = "<graph caption='CUPS Por EPS'  numberSuffix='' rotateNames='1' decimalPrecision='0' >";
			
			$categories1 = "<categories>";
			$categories1 .= "<category name='".$resultadograeps['EPS_Pagador']."' />";
			
			$matmat[$eps1]['Resultado'] = 0;
			$matmat[$eps1][$resultadograeps['RESULT']] = $resultadograeps['TOTAL'];
			
			$ii = 1;
			continue;
		}
		
		if ($eps1 == $resultadograeps['EPS_Pagador'])
		{
			$matmat[$eps1][$resultadograeps['RESULT']] = $resultadograeps['TOTAL'];
		}		
		else
		{
			
			$eps1 = $resultadograeps['EPS_Pagador'];
			
			$categories1 .= "<category name='".$resultadograeps['EPS_Pagador']."' />";
			
			$matmat[$eps1]['Resultado'] = 0;
			$matmat[$eps1][$resultadograeps['RESULT']] = $resultadograeps['TOTAL'];
		}
	}
		
		$categories1  .= "</categories>";
	
		$Resultado = "<dataset seriesname='CUPS' color='FA5858'>";
		
		foreach ($matmat as $key1 => $value1)
		{
			foreach ($value1 as $key21 => $value21)
			{
				if ($key21 == 'Resultado')	{	$Resultado .= "<set value='".$value21."'/>";	}	
			}			
		}
			
		$Resultado .=  "</dataset>";
	
	$strXML1 = $graph1.$categories1.$Resultado."</graph>";		
		
	echo renderChartHTML("include/FusionCharts/Charts/FCF_MSColumn3D.swf", "", $strXML1, "myChartId".$jj++, 2100, 750);
	//file_put_contents('C:\\xampp\\htdocs\\tramisalud_dev_gbi\\prueba_yovany.txt', var_export($strXML1, true), FILE_APPEND);
	
	if ($_REQUEST['submit'] == 'Generar Reporte Excel'){
			
			
		
			$myarray = array();
			$xls = new Excel_XML;
			
				
			$xls->addArray($myarray);
			$xls->generateXML('Informe_Seguimiento_Paciente_NO_POS');
			
			
	}
// end of if ($_REQUEST['report_trigger']

	} // end of display
// end of class
}
}