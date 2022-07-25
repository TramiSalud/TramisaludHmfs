<?php
$module_name = 'GBIA3_ANEXO3';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ACCOUNTS_GBIA3_ANEXO3_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_GBIA3_ANEXO3_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_GBIA3_ANEXO3_1ACCOUNTS_IDA',
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
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'CORREO_ENVIADO_C' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_CORREO_ENVIADO',
    'width' => '10%',
  ),
  'REBOTADO_C' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_REBOTADO',
    'width' => '10%',
  ),
  'NUMERO_REINTENTOS_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_NUMERO_REINTENTOS',
    'width' => '10%',
  ),
  'FECHA_ENVIO_CORREO_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'label' => 'LBL_FECHA_ENVIO_CORREO',
    'width' => '10%',
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
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'ESPECIALIST_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ESPECIALIST',
    'id' => 'ESP_ESPECIALISTA_ID_C',
    'link' => true,
    'width' => '10%',
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
