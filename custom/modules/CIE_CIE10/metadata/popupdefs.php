<?php
$popupMeta = array (
    'moduleMain' => 'CIE_CIE10',
    'varName' => 'CIE_CIE10',
    'orderBy' => 'cie_cie10.name',
    'whereClauses' => array (
  'name' => 'cie_cie10.name',
  'genero' => 'cie_cie10.genero',
  'estado' => 'cie_cie10.estado',
  'description' => 'cie_cie10.description',
),
    'searchInputs' => array (
  1 => 'name',
  6 => 'genero',
  7 => 'estado',
  8 => 'description',
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
  'genero' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_GENERO',
    'width' => '10%',
    'name' => 'genero',
  ),
  'estado' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'name' => 'estado',
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
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
  ),
  'GENERO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_GENERO',
    'width' => '10%',
    'name' => 'genero',
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
