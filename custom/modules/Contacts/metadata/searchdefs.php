<?php
$searchdefs ['Contacts'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'type' => 'name',
        'link' => true,
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
      ),
      'last_name' => 
      array (
        'name' => 'last_name',
        'default' => true,
        'width' => '10%',
      ),
      'first_name' => 
      array (
        'name' => 'first_name',
        'default' => true,
        'width' => '10%',
      ),
      'apellidos_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_APELLIDOS',
        'width' => '10%',
        'name' => 'apellidos_c',
      ),
    ),
    'advanced_search' => 
    array (
      'last_name' => 
      array (
        'name' => 'last_name',
        'default' => true,
        'width' => '10%',
      ),
      'first_name' => 
      array (
        'name' => 'first_name',
        'default' => true,
        'width' => '10%',
      ),
      'apellidos_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_APELLIDOS',
        'width' => '10%',
        'name' => 'apellidos_c',
      ),
      'tipocontacto_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TIPOCONTACTO',
        'width' => '10%',
        'name' => 'tipocontacto_c',
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