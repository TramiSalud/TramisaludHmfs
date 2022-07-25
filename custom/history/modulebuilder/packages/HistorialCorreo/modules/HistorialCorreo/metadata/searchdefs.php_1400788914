<?php
$module_name = 'GBIHI_HistorialCorreo';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
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
      'correo_envio' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CORREO_ENVIO',
        'width' => '10%',
        'default' => true,
        'name' => 'correo_envio',
      ),
      'fecha_envio_correo' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_FECHA_ENVIO_CORREO',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_envio_correo',
      ),
      'numero_reintento' => 
      array (
        'type' => 'int',
        'label' => 'LBL_NUMERO_REINTENTO',
        'width' => '10%',
        'default' => true,
        'name' => 'numero_reintento',
      ),
      'correo_enviado' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_CORREO_ENVIADO',
        'width' => '10%',
        'name' => 'correo_enviado',
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
