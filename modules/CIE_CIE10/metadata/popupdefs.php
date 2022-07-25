<?php
$popupMeta = array (
    'moduleMain' => 'CIE_CIE10',
    'varName' => 'CIE_CIE10',
    'orderBy' => 'cie_cie10.name',
    'whereClauses' => array (
  'name' => 'cie_cie10.name',
  'edadmaxima' => 'cie_cie10.edadmaxima',
  'edadminima' => 'cie_cie10.edadminima',
  'genero' => 'cie_cie10.genero',
  'estado' => 'cie_cie10.estado',
  'description' => 'cie_cie10.description',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'edadmaxima',
  5 => 'edadminima',
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
  'edadmaxima' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EDADMAXIMA',
    'width' => '10%',
    'name' => 'edadmaxima',
  ),
  'edadminima' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EDADMINIMA',
    'width' => '10%',
    'name' => 'edadminima',
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
  'EDADMAXIMA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EDADMAXIMA',
    'width' => '10%',
    'default' => true,
    'name' => 'edadmaxima',
  ),
  'EDADMINIMA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EDADMINIMA',
    'width' => '10%',
    'default' => true,
    'name' => 'edadminima',
  ),
  'GENERO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_GENERO',
    'width' => '10%',
  ),
  'ESTADO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
),
);
