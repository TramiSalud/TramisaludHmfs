<?php
$module_name = 'GBIA3_ManejoIntegral';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
      'syncDetailEditViews' => true,
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
        2 => 
        array (
          0 => 
          array (
            'name' => 'gbi_detalle_c',
            'studio' => 'visible',
            'label' => 'LBL_GBI_DETALLE',
          ),
          1 => 
          array (
            'name' => 'gbia3_anexo3_gbia3_manejointegral_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
