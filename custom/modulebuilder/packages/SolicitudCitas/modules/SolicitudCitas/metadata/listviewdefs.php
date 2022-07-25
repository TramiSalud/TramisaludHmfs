<?php
$module_name = 'solci_SolicitudCitas';
$listViewDefs [$module_name] = 
array (
  'FECHASOLICITUD' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_FECHASOLICITUD',
    'width' => '10%',
    'default' => true,
  ),
  'FECHACENREGULADOR' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_FECHACENREGULADOR',
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
  'ESPECIALISTA' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ESPECIALISTA',
    'id' => 'ESP_ESPECIALISTA_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
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
  'DIAGNOSTICO' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_DIAGNOSTICO',
    'id' => 'CIE_CIE10_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'CUP' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CUP ',
    'id' => 'GBICU_CUPS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
);
?>
