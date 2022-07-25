<?php
$module_name = 'gbiRE_RebotesEmail';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '15%',
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
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '30%',
    'default' => true,
  ),
  'NUMEROREBOTES' => 
  array (
    'type' => 'int',
    'label' => 'LBL_NUMEROREBOTES',
    'width' => '10%',
    'default' => true,
  ),
);
?>
