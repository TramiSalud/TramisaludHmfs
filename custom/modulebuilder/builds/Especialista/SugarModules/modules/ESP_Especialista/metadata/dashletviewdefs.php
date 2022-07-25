<?php
$dashletData['ESP_EspecialistaDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'nombres' => 
  array (
    'default' => '',
  ),
  'apellidos' => 
  array (
    'default' => '',
  ),
  'cargo' => 
  array (
    'default' => '',
  ),
  'registromedico' => 
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
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['ESP_EspecialistaDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'nombres' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NOMBRES',
    'width' => '10%',
    'default' => true,
    'name' => 'nombres',
  ),
  'apellidos' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_APELLIDOS',
    'width' => '10%',
    'default' => true,
    'name' => 'apellidos',
  ),
  'cargo' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CARGO',
    'width' => '10%',
    'name' => 'cargo',
  ),
  'telppal' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_TELPPAL',
    'width' => '10%',
    'default' => true,
    'name' => 'telppal',
  ),
  'correo' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CORREO',
    'width' => '10%',
    'default' => true,
  ),
  'registromedico' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REGISTROMEDICO',
    'width' => '10%',
    'default' => true,
    'name' => 'registromedico',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
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
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
