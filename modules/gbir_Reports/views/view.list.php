		<?php if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.list.php');

class gbir_ReportsViewList extends ViewList {
    
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

require_once("modules/".$currentModule."/calendar.class.php");
require_once("modules/".$currentModule."/cms_seo.class.php");
require_once("modules/".$currentModule."/db_criteria.class.php");


$theme_path = "themes/".$theme."/";
$image_path = $theme_path."images/";

$image_path_default = "themes/default/images/";

require_once($theme_path.'layout_utils.php');


?>

<h1>Informes</h1>


<table border="0" cellpadding="0" cellspacing="0" width="100%" class="h3Row"><tr>
<td align="left" valign="top" colspan="3"><img src="include/images/blank.gif" 
alt="spacer" width="10" height="2" border="0"><h3 style="margin: 0px;"></h3><img src="include/images/blank.gif" 
alt="spacer" width="10" height="2" border="0"></td>
</tr></table>



<table border="0" cellpadding="0" cellspacing="1" width="100%" class="other view">

<tr>
	<td nowrap="nowrap" width="20%">
		<img src="<?php echo $image_path_default ?>icon_Reports_32.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
		<a href="<?php echo "./index.php?module=".$currentModule."&action=paciente_electiva_pos" ?>"><strong>Informe Seguimiento Paciente Electiva Pos</strong></a>
	</td>
	<td nowrap="nowrap" width="20%">
	</td>
</tr>
<tr>
	<td nowrap="nowrap" width="20%">
		<img src="<?php echo $image_path_default ?>icon_Reports_32.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
		<a href="<?php echo "./index.php?module=".$currentModule."&action=paciente_hospitalizacion_pos" ?>"><strong>Informe Seguimiento Paciente Hospitalización Pos</strong></a>
	</td>
	<td nowrap="nowrap" width="20%">
	</td>
</tr>
<tr>
	<td nowrap="nowrap" width="20%">
		<img src="<?php echo $image_path_default ?>icon_Reports_32.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
		<a href="<?php echo "./index.php?module=".$currentModule."&action=paciente_urgencias_pos" ?>"><strong>Informe Seguimiento Paciente Urgencias Pos</strong></a>
	</td>
	<td nowrap="nowrap" width="20%">
	</td>
</tr>
<tr>
	<td nowrap="nowrap" width="20%">
		<img src="<?php echo $image_path_default ?>icon_Reports_32.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
		<a href="<?php echo "./index.php?module=".$currentModule."&action=paciente_urgencia_at2" ?>"><strong>Informe Seguimiento Paciente Urgencias AT2</strong></a>
	</td>
	<td nowrap="nowrap" width="20%">
	</td>
</tr>
<tr>
	<td nowrap="nowrap" width="20%">
		<img src="<?php echo $image_path_default ?>icon_Reports_32.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
		<a href="<?php echo "./index.php?module=".$currentModule."&action=paciente_no_pos" ?>"><strong>Informe Seguimiento Paciente No Pos</strong></a>
	</td>
	<td nowrap="nowrap" width="20%">
	</td>
</tr>
<tr>
	<td nowrap="nowrap" width="20%">
		<img src="<?php echo $image_path_default ?>icon_Reports_32.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
		<a href="<?php echo "./index.php?module=".$currentModule."&action=trazabilidad_paciente" ?>"><strong>Informe Trazabilidad Pacientes</strong></a>
	</td>
	<td nowrap="nowrap" width="20%">
	</td>
</tr>
<tr>
	<td nowrap="nowrap" width="20%">
		<img src="<?php echo $image_path_default ?>icon_Reports_32.gif" width='16' height='16' alt="" border="0" align="absmiddle" />
		<a href="<?php echo "./index.php?module=".$currentModule."&action=paciente_referencia" ?>"><strong>Informe Pacientes Anexo9</strong></a>
	</td>
	<td nowrap="nowrap" width="20%">
	</td>
</tr>

</table>

<?php

	} // end display
} // end class
?>
