<?php
$popupMeta = array (
    'moduleMain' => 'GBIA3_ManejoIntegral',
    'varName' => 'GBIA3_ManejoIntegral',
    'orderBy' => 'gbia3_manejointegral.name',
    'whereClauses' => array (
  'codigocups' => 'gbia3_manejointegral.codigocups',
  'cantidadcups' => 'gbia3_manejointegral.cantidadcups',
),
    'searchInputs' => array (
  4 => 'codigocups',
  5 => 'cantidadcups',
),
    'searchdefs' => array (
  'codigocups' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CODIGOCUPS',
    'id' => 'GBICU_CUPS_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'codigocups',
  ),
  'cantidadcups' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CANTIDADCUPS',
    'width' => '10%',
    'name' => 'cantidadcups',
  ),
),
    'listviewdefs' => array (
  'CANTIDADCUPS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CANTIDADCUPS',
    'width' => '10%',
    'default' => true,
    'name' => 'cantidadcups',
  ),
),
);
