

<script language="javascript">
{literal}
SUGAR.util.doWhen(function(){
    return $("#contentTable").length == 0;
}, SUGAR.themes.actionMenu);
{/literal}
</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
</form>
<div class="action_buttons">{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Accounts'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if}  {if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Accounts'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if}  {if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Accounts'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form);" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if}  {if $bean->aclAccess("edit") && $bean->aclAccess("delete")}<input title="{$APP.LBL_DUP_MERGE}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Accounts'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="{$APP.LBL_DUP_MERGE}" id="merge_duplicate_button">{/if}  {if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Accounts", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}<div class="clear"></div></div>
</div>
</td>
<td align="right" width="20%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="Accounts_detailview_tabs"
>
<div >
<div id='detailpanel_1' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(1);">
<img border="0" id="detailpanel_1_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(1);">
<img border="0" id="detailpanel_1_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_ACCOUNT_INFORMATION' module='Accounts'}
<script>
document.getElementById('detailpanel_1').className += ' expanded';
</script>
</h4>
<table id='LBL_ACCOUNT_INFORMATION' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.tipo_documento_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TIPO_DOCUMENTO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.tipo_documento_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.tipo_documento_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.tipo_documento_c.name}" value="{ $fields.tipo_documento_c.options }">
{ $fields.tipo_documento_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.tipo_documento_c.name}" value="{ $fields.tipo_documento_c.value }">
{ $fields.tipo_documento_c.options[$fields.tipo_documento_c.value]}
{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if} 
<span class="sugar_field" id="{$fields.name.name}">{$fields.name.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.confirmaciondocumento_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CONFIRMACIONDOCUMENTO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.confirmaciondocumento_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.confirmaciondocumento_c.value) <= 0}
{assign var="value" value=$fields.confirmaciondocumento_c.default_value }
{else}
{assign var="value" value=$fields.confirmaciondocumento_c.value }
{/if} 
<span class="sugar_field" id="{$fields.confirmaciondocumento_c.name}">{$fields.confirmaciondocumento_c.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.primernombre_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PRIMERNOMBRE' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.primernombre_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.primernombre_c.value) <= 0}
{assign var="value" value=$fields.primernombre_c.default_value }
{else}
{assign var="value" value=$fields.primernombre_c.value }
{/if} 
<span class="sugar_field" id="{$fields.primernombre_c.name}">{$fields.primernombre_c.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.segundonombre_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEGUNDONOMBRE' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.segundonombre_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.segundonombre_c.value) <= 0}
{assign var="value" value=$fields.segundonombre_c.default_value }
{else}
{assign var="value" value=$fields.segundonombre_c.value }
{/if} 
<span class="sugar_field" id="{$fields.segundonombre_c.name}">{$fields.segundonombre_c.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.primerapellido_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PRIMERAPELLIDO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.primerapellido_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.primerapellido_c.value) <= 0}
{assign var="value" value=$fields.primerapellido_c.default_value }
{else}
{assign var="value" value=$fields.primerapellido_c.value }
{/if} 
<span class="sugar_field" id="{$fields.primerapellido_c.name}">{$fields.primerapellido_c.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.segundoapellido_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEGUNDOAPELLIDO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.segundoapellido_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.segundoapellido_c.value) <= 0}
{assign var="value" value=$fields.segundoapellido_c.default_value }
{else}
{assign var="value" value=$fields.segundoapellido_c.value }
{/if} 
<span class="sugar_field" id="{$fields.segundoapellido_c.name}">{$fields.segundoapellido_c.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.fechanacimiento_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_FECHANACIMIENTO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.fechanacimiento_c.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.fechanacimiento_c.value) <= 0}
{assign var="value" value=$fields.fechanacimiento_c.default_value }
{else}
{assign var="value" value=$fields.fechanacimiento_c.value }
{/if}
<span class="sugar_field" id="{$fields.fechanacimiento_c.name}">{$value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.genero_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_GENERO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.genero_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.genero_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.genero_c.name}" value="{ $fields.genero_c.options }">
{ $fields.genero_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.genero_c.name}" value="{ $fields.genero_c.value }">
{ $fields.genero_c.options[$fields.genero_c.value]}
{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.telefonopersonal_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TELEFONOPERSONAL' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  class="phone">
{if !$fields.telefonopersonal_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.telefonopersonal_c.value)}
{assign var="phone_value" value=$fields.telefonopersonal_c.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.telefonoadicional_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TELEFONOADICIONAL' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  class="phone">
{if !$fields.telefonoadicional_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.telefonoadicional_c.value)}
{assign var="phone_value" value=$fields.telefonoadicional_c.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.celular_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CELULAR' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  class="phone">
{if !$fields.celular_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.celular_c.value)}
{assign var="phone_value" value=$fields.celular_c.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.estratoeconomico_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ESTRATOECONOMICO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.estratoeconomico_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.estratoeconomico_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.estratoeconomico_c.name}" value="{ $fields.estratoeconomico_c.options }">
{ $fields.estratoeconomico_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.estratoeconomico_c.name}" value="{ $fields.estratoeconomico_c.value }">
{ $fields.estratoeconomico_c.options[$fields.estratoeconomico_c.value]}
{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.email1.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_EMAIL' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.email1.hidden}
{counter name="panelFieldCount"}
<span id='email1_span'>
{$fields.email1.value}
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.direccionresidencia_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DIRECCIONRESIDENCIA' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.direccionresidencia_c.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.direccionresidencia_c.name|escape:'html'|url2html|nl2br}">{$fields.direccionresidencia_c.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.barrio_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_BARRIO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.barrio_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.bar_barrio_id_c.value)}
{capture assign="detail_url"}index.php?module=BAR_Barrio&action=DetailView&record={$fields.bar_barrio_id_c.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="bar_barrio_id_c" class="sugar_field" data-id-value="{$fields.bar_barrio_id_c.value}">{$fields.barrio_c.value}</span>
{if !empty($fields.bar_barrio_id_c.value)}</a>{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.vereda_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_VEREDA' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.vereda_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.vereda_c.value) <= 0}
{assign var="value" value=$fields.vereda_c.default_value }
{else}
{assign var="value" value=$fields.vereda_c.value }
{/if} 
<span class="sugar_field" id="{$fields.vereda_c.name}">{$fields.vereda_c.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.paises.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PAISES' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.paises.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.paises_id.value)}
{capture assign="detail_url"}index.php?module=tms_paises&action=DetailView&record={$fields.paises_id.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="paises_id" class="sugar_field" data-id-value="{$fields.paises_id.value}">{$fields.paises.value}</span>
{if !empty($fields.paises_id.value)}</a>{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.departamento_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DEPARTAMENTO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.departamento_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.dep_departamentos_id_c.value)}
{capture assign="detail_url"}index.php?module=DEP_Departamentos&action=DetailView&record={$fields.dep_departamentos_id_c.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="dep_departamentos_id_c" class="sugar_field" data-id-value="{$fields.dep_departamentos_id_c.value}">{$fields.departamento_c.value}</span>
{if !empty($fields.dep_departamentos_id_c.value)}</a>{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.municipio_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_MUNICIPIO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.municipio_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.mun_municipio_id1_c.value)}
{capture assign="detail_url"}index.php?module=MUN_Municipio&action=DetailView&record={$fields.mun_municipio_id1_c.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="mun_municipio_id1_c" class="sugar_field" data-id-value="{$fields.mun_municipio_id1_c.value}">{$fields.municipio_c.value}</span>
{if !empty($fields.mun_municipio_id1_c.value)}</a>{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.acudiente_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ACUDIENTE' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.acudiente_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.contact_id_c.value)}
{capture assign="detail_url"}index.php?module=Contacts&action=DetailView&record={$fields.contact_id_c.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="contact_id_c" class="sugar_field" data-id-value="{$fields.contact_id_c.value}">{$fields.acudiente_c.value}</span>
{if !empty($fields.contact_id_c.value)}</a>{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.leydata_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_LEYDATA' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.leydata_c.hidden}
{counter name="panelFieldCount"}

{if strval($fields.leydata_c.value) == "1" || strval($fields.leydata_c.value) == "yes" || strval($fields.leydata_c.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.leydata_c.name}" id="{$fields.leydata_c.name}" value="$fields.leydata_c.value" disabled="true" {$checked}>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.numeroformulario_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NUMEROFORMULARIO' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.numeroformulario_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.numeroformulario_c.value) <= 0}
{assign var="value" value=$fields.numeroformulario_c.default_value }
{else}
{assign var="value" value=$fields.numeroformulario_c.value }
{/if} 
<span class="sugar_field" id="{$fields.numeroformulario_c.name}">{$fields.numeroformulario_c.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(1, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_ACCOUNT_INFORMATION").style.display='none';</script>
{/if}
<div id='detailpanel_2' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_PANEL_ADVANCED' module='Accounts'}
<script>
document.getElementById('detailpanel_2').className += ' expanded';
</script>
</h4>
<table id='LBL_PANEL_ADVANCED' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.tipocobertura_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TIPOCOBERTURA' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.tipocobertura_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.tipocobertura_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.tipocobertura_c.name}" value="{ $fields.tipocobertura_c.options }">
{ $fields.tipocobertura_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.tipocobertura_c.name}" value="{ $fields.tipocobertura_c.value }">
{ $fields.tipocobertura_c.options[$fields.tipocobertura_c.value]}
{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.epsactual_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_EPSACTUAL' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.epsactual_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.eps_eps_id_c.value)}
{capture assign="detail_url"}index.php?module=EPS_EPS&action=DetailView&record={$fields.eps_eps_id_c.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="eps_eps_id_c" class="sugar_field" data-id-value="{$fields.eps_eps_id_c.value}">{$fields.epsactual_c.value}</span>
{if !empty($fields.eps_eps_id_c.value)}</a>{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.ipsactual_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_IPSACTUAL' module='Accounts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.ipsactual_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.ips_ips_id_c.value)}
{capture assign="detail_url"}index.php?module=IPS_IPS&action=DetailView&record={$fields.ips_ips_id_c.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="ips_ips_id_c" class="sugar_field" data-id-value="{$fields.ips_ips_id_c.value}">{$fields.ipsactual_c.value}</span>
{if !empty($fields.ips_ips_id_c.value)}</a>{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(2, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_PANEL_ADVANCED").style.display='none';</script>
{/if}
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>