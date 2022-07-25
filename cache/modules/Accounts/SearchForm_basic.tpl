
<input type='hidden' id="orderByInput" name='orderBy' value=''/>
<input type='hidden' id="sortOrder" name='sortOrder' value=''/>
{if !isset($templateMeta.maxColumnsBasic)}
	{assign var="basicMaxColumns" value=$templateMeta.maxColumns}
{else}
    {assign var="basicMaxColumns" value=$templateMeta.maxColumnsBasic}
{/if}
<script>
{literal}
	$(function() {
	var $dialog = $('<div></div>')
		.html(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'))
		.dialog({
			autoOpen: false,
			title: SUGAR.language.get('app_strings', 'LBL_HELP'),
			width: 700
		});
		
		$('#filterHelp').click(function() {
		$dialog.dialog('open');
		// prevent the default action, e.g., following a link
	});
	
	});
{/literal}
</script>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
      
      
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='1%' >
			<label for='name_basic'> {sugar_translate label='LBL_NAME' module='Accounts'}
		</td>

	
	<td  nowrap="nowrap" width='1%'>
			
{if strlen($fields.name_basic.value) <= 0}
{assign var="value" value=$fields.name_basic.default_value }
{else}
{assign var="value" value=$fields.name_basic.value }
{/if}  
<input type='text' name='{$fields.name_basic.name}' 
    id='{$fields.name_basic.name}' size='30' 
    maxlength='150' 
    value='{$value}' title=''      accesskey='9'  >
   	   	</td>
    
      
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		<label for='primernombre_c_basic' >{sugar_translate label='LBL_PRIMERNOMBRE' module='Accounts'}</label>
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
{if strlen($fields.primernombre_c_basic.value) <= 0}
{assign var="value" value=$fields.primernombre_c_basic.default_value }
{else}
{assign var="value" value=$fields.primernombre_c_basic.value }
{/if}  
<input type='text' name='{$fields.primernombre_c_basic.name}' 
    id='{$fields.primernombre_c_basic.name}' size='30' 
    maxlength='40' 
    value='{$value}' title=''      >
   	   	</td>
    
      
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		<label for='segundonombre_c_basic' >{sugar_translate label='LBL_SEGUNDONOMBRE' module='Accounts'}</label>
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
{if strlen($fields.segundonombre_c_basic.value) <= 0}
{assign var="value" value=$fields.segundonombre_c_basic.default_value }
{else}
{assign var="value" value=$fields.segundonombre_c_basic.value }
{/if}  
<input type='text' name='{$fields.segundonombre_c_basic.name}' 
    id='{$fields.segundonombre_c_basic.name}' size='30' 
    maxlength='40' 
    value='{$value}' title=''      >
   	   	</td>
    
      
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		<label for='primerapellido_c_basic' >{sugar_translate label='LBL_PRIMERAPELLIDO' module='Accounts'}</label>
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
{if strlen($fields.primerapellido_c_basic.value) <= 0}
{assign var="value" value=$fields.primerapellido_c_basic.default_value }
{else}
{assign var="value" value=$fields.primerapellido_c_basic.value }
{/if}  
<input type='text' name='{$fields.primerapellido_c_basic.name}' 
    id='{$fields.primerapellido_c_basic.name}' size='30' 
    maxlength='40' 
    value='{$value}' title=''      >
   	   	</td>
    
      
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		<label for='segundoapellido_c_basic' >{sugar_translate label='LBL_SEGUNDOAPELLIDO' module='Accounts'}</label>
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
{if strlen($fields.segundoapellido_c_basic.value) <= 0}
{assign var="value" value=$fields.segundoapellido_c_basic.default_value }
{else}
{assign var="value" value=$fields.segundoapellido_c_basic.value }
{/if}  
<input type='text' name='{$fields.segundoapellido_c_basic.name}' 
    id='{$fields.segundoapellido_c_basic.name}' size='30' 
    maxlength='40' 
    value='{$value}' title=''      >
   	   	</td>
    
      
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		<label for='epsactual_c_basic' >{sugar_translate label='LBL_EPSACTUAL' module='Accounts'}</label>
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<input type="text" name="{$fields.epsactual_c_basic.name}"  class="sqsEnabled"   id="{$fields.epsactual_c_basic.name}" size="" value="{$fields.epsactual_c_basic.value}" title='' autocomplete="off"  >
<input type="hidden"  id="{$fields.eps_eps_id_c_basic.name}" value="{$fields.eps_eps_id_c_basic.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.epsactual_c_basic.name}"   title="{$APP.LBL_SELECT_BUTTON_TITLE}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.epsactual_c_basic.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"search_form","field_to_name_array":{"id":"eps_eps_id_c_basic","name":"epsactual_c_basic"}}{/literal}, "single", true);'>{sugar_getimage alt=$app_strings.LBL_ID_FF_SELECT name="id-ff-select" ext=".png" other_attributes=''}</button><button type="button" name="btn_clr_{$fields.epsactual_c_basic.name}"   title="{$APP.LBL_CLEAR_BUTTON_TITLE}" class="button lastChild" onclick="this.form.{$fields.epsactual_c_basic.name}.value = ''; this.form.{$fields.eps_eps_id_c_basic.name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}">{sugar_getimage name="id-ff-clear" alt=$app_strings.LBL_ID_FF_CLEAR ext=".png" other_attributes=''}</button>
</span>

   	   	</td>
    {if $formData|@count >= $basicMaxColumns+1}
    </tr>
    <tr>
	<td colspan="{$searchTableColumnCount}">
    {else}
	<td class="sumbitButtons">
    {/if}
        <input tabindex="2" title="{$APP.LBL_SEARCH_BUTTON_TITLE}" onclick="SUGAR.savedViews.setChooser();" class="button" type="submit" name="button" value="{$APP.LBL_SEARCH_BUTTON_LABEL}" id="search_form_submit"/>&nbsp;
	    <input tabindex='2' title='{$APP.LBL_CLEAR_BUTTON_TITLE}' onclick='SUGAR.searchForm.clear_form(this.form); return false;' class='button' type='button' name='clear' id='search_form_clear' value='{$APP.LBL_CLEAR_BUTTON_LABEL}'/>
        {if $HAS_ADVANCED_SEARCH}
	    &nbsp;&nbsp;<a id="advanced_search_link" onclick="SUGAR.searchForm.searchFormSelect('{$module}|advanced_search','{$module}|basic_search')" href="javascript:void(0);" accesskey="{$APP.LBL_ADV_SEARCH_LNK_KEY}" >{$APP.LNK_ADVANCED_SEARCH}</a>
	    {/if}
    </td>
	<td class="helpIcon" width="*"><img alt="Help" border='0' id="filterHelp" src='{sugar_getimagepath file="help-dashlet.gif"}'></td>
	</tr>
</table>{literal}<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['search_form_modified_by_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_basic","modified_user_id_basic"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['search_form_created_by_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_basic","created_by_basic"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['search_form_assigned_user_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['search_form_parent_name_basic']={"form":"search_form","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["search_form_parent_name_basic","parent_id_basic"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["parent_id"],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['search_form_campaign_name_basic']={"form":"search_form","method":"query","modules":["Campaigns"],"group":"or","field_list":["name","id"],"populate_list":["campaign_id_basic","campaign_id_basic"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["campaign_id"],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['search_form_acudiente_c_basic']={"form":"search_form","method":"get_contact_array","modules":["Contacts"],"field_list":["salutation","first_name","last_name","id"],"populate_list":["acudiente_c_basic","contact_id_c_basic","contact_id_c_basic","contact_id_c_basic"],"required_list":["contact_id_c"],"group":"or","conditions":[{"name":"first_name","op":"like_custom","end":"%","value":""},{"name":"last_name","op":"like_custom","end":"%","value":""}],"order":"last_name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['search_form_barrio_c_basic']={"form":"search_form","method":"query","modules":["BAR_Barrio"],"group":"or","field_list":["name","id"],"populate_list":["barrio_c_basic","bar_barrio_id_c_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['search_form_ciudad_c_basic']={"form":"search_form","method":"query","modules":["MUN_Municipio"],"group":"or","field_list":["name","id"],"populate_list":["ciudad_c_basic","mun_municipio_id_c_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['search_form_comuna_c_basic']={"form":"search_form","method":"query","modules":["COM_Comunas"],"group":"or","field_list":["name","id"],"populate_list":["comuna_c_basic","com_comunas_id_c_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['search_form_departamento_c_basic']={"form":"search_form","method":"query","modules":["DEP_Departamentos"],"group":"or","field_list":["name","id"],"populate_list":["departamento_c_basic","dep_departamentos_id_c_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['search_form_epsactual_c_basic']={"form":"search_form","method":"query","modules":["EPS_EPS"],"group":"or","field_list":["name","id"],"populate_list":["epsactual_c_basic","eps_eps_id_c_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['search_form_ipsactual_c_basic']={"form":"search_form","method":"query","modules":["IPS_IPS"],"group":"or","field_list":["name","id"],"populate_list":["ipsactual_c_basic","ips_ips_id_c_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['search_form_municipio_c_basic']={"form":"search_form","method":"query","modules":["MUN_Municipio"],"group":"or","field_list":["name","id"],"populate_list":["municipio_c_basic","mun_municipio_id1_c_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};</script>{/literal}