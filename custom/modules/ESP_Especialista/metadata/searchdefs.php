<?php
$module_name = 'ESP_Especialista';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'nombres' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_NOMBRES',
        'width' => '10%',
        'default' => true,
        'name' => 'nombres',
      ),
      'apellidos' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_APELLIDOS',
        'width' => '10%',
        'default' => true,
        'name' => 'apellidos',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'nombres' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_NOMBRES',
        'width' => '10%',
        'default' => true,
        'name' => 'nombres',
      ),
      'apellidos' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_APELLIDOS',
        'width' => '10%',
        'default' => true,
        'name' => 'apellidos',
      ),
      'cargo' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CARGO',
        'width' => '10%',
        'name' => 'cargo',
      ),
      'telppal' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_TELPPAL',
        'width' => '10%',
        'default' => true,
        'name' => 'telppal',
      ),
      'telcel' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_TELCEL',
        'width' => '10%',
        'default' => true,
        'name' => 'telcel',
      ),
      'correo' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CORREO',
        'width' => '10%',
        'default' => true,
        'name' => 'correo',
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
