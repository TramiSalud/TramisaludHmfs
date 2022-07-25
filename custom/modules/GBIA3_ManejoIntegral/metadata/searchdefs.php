<?php
$module_name = 'GBIA3_ManejoIntegral';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'codigocups' => 
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
      'cantidadcups' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CANTIDADCUPS',
        'width' => '10%',
        'default' => true,
        'name' => 'cantidadcups',
      ),
      'gbi_detalle_c' => 
      array (
        'type' => 'text',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_GBI_DETALLE',
        'sortable' => false,
        'width' => '10%',
        'name' => 'gbi_detalle_c',
      ),
    ),
    'advanced_search' => 
    array (
      'codigocups' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_CODIGOCUPS',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'GBICU_CUPS_ID_C',
        'name' => 'codigocups',
      ),
      'cantidadcups' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CANTIDADCUPS',
        'width' => '10%',
        'default' => true,
        'name' => 'cantidadcups',
      ),
      'gbi_detalle_c' => 
      array (
        'type' => 'text',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_GBI_DETALLE',
        'sortable' => false,
        'width' => '10%',
        'name' => 'gbi_detalle_c',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
