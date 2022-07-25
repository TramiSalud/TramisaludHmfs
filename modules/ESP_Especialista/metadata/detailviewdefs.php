<?php
$module_name = 'ESP_Especialista';
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'tipodoc',
            'studio' => 'visible',
            'label' => 'LBL_TIPODOC',
          ),
          1 => 
          array (
            'name' => 'nombres',
            'label' => 'LBL_NOMBRES',
          ),
        ),
        1 => 
        array (
          0 => 'name',
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
            'name' => 'estado',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'extension',
            'label' => 'LBL_EXTENSION',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'telcel',
            'label' => 'LBL_TELCEL',
          ),
          1 => 
          array (
            'name' => 'correo',
            'label' => 'LBL_CORREO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'pais',
            'studio' => 'visible',
            'label' => 'LBL_PAIS',
          ),
          1 => 
          array (
            'name' => 'cargo',
            'studio' => 'visible',
            'label' => 'LBL_CARGO',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'departamento',
            'studio' => 'visible',
            'label' => 'LBL_DEPARTAMENTO',
          ),
          1 => 
          array (
            'name' => 'registromedico',
            'label' => 'LBL_REGISTROMEDICO',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'municipio',
            'studio' => 'visible',
            'label' => 'LBL_MUNICIPIO',
          ),
          1 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
?>
