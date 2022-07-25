<?php
$popupMeta = array (
    'moduleMain' => 'AUT_AutorizacionesTelefonicas',
    'varName' => 'AUT_AutorizacionesTelefonicas',
    'orderBy' => 'aut_autorizacionestelefonicas.name',
    'whereClauses' => array (
  'name' => 'aut_autorizacionestelefonicas.name',
  'eps' => 'aut_autorizacionestelefonicas.eps',
  'paciente' => 'aut_autorizacionestelefonicas.paciente',
  'assigned_user_name' => 'aut_autorizacionestelefonicas.assigned_user_name',
  'autorizacionnro' => 'aut_autorizacionestelefonicas.autorizacionnro',
  'quienautoriza_c' => 'aut_autorizacionestelefonicas_cstm.quienautoriza_c',
  'fechaingreso' => 'aut_autorizacionestelefonicas.fechaingreso',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'eps',
  5 => 'paciente',
  6 => 'assigned_user_name',
  8 => 'autorizacionnro',
  9 => 'quienautoriza_c',
  10 => 'fechaingreso',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
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
    'name' => 'paciente',
  ),
  'autorizacionnro' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_AUTORIZACIONNRO',
    'width' => '10%',
    'name' => 'autorizacionnro',
  ),
  'quienautoriza_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_QUIENAUTORIZA',
    'width' => '10%',
    'name' => 'quienautoriza_c',
  ),
  'fechaingreso' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHAINGRESO',
    'width' => '10%',
    'name' => 'fechaingreso',
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'name' => 'assigned_user_name',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
  ),
  'EPS' => 
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
  'PACIENTE' => 
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
  'AUTORIZACIONNRO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_AUTORIZACIONNRO',
    'width' => '10%',
    'default' => true,
    'name' => 'autorizacionnro',
  ),
  'QUIENAUTORIZA_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_QUIENAUTORIZA',
    'width' => '10%',
  ),
  'FECHAINGRESO' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHAINGRESO',
    'width' => '10%',
    'default' => true,
    'name' => 'fechaingreso',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);