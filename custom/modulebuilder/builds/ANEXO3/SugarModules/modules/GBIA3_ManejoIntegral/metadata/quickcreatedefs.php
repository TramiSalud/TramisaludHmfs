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
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cantidadcups',
            'label' => 'LBL_CANTIDADCUPS',
          ),
        ),
      ),
    ),
  ),
);
?>
