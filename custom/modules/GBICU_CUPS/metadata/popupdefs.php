<?php
$popupMeta = array (
    'moduleMain' => 'GBICU_CUPS',
    'varName' => 'GBICU_CUPS',
    'orderBy' => 'gbicu_cups.name',
    'whereClauses' => array (
  'name' => 'gbicu_cups.name',
  'estadocups' => 'gbicu_cups.estadocups',
  'description' => 'gbicu_cups.description',
  'codmp_c' => 'gbicu_cups_cstm.codmp_c',
  'codsoat_c' => 'gbicu_cups_cstm.codsoat_c',
  'codiss_c' => 'gbicu_cups_cstm.codiss_c',
  'gbi_grupo_c' => 'gbicu_cups_cstm.gbi_grupo_c',
  'gbi_subbrupo_c' => 'gbicu_cups_cstm.gbi_subbrupo_c',
),
    'searchInputs' => array (
  1 => 'name',
  5 => 'estadocups',
  7 => 'description',
  8 => 'codmp_c',
  9 => 'codsoat_c',
  10 => 'codiss_c',
  12 => 'gbi_grupo_c',
  13 => 'gbi_subbrupo_c',
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
  'estadocups' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADOCUPS',
    'width' => '10%',
    'name' => 'estadocups',
  ),
  'codmp_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CODMP',
    'width' => '10%',
    'name' => 'codmp_c',
  ),
  'codsoat_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CODSOAT',
    'width' => '10%',
    'name' => 'codsoat_c',
  ),
  'codiss_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CODISS',
    'width' => '10%',
    'name' => 'codiss_c',
  ),
  'gbi_grupo_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_GBI_GRUPO',
    'width' => '10%',
    'name' => 'gbi_grupo_c',
  ),
  'gbi_subbrupo_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_GBI_SUBBRUPO',
    'width' => '10%',
    'name' => 'gbi_subbrupo_c',
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
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '20%',
    'default' => true,
    'name' => 'description',
  ),
  'ESTADOCUPS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADOCUPS',
    'width' => '10%',
    'name' => 'estadocups',
  ),
  'CODMP_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CODMP',
    'width' => '10%',
    'name' => 'codmp_c',
  ),
  'CODSOAT_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CODSOAT',
    'width' => '10%',
    'name' => 'codsoat_c',
  ),
  'CODISS_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CODISS',
    'width' => '10%',
    'name' => 'codiss_c',
  ),
  'GBI_GRUPO_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_GBI_GRUPO',
    'width' => '10%',
  ),
  'GBI_SUBBRUPO_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_GBI_SUBBRUPO',
    'width' => '20%',
  ),
),
);
