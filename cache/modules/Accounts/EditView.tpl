

<script>
{literal}
$(document).ready(function(){
$("ul.clickMenu").each(function(index, node){
$(node).sugarActionMenu();
});
});
{/literal}
</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="{$fields.id.value}">
{else}
<input type="hidden" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
{if (!empty($smarty.request.return_module) || !empty($smarty.request.relate_to)) && !(isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true")}
<input type="hidden" name="relate_to" value="{if $smarty.request.return_relationship}{$smarty.request.return_relationship}{elseif $smarty.request.relate_to && empty($smarty.request.from_dcmenu)}{$smarty.request.relate_to}{elseif empty($isDCForm) && empty($smarty.request.from_dcmenu)}{$smarty.request.return_module}{/if}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
{assign var='place' value="_HEADER"} <!-- to be used for id for buttons with custom code in def files-->
<div class="action_buttons">{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE_HEADER">{/if}  {if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module}&record={$smarty.request.return_id}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL_HEADER"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Accounts'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module}&record={$smarty.request.return_id}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {/if} {if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Accounts", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}<div class="clear"></div></div>
</td>
<td align='right'>
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<span id='tabcounterJS'><script>SUGAR.TabFields=new Array();//this will be used to track tabindexes for references</script></span>
<div id="EditView_tabs"
>
<div >
<div id="detailpanel_1" class="{$def.templateMeta.panelClass|default:'edit view edit508'}">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>&nbsp;&nbsp;
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(1);">
<img border="0" id="detailpanel_1_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(1);">
<img border="0" id="detailpanel_1_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_ACCOUNT_INFORMATION' module='Accounts'}
<script>
document.getElementById('detailpanel_1').className += ' expanded';
</script>
</h4>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_ACCOUNT_INFORMATION'  class="yui3-skin-sam edit view panelContainer">
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='tipo_documento_c_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_TIPO_DOCUMENTO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="{$fields.tipo_documento_c.name}" 
id="{$fields.tipo_documento_c.name}" 
title=''      accesskey='7'   
>
{if isset($fields.tipo_documento_c.value) && $fields.tipo_documento_c.value != ''}
{html_options options=$fields.tipo_documento_c.options selected=$fields.tipo_documento_c.value}
{else}
{html_options options=$fields.tipo_documento_c.options selected=$fields.tipo_documento_c.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.tipo_documento_c.options }
{capture name="field_val"}{$fields.tipo_documento_c.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.tipo_documento_c.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.tipo_documento_c.name}" 
id="{$fields.tipo_documento_c.name}" 
title=''          accesskey='7'  
>
{if isset($fields.tipo_documento_c.value) && $fields.tipo_documento_c.value != ''}
{html_options options=$fields.tipo_documento_c.options selected=$fields.tipo_documento_c.value}
{else}
{html_options options=$fields.tipo_documento_c.options selected=$fields.tipo_documento_c.default}
{/if}
</select>
<input
id="{$fields.tipo_documento_c.name}-input"
name="{$fields.tipo_documento_c.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.tipo_documento_c.name}-image"></button><button type="button"
id="btn-clear-{$fields.tipo_documento_c.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.tipo_documento_c.name}-input', '{$fields.tipo_documento_c.name}');sync_{$fields.tipo_documento_c.name}()"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
{literal}
<script>
SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
{/literal}
{literal}
(function (){
var selectElem = document.getElementById("{/literal}{$fields.tipo_documento_c.name}{literal}");
if (typeof select_defaults =="undefined")
select_defaults = [];
select_defaults[selectElem.id] = {key:selectElem.value,text:''};
//get default
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value)
select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
}
//SUGAR.AutoComplete.{$ac_key}.ds = 
//get options array from vardefs
var options = SUGAR.AutoComplete.getOptionsArray("");
YUI().use('datasource', 'datasource-jsonschema',function (Y) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
source: function (request) {
var ret = [];
for (i=0;i<selectElem.options.length;i++)
if (!(selectElem.options[i].value=='' && selectElem.options[i].innerHTML==''))
ret.push({'key':selectElem.options[i].value,'text':selectElem.options[i].innerHTML});
return ret;
}
});
});
})();
{/literal}
{literal}
YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
{/literal}
SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.tipo_documento_c.name}-input');
SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.tipo_documento_c.name}-image');
SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.tipo_documento_c.name}');
{literal}
function SyncToHidden(selectme){
var selectElem = document.getElementById("{/literal}{$fields.tipo_documento_c.name}{literal}");
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
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
}
//global variable 
sync_{/literal}{$fields.tipo_documento_c.name}{literal} = function(){
SyncToHidden();
}
function syncFromHiddenToWidget(){
var selectElem = document.getElementById("{/literal}{$fields.tipo_documento_c.name}{literal}");
//if select no longer on page, kill timer
if (selectElem==null || selectElem.options == null)
return;
var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.tipo_documento_c.name}-input{literal}'))
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
}
}
YAHOO.util.Event.onAvailable("{/literal}{$fields.tipo_documento_c.name}{literal}", syncFromHiddenToWidget);
{/literal}
SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
{/literal}
SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
{literal}
}
{/literal}
if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
{/literal}
SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
{literal}
}
{/literal}
SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
{literal}
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
activateFirstItem: true,
{/literal}
minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
zIndex: 99999,
{literal}
source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,
resultTextLocator: 'text',
resultHighlighter: 'phraseMatch',
resultFilters: 'phraseMatch',
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover = function(ex){
var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
if(hover[0] != null){
if (ex) {
var h = '1000px';
hover[0].style.height = h;
}
else{
hover[0].style.height = '';
}
}
}
if({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
// expand the dropdown options upon focus
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = true;
});
}
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
var selectElem = document.getElementById("{/literal}{$fields.tipo_documento_c.name}{literal}");
//if typed value is a valid option, do nothing
for (i=0;i<selectElem.options.length;i++)
if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'))
return;
//typed value is invalid, so set the text and the hidden to blank
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', select_defaults[selectElem.id].text);
SyncToHidden(select_defaults[selectElem.id].key);
});
// when they click on the arrow image, toggle the visibility of the options
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.ancestor().on('click', function () {
if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.blur();
} else {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
}
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('query', function () {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', '');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('visibleChange', function (e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover(e.newVal); // expand
});
// when they select an option, set the hidden input with the KEY, to be saved
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('select', function(e) {
SyncToHidden(e.result.raw.key);
});
});
</script> 
{/literal}
{/if}
<td valign="top" id='name_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='Accounts'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}
<input accesskey=""  tabindex="0"  name="name"  id="name" maxlength="20" size="30" type="text" value="{$fields.name.value}" onChange="invocar()">
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='_label' width='12.5%' scope="col">
&nbsp;
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
<td valign="top" id='confirmaciondocumento_c_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_CONFIRMACIONDOCUMENTO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}
<input accesskey=""  tabindex="0"  name="confirmaciondocumento_c"  id="confirmaciondocumento_c" maxlength="150" onpaste="return false" type="text" value="{$fields.confirmaciondocumento_c.value}" onchange="ValidarNumeroDocumento()" >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='primernombre_c_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_PRIMERNOMBRE' module='Accounts'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.primernombre_c.value) <= 0}
{assign var="value" value=$fields.primernombre_c.default_value }
{else}
{assign var="value" value=$fields.primernombre_c.value }
{/if}  
<input type='text' name='{$fields.primernombre_c.name}' 
id='{$fields.primernombre_c.name}' size='30' 
maxlength='40' 
value='{$value}' title=''      >
<td valign="top" id='segundonombre_c_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_SEGUNDONOMBRE' module='Accounts'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.segundonombre_c.value) <= 0}
{assign var="value" value=$fields.segundonombre_c.default_value }
{else}
{assign var="value" value=$fields.segundonombre_c.value }
{/if}  
<input type='text' name='{$fields.segundonombre_c.name}' 
id='{$fields.segundonombre_c.name}' size='30' 
maxlength='40' 
value='{$value}' title=''      >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='primerapellido_c_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_PRIMERAPELLIDO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.primerapellido_c.value) <= 0}
{assign var="value" value=$fields.primerapellido_c.default_value }
{else}
{assign var="value" value=$fields.primerapellido_c.value }
{/if}  
<input type='text' name='{$fields.primerapellido_c.name}' 
id='{$fields.primerapellido_c.name}' size='30' 
maxlength='40' 
value='{$value}' title=''      >
<td valign="top" id='segundoapellido_c_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_SEGUNDOAPELLIDO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.segundoapellido_c.value) <= 0}
{assign var="value" value=$fields.segundoapellido_c.default_value }
{else}
{assign var="value" value=$fields.segundoapellido_c.value }
{/if}  
<input type='text' name='{$fields.segundoapellido_c.name}' 
id='{$fields.segundoapellido_c.name}' size='30' 
maxlength='40' 
value='{$value}' title=''      >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='fechanacimiento_c_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_FECHANACIMIENTO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<span class="dateTime">
{assign var=date_value value=$fields.fechanacimiento_c.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.fechanacimiento_c.name}" id="{$fields.fechanacimiento_c.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
{capture assign="other_attributes"}alt="{$APP.LBL_ENTER_DATE}" style="position:relative; top:6px" border="0" id="{$fields.fechanacimiento_c.name}_trigger"{/capture}
{sugar_getimage name="jscalendar" ext=".gif" other_attributes="$other_attributes"}
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.fechanacimiento_c.name}",
form : "EditView",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.fechanacimiento_c.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
startWeekday: {$CALENDAR_FDOW|default:'0'},
step : 1,
weekNumbers:false
{rdelim}
);
</script>
<td valign="top" id='genero_c_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_GENERO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="{$fields.genero_c.name}" 
id="{$fields.genero_c.name}" 
title=''       
>
{if isset($fields.genero_c.value) && $fields.genero_c.value != ''}
{html_options options=$fields.genero_c.options selected=$fields.genero_c.value}
{else}
{html_options options=$fields.genero_c.options selected=$fields.genero_c.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.genero_c.options }
{capture name="field_val"}{$fields.genero_c.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.genero_c.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.genero_c.name}" 
id="{$fields.genero_c.name}" 
title=''          
>
{if isset($fields.genero_c.value) && $fields.genero_c.value != ''}
{html_options options=$fields.genero_c.options selected=$fields.genero_c.value}
{else}
{html_options options=$fields.genero_c.options selected=$fields.genero_c.default}
{/if}
</select>
<input
id="{$fields.genero_c.name}-input"
name="{$fields.genero_c.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.genero_c.name}-image"></button><button type="button"
id="btn-clear-{$fields.genero_c.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.genero_c.name}-input', '{$fields.genero_c.name}');sync_{$fields.genero_c.name}()"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
{literal}
<script>
SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
{/literal}
{literal}
(function (){
var selectElem = document.getElementById("{/literal}{$fields.genero_c.name}{literal}");
if (typeof select_defaults =="undefined")
select_defaults = [];
select_defaults[selectElem.id] = {key:selectElem.value,text:''};
//get default
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value)
select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
}
//SUGAR.AutoComplete.{$ac_key}.ds = 
//get options array from vardefs
var options = SUGAR.AutoComplete.getOptionsArray("");
YUI().use('datasource', 'datasource-jsonschema',function (Y) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
source: function (request) {
var ret = [];
for (i=0;i<selectElem.options.length;i++)
if (!(selectElem.options[i].value=='' && selectElem.options[i].innerHTML==''))
ret.push({'key':selectElem.options[i].value,'text':selectElem.options[i].innerHTML});
return ret;
}
});
});
})();
{/literal}
{literal}
YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
{/literal}
SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.genero_c.name}-input');
SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.genero_c.name}-image');
SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.genero_c.name}');
{literal}
function SyncToHidden(selectme){
var selectElem = document.getElementById("{/literal}{$fields.genero_c.name}{literal}");
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
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
}
//global variable 
sync_{/literal}{$fields.genero_c.name}{literal} = function(){
SyncToHidden();
}
function syncFromHiddenToWidget(){
var selectElem = document.getElementById("{/literal}{$fields.genero_c.name}{literal}");
//if select no longer on page, kill timer
if (selectElem==null || selectElem.options == null)
return;
var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.genero_c.name}-input{literal}'))
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
}
}
YAHOO.util.Event.onAvailable("{/literal}{$fields.genero_c.name}{literal}", syncFromHiddenToWidget);
{/literal}
SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
{/literal}
SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
{literal}
}
{/literal}
if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
{/literal}
SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
{literal}
}
{/literal}
SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
{literal}
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
activateFirstItem: true,
{/literal}
minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
zIndex: 99999,
{literal}
source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,
resultTextLocator: 'text',
resultHighlighter: 'phraseMatch',
resultFilters: 'phraseMatch',
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover = function(ex){
var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
if(hover[0] != null){
if (ex) {
var h = '1000px';
hover[0].style.height = h;
}
else{
hover[0].style.height = '';
}
}
}
if({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
// expand the dropdown options upon focus
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = true;
});
}
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
var selectElem = document.getElementById("{/literal}{$fields.genero_c.name}{literal}");
//if typed value is a valid option, do nothing
for (i=0;i<selectElem.options.length;i++)
if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'))
return;
//typed value is invalid, so set the text and the hidden to blank
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', select_defaults[selectElem.id].text);
SyncToHidden(select_defaults[selectElem.id].key);
});
// when they click on the arrow image, toggle the visibility of the options
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.ancestor().on('click', function () {
if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.blur();
} else {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
}
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('query', function () {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', '');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('visibleChange', function (e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover(e.newVal); // expand
});
// when they select an option, set the hidden input with the KEY, to be saved
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('select', function(e) {
SyncToHidden(e.result.raw.key);
});
});
</script> 
{/literal}
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='telefonopersonal_c_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_TELEFONOPERSONAL' module='Accounts'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.telefonopersonal_c.value) <= 0}
{assign var="value" value=$fields.telefonopersonal_c.default_value }
{else}
{assign var="value" value=$fields.telefonopersonal_c.value }
{/if}  
<input type='text' name='{$fields.telefonopersonal_c.name}' id='{$fields.telefonopersonal_c.name}' size='30' maxlength='9' value='{$value}' title='' tabindex='0'	  class="phone" >
<td valign="top" id='telefonoadicional_c_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_TELEFONOADICIONAL' module='Accounts'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.telefonoadicional_c.value) <= 0}
{assign var="value" value=$fields.telefonoadicional_c.default_value }
{else}
{assign var="value" value=$fields.telefonoadicional_c.value }
{/if}  
<input type='text' name='{$fields.telefonoadicional_c.name}' id='{$fields.telefonoadicional_c.name}' size='30' maxlength='9' value='{$value}' title='' tabindex='0'	  class="phone" >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='celular_c_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_CELULAR' module='Accounts'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.celular_c.value) <= 0}
{assign var="value" value=$fields.celular_c.default_value }
{else}
{assign var="value" value=$fields.celular_c.value }
{/if}  
<input type='text' name='{$fields.celular_c.name}' id='{$fields.celular_c.name}' size='30' maxlength='11' value='{$value}' title='' tabindex='0'	  class="phone" >
<td valign="top" id='estratoeconomico_c_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_ESTRATOECONOMICO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="{$fields.estratoeconomico_c.name}" 
id="{$fields.estratoeconomico_c.name}" 
title=''       
>
{if isset($fields.estratoeconomico_c.value) && $fields.estratoeconomico_c.value != ''}
{html_options options=$fields.estratoeconomico_c.options selected=$fields.estratoeconomico_c.value}
{else}
{html_options options=$fields.estratoeconomico_c.options selected=$fields.estratoeconomico_c.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.estratoeconomico_c.options }
{capture name="field_val"}{$fields.estratoeconomico_c.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.estratoeconomico_c.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.estratoeconomico_c.name}" 
id="{$fields.estratoeconomico_c.name}" 
title=''          
>
{if isset($fields.estratoeconomico_c.value) && $fields.estratoeconomico_c.value != ''}
{html_options options=$fields.estratoeconomico_c.options selected=$fields.estratoeconomico_c.value}
{else}
{html_options options=$fields.estratoeconomico_c.options selected=$fields.estratoeconomico_c.default}
{/if}
</select>
<input
id="{$fields.estratoeconomico_c.name}-input"
name="{$fields.estratoeconomico_c.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.estratoeconomico_c.name}-image"></button><button type="button"
id="btn-clear-{$fields.estratoeconomico_c.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.estratoeconomico_c.name}-input', '{$fields.estratoeconomico_c.name}');sync_{$fields.estratoeconomico_c.name}()"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
{literal}
<script>
SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
{/literal}
{literal}
(function (){
var selectElem = document.getElementById("{/literal}{$fields.estratoeconomico_c.name}{literal}");
if (typeof select_defaults =="undefined")
select_defaults = [];
select_defaults[selectElem.id] = {key:selectElem.value,text:''};
//get default
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value)
select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
}
//SUGAR.AutoComplete.{$ac_key}.ds = 
//get options array from vardefs
var options = SUGAR.AutoComplete.getOptionsArray("");
YUI().use('datasource', 'datasource-jsonschema',function (Y) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
source: function (request) {
var ret = [];
for (i=0;i<selectElem.options.length;i++)
if (!(selectElem.options[i].value=='' && selectElem.options[i].innerHTML==''))
ret.push({'key':selectElem.options[i].value,'text':selectElem.options[i].innerHTML});
return ret;
}
});
});
})();
{/literal}
{literal}
YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
{/literal}
SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.estratoeconomico_c.name}-input');
SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.estratoeconomico_c.name}-image');
SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.estratoeconomico_c.name}');
{literal}
function SyncToHidden(selectme){
var selectElem = document.getElementById("{/literal}{$fields.estratoeconomico_c.name}{literal}");
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
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
}
//global variable 
sync_{/literal}{$fields.estratoeconomico_c.name}{literal} = function(){
SyncToHidden();
}
function syncFromHiddenToWidget(){
var selectElem = document.getElementById("{/literal}{$fields.estratoeconomico_c.name}{literal}");
//if select no longer on page, kill timer
if (selectElem==null || selectElem.options == null)
return;
var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.estratoeconomico_c.name}-input{literal}'))
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
}
}
YAHOO.util.Event.onAvailable("{/literal}{$fields.estratoeconomico_c.name}{literal}", syncFromHiddenToWidget);
{/literal}
SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
{/literal}
SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
{literal}
}
{/literal}
if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
{/literal}
SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
{literal}
}
{/literal}
SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
{literal}
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
activateFirstItem: true,
{/literal}
minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
zIndex: 99999,
{literal}
source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,
resultTextLocator: 'text',
resultHighlighter: 'phraseMatch',
resultFilters: 'phraseMatch',
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover = function(ex){
var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
if(hover[0] != null){
if (ex) {
var h = '1000px';
hover[0].style.height = h;
}
else{
hover[0].style.height = '';
}
}
}
if({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
// expand the dropdown options upon focus
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = true;
});
}
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
var selectElem = document.getElementById("{/literal}{$fields.estratoeconomico_c.name}{literal}");
//if typed value is a valid option, do nothing
for (i=0;i<selectElem.options.length;i++)
if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'))
return;
//typed value is invalid, so set the text and the hidden to blank
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', select_defaults[selectElem.id].text);
SyncToHidden(select_defaults[selectElem.id].key);
});
// when they click on the arrow image, toggle the visibility of the options
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.ancestor().on('click', function () {
if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.blur();
} else {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
}
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('query', function () {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', '');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('visibleChange', function (e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover(e.newVal); // expand
});
// when they select an option, set the hidden input with the KEY, to be saved
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('select', function(e) {
SyncToHidden(e.result.raw.key);
});
});
</script> 
{/literal}
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='email1_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_EMAIL' module='Accounts'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}
<span id='email1_span'>
{$fields.email1.value}</span>
<td valign="top" id='_label' width='12.5%' scope="col">
&nbsp;
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='direccionresidencia_c_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_DIRECCIONRESIDENCIA' module='Accounts'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' colspan='3'>
{counter name="panelFieldCount"}

