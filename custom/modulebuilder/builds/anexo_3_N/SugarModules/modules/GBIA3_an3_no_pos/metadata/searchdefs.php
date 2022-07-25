<?php
$module_name = 'GBIA3_an3_no_pos';
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
      'paciente' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PACIENTE',
        'id' => 'ACCOUNT_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'paciente',
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
      'paciente' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PACIENTE',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'ACCOUNT_ID_C',
        'name' => 'paciente',
      ),
      'prestador' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PRESTADOR',
        'id' => 'IPS_IPS_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'prestador',
      ),
      'eps' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_EPS',
        'id' => 'EPS_EPS_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'eps',
      ),
      'prioridadatencion' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_PRIORIDADATENCION',
        'width' => '10%',
        'default' => true,
        'name' => 'prioridadatencion',
      ),
      'origenatencion' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_ORIGENATENCION',
        'width' => '10%',
        'default' => true,
        'name' => 'origenatencion',
      ),
      'ubicacion' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_UBICACION',
        'width' => '10%',
        'default' => true,
        'name' => 'ubicacion',
      ),
      'nombresolicitante' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_NOMBRESOLICITANTE',
        'width' => '10%',
        'default' => true,
        'name' => 'nombresolicitante',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
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
