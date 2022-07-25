<?php
$module_name = 'basa1_ANEXO1';
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
      'basa1_anexo1_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_BASA1_ANEXO1_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        'id' => 'BASA1_ANEXO1_ACCOUNTSACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'basa1_anexo1_accounts_name',
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
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'correo_enviado_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_CORREO_ENVIADO',
        'width' => '10%',
        'name' => 'correo_enviado_c',
      ),
      'numero_reintentos_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_NUMERO_REINTENTOS',
        'width' => '10%',
        'name' => 'numero_reintentos_c',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'basa1_anexo1_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_BASA1_ANEXO1_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'BASA1_ANEXO1_ACCOUNTSACCOUNTS_IDA',
        'name' => 'basa1_anexo1_accounts_name',
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
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
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
