<?php
$module_name = 'ESP_Especialista';
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
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'nombres',
            'label' => 'LBL_NOMBRES',
          ),
          1 => 
          array (
            'name' => 'apellidos',
            'label' => 'LBL_APELLIDOS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'telppal',
            'label' => 'LBL_TELPPAL',
          ),
          1 => 
          array (
            'name' => 'telcel',
            'label' => 'LBL_TELCEL',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'cargo',
            'studio' => 'visible',
            'label' => 'LBL_CARGO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'correo',
            'label' => 'LBL_CORREO',
          ),
        ),
      ),
    ),
  ),
);
?>
