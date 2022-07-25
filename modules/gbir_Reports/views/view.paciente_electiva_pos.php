<?php
require_once ("include/php-excel.class.php");
include("include\FusionCharts\Includes\FusionCharts.php");


class ViewPaciente_Electiva_Pos extends SugarView {

	function ViewPaciente_Electiva_Pos() {
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
<h1>INFORME SEGUIMIENTO PACIENTE ELECTIVA POS</h1>

<p><div>

	<table border="0" cellpadding="0" cellspacing="0" width="730">
		<tr>
			<td class="tabForm">

				<form name=reportfm action="<?php echo $_SERVER['PHP_SELF']; ?>"
					method="get">


					<input type="hidden" name="module"
						value="<?php echo $currentModule; ?>"> <input type="hidden"
						name="action" value="paciente_electiva_pos" /> <strong>Consultas:</strong> <br /><br />

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
					&nbsp; <span class="FontSoftSmall">(Formato: aaaa-mm-dd)</span> <br />
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
					&nbsp; <span class="FontSoftSmall">(Formato: aaaa-mm-dd)</span> <br />
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
			<h3 style="margin: 0px;">Informe Seguimiento Paciente Electiva Pos </h3>
			<h3 style="margin: 0px;">Desde: <? echo $_REQUEST["start_date"] ?>  Hasta: <? echo $_REQUEST["end_date"] ?> </h3>
			<img src="<?php echo $image_path_default; ?>spacer.gif" alt="spacer" width="10" height="2" border="0">
		</td>
	</tr>
</table>

<table border="0" cellpadding="10" cellspacing="0" width="500%">
<br>
<tr>
	<td class="listViewThS1" align="center"><strong>Nro Solicitud </strong></td>
	<td class="listViewThS1" align="center"><strong>Fecha Anexo</strong></td>
	<td class="listViewThS1" align="center"><strong>Tipo Doc</strong></td>
	<td class="listViewThS1" align="center"><strong>Documento</strong></td>
	<td class="listViewThS1" align="center"><strong>Diagnóstico Principal</strong></td>
	<td class="listViewThS1" align="center"><strong>CUPS </strong></td>
	<td class="listViewThS1" align="center"><strong>Descripción CUPS</strong></td>
	<td class="listViewThS1" align="center"><strong>Cantidad CUPS</strong></td>
	<td class="listViewThS1" align="center"><strong>Grupo CUP</strong></td>
	<td class="listViewThS1" align="center"><strong>SubCategoria CUP</strong></td>
	<td class="listViewThS1" align="center"><strong>EPS (Pagador)</strong></td>
	<td class="listViewThS1" align="center"><strong>Fecha Envio Correo</strong></td>
	<td class="listViewThS1" align="center"><strong>Fecha Envio de Solicitud</strong></td>
	<td class="listViewThS1" align="center"><strong>Forma Envió Solicitud</strong></td>
	<td class="listViewThS1" align="center"><strong>Creador Por</strong></td>
	<td class="listViewThS1" align="center"><strong>Nro. Autorización</strong></td>
	<td class="listViewThS1" align="center"><strong>Fecha Autorización</strong></td>
	<td class="listViewThS1" align="center"><strong>Prestador (IPS)</strong></td>
	<td class="listViewThS1" align="center"><strong>CUPS </strong></td>
	<td class="listViewThS1" align="center"><strong>Descripción CUPS</strong></td>
	<td class="listViewThS1" align="center"><strong>Cantidad CUPS </strong></td>
	<td class="listViewThS1" align="center"><strong>Autorizado</strong></td>
	<td class="listViewThS1" align="center"><strong>Creador Por</strong></td>

</tr>


<?

		$queryat3="SELECT 	
					a3.name AS Nro_Solicitud,
					DATE_FORMAT(a3.date_entered, '%Y/%m/%d') AS Fecha_Anexo,
					pc.tipo_documento_c AS Tipo_Doc,
					p.name AS Documento,
					diag.`name` AS Diagnostico_Principal,
					CUP.`name` AS CUPS,
					REPLACE(REPLACE(REPLACE(REPLACE(CUP.description , CHAR(10), ''), CHAR(13), ''), CHAR(9), ''), CHAR(44), '') AS Descripcion_CUPS,
					CUPS_a3.cantidadcups AS Cantidad_CUPS,
					CUP_c.gbi_grupo_c AS Grupo_CUP,
					CUP_c.gbi_subbrupo_c AS Subcategoria_CUP,
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
						gbia3_anexo3 a3
					LEFT JOIN gbia3_anexo3_cstm a3_c ON a3_c.id_c = a3.id

					INNER JOIN accounts_gbia3_anexo3_1_c p_a3 ON p_a3.accounts_gbia3_anexo3_1gbia3_anexo3_idb = a3.id
					INNER JOIN accounts p ON p.id = p_a3.accounts_gbia3_anexo3_1accounts_ida
					INNER JOIN accounts_cstm pc ON pc.id_c = p.id

					LEFT JOIN gbia3_anexo3_gbia3_manejointegral_1_c a3_CUPS ON a3_CUPS.gbia3_anexo3_gbia3_manejointegral_1gbia3_anexo3_ida = a3.id
					LEFT JOIN gbia3_manejointegral CUPS_a3 ON CUPS_a3.id = a3_CUPS.gbia3_anexo3_gbia3_manejointegral_1gbia3_manejointegral_idb					
					LEFT JOIN gbia3_manejointegral_cstm CUPS_a3_c ON CUPS_a3.id = CUPS_a3_c.id_c		
			
					LEFT JOIN gbicu_cups CUP ON CUP.id = CUPS_a3.gbicu_cups_id_c
					LEFT JOIN gbicu_cups_cstm CUP_c ON CUP_c.id_c = CUP.id		
			
					LEFT JOIN cie_cie10 diag ON diag.id = a3.cie_cie10_id_c			
		
					LEFT JOIN eps_eps eps ON eps.id = a3.eps_eps_id_c

				  	LEFT JOIN users ON users.id = a3.created_by


					WHERE
						a3.deleted = 0
					AND p_a3.deleted = 0
					AND p.deleted = 0
					AND a3_CUPS.deleted = 0
					AND a3.ubicacion = 'consulta_externa' ";
					
					if (!empty($_REQUEST["start_date"]) && !empty($_REQUEST["end_date"]))
					{
						$queryat3 .= " AND a3.date_entered BETWEEN '".$_REQUEST["start_date"]."' AND DATE_ADD('".$_REQUEST["end_date"]."',INTERVAL 1 DAY) ";
					}
					
					$queryat3 .=" ORDER BY a3.date_entered";
						
	$result3 = $db->query($queryat3);
	while ($resultado=$db->fetchByAssoc($result3))
	{
	
		$resultado['Tipo_Doc'] = $app_list_strings["tipo_documento_acc"][$resultado['Tipo_Doc']];
		$resultado['Forma_Envio_Solicitud'] = $app_list_strings["formaenvisolicitud_list"][$resultado['Forma_Envio_Solicitud']];
		
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
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['CUPS']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Descripcion_CUPS']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Cantidad_CUPS']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Grupo_CUP']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Subcategoria_CUP']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['EPS_Pagador']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Fecha_Envio_Correo']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Fecha_Envio_Solicitud']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Forma_Envio_Solicitud']; ?></strong></td>
		<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['CREADO POR']; ?></strong></td>

		
