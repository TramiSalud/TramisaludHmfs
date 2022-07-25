<?php
$module_name = 'gbiRE_RebotesEmail';
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
      'cedula' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CEDULA',
        'width' => '10%',
        'default' => true,
        'name' => 'cedula',
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
      'cedula' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CEDULA',
        'width' => '10%',
        'default' => true,
        'name' => 'cedula',
      ),
      'numerorebotes' => 
      array (
        'type' => 'int',
        'label' => 'LBL_NUMEROREBOTES',
        'width' => '10%',
        'default' => true,
        'name' => 'numerorebotes',
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
