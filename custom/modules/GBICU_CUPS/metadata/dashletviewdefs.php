<?php
$dashletData['GBICU_CUPSDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'description' => 
  array (
    'default' => '',
  ),
  'estadocups' => 
  array (
    'default' => '',
  ),
  'codmp_c' => 
  array (
    'default' => '',
  ),
  'codsoat_c' => 
  array (
    'default' => '',
  ),
  'codiss_c' => 
  array (
    'default' => '',
  ),
  'assigned_user_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['GBICU_CUPSDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '20%',
    'default' => true,
    'name' => 'description',
  ),
  'estadocups' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADOCUPS',
    'width' => '10%',
    'name' => 'estadocups',
  ),
  'codmp_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CODMP',
    'width' => '10%',
  ),
  'codsoat_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CODSOAT',
    'width' => '10%',
  ),
  'codiss_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CODISS',
    'width' => '10%',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
);
