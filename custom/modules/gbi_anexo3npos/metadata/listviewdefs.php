<?php
$module_name = 'gbi_anexo3npos';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ACCOUNTS_GBI_ANEXO3NPOS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_GBI_ANEXO3NPOS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_GBI_ANEXO3NPOS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'PRESTADOR' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PRESTADOR',
    'id' => 'IPS_IPS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'EPS' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_EPS',
    'id' => 'EPS_EPS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'ESPECIALISTA' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ESPECIALISTA',
    'id' => 'ESP_ESPECIALISTA_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
?>
