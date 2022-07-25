<?php
$module_name = 'DEP_Departamentos';
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
