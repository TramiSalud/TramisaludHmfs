<?php
$popupMeta = array (
    'moduleMain' => 'ISS_ISS',
    'varName' => 'ISS_ISS',
    'orderBy' => 'iss_iss.name',
    'whereClauses' => array (
  'name' => 'iss_iss.name',
  'referencia' => 'iss_iss.referencia',
  'description' => 'iss_iss.description',
  'uvr' => 'iss_iss.uvr',
  'estado' => 'iss_iss.estado',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'referencia',
  5 => 'description',
  6 => 'uvr',
  7 => 'estado',
),
    'searchdefs' => array (
  'referencia' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REFERENCIA',
    'width' => '10%',
    'name' => 'referencia',
  ),
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'estado' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'name' => 'estado',
  ),
  'uvr' => 
  array (
    'type' => 'int',
    'label' => 'LBL_UVR',
    'width' => '10%',
    'name' => 'uvr',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'name' => 'description',
  ),
),
    'listviewdefs' => array (
  'REFERENCIA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REFERENCIA',
    'width' => '10%',
    'default' => true,
    'name' => 'referencia',
  ),
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
  ),
  'ESTADO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'name' => 'estado',
  ),
  'UVR' => 
  array (
    'type' => 'int',
    'label' => 'LBL_UVR',
    'width' => '10%',
    'default' => true,
    'name' => 'uvr',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description',
  ),
),
);