{if empty($fields.direccionresidencia_c.value)}
{assign var="value" value=$fields.direccionresidencia_c.default_value }
{else}
{assign var="value" value=$fields.direccionresidencia_c.value }
{/if}  
<textarea  id='{$fields.direccionresidencia_c.name}' name='{$fields.direccionresidencia_c.name}'
rows="4" 
cols="20" 
title='' tabindex="0" 
 >{$value}</textarea>
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='barrio_c_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_BARRIO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.barrio_c.name}" class="sqsEnabled" tabindex="0" id="{$fields.barrio_c.name}" size="" value="{$fields.barrio_c.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.barrio_c.id_name}" 
id="{$fields.barrio_c.id_name}" 
value="{$fields.bar_barrio_id_c.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.barrio_c.name}" id="btn_{$fields.barrio_c.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.barrio_c.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"bar_barrio_id_c","name":"barrio_c"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.barrio_c.name}" id="btn_clr_{$fields.barrio_c.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.barrio_c.name}', '{$fields.barrio_c.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.barrio_c.name}']) != 'undefined'",
		enableQS
);
</script>
<td valign="top" id='_label' width='12.5%' scope="col">
&nbsp;
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='vereda_c_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_VEREDA' module='Accounts'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.vereda_c.value) <= 0}
{assign var="value" value=$fields.vereda_c.default_value }
{else}
{assign var="value" value=$fields.vereda_c.value }
{/if}  
<input type='text' name='{$fields.vereda_c.name}' 
id='{$fields.vereda_c.name}' size='30' 
maxlength='50' 
value='{$value}' title=''      >
<td valign="top" id='_label' width='12.5%' scope="col">
&nbsp;
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='paises_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_PAISES' module='Accounts'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.paises.name}" class="sqsEnabled" tabindex="0" id="{$fields.paises.name}" size="" value="{$fields.paises.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.paises.id_name}" 
id="{$fields.paises.id_name}" 
value="{$fields.paises_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.paises.name}" id="btn_{$fields.paises.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.paises.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"paises_id","name":"paises"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.paises.name}" id="btn_clr_{$fields.paises.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.paises.name}', '{$fields.paises.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.paises.name}']) != 'undefined'",
		enableQS
);
</script>
<td valign="top" id='_label' width='12.5%' scope="col">
&nbsp;
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='departamento_c_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_DEPARTAMENTO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.departamento_c.name}" class="sqsEnabled" tabindex="0" id="{$fields.departamento_c.name}" size="" value="{$fields.departamento_c.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.departamento_c.id_name}" 
id="{$fields.departamento_c.id_name}" 
value="{$fields.dep_departamentos_id_c.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.departamento_c.name}" id="btn_{$fields.departamento_c.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.departamento_c.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"dep_departamentos_id_c","name":"departamento_c"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.departamento_c.name}" id="btn_clr_{$fields.departamento_c.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.departamento_c.name}', '{$fields.departamento_c.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.departamento_c.name}']) != 'undefined'",
		enableQS
);
</script>
<td valign="top" id='_label' width='12.5%' scope="col">
&nbsp;
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='municipio_c_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_MUNICIPIO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.municipio_c.name}" class="sqsEnabled" tabindex="0" id="{$fields.municipio_c.name}" size="" value="{$fields.municipio_c.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.municipio_c.id_name}" 
id="{$fields.municipio_c.id_name}" 
value="{$fields.mun_municipio_id1_c.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.municipio_c.name}" id="btn_{$fields.municipio_c.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.municipio_c.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"mun_municipio_id1_c","name":"municipio_c"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.municipio_c.name}" id="btn_clr_{$fields.municipio_c.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.municipio_c.name}', '{$fields.municipio_c.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.municipio_c.name}']) != 'undefined'",
		enableQS
);
</script>
<td valign="top" id='_label' width='12.5%' scope="col">
&nbsp;
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='acudiente_c_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_ACUDIENTE' module='Accounts'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.acudiente_c.name}" class="sqsEnabled" tabindex="0" id="{$fields.acudiente_c.name}" size="" value="{$fields.acudiente_c.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.acudiente_c.id_name}" 
id="{$fields.acudiente_c.id_name}" 
value="{$fields.contact_id_c.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.acudiente_c.name}" id="btn_{$fields.acudiente_c.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_SELECT_CONTACTS_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_ACCESSKEY_SELECT_CONTACTS_LABEL"}"
onclick='open_popup(
"{$fields.acudiente_c.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"contact_id_c","name":"acudiente_c"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.acudiente_c.name}" id="btn_clr_{$fields.acudiente_c.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.acudiente_c.name}', '{$fields.acudiente_c.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL"}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.acudiente_c.name}']) != 'undefined'",
		enableQS
);
</script>
<td valign="top" id='_label' width='12.5%' scope="col">
&nbsp;
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='leydata_c_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_LEYDATA' module='Accounts'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' colspan='3'>
{counter name="panelFieldCount"}

