<?php
$module_name = 'GBIA3_manejo_integ';
$listViewDefs [$module_name] = 
array (
  'CANTIDADCUPS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CANTIDADCUPS',
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
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
);
?>
