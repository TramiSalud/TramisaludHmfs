<?php
$popupMeta = array (
    'moduleMain' => 'GBIA3_ManejoIntegral',
    'varName' => 'GBIA3_ManejoIntegral',
    'orderBy' => 'gbia3_manejointegral.name',
    'whereClauses' => array (
  'codigocups' => 'gbia3_manejointegral.codigocups',
  'cantidadcups' => 'gbia3_manejointegral.cantidadcups',
  'gbi_detalle_c' => 'gbia3_manejointegral_cstm.gbi_detalle_c',
),
    'searchInputs' => array (
  4 => 'codigocups',
  5 => 'cantidadcups',
  7 => 'gbi_detalle_c',
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
  'gbi_detalle_c' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_GBI_DETALLE',
    'sortable' => false,
    'width' => '10%',
    'name' => 'gbi_detalle_c',
  ),
),
    'listviewdefs' => array (
  'CODIGOCUPS' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CODIGOCUPS',
    'id' => 'GBICU_CUPS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'codigocups',
  ),
  'CANTIDADCUPS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CANTIDADCUPS',
    'width' => '10%',
    'default' => true,
    'name' => 'cantidadcups',
  ),
  'GBI_DETALLE_C' => 
  array (
    'type' => 'text',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_GBI_DETALLE',
    'sortable' => false,
    'width' => '10%',
  ),
),
);
