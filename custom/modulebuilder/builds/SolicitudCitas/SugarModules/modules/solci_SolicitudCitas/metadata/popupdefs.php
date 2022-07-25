<?php
$popupMeta = array (
    'moduleMain' => 'solci_SolicitudCitas',
    'varName' => 'solci_SolicitudCitas',
    'orderBy' => 'solci_solicitudcitas.name',
    'whereClauses' => array (
  'paciente' => 'solci_solicitudcitas.paciente',
  'eps' => 'solci_solicitudcitas.eps',
  'especialista' => 'solci_solicitudcitas.especialista',
),
    'searchInputs' => array (
  4 => 'paciente',
  5 => 'eps',
  6 => 'especialista',
),
    'searchdefs' => array (
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
  'especialista' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ESPECIALISTA',
    'id' => 'ESP_ESPECIALISTA_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'especialista',
  ),
),
    'listviewdefs' => array (
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
),
);
