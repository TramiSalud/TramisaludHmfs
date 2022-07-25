<?php
$module_name = 'GBICU_CUPS';
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
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
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
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'estadocups' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADOCUPS',
        'width' => '10%',
        'name' => 'estadocups',
      ),
      'codmp_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_CODMP',
        'width' => '10%',
        'name' => 'codmp_c',
      ),
      'codsoat_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_CODSOAT',
        'width' => '10%',
        'name' => 'codsoat_c',
      ),
      'codiss_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_CODISS',
        'width' => '10%',
        'name' => 'codiss_c',
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
      'gbi_grupo_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_GBI_GRUPO',
        'width' => '10%',
        'name' => 'gbi_grupo_c',
      ),
      'subcategoria' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SUBCATEGORIA',
        'width' => '10%',
        'default' => true,
        'name' => 'subcategoria',
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
