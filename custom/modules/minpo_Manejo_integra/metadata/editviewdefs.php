<?php
$module_name = 'minpo_Manejo_integra';
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/modules/minpo_Manejo_integra/custom_view.js',
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
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'descripcion_cup_c',
            'label' => 'LBL_DESCRIPCION_CUP',
            'displayParams' => 
            array (
              'size' => 155,
			   
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cantidad',
            'label' => 'LBL_CANTIDAD',
          ),
        ),
      ),
    ),
  ),
);
?>