<?
			$queryat4="SELECT 	
						a4.name AS Nro_Autorizacion,
						DATE_FORMAT(a4_c.fecha_recibida_c, '%Y/%m/%d') AS Fecha_Autorizacion,
						ips.name AS Prestador_IPS,
						CUP2.`name` AS CUPS,
						REPLACE(REPLACE(REPLACE(REPLACE(CUP2.description , CHAR(10), ''), CHAR(13), ''), CHAR(9), ''), CHAR(44), '') AS Descripcion_CUPS,
						CUPS_a4.cantidad_cups AS Cantidad_CUPS,
						CONCAT(
	users.first_name,
	' ',
	users.last_name
) AS 'CREADO POR'
						FROM
							gbia4_anexo4 a4
						LEFT JOIN gbia4_anexo4_cstm a4_c ON a4_c.id_c = a4.id				

						LEFT JOIN gbia4_anexo4_gbia3_anexo3_c rel_a3_a4 ON rel_a3_a4.gbia4_anexo4_gbia3_anexo3gbia4_anexo4_idb = a4.id
						LEFT JOIN gbia3_anexo3 a3 ON a3.id = rel_a3_a4.gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida
						LEFT JOIN gbia3_anexo3_cstm a3_c ON a3_c.id_c = a3.id

						LEFT JOIN ips_ips ips ON ips.id = a4.ips_ips_id_c

						LEFT JOIN gbia4_aprobacioncups_gbia4_anexo4_c a4_CUPS ON a4_CUPS.gbia4_aprobacioncups_gbia4_anexo4gbia4_anexo4_ida = a4.id
						LEFT JOIN gbia4_aprobacioncups CUPS_a4 ON CUPS_a4.id = a4_CUPS.gbia4_aprobacioncups_gbia4_anexo4gbia4_aprobacioncups_idb
						LEFT JOIN gbia4_aprobacioncups_cstm CUPS_a4_c ON CUPS_a4_c.id_c = CUPS_a4.id

						LEFT JOIN gbicu_cups CUP2 ON CUP2.id = CUPS_a4_c.gbicu_cups_id_c
						LEFT JOIN gbicu_cups_cstm CUP2_c ON CUP2_c.id_c = CUP2.id
						LEFT JOIN users ON users.id = a3.created_by

						WHERE
							a4.deleted = 0
						AND a4_CUPS.deleted = 0
						AND a3.name = '".$resultado['Nro_Solicitud']."'
						ORDER BY a4.date_entered ASC ";
						
			$result4 = $db->query($queryat4);
			while ($resultado2=$db->fetchByAssoc($result4))
			{
				$cup = '';
			
				if($resultado['CUPS'] == $resultado2['CUPS'])
				{
?>	
					<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado2['Nro_Autorizacion']; ?></strong></td>
					<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado2['Fecha_Autorizacion']; ?></strong></td>
					<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado2['Prestador_IPS']; ?></strong></td>
					<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado2['CUPS']; ?></strong></td>
					<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado2['Descripcion_CUPS']; ?></strong></td>
					<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado2['Cantidad_CUPS']; ?></strong></td>
					<td align="left" width="" bgcolor="<?php echo $color;?>"><strong>SI</strong></td>
					<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado2['CREADO POR']; ?></strong></td>
<?php
					break;					
				}
				else
				{
					$cup = 'no_aprobado';
				}
			}
						
			if($cup == 'no_aprobado' || $resultado2 == false)
			{			
?>
					<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php ?></strong></td>
					<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php ?></strong></td>
					<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php ?></strong></td>
					<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['CUPS']; ?></strong></td>
					<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Descripcion_CUPS']; ?></strong></td>
					<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['Cantidad_CUPS']; ?></strong></td>
					<td align="left" width="" bgcolor="<?php echo $color;?>"><strong>NO</strong></td>
					<td align="left" width="" bgcolor="<?php echo $color;?>"><strong><?php echo $resultado['CREADO POR']; ?></strong></td>
<?
			}
