<?php
$dashletData['solci_SolicitudCitasDashlet']['searchFields'] = array (
  'fechasolicitud' => 
  array (
    'default' => '',
  ),
  'paciente' => 
  array (
    'default' => '',
  ),
  'especialista' => 
  array (
    'default' => '',
  ),
  'eps' => 
  array (
    'default' => '',
  ),
);
$dashletData['solci_SolicitudCitasDashlet']['columns'] = array (
  'fechasolicitud' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_FECHASOLICITUD',
    'width' => '10%',
    'default' => true,
  ),
  'fechacenregulador' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_FECHACENREGULADOR',
    'width' => '10%',
    'default' => true,
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
  ),
  'especialista' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ESPECIALISTA',
    'id' => 'ESP_ESPECIALISTA_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
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
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => false,
    'name' => 'name',
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
