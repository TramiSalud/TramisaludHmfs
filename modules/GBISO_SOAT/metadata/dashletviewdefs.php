<?php
$dashletData['GBISO_SOATDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'estadosoat' => 
  array (
    'default' => '',
  ),
  'grupoquirurgico' => 
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
  'estadosoat' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADOSOAT',
    'width' => '10%',
    'name' => 'estadosoat',
  ),
  'grupoquirurgico' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_GRUPOQUIRURGICO',
    'width' => '10%',
    'default' => true,
    'name' => 'grupoquirurgico',
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