{if strval($fields.leydata_c.value) == "1" || strval($fields.leydata_c.value) == "yes" || strval($fields.leydata_c.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.leydata_c.name}" value="0"> 
<input type="checkbox" id="{$fields.leydata_c.name}" 
name="{$fields.leydata_c.name}" 
value="1" title='' tabindex="0" {$checked} >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='numeroformulario_c_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_NUMEROFORMULARIO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' colspan='3'>
{counter name="panelFieldCount"}

{if strlen($fields.numeroformulario_c.value) <= 0}
{assign var="value" value=$fields.numeroformulario_c.default_value }
{else}
{assign var="value" value=$fields.numeroformulario_c.value }
{/if}  
<input type='text' name='{$fields.numeroformulario_c.name}' 
id='{$fields.numeroformulario_c.name}' size='30' 
maxlength='10' 
value='{$value}' title=''      >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(1, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_ACCOUNT_INFORMATION").style.display='none';</script>
{/if}
<div id="detailpanel_2" class="{$def.templateMeta.panelClass|default:'edit view edit508'}">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>&nbsp;&nbsp;
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_PANEL_ADVANCED' module='Accounts'}
<script>
document.getElementById('detailpanel_2').className += ' expanded';
</script>
</h4>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_PANEL_ADVANCED'  class="yui3-skin-sam edit view panelContainer">
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='tipocobertura_c_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_TIPOCOBERTURA' module='Accounts'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="{$fields.tipocobertura_c.name}" 
id="{$fields.tipocobertura_c.name}" 
title=''       
>
{if isset($fields.tipocobertura_c.value) && $fields.tipocobertura_c.value != ''}
{html_options options=$fields.tipocobertura_c.options selected=$fields.tipocobertura_c.value}
{else}
{html_options options=$fields.tipocobertura_c.options selected=$fields.tipocobertura_c.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.tipocobertura_c.options }
{capture name="field_val"}{$fields.tipocobertura_c.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.tipocobertura_c.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.tipocobertura_c.name}" 
id="{$fields.tipocobertura_c.name}" 
title=''          
>
{if isset($fields.tipocobertura_c.value) && $fields.tipocobertura_c.value != ''}
{html_options options=$fields.tipocobertura_c.options selected=$fields.tipocobertura_c.value}
{else}
{html_options options=$fields.tipocobertura_c.options selected=$fields.tipocobertura_c.default}
{/if}
</select>
<input
id="{$fields.tipocobertura_c.name}-input"
name="{$fields.tipocobertura_c.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.tipocobertura_c.name}-image"></button><button type="button"
id="btn-clear-{$fields.tipocobertura_c.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.tipocobertura_c.name}-input', '{$fields.tipocobertura_c.name}');sync_{$fields.tipocobertura_c.name}()"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
{literal}
<script>
SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
{/literal}
{literal}
(function (){
var selectElem = document.getElementById("{/literal}{$fields.tipocobertura_c.name}{literal}");
if (typeof select_defaults =="undefined")
select_defaults = [];
select_defaults[selectElem.id] = {key:selectElem.value,text:''};
//get default
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value)
select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
}
//SUGAR.AutoComplete.{$ac_key}.ds = 
//get options array from vardefs
var options = SUGAR.AutoComplete.getOptionsArray("");
YUI().use('datasource', 'datasource-jsonschema',function (Y) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
source: function (request) {
var ret = [];
for (i=0;i<selectElem.options.length;i++)
if (!(selectElem.options[i].value=='' && selectElem.options[i].innerHTML==''))
ret.push({'key':selectElem.options[i].value,'text':selectElem.options[i].innerHTML});
return ret;
}
});
});
})();
{/literal}
{literal}
YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
{/literal}
SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.tipocobertura_c.name}-input');
SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.tipocobertura_c.name}-image');
SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.tipocobertura_c.name}');
{literal}
function SyncToHidden(selectme){
var selectElem = document.getElementById("{/literal}{$fields.tipocobertura_c.name}{literal}");
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
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
}
//global variable 
sync_{/literal}{$fields.tipocobertura_c.name}{literal} = function(){
SyncToHidden();
}
function syncFromHiddenToWidget(){
var selectElem = document.getElementById("{/literal}{$fields.tipocobertura_c.name}{literal}");
//if select no longer on page, kill timer
if (selectElem==null || selectElem.options == null)
return;
var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.tipocobertura_c.name}-input{literal}'))
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
}
}
YAHOO.util.Event.onAvailable("{/literal}{$fields.tipocobertura_c.name}{literal}", syncFromHiddenToWidget);
{/literal}
SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
{/literal}
SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
{literal}
}
{/literal}
if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
{/literal}
SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
{literal}
}
{/literal}
SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
{literal}
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
activateFirstItem: true,
{/literal}
minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
zIndex: 99999,
{literal}
source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,
resultTextLocator: 'text',
resultHighlighter: 'phraseMatch',
resultFilters: 'phraseMatch',
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover = function(ex){
var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
if(hover[0] != null){
if (ex) {
var h = '1000px';
hover[0].style.height = h;
}
else{
hover[0].style.height = '';
}
}
}
if({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
// expand the dropdown options upon focus
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = true;
});
}
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
var selectElem = document.getElementById("{/literal}{$fields.tipocobertura_c.name}{literal}");
//if typed value is a valid option, do nothing
for (i=0;i<selectElem.options.length;i++)
if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'))
return;
//typed value is invalid, so set the text and the hidden to blank
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', select_defaults[selectElem.id].text);
SyncToHidden(select_defaults[selectElem.id].key);
});
// when they click on the arrow image, toggle the visibility of the options
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.ancestor().on('click', function () {
if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.blur();
} else {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
}
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('query', function () {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', '');
});
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('visibleChange', function (e) {
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover(e.newVal); // expand
});
// when they select an option, set the hidden input with the KEY, to be saved
SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('select', function(e) {
SyncToHidden(e.result.raw.key);
});
});
</script> 
{/literal}
{/if}
<td valign="top" id='_label' width='12.5%' scope="col">
&nbsp;
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='epsactual_c_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_EPSACTUAL' module='Accounts'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.epsactual_c.name}" class="sqsEnabled" tabindex="0" id="{$fields.epsactual_c.name}" size="" value="{$fields.epsactual_c.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.epsactual_c.id_name}" 
id="{$fields.epsactual_c.id_name}" 
value="{$fields.eps_eps_id_c.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.epsactual_c.name}" id="btn_{$fields.epsactual_c.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.epsactual_c.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"eps_eps_id_c","name":"epsactual_c"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.epsactual_c.name}" id="btn_clr_{$fields.epsactual_c.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.epsactual_c.name}', '{$fields.epsactual_c.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.epsactual_c.name}']) != 'undefined'",
		enableQS
);
</script>
<td valign="top" id='_label' width='12.5%' scope="col">
&nbsp;
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='ipsactual_c_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_IPSACTUAL' module='Accounts'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.ipsactual_c.name}" class="sqsEnabled" tabindex="0" id="{$fields.ipsactual_c.name}" size="" value="{$fields.ipsactual_c.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.ipsactual_c.id_name}" 
id="{$fields.ipsactual_c.id_name}" 
value="{$fields.ips_ips_id_c.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.ipsactual_c.name}" id="btn_{$fields.ipsactual_c.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.ipsactual_c.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"ips_ips_id_c","name":"ipsactual_c"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.ipsactual_c.name}" id="btn_clr_{$fields.ipsactual_c.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.ipsactual_c.name}', '{$fields.ipsactual_c.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.ipsactual_c.name}']) != 'undefined'",
		enableQS
);
</script>
<td valign="top" id='_label' width='12.5%' scope="col">
&nbsp;
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(2, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_PANEL_ADVANCED").style.display='none';</script>
{/if}
</div></div>

<script language="javascript">
    var _form_id = '{$form_id}';
    {literal}
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>
{assign var='place' value="_FOOTER"} <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
<div class="action_buttons">{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE_FOOTER">{/if}  {if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module}&record={$smarty.request.return_id}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL_FOOTER"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Accounts'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module}&record={$smarty.request.return_id}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {/if} {if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Accounts", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}<div class="clear"></div></div>
</div>
</form>
{$set_focus_block}
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script><script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () {ldelim} initEditView(document.forms.EditView) {rdelim});
//window.setTimeout(, 100);
window.onbeforeunload = function () {ldelim} return onUnloadEditView(); {rdelim};
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {ldelim}
$(document).ready(function() {ldelim}
    $(".collapseLink,.expandLink").click(function (e) {ldelim} e.preventDefault(); {rdelim});
  {rdelim});
{rdelim}
</script>{literal}
<script type="text/javascript">
addForm('EditView');addToValidate('EditView', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_NAME' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Creado' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Modificado' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'account_type', 'enum', false,'{/literal}{sugar_translate label='LBL_TYPE' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'industry', 'enum', false,'{/literal}{sugar_translate label='LBL_INDUSTRY' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'annual_revenue', 'varchar', false,'{/literal}{sugar_translate label='LBL_ANNUAL_REVENUE' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'phone_fax', 'phone', false,'{/literal}{sugar_translate label='LBL_FAX' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'billing_address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_STREET' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'billing_address_street_2', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_STREET_2' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'billing_address_street_3', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_STREET_3' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'billing_address_street_4', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_STREET_4' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'billing_address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_CITY' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'billing_address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_STATE' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'billing_address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_POSTALCODE' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'billing_address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_COUNTRY' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'rating', 'varchar', false,'{/literal}{sugar_translate label='LBL_RATING' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'phone_office', 'phone', false,'{/literal}{sugar_translate label='LBL_PHONE_OFFICE' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'phone_alternate', 'phone', false,'{/literal}{sugar_translate label='LBL_PHONE_ALT' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'website', 'url', false,'{/literal}{sugar_translate label='LBL_WEBSITE' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'ownership', 'varchar', false,'{/literal}{sugar_translate label='LBL_OWNERSHIP' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'employees', 'varchar', false,'{/literal}{sugar_translate label='LBL_EMPLOYEES' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'ticker_symbol', 'varchar', false,'{/literal}{sugar_translate label='LBL_TICKER_SYMBOL' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'shipping_address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_STREET' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'shipping_address_street_2', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_STREET_2' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'shipping_address_street_3', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_STREET_3' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'shipping_address_street_4', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_STREET_4' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'shipping_address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_CITY' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'shipping_address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_STATE' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'shipping_address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_POSTALCODE' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'shipping_address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_COUNTRY' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'email1', 'varchar', false,'{/literal}{sugar_translate label='LBL_EMAIL' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'email_addresses_non_primary', 'email', false,'{/literal}{sugar_translate label='LBL_EMAIL_NON_PRIMARY' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'parent_id', 'id', false,'{/literal}{sugar_translate label='LBL_PARENT_ACCOUNT_ID' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'sic_code', 'varchar', false,'{/literal}{sugar_translate label='LBL_SIC_CODE' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'parent_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MEMBER_OF' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'tiposerviciosolicitado', 'enum', false,'{/literal}{sugar_translate label='LBL_TIPOSERVICIOSOLICITADO' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'validacion_derechos', 'bool', false,'{/literal}{sugar_translate label='LBL_VALIDACION_DERECHOS' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'paciente_estancia', 'bool', false,'{/literal}{sugar_translate label='LBL_PACIENTE_ESTANCIA' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'email_opt_out', 'bool', false,'{/literal}{sugar_translate label='LBL_EMAIL_OPT_OUT' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'invalid_email', 'bool', false,'{/literal}{sugar_translate label='LBL_INVALID_EMAIL' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'email', 'email', false,'{/literal}{sugar_translate label='LBL_ANY_EMAIL' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'campaign_id', 'id', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_ID' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'campaign_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'paises_id', 'id', false,'{/literal}{sugar_translate label='LBL_PAISES_ID' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'paises', 'relate', false,'{/literal}{sugar_translate label='LBL_PAISES' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'actividadeconomica_c[]', 'multienum', false,'{/literal}{sugar_translate label='LBL_ACTIVIDADECONOMICA' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'actividadindependiente_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_ACTIVIDADINDEPENDIENTE' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'acudiente_c', 'relate', false,'{/literal}{sugar_translate label='LBL_ACUDIENTE' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'barrio_c', 'relate', false,'{/literal}{sugar_translate label='LBL_BARRIO' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'beneficios_c', 'text', false,'{/literal}{sugar_translate label='LBL_BENEFICIOS' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'cargoempresa_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_CARGOEMPRESA' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'celular_c', 'phone', false,'{/literal}{sugar_translate label='LBL_CELULAR' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'ciudad_c', 'relate', false,'{/literal}{sugar_translate label='LBL_CIUDAD' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'clasificacionmercadeo_c', 'enum', false,'{/literal}{sugar_translate label='LBL_CLASIFICACIONMERCADEO' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'comuna_c', 'relate', false,'{/literal}{sugar_translate label='LBL_COMUNA' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'confirmaciondocumento_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_CONFIRMACIONDOCUMENTO' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'correoelectronico_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_CORREOELECTRONICO' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'departamento_c', 'relate', false,'{/literal}{sugar_translate label='LBL_DEPARTAMENTO' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'direccionfredsocial_c', 'url', false,'{/literal}{sugar_translate label='LBL_DIRECCIONFREDSOCIAL' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'direccionresidencia_c', 'text', false,'{/literal}{sugar_translate label='LBL_DIRECCIONRESIDENCIA' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'direcciontredsocial_c', 'url', false,'{/literal}{sugar_translate label='LBL_DIRECCIONTREDSOCIAL' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'epsactual_c', 'relate', false,'{/literal}{sugar_translate label='LBL_EPSACTUAL' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'estadocivil_c', 'enum', false,'{/literal}{sugar_translate label='LBL_ESTADOCIVIL' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'estado_c', 'enum', false,'{/literal}{sugar_translate label='LBL_ESTADO' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'estratoeconomico_c', 'enum', false,'{/literal}{sugar_translate label='LBL_ESTRATOECONOMICO' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'extensionempresa_c', 'phone', false,'{/literal}{sugar_translate label='LBL_EXTENSIONEMPRESA' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'fechanacimiento_c', 'date', false,'{/literal}{sugar_translate label='LBL_FECHANACIMIENTO' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'genero_c', 'enum', false,'{/literal}{sugar_translate label='LBL_GENERO' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'ipsactual_c', 'relate', false,'{/literal}{sugar_translate label='LBL_IPSACTUAL' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'jornadacitas_c[]', 'multienum', false,'{/literal}{sugar_translate label='LBL_JORNADACITAS' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'leydata_c', 'bool', false,'{/literal}{sugar_translate label='LBL_LEYDATA' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'lugartrabajo_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_LUGARTRABAJO' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'municipio_c', 'relate', false,'{/literal}{sugar_translate label='LBL_MUNICIPIO' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'numeroformulario_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_NUMEROFORMULARIO' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'numerohijos_c', 'int', false,'{/literal}{sugar_translate label='LBL_NUMEROHIJOS' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'observacionesmercadeo_c', 'text', false,'{/literal}{sugar_translate label='LBL_OBSERVACIONESMERCADEO' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'origen_c[]', 'multienum', false,'{/literal}{sugar_translate label='LBL_ORIGEN' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'pais_c', 'enum', false,'{/literal}{sugar_translate label='LBL_PAIS' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'pasatiempofavorito_c[]', 'multienum', false,'{/literal}{sugar_translate label='LBL_PASATIEMPOFAVORITO' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'primerapellido_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMERAPELLIDO' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'primernombre_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMERNOMBRE' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'segundoapellido_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_SEGUNDOAPELLIDO' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'segundonombre_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_SEGUNDONOMBRE' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'telefonoadicional_c', 'phone', false,'{/literal}{sugar_translate label='LBL_TELEFONOADICIONAL' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'telefonoempresa_c', 'phone', false,'{/literal}{sugar_translate label='LBL_TELEFONOEMPRESA' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'telefonopersonal_c', 'phone', false,'{/literal}{sugar_translate label='LBL_TELEFONOPERSONAL' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'tipocobertura_c', 'enum', false,'{/literal}{sugar_translate label='LBL_TIPOCOBERTURA' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'tipopaciente_c', 'enum', false,'{/literal}{sugar_translate label='LBL_TIPOPACIENTE' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'tipo_documento_c', 'enum', false,'{/literal}{sugar_translate label='LBL_TIPO_DOCUMENTO' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'vereda_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_VEREDA' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'bar_barrio_id_c', 'id', false,'{/literal}{sugar_translate label='LBL_BARRIO_BAR_BARRIO_ID' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'com_comunas_id_c', 'id', false,'{/literal}{sugar_translate label='LBL_COMUNA_COM_COMUNAS_ID' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'contact_id_c', 'id', false,'{/literal}{sugar_translate label='LBL_ACUDIENTE_CONTACT_ID' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'dep_departamentos_id_c', 'id', false,'{/literal}{sugar_translate label='LBL_DEPARTAMENTO_DEP_DEPARTAMENTOS_ID' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'eps_eps_id_c', 'id', false,'{/literal}{sugar_translate label='LBL_EPSACTUAL_EPS_EPS_ID' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'ips_ips_id_c', 'id', false,'{/literal}{sugar_translate label='LBL_IPSACTUAL_IPS_IPS_ID' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'mun_municipio_id1_c', 'id', false,'{/literal}{sugar_translate label='LBL_MUNICIPIO_MUN_MUNICIPIO_ID' module='Accounts' for_js=true}{literal}' );
addToValidate('EditView', 'mun_municipio_id_c', 'id', false,'{/literal}{sugar_translate label='LBL_CIUDAD_MUN_MUNICIPIO_ID' module='Accounts' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Accounts' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Accounts' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'paises', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Accounts' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_PAISES' module='Accounts' for_js=true}{literal}', 'paises_id' );
addToValidateBinaryDependency('EditView', 'acudiente_c', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Accounts' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ACUDIENTE' module='Accounts' for_js=true}{literal}', 'contact_id_c' );
addToValidateBinaryDependency('EditView', 'barrio_c', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Accounts' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_BARRIO' module='Accounts' for_js=true}{literal}', 'bar_barrio_id_c' );
addToValidateBinaryDependency('EditView', 'departamento_c', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Accounts' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_DEPARTAMENTO' module='Accounts' for_js=true}{literal}', 'dep_departamentos_id_c' );
addToValidateBinaryDependency('EditView', 'epsactual_c', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Accounts' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_EPSACTUAL' module='Accounts' for_js=true}{literal}', 'eps_eps_id_c' );
addToValidateBinaryDependency('EditView', 'ipsactual_c', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Accounts' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_IPSACTUAL' module='Accounts' for_js=true}{literal}', 'ips_ips_id_c' );
addToValidateBinaryDependency('EditView', 'municipio_c', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Accounts' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_MUNICIPIO' module='Accounts' for_js=true}{literal}', 'mun_municipio_id1_c' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_barrio_c']={"form":"EditView","method":"query","modules":["BAR_Barrio"],"group":"or","field_list":["name","id"],"populate_list":["barrio_c","bar_barrio_id_c"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['EditView_paises']={"form":"EditView","method":"query","modules":["tms_paises"],"group":"or","field_list":["name","id"],"populate_list":["paises","paises_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['EditView_departamento_c']={"form":"EditView","method":"query","modules":["DEP_Departamentos"],"group":"or","field_list":["name","id"],"populate_list":["departamento_c","dep_departamentos_id_c"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['EditView_municipio_c']={"form":"EditView","method":"query","modules":["MUN_Municipio"],"group":"or","field_list":["name","id"],"populate_list":["municipio_c","mun_municipio_id1_c"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['EditView_acudiente_c']={"form":"EditView","method":"query","modules":["Contacts"],"group":"or","field_list":["name","id"],"populate_list":["acudiente_c","contact_id_c"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['EditView_epsactual_c']={"form":"EditView","method":"query","modules":["EPS_EPS"],"group":"or","field_list":["name","id"],"populate_list":["epsactual_c","eps_eps_id_c"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['EditView_ipsactual_c']={"form":"EditView","method":"query","modules":["IPS_IPS"],"group":"or","field_list":["name","id"],"populate_list":["ipsactual_c","ips_ips_id_c"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};</script>{/literal}
