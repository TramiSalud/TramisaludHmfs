<?php
$module_name = 'minpo_Manejo_integra';
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
