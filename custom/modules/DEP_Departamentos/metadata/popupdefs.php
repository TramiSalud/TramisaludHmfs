<?php
$popupMeta = array (
    'moduleMain' => 'DEP_Departamentos',
    'varName' => 'DEP_Departamentos',
    'orderBy' => 'dep_departamentos.name',
    'whereClauses' => array (
  'name' => 'dep_departamentos.name',
  'codigodane' => 'dep_departamentos.codigodane',
  'description' => 'dep_departamentos.description',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'codigodane',
  5 => 'description',
),
    'searchdefs' => array (
  'codigodane' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CODIGODANE',
    'width' => '10%',
    'name' => 'codigodane',
  ),
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
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
  'CODIGODANE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CODIGODANE',
    'width' => '10%',
    'default' => true,
    'name' => 'codigodane',
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
