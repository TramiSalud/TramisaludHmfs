<?php
$popupMeta = array (
    'moduleMain' => 'COM_Comunas',
    'varName' => 'COM_Comunas',
    'orderBy' => 'com_comunas.name',
    'whereClauses' => array (
  'name' => 'com_comunas.name',
  'description' => 'com_comunas.description',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'description',
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
