<?php
$module_name = 'AUT_AutorizacionesTelefonicas';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
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
  ),
  'NRODOC' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NRODOC',
    'width' => '10%',
    'default' => true,
  ),
  'AUTORIZACIONNRO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_AUTORIZACIONNRO',
    'width' => '10%',
    'default' => true,
  ),
  'QUIENAUTORIZA_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_QUIENAUTORIZA',
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
  'FECHAINGRESO' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHAINGRESO',
    'width' => '10%',
    'default' => true,
  ),
  'GBIAN_ANEXO2_AUT_AUTORIZACIONESTELEFONICAS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_GBIAN_ANEXO2_AUT_AUTORIZACIONESTELEFONICAS_1_FROM_GBIAN_ANEXO2_TITLE',
    'id' => 'GBIAN_ANEXO2_AUT_AUTORIZACIONESTELEFONICAS_1GBIAN_ANEXO2_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'GBIA3_ANEXO3_AUT_AUTORIZACIONESTELEFONICAS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_GBIA3_ANEXO3_AUT_AUTORIZACIONESTELEFONICAS_1_FROM_GBIA3_ANEXO3_TITLE',
    'id' => 'GBIA3_ANEXO3_AUT_AUTORIZACIONESTELEFONICAS_1GBIA3_ANEXO3_IDA',
    'width' => '10%',
    'default' => true,
  ),
);
?>