?>
		</tr>
<?
	}
	
	$queryat3gra="SELECT 	
					CUP_c.gbi_grupo_c AS Grupo_CUP,
					eps.`name` AS EPS_Pagador,
					COUNT(*) AS TOTAL
					FROM
						gbia3_anexo3 a3
					LEFT JOIN gbia3_anexo3_cstm a3_c ON a3_c.id_c = a3.id

					INNER JOIN accounts_gbia3_anexo3_1_c p_a3 ON p_a3.accounts_gbia3_anexo3_1gbia3_anexo3_idb = a3.id
					INNER JOIN accounts p ON p.id = p_a3.accounts_gbia3_anexo3_1accounts_ida
					INNER JOIN accounts_cstm pc ON pc.id_c = p.id

					LEFT JOIN gbia3_anexo3_gbia3_manejointegral_1_c a3_CUPS ON a3_CUPS.gbia3_anexo3_gbia3_manejointegral_1gbia3_anexo3_ida = a3.id
					LEFT JOIN gbia3_manejointegral CUPS_a3 ON CUPS_a3.id = a3_CUPS.gbia3_anexo3_gbia3_manejointegral_1gbia3_manejointegral_idb					
					LEFT JOIN gbia3_manejointegral_cstm CUPS_a3_c ON CUPS_a3.id = CUPS_a3_c.id_c		
			
					LEFT JOIN gbicu_cups CUP ON CUP.id = CUPS_a3.gbicu_cups_id_c
					LEFT JOIN gbicu_cups_cstm CUP_c ON CUP_c.id_c = CUP.id		
		
					LEFT JOIN eps_eps eps ON eps.id = a3.eps_eps_id_c

					WHERE
						a3.deleted = 0
					AND p_a3.deleted = 0
					AND p.deleted = 0
					AND a3_CUPS.deleted = 0
					AND a3.ubicacion = 'consulta_externa' ";
					
					if (!empty($_REQUEST["start_date"]) && !empty($_REQUEST["end_date"]))
					{
						$queryat3gra .= " AND a3.date_entered BETWEEN '".$_REQUEST["start_date"]."' AND DATE_ADD('".$_REQUEST["end_date"]."',INTERVAL 1 DAY) ";
					}
					
					$queryat3gra .=" GROUP BY EPS_Pagador, Grupo_CUP
								 ORDER BY EPS_Pagador, Grupo_CUP ASC";
	
	$i = 0;
	$j = 1;
	$mat = array();
	$result3gra = $db->query($queryat3gra);
	while ($resultadogra=$db->fetchByAssoc($result3gra))
	{		
		if($i == 0)
		{
			$eps = $resultadogra['EPS_Pagador'];
		
			$graph = "<graph caption='Grupo CUPS Por EPS'  numberSuffix='' rotateNames='1' decimalPrecision='0' >";
			
			$categories = "<categories>";
			$categories .= "<category name='".$resultadogra['EPS_Pagador']."' />";
			
			$mat[$eps]['AydaDX'] = 0;
			$mat[$eps]['Consulta'] = 0;
			$mat[$eps]['Cirugia'] = 0;
			$mat[$eps]['Procedmtos'] = 0;
			$mat[$eps]['Internacion'] = 0;
			$mat[$eps]['Insumo'] = 0;
			$mat[$eps]['AAIU'] = 0;
			$mat[$eps]['PyP'] = 0;
			$mat[$eps]['Remision'] = 0;
			$mat[$eps][''] = 0;
			$mat[$eps][$resultadogra['Grupo_CUP']] = $resultadogra['TOTAL'];
			
			$i = 1;
			continue;
		}
		
		if ($eps == $resultadogra['EPS_Pagador'])
		{
			$mat[$eps][$resultadogra['Grupo_CUP']] = $resultadogra['TOTAL'];
		}		
		else
		{
			
			$eps = $resultadogra['EPS_Pagador'];
			
			$categories .= "<category name='".$resultadogra['EPS_Pagador']."' />";
			
			$mat[$eps]['AydaDX'] = 0;
			$mat[$eps]['Cirugia'] = 0;
			$mat[$eps]['Consulta'] = 0;
			$mat[$eps]['Procedmtos'] = 0;
			$mat[$eps]['Internacion'] = 0;
			$mat[$eps]['Insumo'] = 0;
			$mat[$eps]['AAIU'] = 0;
			$mat[$eps]['PyP'] = 0;
			$mat[$eps]['Remision'] = 0;
			$mat[$eps][''] = 0;
			$mat[$eps][$resultadogra['Grupo_CUP']] = $resultadogra['TOTAL'];
		}
	}
		
		$categories  .= "</categories>";
	
		$AydaDX = "<dataset seriesname='Ayuda DX' color='FA5858'>";
		$Cirugia = "<dataset seriesname='Cirugia' color='F4FA58'>";
		$Consulta = "<dataset seriesname='Consulta' color='FAAC58'>";
		$Procedmtos = "<dataset seriesname='Procedimientos' color='ACFA58'>";
		$Internacion = "<dataset seriesname='Internacion' color='58FA58'>";
		$Insumo = "<dataset seriesname='Insumo' color='A4A4A4'>";
		$AAIU = "<dataset seriesname='AIU' color='58FAF4'>";
		$PyP = "<dataset seriesname='P Y P' color='58ACFA'>";
		$Remision = "<dataset seriesname='Remision' color='5858FA'>";
		$vacio = "<dataset seriesname='Vacio' color='FE2EF7'>";
		
		/*for($x=0;$x <= 10; $x++)
		{		
			$AydaDX .=  "<set value='".rand(5, 9)."'/>";
			$Cirugia .=  "<set value='".rand(5, 9)."'/>";
			$Consulta .=  "<set value='".rand(5, 9)."'/>";
			$Procedmtos .=  "<set value='".rand(5, 9)."'/>";
			$Internacion .=  "<set value='".rand(5, 9)."'/>";
			$Insumo .=  "<set value='".rand(5, 9)."'/>";
			$AAIU .=  "<set value='".rand(5, 9)."'/>";
			$PyP .=  "<set value='".rand(5, 9)."'/>";
			$Remision .=  "<set value='".rand(5, 9)."'/>";
			$vacio .=  "<set value='".rand(5, 9)."'/>";
		
		}*/
		
		foreach ($mat as $key => $value)
		{
			foreach ($value as $key2 => $value2)
			{
				if ($key2 == 'AydaDX')	{	$AydaDX .= "<set value='".$value2."'/>";	}
				if ($key2 == 'Cirugia')	{	$Cirugia .= "<set value='".$value2."'/>";	}
				if ($key2 == 'Consulta')	{	$Consulta .= "<set value='".$value2."'/>";	}
				if ($key2 == 'Procedmtos')	{	$Procedmtos .= "<set value='".$value2."'/>";	}
				if ($key2 == 'Internacion')	{	$Internacion .= "<set value='".$value2."'/>";	}
				if ($key2 == 'Insumo')	{	$Insumo .= "<set value='".$value2."'/>";	}
				if ($key2 == 'AAIU')	{	$AAIU .= "<set value='".$value2."'/>";	}
				if ($key2 == 'PyP')	{	$PyP .= "<set value='".$value2."'/>";	}
				if ($key2 == 'Remision')	{	$Remision .= "<set value='".$value2."'/>";	}
				if ($key2 == '')	{	$vacio .= "<set value='".$value2."'/>";	}		
			}			
		}
			
		$AydaDX .=  "</dataset>";
		$Cirugia .=  "</dataset>";
		$Consulta .=  "</dataset>";
		$Procedmtos .=  "</dataset>";
		$Internacion .=  "</dataset>";
		$Insumo .=  "</dataset>";
		$AAIU .=  "</dataset>";
		$PyP .=  "</dataset>";
		$Remision .=  "</dataset>";
		$vacio .=  "</dataset>";
	
	$strXML = $graph.$categories.$AydaDX.$Cirugia.$Consulta.$Procedmtos.$Internacion.$Insumo.$AAIU.$PyP.$Remision.$vacio."</graph>";		
		
	echo renderChartHTML("include/FusionCharts/Charts/FCF_MSColumn3D.swf", "", $strXML, "myChartId".$j++, 2100, 750);
	//file_put_contents('C:\\xampp\\htdocs\\tramisalud_dev_gbi\\prueba_yovany.txt', var_export($strXML, true), FILE_APPEND);
	
	//Siguiente//
	
	$queryat3graeps="SELECT 	
						'Resultado' AS RESULT,
						eps.`name` AS EPS_Pagador,
						COUNT(*) AS TOTAL
						FROM
							gbia4_anexo4 a4
						LEFT JOIN gbia4_anexo4_cstm a4_c ON a4_c.id_c = a4.id				

						LEFT JOIN gbia4_anexo4_gbia3_anexo3_c rel_a3_a4 ON rel_a3_a4.gbia4_anexo4_gbia3_anexo3gbia4_anexo4_idb = a4.id
						LEFT JOIN gbia3_anexo3 a3 ON a3.id = rel_a3_a4.gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida
						LEFT JOIN gbia3_anexo3_cstm a3_c ON a3_c.id_c = a3.id

						LEFT JOIN accounts_gbia3_anexo3_1_c p_a3 ON p_a3.accounts_gbia3_anexo3_1gbia3_anexo3_idb = a3.id
						LEFT JOIN accounts p ON p.id = p_a3.accounts_gbia3_anexo3_1accounts_ida
						LEFT JOIN accounts_cstm pc ON pc.id_c = p.id

						LEFT JOIN eps_eps eps ON eps.id = a3.eps_eps_id_c

						LEFT JOIN gbia4_aprobacioncups_gbia4_anexo4_c a4_CUPS ON a4_CUPS.gbia4_aprobacioncups_gbia4_anexo4gbia4_anexo4_ida = a4.id
						LEFT JOIN gbia4_aprobacioncups CUPS_a4 ON CUPS_a4.id = a4_CUPS.gbia4_aprobacioncups_gbia4_anexo4gbia4_aprobacioncups_idb
						LEFT JOIN gbia4_aprobacioncups_cstm CUPS_a4_c ON CUPS_a4_c.id_c = CUPS_a4.id

						LEFT JOIN gbicu_cups CUP2 ON CUP2.id = CUPS_a4_c.gbicu_cups_id_c
						LEFT JOIN gbicu_cups_cstm CUP2_c ON CUP2_c.id_c = CUP2.id

						WHERE
							a4.deleted = 0
						AND (rel_a3_a4.deleted = 0 or rel_a3_a4.deleted is null)
						AND (a3.deleted = 0 or a3.deleted is null)
						AND (p_a3.deleted = 0 or p_a3.deleted is null)
						AND (p.deleted = 0 or p.deleted is null)
						AND a4_CUPS.deleted = 0
						AND a3.ubicacion = 'consulta_externa' ";
					
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
		
			$graph1 = "<graph caption='Autorizaciones Por EPS'  numberSuffix='' rotateNames='1' decimalPrecision='0' >";
			
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
	
		$Resultado = "<dataset seriesname='Autorizaciones' color='FA5858'>";
		
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
	
	//Siguiente//
	
	$queryat3graepsgru="SELECT 	
						'Resultado' AS RESULT,
						CUP2_c.gbi_grupo_c AS Grupo_CUP,
						COUNT(*) AS TOTAL
						FROM
							gbia4_anexo4 a4
						LEFT JOIN gbia4_anexo4_cstm a4_c ON a4_c.id_c = a4.id				

						LEFT JOIN gbia4_anexo4_gbia3_anexo3_c rel_a3_a4 ON rel_a3_a4.gbia4_anexo4_gbia3_anexo3gbia4_anexo4_idb = a4.id
						LEFT JOIN gbia3_anexo3 a3 ON a3.id = rel_a3_a4.gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida
						LEFT JOIN gbia3_anexo3_cstm a3_c ON a3_c.id_c = a3.id

						LEFT JOIN accounts_gbia3_anexo3_1_c p_a3 ON p_a3.accounts_gbia3_anexo3_1gbia3_anexo3_idb = a3.id
						LEFT JOIN accounts p ON p.id = p_a3.accounts_gbia3_anexo3_1accounts_ida
						LEFT JOIN accounts_cstm pc ON pc.id_c = p.id

						LEFT JOIN eps_eps eps ON eps.id = a3.eps_eps_id_c

						LEFT JOIN gbia4_aprobacioncups_gbia4_anexo4_c a4_CUPS ON a4_CUPS.gbia4_aprobacioncups_gbia4_anexo4gbia4_anexo4_ida = a4.id
						LEFT JOIN gbia4_aprobacioncups CUPS_a4 ON CUPS_a4.id = a4_CUPS.gbia4_aprobacioncups_gbia4_anexo4gbia4_aprobacioncups_idb
						LEFT JOIN gbia4_aprobacioncups_cstm CUPS_a4_c ON CUPS_a4_c.id_c = CUPS_a4.id

						LEFT JOIN gbicu_cups CUP2 ON CUP2.id = CUPS_a4_c.gbicu_cups_id_c
						LEFT JOIN gbicu_cups_cstm CUP2_c ON CUP2_c.id_c = CUP2.id

						WHERE
							a4.deleted = 0
						AND (rel_a3_a4.deleted = 0 or rel_a3_a4.deleted is null)
						AND (a3.deleted = 0 or a3.deleted is null)
						AND (p_a3.deleted = 0 or p_a3.deleted is null)
						AND (p.deleted = 0 or p.deleted is null)
						AND a4_CUPS.deleted = 0
						AND a3.ubicacion = 'consulta_externa' ";
					
					if (!empty($_REQUEST["start_date"]) && !empty($_REQUEST["end_date"]))
					{
						$queryat3graepsgru .= " AND a3.date_entered BETWEEN '".$_REQUEST["start_date"]."' AND DATE_ADD('".$_REQUEST["end_date"]."',INTERVAL 1 DAY) ";
					}
					
					$queryat3graepsgru .=" GROUP BY Grupo_CUP
								 ORDER BY Grupo_CUP ASC ";
	
	$iii = 0;
	$jjj = 1;
	$matmatmat = array();
	$result3graepsgru = $db->query($queryat3graepsgru);
	while ($resultadograepsgru=$db->fetchByAssoc($result3graepsgru))
	{		
		if($iii == 0)
		{
			$grupo = $resultadograepsgru['Grupo_CUP'];
		
			$graph11 = "<graph caption='Autorizaciones Por Grupo CUPS'  numberSuffix='' rotateNames='1' decimalPrecision='0' >";
			
			$categories11 = "<categories>";
			$categories11 .= "<category name='".$resultadograepsgru['Grupo_CUP']."' />";
			
			$matmatmat[$grupo]['Resultado'] = 0;
			$matmatmat[$grupo][$resultadograepsgru['RESULT']] = $resultadograepsgru['TOTAL'];
			
			$iii = 1;
			continue;
		}
		
		if ($grupo == $resultadograepsgru['Grupo_CUP'])
		{
			$matmatmat[$grupo][$resultadograepsgru['RESULT']] = $resultadograepsgru['TOTAL'];
		}		
		else
		{
			
			$grupo = $resultadograepsgru['Grupo_CUP'];
			
			$categories11 .= "<category name='".$resultadograepsgru['Grupo_CUP']."' />";
			
			$matmatmat[$grupo]['Resultado'] = 0;
			$matmatmat[$grupo][$resultadograepsgru['RESULT']] = $resultadograepsgru['TOTAL'];
		}
	}
		
		$categories11  .= "</categories>";
	
		$Resultado1 = "<dataset seriesname='Autorizaciones' color='FA5858'>";
		
		foreach ($matmatmat as $key11 => $value11)
		{
			foreach ($value11 as $key211 => $value211)
			{
				if ($key211 == 'Resultado')	{	$Resultado1 .= "<set value='".$value211."'/>";	}	
			}			
		}
			
		$Resultado1 .=  "</dataset>";
	
	$strXML11 = $graph11.$categories11.$Resultado1."</graph>";		
		
	echo renderChartHTML("include/FusionCharts/Charts/FCF_MSColumn3D.swf", "", $strXML11, "myChartId".$jjj++, 2100, 750);
	//file_put_contents('C:\\xampp\\htdocs\\tramisalud_dev_gbi\\prueba_yovany.txt', var_export($strXML11, true), FILE_APPEND);
	
	//Siguiente//

	$queryat3grames="SELECT 	
					CUP_c.gbi_grupo_c AS Grupo_CUP,					
					CASE WHEN MONTH(a3.date_entered) = 1 THEN 'Enero'
					WHEN MONTH(a3.date_entered) = 2 THEN 'Febrero'
					WHEN MONTH(a3.date_entered) = 3 THEN 'Marzo'
					WHEN MONTH(a3.date_entered) = 4 THEN 'Abril'
					WHEN MONTH(a3.date_entered) = 5 THEN 'Mayo'
					WHEN MONTH(a3.date_entered) = 6 THEN 'Junio'
					WHEN MONTH(a3.date_entered) = 7 THEN 'Julio'
					WHEN MONTH(a3.date_entered) = 8 THEN 'Agosto'
					WHEN MONTH(a3.date_entered) = 9 THEN 'Septiembre'
					WHEN MONTH(a3.date_entered) = 10 THEN 'Octubre'
					WHEN MONTH(a3.date_entered) = 11 THEN 'Noviembre'
					WHEN MONTH(a3.date_entered) = 12 THEN 'Diciembre'
					END
					AS Mes,					
					COUNT(*) AS TOTAL
					FROM
						gbia3_anexo3 a3
					LEFT JOIN gbia3_anexo3_cstm a3_c ON a3_c.id_c = a3.id

					INNER JOIN accounts_gbia3_anexo3_1_c p_a3 ON p_a3.accounts_gbia3_anexo3_1gbia3_anexo3_idb = a3.id
					INNER JOIN accounts p ON p.id = p_a3.accounts_gbia3_anexo3_1accounts_ida
					INNER JOIN accounts_cstm pc ON pc.id_c = p.id

					LEFT JOIN gbia3_anexo3_gbia3_manejointegral_1_c a3_CUPS ON a3_CUPS.gbia3_anexo3_gbia3_manejointegral_1gbia3_anexo3_ida = a3.id
					LEFT JOIN gbia3_manejointegral CUPS_a3 ON CUPS_a3.id = a3_CUPS.gbia3_anexo3_gbia3_manejointegral_1gbia3_manejointegral_idb					
					LEFT JOIN gbia3_manejointegral_cstm CUPS_a3_c ON CUPS_a3.id = CUPS_a3_c.id_c		
			
					LEFT JOIN gbicu_cups CUP ON CUP.id = CUPS_a3.gbicu_cups_id_c
					LEFT JOIN gbicu_cups_cstm CUP_c ON CUP_c.id_c = CUP.id		

					WHERE
						a3.deleted = 0
					AND p_a3.deleted = 0
					AND p.deleted = 0
					AND a3_CUPS.deleted = 0
					AND a3.ubicacion = 'consulta_externa' ";
					
					if (!empty($_REQUEST["start_date"]) && !empty($_REQUEST["end_date"]))
					{
						$queryat3grames .= " AND a3.date_entered BETWEEN '".$_REQUEST["start_date"]."' AND DATE_ADD('".$_REQUEST["end_date"]."',INTERVAL 1 DAY) ";
					}
					
					$queryat3grames .=" GROUP BY Mes, Grupo_CUP
									ORDER BY MONTH(a3.date_entered), Grupo_CUP ASC ";
	
	$im = 0;
	$jm = 1;
	$matmes = array();
	$result3grames = $db->query($queryat3grames);
	while ($resultadogrames=$db->fetchByAssoc($result3grames))
	{		
		if($im == 0)
		{
			$mes = $resultadogrames['Mes'];
		
			$graphm = "<graph caption='Solicitudes Por Mes'  numberSuffix='' rotateNames='1' decimalPrecision='0' >";
			
			$categoriesm = "<categories>";
			$categoriesm .= "<category name='".$resultadogrames['Mes']."' />";
			
			$matmes[$mes]['AydaDX'] = 0;
			$matmes[$mes]['Consulta'] = 0;
			$matmes[$mes]['Cirugia'] = 0;
			$matmes[$mes]['Procedmtos'] = 0;
			$matmes[$mes]['Internacion'] = 0;
			$matmes[$mes]['Insumo'] = 0;
			$matmes[$mes]['AAIU'] = 0;
			$matmes[$mes]['PyP'] = 0;
			$matmes[$mes]['Remision'] = 0;
			$matmes[$mes][''] = 0;
			$matmes[$mes][$resultadogrames['Grupo_CUP']] = $resultadogrames['TOTAL'];
			
			$im = 1;
			continue;
		}
		
		if ($mes == $resultadogrames['Mes'])
		{
			$matmes[$mes][$resultadogrames['Grupo_CUP']] = $resultadogrames['TOTAL'];
		}		
		else
		{
			
			$mes = $resultadogrames['Mes'];
			
			$categoriesm .= "<category name='".$resultadogrames['Mes']."' />";
			
			$matmes[$mes]['AydaDX'] = 0;
			$matmes[$mes]['Consulta'] = 0;
			$matmes[$mes]['Cirugia'] = 0;
			$matmes[$mes]['Procedmtos'] = 0;
			$matmes[$mes]['Internacion'] = 0;
			$matmes[$mes]['Insumo'] = 0;
			$matmes[$mes]['AAIU'] = 0;
			$matmes[$mes]['PyP'] = 0;
			$matmes[$mes]['Remision'] = 0;
			$matmes[$mes][''] = 0;
			$matmes[$mes][$resultadogrames['Grupo_CUP']] = $resultadogrames['TOTAL'];
		}
	}
		
		$categoriesm  .= "</categories>";
	
		$AydaDXm = "<dataset seriesname='Ayuda DX' color='FA5858'>";
		$Cirugiam = "<dataset seriesname='Cirugia' color='F4FA58'>";
		$Consultam = "<dataset seriesname='Consulta' color='FAAC58'>";
		$Procedmtosm = "<dataset seriesname='Procedimientos' color='ACFA58'>";
		$Internacionm = "<dataset seriesname='Internacion' color='58FA58'>";
		$Insumom = "<dataset seriesname='Insumo' color='A4A4A4'>";
		$AAIUm = "<dataset seriesname='AIU' color='58FAF4'>";
		$PyPm = "<dataset seriesname='P Y P' color='58ACFA'>";
		$Remisionm = "<dataset seriesname='Remision' color='5858FA'>";
		$vaciom = "<dataset seriesname='Vacio' color='FE2EF7'>";
		
		foreach ($matmes as $keym => $valuem)
		{
			foreach ($valuem as $key2m => $value2m)
			{
				if ($key2m == 'AydaDX')	{	$AydaDXm .= "<set value='".$value2m."'/>";	}
				if ($key2m == 'Cirugia')	{	$Cirugiam .= "<set value='".$value2m."'/>";	}
				if ($key2m == 'Consulta')	{	$Consultam .= "<set value='".$value2m."'/>";	}
				if ($key2m == 'Procedmtos')	{	$Procedmtosm .= "<set value='".$value2m."'/>";	}
				if ($key2m == 'Internacion')	{	$Internacionm .= "<set value='".$value2m."'/>";	}
				if ($key2m == 'Insumo')	{	$Insumom .= "<set value='".$value2m."'/>";	}
				if ($key2m == 'AAIU')	{	$AAIUm .= "<set value='".$value2m."'/>";	}
				if ($key2m == 'PyP')	{	$PyPm .= "<set value='".$value2m."'/>";	}
				if ($key2m == 'Remision')	{	$Remisionm .= "<set value='".$value2m."'/>";	}
				if ($key2m == '')	{	$vaciom .= "<set value='".$value2m."'/>";	}		
			}			
		}
			
		$AydaDXm .=  "</dataset>";
		$Cirugiam .=  "</dataset>";
		$Consultam .=  "</dataset>";
		$Procedmtosm .=  "</dataset>";
		$Internacionm .=  "</dataset>";
		$Insumom .=  "</dataset>";
		$AAIUm .=  "</dataset>";
		$PyPm .=  "</dataset>";
		$Remisionm .=  "</dataset>";
		$vaciom .=  "</dataset>";
	
	$strXMLm = $graphm.$categoriesm.$AydaDXm.$Cirugiam.$Consultam.$Procedmtosm.$Internacionm.$Insumom.$AAIUm.$PyPm.$Remisionm.$vaciom."</graph>";		
		
	echo renderChartHTML("include/FusionCharts/Charts/FCF_MSColumn3D.swf", "", $strXMLm, "myChartId".$jm++, 2100, 750);
	//file_put_contents('C:\\xampp\\htdocs\\tramisalud_dev_gbi\\prueba_yovany.txt', var_export($strXMLm, true), FILE_APPEND);
	
	//Fin//
	
	if ($_REQUEST['submit'] == 'Generar Reporte Excel'){
			
			
		
			$myarray = array();
			$xls = new Excel_XML;
			
				
			$xls->addArray($myarray);
			$xls->generateXML('Informe_Seguimiento_Paciente_Electiva_POS.xls');
			
			
	}
// end of if ($_REQUEST['report_trigger']

	} // end of display
// end of class
}
}