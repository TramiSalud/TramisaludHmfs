<?php
$popupMeta = array (
    'moduleMain' => 'GUI_Guias',
    'varName' => 'GUI_Guias',
    'orderBy' => 'gui_guias.name',
    'whereClauses' => array (
  'name' => 'gui_guias.name',
  'nombreguia' => 'gui_guias.nombreguia',
  'numerodocumento' => 'gui_guias.numerodocumento',
  'estado' => 'gui_guias.estado',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'nombreguia',
  5 => 'numerodocumento',
  6 => 'estado',
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
  'nombreguia' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NOMBREGUIA',
    'width' => '10%',
    'name' => 'nombreguia',
  ),
  'numerodocumento' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NUMERODOCUMENTO',
    'width' => '10%',
    'name' => 'numerodocumento',
  ),
  'estado' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'name' => 'estado',
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
  'NOMBREGUIA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NOMBREGUIA',
    'width' => '10%',
    'default' => true,
  ),
  'NUMERODOCUMENTO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NUMERODOCUMENTO',
    'width' => '10%',
    'default' => true,
  ),
  'ESTADO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
  ),
),
);
