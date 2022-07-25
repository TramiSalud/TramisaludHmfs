<?php
$dashletData['AUT_AutorizacionesTelefonicasDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'eps' => 
  array (
    'default' => '',
  ),
  'paciente' => 
  array (
    'default' => '',
  ),
  'autorizacionnro' => 
  array (
    'default' => '',
  ),
  'quienautoriza_c' => 
  array (
    'default' => '',
  ),
  'fechaingreso' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['AUT_AutorizacionesTelefonicasDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'eps' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_EPS',
    'id' => 'EPS_EPS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'eps',
  ),
  'paciente' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PACIENTE',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'paciente',
  ),
  'autorizacionnro' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_AUTORIZACIONNRO',
    'width' => '10%',
    'default' => true,
    'name' => 'autorizacionnro',
  ),
  'quienautoriza_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_QUIENAUTORIZA',
    'width' => '10%',
  ),
  'fechaingreso' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHAINGRESO',
    'width' => '10%',
    'default' => true,
    'name' => 'fechaingreso',
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
);
