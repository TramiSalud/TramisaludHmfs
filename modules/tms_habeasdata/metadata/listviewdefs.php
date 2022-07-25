<?php
$module_name = 'tms_habeasdata';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CEDULA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CEDULA',
    'width' => '10%',
    'default' => true,
  ),
  'NOMBRE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NOMBRE',
    'width' => '10%',
    'default' => true,
  ),
  'ESTADO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
  ),
  'FECHA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA',
    'width' => '10%',
    'default' => true,
  ),
  'TELEFONO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TELEFONO',
    'width' => '10%',
    'default' => true,
  ),
  'DIRECCION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DIRECCION',
    'width' => '10%',
    'default' => true,
  ),
  'CORREO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CORREO',
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
);
?>
