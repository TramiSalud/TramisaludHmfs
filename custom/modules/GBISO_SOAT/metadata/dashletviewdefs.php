<?php
$dashletData['GBISO_SOATDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'description' => 
  array (
    'default' => '',
  ),
  'grupoquirurgico' => 
  array (
    'default' => '',
  ),
  'estadosoat' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['GBISO_SOATDashlet']['columns'] = array (
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
    'width' => '10%',
    'default' => true,
    'name' => 'description',
  ),
  'grupoquirurgico' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_GRUPOQUIRURGICO',
    'width' => '10%',
    'default' => true,
    'name' => 'grupoquirurgico',
  ),
  'estadosoat' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADOSOAT',
    'width' => '10%',
    'name' => 'estadosoat',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
);
