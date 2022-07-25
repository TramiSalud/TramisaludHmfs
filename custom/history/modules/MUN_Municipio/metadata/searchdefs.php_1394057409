<?php
$module_name = 'MUN_Municipio';
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
      'codigodane' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CODIGODANE',
        'width' => '10%',
        'default' => true,
        'name' => 'codigodane',
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
      'codigodane' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CODIGODANE',
        'width' => '10%',
        'default' => true,
        'name' => 'codigodane',
      ),
      'departamento' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_DEPARTAMENTO',
        'id' => 'DEP_DEPARTAMENTOS_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'departamento',
      ),
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
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
