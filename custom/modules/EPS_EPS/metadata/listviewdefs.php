<?php
$module_name = 'EPS_EPS';
$listViewDefs [$module_name] = 
array (
  'ODIGOEPS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ODIGOEPS',
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
  'EMAILANEXO1' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAILANEXO1',
    'width' => '10%',
    'default' => true,
  ),
  'EMAILANEXO2' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAILANEXO2',
    'width' => '10%',
    'default' => true,
  ),
  'EMAILANEXO3' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAILANEXO3',
    'width' => '10%',
    'default' => true,
  ),
  'EMAILANEXO9_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_EMAILANEXO9',
    'width' => '10%',
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
