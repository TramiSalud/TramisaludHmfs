<?php
$module_name = 'IPS_IPS';
$listViewDefs [$module_name] = 
array (
  'CODIGOIPS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CODIGOIPS',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'TIPODOCUMENTO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TIPODOCUMENTO',
    'width' => '10%',
    'default' => true,
  ),
  'NRODOCUMENTO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NRODOCUMENTO',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'CONTACTOPRINCIPAL' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CONTACTOPRINCIPAL',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'ESTADO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'default' => true,
  ),
);
?>
