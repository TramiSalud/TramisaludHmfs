<?php /* Smarty version 2.6.11, created on 2022-07-05 19:55:15
         compiled from cache/modules/vd_validacion_derechos/form_SubpanelQuickCreate_vd_validacion_derechos.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/vd_validacion_derechos/form_SubpanelQuickCreate_vd_validacion_derechos.tpl', 44, false),array('function', 'counter', 'cache/modules/vd_validacion_derechos/form_SubpanelQuickCreate_vd_validacion_derechos.tpl', 50, false),array('function', 'sugar_translate', 'cache/modules/vd_validacion_derechos/form_SubpanelQuickCreate_vd_validacion_derechos.tpl', 56, false),array('function', 'sugar_getimagepath', 'cache/modules/vd_validacion_derechos/form_SubpanelQuickCreate_vd_validacion_derechos.tpl', 80, false),array('function', 'html_options', 'cache/modules/vd_validacion_derechos/form_SubpanelQuickCreate_vd_validacion_derechos.tpl', 134, false),array('function', 'sugar_getscript', 'cache/modules/vd_validacion_derechos/form_SubpanelQuickCreate_vd_validacion_derechos.tpl', 596, false),array('modifier', 'strip_semicolon', 'cache/modules/vd_validacion_derechos/form_SubpanelQuickCreate_vd_validacion_derechos.tpl', 57, false),array('modifier', 'lookup', 'cache/modules/vd_validacion_derechos/form_SubpanelQuickCreate_vd_validacion_derechos.tpl', 159, false),array('modifier', 'count', 'cache/modules/vd_validacion_derechos/form_SubpanelQuickCreate_vd_validacion_derechos.tpl', 239, false),)), $this); ?>


<script>
<?php echo '
$(document).ready(function(){
$("ul.clickMenu").each(function(index, node){
$(node).sugarActionMenu();
});
});
'; ?>

</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="<?php echo $this->_tpl_vars['form_name']; ?>
" id="<?php echo $this->_tpl_vars['form_id']; ?>
" <?php echo $this->_tpl_vars['enctype']; ?>
>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
">
<?php if (isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true'): ?>
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php else: ?>
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php endif; ?>
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="<?php echo $_REQUEST['return_module']; ?>
">
<input type="hidden" name="return_action" value="<?php echo $_REQUEST['return_action']; ?>
">
<input type="hidden" name="return_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
<?php if (( ! empty ( $_REQUEST['return_module'] ) || ! empty ( $_REQUEST['relate_to'] ) ) && ! ( isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true' )): ?>
<input type="hidden" name="relate_to" value="<?php if ($_REQUEST['return_relationship']):  echo $_REQUEST['return_relationship'];  elseif ($_REQUEST['relate_to'] && empty ( $_REQUEST['from_dcmenu'] )):  echo $_REQUEST['relate_to'];  elseif (empty ( $this->_tpl_vars['isDCForm'] ) && empty ( $_REQUEST['from_dcmenu'] )):  echo $_REQUEST['return_module'];  endif; ?>">
<input type="hidden" name="relate_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<?php endif; ?>
<input type="hidden" name="offset" value="<?php echo $this->_tpl_vars['offset']; ?>
">
<?php $this->assign('place', '_HEADER'); ?> <!-- to be used for id for buttons with custom code in def files-->
<div class="action_buttons"><?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_vd_validacion_derechos'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_vd_validacion_derechos'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'vd_validacion_derechos_subpanel_save_button');return false;" type="submit" name="vd_validacion_derechos_subpanel_save_button" id="vd_validacion_derechos_subpanel_save_button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?>  <input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="vd_validacion_derechos_subpanel_cancel_button" id="vd_validacion_derechos_subpanel_cancel_button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
">  <?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=vd_validacion_derechos", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?><div class="clear"></div></div>
</td>
<td align='right'>
<?php echo $this->_tpl_vars['PAGINATION']; ?>

</td>
</tr>
</table><?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<span id='tabcounterJS'><script>SUGAR.TabFields=new Array();//this will be used to track tabindexes for references</script></span>
<div id="form_SubpanelQuickCreate_vd_validacion_derechos_tabs"
>
<div >
<div id="detailpanel_1" >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='Default_<?php echo $this->_tpl_vars['module']; ?>
_Subpanel'  class="yui3-skin-sam edit view panelContainer">
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='vd_validacion_derechos_accounts_name_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_VD_VALIDACION_DERECHOS_ACCOUNTS_FROM_ACCOUNTS_TITLE','module' => 'vd_validacion_derechos'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['vd_validacion_derechos_accounts_name']['name']; ?>
" class="sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['vd_validacion_derechos_accounts_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['vd_validacion_derechos_accounts_name']['value']; ?>
" title='' autocomplete="off"  	 accesskey='7'  >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['vd_validacion_derechos_accounts_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['vd_validacion_derechos_accounts_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['vd_validacion_derechos_accountsaccounts_ida']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['vd_validacion_derechos_accounts_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['vd_validacion_derechos_accounts_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['vd_validacion_derechos_accounts_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_vd_validacion_derechos","field_to_name_array":{"id":"vd_validacion_derechos_accountsaccounts_ida","name":"vd_validacion_derechos_accounts_name"}}'; ?>
, 
"single", 
true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['vd_validacion_derechos_accounts_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['vd_validacion_derechos_accounts_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['vd_validacion_derechos_accounts_name']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['vd_validacion_derechos_accounts_name']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL'), $this);?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['vd_validacion_derechos_accounts_name']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script>
<td valign="top" id='_label' width='12.5%' scope="col">
&nbsp;
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='uploadfile_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_FILE_UPLOAD','module' => 'vd_validacion_derechos'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<?php if ($this->_tpl_vars['fields']['id']['value'] != ""):  $this->assign('type', 'hidden');  else:  $this->assign('type', 'file');  endif; ?>
<input accesskey=""  tabindex="0"  name="uploadfile" type = <?php echo $this->_tpl_vars['type']; ?>
 size="30" maxlength="" onchange="setvalue(this);" value="<?php echo $this->_tpl_vars['fields']['filename']['value']; ?>
"><?php echo $this->_tpl_vars['fields']['filename']['value']; ?>

<td valign="top" id='tipo_consulta_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TIPO_CONSULTA','module' => 'vd_validacion_derechos'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! isset ( $this->_tpl_vars['config']['enable_autocomplete'] ) || $this->_tpl_vars['config']['enable_autocomplete'] == false): ?>
<select name="<?php echo $this->_tpl_vars['fields']['tipo_consulta']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['tipo_consulta']['name']; ?>
" 
title=''       
>
<?php if (isset ( $this->_tpl_vars['fields']['tipo_consulta']['value'] ) && $this->_tpl_vars['fields']['tipo_consulta']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['tipo_consulta']['options'],'selected' => $this->_tpl_vars['fields']['tipo_consulta']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['tipo_consulta']['options'],'selected' => $this->_tpl_vars['fields']['tipo_consulta']['default']), $this);?>

<?php endif; ?>
</select>
<?php else:  $this->assign('field_options', $this->_tpl_vars['fields']['tipo_consulta']['options']);  ob_start();  echo $this->_tpl_vars['fields']['tipo_consulta']['value'];  $this->_smarty_vars['capture']['field_val'] = ob_get_contents(); ob_end_clean();  $this->assign('field_val', $this->_smarty_vars['capture']['field_val']);  ob_start();  echo $this->_tpl_vars['fields']['tipo_consulta']['name'];  $this->_smarty_vars['capture']['ac_key'] = ob_get_contents(); ob_end_clean();  $this->assign('ac_key', $this->_smarty_vars['capture']['ac_key']); ?>
<select style='display:none' name="<?php echo $this->_tpl_vars['fields']['tipo_consulta']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['tipo_consulta']['name']; ?>
" 
title=''          
>
<?php if (isset ( $this->_tpl_vars['fields']['tipo_consulta']['value'] ) && $this->_tpl_vars['fields']['tipo_consulta']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['tipo_consulta']['options'],'selected' => $this->_tpl_vars['fields']['tipo_consulta']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['tipo_consulta']['options'],'selected' => $this->_tpl_vars['fields']['tipo_consulta']['default']), $this);?>

<?php endif; ?>
</select>
<input
id="<?php echo $this->_tpl_vars['fields']['tipo_consulta']['name']; ?>
-input"
name="<?php echo $this->_tpl_vars['fields']['tipo_consulta']['name']; ?>
-input"
size="30"
value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_val'])) ? $this->_run_mod_handler('lookup', true, $_tmp, $this->_tpl_vars['field_options']) : smarty_modifier_lookup($_tmp, $this->_tpl_vars['field_options'])); ?>
"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-down.png"), $this);?>
" id="<?php echo $this->_tpl_vars['fields']['tipo_consulta']['name']; ?>
-image"></button><button type="button"
id="btn-clear-<?php echo $this->_tpl_vars['fields']['tipo_consulta']['name']; ?>
-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['tipo_consulta']['name']; ?>
-input', '<?php echo $this->_tpl_vars['fields']['tipo_consulta']['name']; ?>
');sync_<?php echo $this->_tpl_vars['fields']['tipo_consulta']['name']; ?>
()"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<?php echo '
<script>
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo ' = [];
'; ?>

<?php echo '
(function (){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['tipo_consulta']['name'];  echo '");
if (typeof select_defaults =="undefined")
select_defaults = [];
select_defaults[selectElem.id] = {key:selectElem.value,text:\'\'};
//get default
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value)
select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
}
//SUGAR.AutoComplete.{$ac_key}.ds = 
//get options array from vardefs
var options = SUGAR.AutoComplete.getOptionsArray("");
YUI().use(\'datasource\', \'datasource-jsonschema\',function (Y) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.ds = new Y.DataSource.Function({
source: function (request) {
var ret = [];
for (i=0;i<selectElem.options.length;i++)
if (!(selectElem.options[i].value==\'\' && selectElem.options[i].innerHTML==\'\'))
ret.push({\'key\':selectElem.options[i].value,\'text\':selectElem.options[i].innerHTML});
return ret;
}
});
});
})();
'; ?>

<?php echo '
YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputNode = Y.one('#<?php echo $this->_tpl_vars['fields']['tipo_consulta']['name']; ?>
-input');
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputImage = Y.one('#<?php echo $this->_tpl_vars['fields']['tipo_consulta']['name']; ?>
-image');
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputHidden = Y.one('#<?php echo $this->_tpl_vars['fields']['tipo_consulta']['name']; ?>
');
<?php echo '
function SyncToHidden(selectme){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['tipo_consulta']['name'];  echo '");
var doSimulateChange = false;
if (selectElem.value!=selectme)
doSimulateChange=true;
selectElem.value=selectme;
for (i=0;i<selectElem.options.length;i++){
selectElem.options[i].selected=false;
if (selectElem.options[i].value==selectme)
selectElem.options[i].selected=true;
}
if (doSimulateChange)
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'change\');
}
//global variable 
sync_';  echo $this->_tpl_vars['fields']['tipo_consulta']['name'];  echo ' = function(){
SyncToHidden();
}
function syncFromHiddenToWidget(){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['tipo_consulta']['name'];  echo '");
//if select no longer on page, kill timer
if (selectElem==null || selectElem.options == null)
return;
var currentvalue = SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.get(\'value\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.simulate(\'keyup\');
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById(\'';  echo $this->_tpl_vars['fields']['tipo_consulta']['name']; ?>
-input<?php echo '\'))
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.set(\'value\',selectElem.options[i].innerHTML);
}
}
YAHOO.util.Event.onAvailable("';  echo $this->_tpl_vars['fields']['tipo_consulta']['name'];  echo '", syncFromHiddenToWidget);
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 0;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 0;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions = <?php echo count($this->_tpl_vars['field_options']); ?>
;
if(SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 300) <?php echo '{
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 200;
<?php echo '
}
'; ?>

if(SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 3000) <?php echo '{
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 500;
<?php echo '
}
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.optionsVisible = false;
<?php echo '
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.plug(Y.Plugin.AutoComplete, {
activateFirstItem: true,
'; ?>

minQueryLength: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen,
queryDelay: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay,
zIndex: 99999,
<?php echo '
source: SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.ds,
resultTextLocator: \'text\',
resultHighlighter: \'phraseMatch\',
resultFilters: \'phraseMatch\',
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.expandHover = function(ex){
var hover = YAHOO.util.Dom.getElementsByClassName(\'dccontent\');
if(hover[0] != null){
if (ex) {
var h = \'1000px\';
hover[0].style.height = h;
}
else{
hover[0].style.height = \'\';
}
}
}
if('; ?>
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen<?php echo ' == 0){
// expand the dropdown options upon focus
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'focus\', function () {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.sendRequest(\'\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.optionsVisible = true;
});
}
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'click\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'click\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'dblclick\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'dblclick\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'focus\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'focus\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'mouseup\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'mouseup\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'mousedown\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'mousedown\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'blur\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'blur\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.optionsVisible = false;
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['tipo_consulta']['name'];  echo '");
//if typed value is a valid option, do nothing
for (i=0;i<selectElem.options.length;i++)
if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.get(\'value\'))
return;
//typed value is invalid, so set the text and the hidden to blank
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.set(\'value\', select_defaults[selectElem.id].text);
SyncToHidden(select_defaults[selectElem.id].key);
});
// when they click on the arrow image, toggle the visibility of the options
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputImage.ancestor().on(\'click\', function () {
if (SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.optionsVisible) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.blur();
} else {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.focus();
}
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.on(\'query\', function () {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.set(\'value\', \'\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.on(\'visibleChange\', function (e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.expandHover(e.newVal); // expand
});
// when they select an option, set the hidden input with the KEY, to be saved
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.on(\'select\', function(e) {
SyncToHidden(e.result.raw.key);
});
});
</script> 
'; ?>

<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='institucion_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_INSTITUCION','module' => 'vd_validacion_derechos'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! isset ( $this->_tpl_vars['config']['enable_autocomplete'] ) || $this->_tpl_vars['config']['enable_autocomplete'] == false): ?>
<select name="<?php echo $this->_tpl_vars['fields']['institucion']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['institucion']['name']; ?>
" 
title=''       
>
<?php if (isset ( $this->_tpl_vars['fields']['institucion']['value'] ) && $this->_tpl_vars['fields']['institucion']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['institucion']['options'],'selected' => $this->_tpl_vars['fields']['institucion']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['institucion']['options'],'selected' => $this->_tpl_vars['fields']['institucion']['default']), $this);?>

<?php endif; ?>
</select>
<?php else:  $this->assign('field_options', $this->_tpl_vars['fields']['institucion']['options']);  ob_start();  echo $this->_tpl_vars['fields']['institucion']['value'];  $this->_smarty_vars['capture']['field_val'] = ob_get_contents(); ob_end_clean();  $this->assign('field_val', $this->_smarty_vars['capture']['field_val']);  ob_start();  echo $this->_tpl_vars['fields']['institucion']['name'];  $this->_smarty_vars['capture']['ac_key'] = ob_get_contents(); ob_end_clean();  $this->assign('ac_key', $this->_smarty_vars['capture']['ac_key']); ?>
<select style='display:none' name="<?php echo $this->_tpl_vars['fields']['institucion']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['institucion']['name']; ?>
" 
title=''          
>
<?php if (isset ( $this->_tpl_vars['fields']['institucion']['value'] ) && $this->_tpl_vars['fields']['institucion']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['institucion']['options'],'selected' => $this->_tpl_vars['fields']['institucion']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['institucion']['options'],'selected' => $this->_tpl_vars['fields']['institucion']['default']), $this);?>

<?php endif; ?>
</select>
<input
id="<?php echo $this->_tpl_vars['fields']['institucion']['name']; ?>
-input"
name="<?php echo $this->_tpl_vars['fields']['institucion']['name']; ?>
-input"
size="30"
value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_val'])) ? $this->_run_mod_handler('lookup', true, $_tmp, $this->_tpl_vars['field_options']) : smarty_modifier_lookup($_tmp, $this->_tpl_vars['field_options'])); ?>
"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-down.png"), $this);?>
" id="<?php echo $this->_tpl_vars['fields']['institucion']['name']; ?>
-image"></button><button type="button"
id="btn-clear-<?php echo $this->_tpl_vars['fields']['institucion']['name']; ?>
-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['institucion']['name']; ?>
-input', '<?php echo $this->_tpl_vars['fields']['institucion']['name']; ?>
');sync_<?php echo $this->_tpl_vars['fields']['institucion']['name']; ?>
()"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<?php echo '
<script>
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo ' = [];
'; ?>

<?php echo '
(function (){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['institucion']['name'];  echo '");
if (typeof select_defaults =="undefined")
select_defaults = [];
select_defaults[selectElem.id] = {key:selectElem.value,text:\'\'};
//get default
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value)
select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
}
//SUGAR.AutoComplete.{$ac_key}.ds = 
//get options array from vardefs
var options = SUGAR.AutoComplete.getOptionsArray("");
YUI().use(\'datasource\', \'datasource-jsonschema\',function (Y) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.ds = new Y.DataSource.Function({
source: function (request) {
var ret = [];
for (i=0;i<selectElem.options.length;i++)
if (!(selectElem.options[i].value==\'\' && selectElem.options[i].innerHTML==\'\'))
ret.push({\'key\':selectElem.options[i].value,\'text\':selectElem.options[i].innerHTML});
return ret;
}
});
});
})();
'; ?>

<?php echo '
YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputNode = Y.one('#<?php echo $this->_tpl_vars['fields']['institucion']['name']; ?>
-input');
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputImage = Y.one('#<?php echo $this->_tpl_vars['fields']['institucion']['name']; ?>
-image');
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputHidden = Y.one('#<?php echo $this->_tpl_vars['fields']['institucion']['name']; ?>
');
<?php echo '
function SyncToHidden(selectme){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['institucion']['name'];  echo '");
var doSimulateChange = false;
if (selectElem.value!=selectme)
doSimulateChange=true;
selectElem.value=selectme;
for (i=0;i<selectElem.options.length;i++){
selectElem.options[i].selected=false;
if (selectElem.options[i].value==selectme)
selectElem.options[i].selected=true;
}
if (doSimulateChange)
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'change\');
}
//global variable 
sync_';  echo $this->_tpl_vars['fields']['institucion']['name'];  echo ' = function(){
SyncToHidden();
}
function syncFromHiddenToWidget(){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['institucion']['name'];  echo '");
//if select no longer on page, kill timer
if (selectElem==null || selectElem.options == null)
return;
var currentvalue = SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.get(\'value\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.simulate(\'keyup\');
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById(\'';  echo $this->_tpl_vars['fields']['institucion']['name']; ?>
-input<?php echo '\'))
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.set(\'value\',selectElem.options[i].innerHTML);
}
}
YAHOO.util.Event.onAvailable("';  echo $this->_tpl_vars['fields']['institucion']['name'];  echo '", syncFromHiddenToWidget);
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 0;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 0;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions = <?php echo count($this->_tpl_vars['field_options']); ?>
;
if(SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 300) <?php echo '{
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 200;
<?php echo '
}
'; ?>

if(SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 3000) <?php echo '{
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 500;
<?php echo '
}
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.optionsVisible = false;
<?php echo '
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.plug(Y.Plugin.AutoComplete, {
activateFirstItem: true,
'; ?>

minQueryLength: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen,
queryDelay: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay,
zIndex: 99999,
<?php echo '
source: SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.ds,
resultTextLocator: \'text\',
resultHighlighter: \'phraseMatch\',
resultFilters: \'phraseMatch\',
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.expandHover = function(ex){
var hover = YAHOO.util.Dom.getElementsByClassName(\'dccontent\');
if(hover[0] != null){
if (ex) {
var h = \'1000px\';
hover[0].style.height = h;
}
else{
hover[0].style.height = \'\';
}
}
}
if('; ?>
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen<?php echo ' == 0){
// expand the dropdown options upon focus
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'focus\', function () {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.sendRequest(\'\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.optionsVisible = true;
});
}
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'click\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'click\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'dblclick\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'dblclick\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'focus\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'focus\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'mouseup\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'mouseup\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'mousedown\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'mousedown\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'blur\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'blur\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.optionsVisible = false;
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['institucion']['name'];  echo '");
//if typed value is a valid option, do nothing
for (i=0;i<selectElem.options.length;i++)
if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.get(\'value\'))
return;
//typed value is invalid, so set the text and the hidden to blank
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.set(\'value\', select_defaults[selectElem.id].text);
SyncToHidden(select_defaults[selectElem.id].key);
});
// when they click on the arrow image, toggle the visibility of the options
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputImage.ancestor().on(\'click\', function () {
if (SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.optionsVisible) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.blur();
} else {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.focus();
}
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.on(\'query\', function () {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.set(\'value\', \'\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.on(\'visibleChange\', function (e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.expandHover(e.newVal); // expand
});
// when they select an option, set the hidden input with the KEY, to be saved
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.on(\'select\', function(e) {
SyncToHidden(e.result.raw.key);
});
});
</script> 
'; ?>

<?php endif; ?>
<td valign="top" id='_label' width='12.5%' scope="col">
&nbsp;
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("DEFAULT").style.display='none';</script>
<?php endif; ?>
</div></div>

<script language="javascript">
    var _form_id = '<?php echo $this->_tpl_vars['form_id']; ?>
';
    <?php echo '
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == \'\') ? \'EditView\' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    '; ?>

</script>
<?php $this->assign('place', '_FOOTER'); ?> <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
<div class="action_buttons"><?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_vd_validacion_derechos'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_vd_validacion_derechos'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'vd_validacion_derechos_subpanel_save_button');return false;" type="submit" name="vd_validacion_derechos_subpanel_save_button" id="vd_validacion_derechos_subpanel_save_button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?>  <input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="vd_validacion_derechos_subpanel_cancel_button" id="vd_validacion_derechos_subpanel_cancel_button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
">  <?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=vd_validacion_derechos", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?><div class="clear"></div></div>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block']; ?>

<!-- Begin Meta-Data Javascript -->
<?php echo smarty_function_sugar_getscript(array('file' => "include/javascript/popup_parent_helper.js"), $this);?>

<?php echo smarty_function_sugar_getscript(array('file' => "cache/include/javascript/sugar_grp_jsolait.js"), $this);?>

<?php echo smarty_function_sugar_getscript(array('file' => "modules/Documents/documents.js"), $this);?>

<!-- End Meta-Data Javascript -->
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
function(){SUGAR.util.buildAccessKeyLabels();});
</script><script type="text/javascript">
YAHOO.util.Event.onContentReady("form_SubpanelQuickCreate_vd_validacion_derechos",
    function () { initEditView(document.forms.form_SubpanelQuickCreate_vd_validacion_derechos) });
//window.setTimeout(, 100);
window.onbeforeunload = function () { return onUnloadEditView(); };
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {
$(document).ready(function() {
    $(".collapseLink,.expandLink").click(function (e) { e.preventDefault(); });
  });
}
</script><?php echo '
<script type="text/javascript">
addForm(\'form_SubpanelQuickCreate_vd_validacion_derechos\');addToValidate(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'date_entered_date\', \'date\', false,\'Fecha de Creación\' );
addToValidate(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'date_modified_date\', \'date\', false,\'Última Modificación\' );
addToValidate(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED','module' => 'vd_validacion_derechos','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'vd_validacion_derechos','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'vd_validacion_derechos','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'vd_validacion_derechos','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'vd_validacion_derechos','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'vd_validacion_derechos','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'assigned_user_id\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'vd_validacion_derechos','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'assigned_user_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'vd_validacion_derechos','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'document_name\', \'name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'vd_validacion_derechos','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'filename\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FILENAME','module' => 'vd_validacion_derechos','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'file_ext\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FILE_EXTENSION','module' => 'vd_validacion_derechos','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'file_mime_type\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MIME','module' => 'vd_validacion_derechos','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'uploadfile\', \'file\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FILE_UPLOAD','module' => 'vd_validacion_derechos','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'active_date\', \'date\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_ACTIVE_DATE','module' => 'vd_validacion_derechos','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'exp_date\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_EXP_DATE','module' => 'vd_validacion_derechos','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'category_id\', \'enum\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SF_CATEGORY','module' => 'vd_validacion_derechos','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'subcategory_id\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SF_SUBCATEGORY','module' => 'vd_validacion_derechos','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'status_id\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_STATUS','module' => 'vd_validacion_derechos','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'status\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_STATUS','module' => 'vd_validacion_derechos','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'tipo_consulta\', \'enum\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TIPO_CONSULTA','module' => 'vd_validacion_derechos','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'institucion\', \'enum\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_INSTITUCION','module' => 'vd_validacion_derechos','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'vd_validacion_derechos_accounts_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_VD_VALIDACION_DERECHOS_ACCOUNTS_FROM_ACCOUNTS_TITLE','module' => 'vd_validacion_derechos','for_js' => true), $this); echo '\' );
addToValidateBinaryDependency(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'vd_validacion_derechos','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'vd_validacion_derechos','for_js' => true), $this); echo '\', \'assigned_user_id\' );
addToValidateBinaryDependency(\'form_SubpanelQuickCreate_vd_validacion_derechos\', \'vd_validacion_derechos_accounts_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'vd_validacion_derechos','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_VD_VALIDACION_DERECHOS_ACCOUNTS_FROM_ACCOUNTS_TITLE','module' => 'vd_validacion_derechos','for_js' => true), $this); echo '\', \'vd_validacion_derechos_accountsaccounts_ida\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'form_SubpanelQuickCreate_vd_validacion_derechos_vd_validacion_derechos_accounts_name\']={"form":"form_SubpanelQuickCreate_vd_validacion_derechos","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["form_SubpanelQuickCreate_vd_validacion_derechos_vd_validacion_derechos_accounts_name","vd_validacion_derechos_accountsaccounts_ida"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["vd_validacion_derechos_accountsaccounts_ida"],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};</script>'; ?>
