<?php
$module_name = 'gbi_Anexo9';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'accounts_gbi_anexo9_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_GBI_ANEXO9_1_FROM_ACCOUNTS_TITLE',
        'id' => 'ACCOUNTS_GBI_ANEXO9_1ACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'accounts_gbi_anexo9_1_name',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'accounts_gbi_anexo9_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_GBI_ANEXO9_1_FROM_ACCOUNTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'ACCOUNTS_GBI_ANEXO9_1ACCOUNTS_IDA',
        'name' => 'accounts_gbi_anexo9_1_name',
      ),
      'eps' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_EPS',
        'id' => 'EPS_EPS_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'eps',
      ),
      'prestador' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PRESTADOR',
        'id' => 'IPS_IPS_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'prestador',
      ),
      'especialista' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_ESPECIALISTA',
        'id' => 'ESP_ESPECIALISTA_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'especialista',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
