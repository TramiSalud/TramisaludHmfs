<?php
$popupMeta = array (
    'moduleMain' => 'GBISO_SOAT',
    'varName' => 'GBISO_SOAT',
    'orderBy' => 'gbiso_soat.name',
    'whereClauses' => array (
  'name' => 'gbiso_soat.name',
  'estadosoat' => 'gbiso_soat.estadosoat',
  'grupoquirurgico' => 'gbiso_soat.grupoquirurgico',
  'assigned_user_name' => 'gbiso_soat.assigned_user_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'estadosoat',
  6 => 'grupoquirurgico',
  8 => 'assigned_user_name',
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
  'estadosoat' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADOSOAT',
    'width' => '10%',
    'name' => 'estadosoat',
  ),
  'grupoquirurgico' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_GRUPOQUIRURGICO',
    'width' => '10%',
    'name' => 'grupoquirurgico',
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'name' => 'assigned_user_name',
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
  'ESTADOSOAT' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADOSOAT',
    'width' => '10%',
    'name' => 'estadosoat',
  ),
  'GRUPOQUIRURGICO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_GRUPOQUIRURGICO',
    'width' => '10%',
    'default' => true,
    'name' => 'grupoquirurgico',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
