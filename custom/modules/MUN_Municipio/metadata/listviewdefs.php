<?php
$module_name = 'MUN_Municipio';
$listViewDefs [$module_name] = 
array (
  'CODIGODANE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CODIGODANE',
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
  'DEPARTAMENTO' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_DEPARTAMENTO',
    'id' => 'DEP_DEPARTAMENTOS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
);
?>
