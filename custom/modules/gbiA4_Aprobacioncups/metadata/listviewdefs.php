<?php
$module_name = 'gbiA4_Aprobacioncups';
$listViewDefs [$module_name] = 
array (
  'CUPS_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CUPS',
    'id' => 'GBICU_CUPS_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'CANTIDAD_CUPS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CANTIDAD_CUPS',
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
