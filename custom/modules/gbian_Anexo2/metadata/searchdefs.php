<?php
$module_name = 'gbian_Anexo2';
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
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
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
    ),
    'advanced_search' => 
    array (
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'eps' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_EPS',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'EPS_EPS_ID_C',
        'name' => 'eps',
      ),
      'gbian_anexo2_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_GBIAN_ANEXO2_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        'id' => 'GBIAN_ANEXO2_ACCOUNTSACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'gbian_anexo2_accounts_name',
      ),
      'correo_enviado_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_CORREO_ENVIADO',
        'width' => '10%',
        'name' => 'correo_enviado_c',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
      ),
      'numero_reintentos_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NUMERO_REINTENTOS',
        'width' => '10%',
        'name' => 'numero_reintentos_c',
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
