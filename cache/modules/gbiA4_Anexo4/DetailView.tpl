

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
<div class="action_buttons">{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='gbiA4_Anexo4'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if}  {if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='gbiA4_Anexo4'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form);" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if}  <input title="GenerarPDF" type="submit" name="button" value="Generar PDF Anexo 4" onClick="window.open('index.php?module=gbiA4_Anexo4&action=GenerarPdf&record={$fields.id.value}')" ;/> {if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=gbiA4_Anexo4", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}<div class="clear"></div></div>
</div>
</td>
<td align="right" width="20%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="gbiA4_Anexo4_detailview_tabs"
>
<div >
<div id='detailpanel_1' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table id='DEFAULT' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='gbiA4_Anexo4'}{/capture}
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
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.fecha_recibida_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_FECHA_RECIBIDA' module='gbiA4_Anexo4'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.fecha_recibida_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.fecha_recibida_c.value) <= 0}
{assign var="value" value=$fields.fecha_recibida_c.default_value }
{else}
{assign var="value" value=$fields.fecha_recibida_c.value }
{/if} 
<span class="sugar_field" id="{$fields.fecha_recibida_c.name}">{$fields.fecha_recibida_c.value}</span>
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
{if !$fields.gbian_anexo2_gbia4_anexo4_1_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_GBIAN_ANEXO2_GBIA4_ANEXO4_1_FROM_GBIAN_ANEXO2_TITLE' module='gbiA4_Anexo4'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.gbian_anexo2_gbia4_anexo4_1_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.gbian_anexo2_gbia4_anexo4_1gbian_anexo2_ida.value)}
{capture assign="detail_url"}index.php?module=gbian_Anexo2&action=DetailView&record={$fields.gbian_anexo2_gbia4_anexo4_1gbian_anexo2_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="gbian_anexo2_gbia4_anexo4_1gbian_anexo2_ida" class="sugar_field" data-id-value="{$fields.gbian_anexo2_gbia4_anexo4_1gbian_anexo2_ida.value}">{$fields.gbian_anexo2_gbia4_anexo4_1_name.value}</span>
{if !empty($fields.gbian_anexo2_gbia4_anexo4_1gbian_anexo2_ida.value)}</a>{/if}
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
{if !$fields.gbia4_anexo4_gbia3_anexo3_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_GBIA4_ANEXO4_GBIA3_ANEXO3_FROM_GBIA3_ANEXO3_TITLE' module='gbiA4_Anexo4'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.gbia4_anexo4_gbia3_anexo3_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida.value)}
{capture assign="detail_url"}index.php?module=GBIA3_ANEXO3&action=DetailView&record={$fields.gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida" class="sugar_field" data-id-value="{$fields.gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida.value}">{$fields.gbia4_anexo4_gbia3_anexo3_name.value}</span>
{if !empty($fields.gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida.value)}</a>{/if}
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
{if !$fields.date_entered.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_ENTERED' module='gbiA4_Anexo4'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.date_entered.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.date_entered.value) <= 0}
{assign var="value" value=$fields.date_entered.default_value }
{else}
{assign var="value" value=$fields.date_entered.value }
{/if}
<span class="sugar_field" id="{$fields.date_entered.name}">{$value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.date_modified.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_MODIFIED' module='gbiA4_Anexo4'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.date_modified.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.date_modified.value) <= 0}
{assign var="value" value=$fields.date_modified.default_value }
{else}
{assign var="value" value=$fields.date_modified.value }
{/if}
<span class="sugar_field" id="{$fields.date_modified.name}">{$value}</span>
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
{if !$fields.created_by_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CREATED' module='gbiA4_Anexo4'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.created_by_name.hidden}
{counter name="panelFieldCount"}

<span id="created_by" class="sugar_field" data-id-value="{$fields.created_by.value}">{$fields.created_by_name.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.modified_by_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_MODIFIED_NAME' module='gbiA4_Anexo4'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.modified_by_name.hidden}
{counter name="panelFieldCount"}

<span id="modified_user_id" class="sugar_field" data-id-value="{$fields.modified_user_id.value}">{$fields.modified_by_name.value}</span>
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
{if !$fields.accounts_gbia4_anexo4_1_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ACCOUNTS_GBIA4_ANEXO4_1_FROM_ACCOUNTS_TITLE' module='gbiA4_Anexo4'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.accounts_gbia4_anexo4_1_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.accounts_gbia4_anexo4_1accounts_ida.value)}
{capture assign="detail_url"}index.php?module=Accounts&action=DetailView&record={$fields.accounts_gbia4_anexo4_1accounts_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="accounts_gbia4_anexo4_1accounts_ida" class="sugar_field" data-id-value="{$fields.accounts_gbia4_anexo4_1accounts_ida.value}">{$fields.accounts_gbia4_anexo4_1_name.value}</span>
{if !empty($fields.accounts_gbia4_anexo4_1accounts_ida.value)}</a>{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
<div id='detailpanel_2' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL4' module='gbiA4_Anexo4'}
<script>
document.getElementById('detailpanel_2').className += ' expanded';
</script>
</h4>
<table id='LBL_EDITVIEW_PANEL4' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.prestador_servicio.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PRESTADOR_SERVICIO' module='gbiA4_Anexo4'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.prestador_servicio.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.ips_ips_id_c.value)}
{capture assign="detail_url"}index.php?module=IPS_IPS&action=DetailView&record={$fields.ips_ips_id_c.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="ips_ips_id_c" class="sugar_field" data-id-value="{$fields.ips_ips_id_c.value}">{$fields.prestador_servicio.value}</span>
{if !empty($fields.ips_ips_id_c.value)}</a>{/if}
{/if}
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
<script>document.getElementById("LBL_EDITVIEW_PANEL4").style.display='none';</script>
{/if}
<div id='detailpanel_3' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(3);">
<img border="0" id="detailpanel_3_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(3);">
<img border="0" id="detailpanel_3_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL1' module='gbiA4_Anexo4'}
<script>
document.getElementById('detailpanel_3').className += ' expanded';
</script>
</h4>
<table id='LBL_EDITVIEW_PANEL1' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.porcentaje_servicio.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PORCENTAJE_SERVICIO' module='gbiA4_Anexo4'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.porcentaje_servicio.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.porcentaje_servicio.name}">
{sugar_number_format var=$fields.porcentaje_servicio.value precision=2 }
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.semanas_afiliacion.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEMANAS_AFILIACION' module='gbiA4_Anexo4'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.semanas_afiliacion.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.semanas_afiliacion.value) <= 0}
{assign var="value" value=$fields.semanas_afiliacion.default_value }
{else}
{assign var="value" value=$fields.semanas_afiliacion.value }
{/if} 
<span class="sugar_field" id="{$fields.semanas_afiliacion.name}">{$fields.semanas_afiliacion.value}</span>
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
{if !$fields.reclamo_tiquete.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_RECLAMO_TIQUETE' module='gbiA4_Anexo4'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.reclamo_tiquete.hidden}
{counter name="panelFieldCount"}

{if strval($fields.reclamo_tiquete.value) == "1" || strval($fields.reclamo_tiquete.value) == "yes" || strval($fields.reclamo_tiquete.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.reclamo_tiquete.name}" id="{$fields.reclamo_tiquete.name}" value="$fields.reclamo_tiquete.value" disabled="true" {$checked}>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(3, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL1").style.display='none';</script>
{/if}
<div id='detailpanel_4' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(4);">
<img border="0" id="detailpanel_4_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(4);">
<img border="0" id="detailpanel_4_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL2' module='gbiA4_Anexo4'}
<script>
document.getElementById('detailpanel_4').className += ' expanded';
</script>
</h4>
<table id='LBL_EDITVIEW_PANEL2' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.concepto.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CONCEPTO' module='gbiA4_Anexo4'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.concepto.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.concepto.options)}
<input type="hidden" class="sugar_field" id="{$fields.concepto.name}" value="{ $fields.concepto.options }">
{ $fields.concepto.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.concepto.name}" value="{ $fields.concepto.value }">
{ $fields.concepto.options[$fields.concepto.value]}
{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.valor_pesos.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_VALOR_PESOS' module='gbiA4_Anexo4'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.valor_pesos.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.valor_pesos.name}'>
{sugar_number_format var=$fields.valor_pesos.value }
</span>
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
{if !$fields.porcentaje.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PORCENTAJE' module='gbiA4_Anexo4'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.porcentaje.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.porcentaje.name}">
{sugar_number_format var=$fields.porcentaje.value precision=2 }
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.maximo_valor.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_MAXIMO_VALOR' module='gbiA4_Anexo4'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.maximo_valor.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.maximo_valor.name}'>
{sugar_number_format var=$fields.maximo_valor.value }
</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(4, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL2").style.display='none';</script>
{/if}
<div id='detailpanel_5' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(5);">
<img border="0" id="detailpanel_5_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(5);">
<img border="0" id="detailpanel_5_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL3' module='gbiA4_Anexo4'}
<script>
document.getElementById('detailpanel_5').className += ' expanded';
</script>
</h4>
<table id='LBL_EDITVIEW_PANEL3' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.nombquienautoriza_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NOMBQUIENAUTORIZA' module='gbiA4_Anexo4'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.nombquienautoriza_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.nombquienautoriza_c.value) <= 0}
{assign var="value" value=$fields.nombquienautoriza_c.default_value }
{else}
{assign var="value" value=$fields.nombquienautoriza_c.value }
{/if} 
<span class="sugar_field" id="{$fields.nombquienautoriza_c.name}">{$fields.nombquienautoriza_c.value}</span>
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
{if !$fields.indicativoquienautoriza_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_INDICATIVOQUIENAUTORIZA' module='gbiA4_Anexo4'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.indicativoquienautoriza_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.indicativoquienautoriza_c.value) <= 0}
{assign var="value" value=$fields.indicativoquienautoriza_c.default_value }
{else}
{assign var="value" value=$fields.indicativoquienautoriza_c.value }
{/if} 
<span class="sugar_field" id="{$fields.indicativoquienautoriza_c.name}">{$fields.indicativoquienautoriza_c.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.cargoquienautoriza_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CARGOQUIENAUTORIZA' module='gbiA4_Anexo4'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cargoquienautoriza_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cargoquienautoriza_c.value) <= 0}
{assign var="value" value=$fields.cargoquienautoriza_c.default_value }
{else}
{assign var="value" value=$fields.cargoquienautoriza_c.value }
{/if} 
<span class="sugar_field" id="{$fields.cargoquienautoriza_c.name}">{$fields.cargoquienautoriza_c.value}</span>
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
{if !$fields.numeroquienautoriza_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NUMEROQUIENAUTORIZA' module='gbiA4_Anexo4'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  class="phone">
{if !$fields.numeroquienautoriza_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.numeroquienautoriza_c.value)}
{assign var="phone_value" value=$fields.numeroquienautoriza_c.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.celquienautoriza_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CELQUIENAUTORIZA' module='gbiA4_Anexo4'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  class="phone">
{if !$fields.celquienautoriza_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.celquienautoriza_c.value)}
{assign var="phone_value" value=$fields.celquienautoriza_c.value }
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
{if !$fields.extensionquienautoriza_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_EXTENSIONQUIENAUTORIZA' module='gbiA4_Anexo4'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.extensionquienautoriza_c.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.extensionquienautoriza_c.name}">
{sugar_number_format precision=0 var=$fields.extensionquienautoriza_c.value}
</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(5, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL3").style.display='none';</script>
{/if}
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>