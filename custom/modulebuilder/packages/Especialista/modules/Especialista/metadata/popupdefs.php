<?php
$popupMeta = array (
    'moduleMain' => 'ESP_Especialista',
    'varName' => 'ESP_Especialista',
    'orderBy' => 'esp_especialista.name',
    'whereClauses' => array (
  'name' => 'esp_especialista.name',
  'nombres' => 'esp_especialista.nombres',
  'apellidos' => 'esp_especialista.apellidos',
  'cargo' => 'esp_especialista.cargo',
  'registromedico' => 'esp_especialista.registromedico',
  'municipio' => 'esp_especialista.municipio',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'nombres',
  5 => 'apellidos',
  6 => 'cargo',
  7 => 'registromedico',
  8 => 'municipio',
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
  'nombres' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NOMBRES',
    'width' => '10%',
    'name' => 'nombres',
  ),
  'apellidos' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_APELLIDOS',
    'width' => '10%',
    'name' => 'apellidos',
  ),
  'cargo' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CARGO',
    'width' => '10%',
    'name' => 'cargo',
  ),
  'registromedico' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REGISTROMEDICO',
    'width' => '10%',
    'name' => 'registromedico',
  ),
  'municipio' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_MUNICIPIO',
    'id' => 'MUN_MUNICIPIO_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'municipio',
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
  'NOMBRES' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NOMBRES',
    'width' => '10%',
    'default' => true,
    'name' => 'nombres',
  ),
  'APELLIDOS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_APELLIDOS',
    'width' => '10%',
    'default' => true,
    'name' => 'apellidos',
  ),
  'CARGO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CARGO',
    'width' => '10%',
    'name' => 'cargo',
  ),
  'TELPPAL' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_TELPPAL',
    'width' => '10%',
    'default' => true,
    'name' => 'telppal',
  ),
  'CORREO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CORREO',
    'width' => '10%',
    'default' => true,
    'name' => 'correo',
  ),
  'REGISTROMEDICO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REGISTROMEDICO',
    'width' => '10%',
    'default' => true,
    'name' => 'registromedico',
  ),
),
);
