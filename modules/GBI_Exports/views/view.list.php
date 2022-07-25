<?php if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.list.php');

class GBI_ExportsViewList extends ViewList {
    
    public function __construct(){
         parent::SugarView();
     }

	function display() {


global $app_strings;
global $app_list_strings;
global $mod_strings;
global $theme;
global $currentModule;
global $current_language;
global $gridline;
global $current_user;
global $sugar_flavor;


$theme_path = "themes/".$theme."/";
$image_path = $theme_path."images/";

$image_path_default = "themes/default/images/";

require_once($theme_path.'layout_utils.php');


?>

<h1>Sugar CRM - Reportes</h1>


<table border="0" cellpadding="0" cellspacing="0" width="100%" class="h3Row"><tr>
<td align="left" valign="top" colspan="2"><img src="include/images/blank.gif" 
alt="spacer" width="10" height="2" border="0"><h3 style="margin: 0px;"></h3><img src="include/images/blank.gif" 
alt="spacer" width="10" height="2" border="0"></td>
</tr></table>

<table border="0" cellpadding="0" cellspacing="1" width="100%" class="other view">
<tr>
	<td nowrap="nowrap" width="20%"><img src="<?php echo $image_path_default ?>icon_email_send.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
	<a href="<?php echo "./index.php?module=".$currentModule."&action=caprecom" ?>"><strong>Exportación Pacientes Caprecom</strong></a></td>
    <td width="30%">Generar archivo plano con los pacientes de Caprecom
	</td>
	<td nowrap="nowrap" width="20%">
	</td>
    <td width="30%">
	</td>
</tr>
<tr>
	<td nowrap="nowrap" width="20%"><img src="<?php echo $image_path_default ?>icon_email_send.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
	<a href="<?php echo "./index.php?module=".$currentModule."&action=savia" ?>"><strong>Exportación Pacientes Savia</strong></a></td>
    <td width="30%">Generar archivo plano con los pacientes de Savia
	<td nowrap="nowrap" width="20%">
	</td>
    <td width="30%">
	</td>
	</td>
</tr>
<tr>
	<td nowrap="nowrap" width="20%"><img src="<?php echo $image_path_default ?>icon_email_send.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
	<a href="<?php echo "./index.php?module=".$currentModule."&action=solicitudes" ?>"><strong>Exportación Solicitudes Anexo 3</strong></a></td>
    <td width="30%">Generar archivo plano con las Solicitudes de Anexo 3
	<td nowrap="nowrap" width="20%">
	</td>
    <td width="30%">
	</td>
	</td>
</tr>
<tr>
	<td nowrap="nowrap" width="20%"><img src="<?php echo $image_path_default ?>icon_email_send.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
	<a href="<?php echo "./index.php?module=".$currentModule."&action=envio_a2" ?>"><strong>Exportación - Envío Solicitudes Anexo 2</strong></a></td>
    <td width="30%">Generar archivo plano con los envios de Solicitudes del Anexo 2
	<td nowrap="nowrap" width="20%">
	</td>
    <td width="30%">
	</td>
	</td>
</tr>
<tr>
	<td nowrap="nowrap" width="20%"><img src="<?php echo $image_path_default ?>icon_email_send.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
	<a href="<?php echo "./index.php?module=".$currentModule."&action=envio_a3" ?>"><strong>Exportación - Envío Solicitudes Anexo 3</strong></a></td>
    <td width="30%">Generar archivo plano con los envios de Solicitudes del Anexo 3
	<td nowrap="nowrap" width="20%">
	</td>
    <td width="30%">
	</td>
	</td>
</tr>
<tr>
	<td nowrap="nowrap" width="20%"><img src="<?php echo $image_path_default ?>icon_email_send.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
	<a href="<?php echo "./index.php?module=".$currentModule."&action=envio_a3np" ?>"><strong>Exportación - Envío Solicitudes Anexo 3 NO POS</strong></a></td>
    <td width="30%">Generar archivo plano con los envios de Solicitudes del Anexo 3 NO POS
	<td nowrap="nowrap" width="20%">
	</td>
    <td width="30%">
	</td>
	</td>
</tr>
<tr>
	<td nowrap="nowrap" width="20%"><img src="<?php echo $image_path_default ?>icon_email_send.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
	<a href="<?php echo "./index.php?module=".$currentModule."&action=envio_a9" ?>"><strong>Exportación - Envío Solicitudes Anexo 9</strong></a></td>
    <td width="30%">Generar archivo plano con los envios de Solicitudes del Anexo 9
	<td nowrap="nowrap" width="20%">
	</td>
    <td width="30%">
	</td>
	</td>
</tr>
<tr>
	<td nowrap="nowrap" width="20%"><img src="<?php echo $image_path_default ?>icon_email_send.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
	<a href="<?php echo "./index.php?module=".$currentModule."&action=gestion_cr" ?>"><strong>Exportación - Gestión Centro Regulador</strong></a></td>
    <td width="30%">Generar archivo plano con la Gestión Centro Regulador
	<td nowrap="nowrap" width="20%">
	</td>
    <td width="30%">
	</td>
	</td>
</tr>
<tr>
	<td nowrap="nowrap" width="20%"><img src="<?php echo $image_path_default ?>icon_email_send.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
	<a href="<?php echo "./index.php?module=".$currentModule."&action=tareascat" ?>"><strong>Exportación - Tareas Central de Autorizaciones</strong></a></td>
    <td width="30%">Generar archivo plano con las Tareas de la Central de Autorizaciones
	<td nowrap="nowrap" width="20%">
	</td>
    <td width="30%">
	</td>
	</td>
</tr>
<tr>
	<td nowrap="nowrap" width="20%"><img src="<?php echo $image_path_default ?>icon_email_send.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
	<a href="<?php echo "./index.php?module=".$currentModule."&action=llamadascat" ?>"><strong>Exportación - Llamadas Central de Autorizaciones</strong></a></td>
    <td width="30%">Generar archivo plano con las Llamadas Registradas en la Central de Autorizaciones
	<td nowrap="nowrap" width="20%">
	</td>
    <td width="30%">
	</td>
	</td>
</tr>
<tr> 
   <td nowrap="nowrap" width="20%">
   <img src="<?php echo $image_path_default ?>icon_email_send.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
   <a href="<?php echo "./index.php?module=".$currentModule."&action=anexo4exp" ?>"><strong>Exportacion - Gestion Anexo4 </strong></a></td>
<td width="30%">Generar archivo plano anexo4
<td nowrap="nowrap" width="20%">
</td>
<td width="30%">
</td>
</td>
</tr>
</table>
<br />

<!--Inicio de Vinculos Reportes Admin-->
<?php
if($GLOBALS['current_user']->isAdmin()){ ?>
<h1>Admin - Reportes</h1>


<table border="0" cellpadding="0" cellspacing="0" width="100%" class="h3Row"><tr>
<td align="left" valign="top" colspan="2"><img src="include/images/blank.gif" 
alt="spacer" width="10" height="2" border="0"><h3 style="margin: 0px;"></h3><img src="include/images/blank.gif" 
alt="spacer" width="10" height="2" border="0"></td>
</tr></table>

<table border="0" cellpadding="0" cellspacing="1" width="100%" class="other view">
<tr>
	<td nowrap="nowrap" width="20%">
		<img src="<?php echo $image_path_default ?>icon_Reports_32.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
		<a href="<?php echo "./index.php?module=".$currentModule."&action=general" ?>">
			<strong>Reporte - Gestión General Plataforma Tramisalud</strong>
		</a>
	</td>
    <td width="30%">
    	<p>Generar archivo plano con información general de lo gestionado del anexo 1, 2, 3, 4, 9 (Anexos Creados, Anexos Enviados, General de Anexos No Enviados, Cantidad de Diagnosticos Gestionados)</p>
	</td>
	<td nowrap="nowrap" width="20%">
		<img src="<?php echo $image_path_default ?>icon_Reports_32.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
		<a href="<?php echo "./index.php?module=".$currentModule."&action=cie_a2" ?>">
			<strong>Reporte - Diagnóticos CIE 10 más comunes Anexo 2</strong>
		</a>
	</td>
	</td>
    <td width="30%">
		<p>Generar archivo plano con información de los 5 diagnósticos más comunes en el anexo 2</p>
	</td>
</tr>
<tr>
	<td nowrap="nowrap" width="20%">
		<img src="<?php echo $image_path_default ?>icon_Reports_32.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
		<a href="<?php echo "./index.php?module=".$currentModule."&action=cie10a3" ?>">
			<strong>Reporte - Diagnóticos CIE 10 más comunes Anexo 3</strong>
		</a>
	</td>
	<td width="30%">
		<p>Generar archivo plano con información de los 5 diagnósticos más comunes en el anexo 3</p>
	</td>
	<td nowrap="nowrap" width="20%">
		<img src="<?php echo $image_path_default ?>icon_Reports_32.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
		<a href="<?php echo "./index.php?module=".$currentModule."&action=cie10a9" ?>">
			<strong>Reporte - Diagnóticos CIE 10 más comunes Anexo 9</strong>
		</a>
	</td>
	</td>
    <td width="30%">
		<p>Generar archivo plano con información de los 5 diagnósticos más comunes en el anexo 9</p>
	</td>
</tr>
<tr>
	<td nowrap="nowrap" width="20%">
		<img src="<?php echo $image_path_default ?>icon_Reports_32.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
		<a href="<?php echo "./index.php?module=".$currentModule."&action=asegurador_a1" ?>">
			<strong>Reporte - Asegurador Más Gestionado Anexo 1</strong>
		</a>
	</td>
	<td width="30%">
		<p>Generar archivo plano con información de los 5 Aseguradores más gestionados en el anexo 1</p>
	</td>
	<td nowrap="nowrap" width="20%">
		<img src="<?php echo $image_path_default ?>icon_Reports_32.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
		<a href="<?php echo "./index.php?module=".$currentModule."&action=asegurador_a2" ?>">
			<strong>Reporte - Asegurador Más Gestionado Anexo 2</strong>
		</a>
	</td>
	<td width="30%">
		<p>Generar archivo plano con información de los 5 Aseguradores más gestionados en el anexo 2</p>
	</td>
</tr>
<tr>
	<td nowrap="nowrap" width="20%">
		<img src="<?php echo $image_path_default ?>icon_Reports_32.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
		<a href="<?php echo "./index.php?module=".$currentModule."&action=asegurador_a3" ?>">
			<strong>Reporte - Asegurador Más Gestionado Anexo 3</strong>
		</a>
	</td>
	<td width="30%">
		<p>Generar archivo plano con información de los 5 Aseguradores más gestionados en el anexo 3</p>
	</td>
	<td nowrap="nowrap" width="20%">
		<img src="<?php echo $image_path_default ?>icon_Reports_32.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
		<a href="<?php echo "./index.php?module=".$currentModule."&action=asegurador_a9" ?>">
			<strong>Reporte - Asegurador Más Gestionado Anexo 9</strong>
		</a>
	</td>
	<td width="30%">
		<p>Generar archivo plano con información de los 5 Aseguradores más gestionados en el anexo 9</p>
	</td>	
</tr>
<tr>
	<td nowrap="nowrap" width="20%">
		<img src="<?php echo $image_path_default ?>icon_Reports_32.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
		<a href="<?php echo "./index.php?module=".$currentModule."&action=cup_a3" ?>">
			<strong>Reporte - CUPS Más Gestionado Anexo 3</strong>
		</a>
	</td>
	<td width="30%">
		<p>Generar archivo plano con información de los 5 CUPS más gestionados en el anexo 3</p>
	</td>	
	<td nowrap="nowrap" width="20%">
		<img src="<?php echo $image_path_default ?>icon_Reports_32.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
		<a href="<?php echo "./index.php?module=".$currentModule."&action=cup_a9" ?>">
			<strong>Reporte - CUPS Más Gestionado Anexo 9</strong>
		</a>
	</td>
	<td width="30%">
		<p>Generar archivo plano con información de los 5 CUPS más gestionados en el anexo 9</p>
	</td>		
</tr>
</table>
<?php }else{
	?>
<?php } ?>
<!--Fin de Vinculos Reportes Admin-->



<?php

	} // end display
} // end class
?>
