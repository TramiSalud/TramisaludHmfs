<?php
$module_name = 'tms_paises';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
          0 => 'name',
          1 => 
          array (
            'name' => 'codigo_pais',
            'label' => 'LBL_CODIGO_PAIS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'codigo_alterno',
            'label' => 'LBL_CODIGO_ALTERNO',
          ),
        ),
      ),
    ),
  ),
);
?>
