<?php
$viewdefs ['Contacts'] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
          1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
          2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
          3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
          4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
          5 => '{if !empty($smarty.request.contact_id)}<input type="hidden" name="reports_to_id" value="{$smarty.request.contact_id}">{/if}',
          6 => '{if !empty($smarty.request.contact_name)}<input type="hidden" name="report_to_name" value="{$smarty.request.contact_name}">{/if}',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'tipodocumento_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPODOCUMENTO',
          ),
          1 => 
          array (
            'name' => 'first_name',
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name" id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'last_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'apellidos_c',
            'label' => 'LBL_APELLIDOS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'telefonoprincipal_c',
            'label' => 'LBL_TELEFONOPRINCIPAL',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'telefonocelular_c',
            'label' => 'LBL_TELEFONOCELULAR',
          ),
          1 => 
          array (
            'name' => 'tipocontacto_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPOCONTACTO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'email1',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'pais_c',
            'studio' => 'visible',
            'label' => 'LBL_PAIS',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'departamento_c',
            'studio' => 'visible',
            'label' => 'LBL_DEPARTAMENTO',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'municipio_c',
            'studio' => 'visible',
            'label' => 'LBL_MUNICIPIO',
          ),
        ),
      ),
    ),
  ),
);
?>
