<?php
$module_name = 'GBIHI_HistorialCorreo';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CORREO_ENVIO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CORREO_ENVIO',
    'width' => '20%',
    'default' => true,
  ),
  'FECHA_ENVIO_CORREO' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_FECHA_ENVIO_CORREO',
    'width' => '20%',
    'default' => true,
  ),
  'NUMERO_REINTENTO' => 
  array (
    'type' => 'int',
    'label' => 'LBL_NUMERO_REINTENTO',
    'width' => '20%',
    'default' => true,
  ),
  'CORREO_ENVIADO' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_CORREO_ENVIADO',
    'width' => '20%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
  ),
);
?>
