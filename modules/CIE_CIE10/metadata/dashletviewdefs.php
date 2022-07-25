<?php
$dashletData['CIE_CIE10Dashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'edadmaxima' => 
  array (
    'default' => '',
  ),
  'edadminima' => 
  array (
    'default' => '',
  ),
  'genero' => 
  array (
    'default' => '',
  ),
  'estado' => 
  array (
    'default' => '',
  ),
  'description' => 
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
$dashletData['CIE_CIE10Dashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'edadmaxima' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EDADMAXIMA',
    'width' => '10%',
    'default' => true,
    'name' => 'edadmaxima',
  ),
  'edadminima' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EDADMINIMA',
    'width' => '10%',
    'default' => true,
    'name' => 'edadminima',
  ),
  'genero' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_GENERO',
    'width' => '10%',
  ),
  'estado' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
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
