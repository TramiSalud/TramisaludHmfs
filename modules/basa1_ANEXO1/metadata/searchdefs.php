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
    ),
    'advanced_search' => 
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
      'fecha' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_FECHA',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha',
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