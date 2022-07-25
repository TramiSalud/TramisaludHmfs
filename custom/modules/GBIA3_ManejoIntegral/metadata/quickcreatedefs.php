<?php
$module_name = 'GBIA3_ManejoIntegral';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'codigocups',
            'studio' => 'visible',
            'label' => 'LBL_CODIGOCUPS',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'gbicu_cups_id_c',
                'name' => 'codigocups',
                'description' => 'gbi_detalle_c',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'cups_interno_c',
            'label' => 'LBL_CUPS_INTERNO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cantidadcups',
            'label' => 'LBL_CANTIDADCUPS',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'gbi_detalle_c',
            'studio' => 'visible',
            'label' => 'LBL_GBI_DETALLE',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
