<?php
$module_name = 'GBICU_CUPS';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '30%',
    'default' => true,
  ),
  'ESTADOCUPS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADOCUPS',
    'width' => '10%',
  ),
  'CODMP_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CODMP',
    'width' => '10%',
  ),
  'CODSOAT_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CODSOAT',
    'width' => '10%',
  ),
  'CODISS_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CODISS',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
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
);
?>
