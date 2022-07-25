<?php
$module_name = 'GBIA3_ANEXO3';
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
      'accounts_gbia3_anexo3_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_GBIA3_ANEXO3_1_FROM_ACCOUNTS_TITLE',
        'id' => 'ACCOUNTS_GBIA3_ANEXO3_1ACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'accounts_gbia3_anexo3_1_name',
      ),
    ),
    'advanced_search' => 
    array (
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'accounts_gbia3_anexo3_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_GBIA3_ANEXO3_1_FROM_ACCOUNTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'ACCOUNTS_GBIA3_ANEXO3_1ACCOUNTS_IDA',
        'name' => 'accounts_gbia3_anexo3_1_name',
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
      'prioridadatencion2' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_PRIORIDADATENCION2',
        'width' => '10%',
        'default' => true,
        'name' => 'prioridadatencion2',
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
      'correo_enviado_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_CORREO_ENVIADO',
        'width' => '10%',
        'name' => 'correo_enviado_c',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
      ),
      'numero_reintentos_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NUMERO_REINTENTOS',
        'width' => '10%',
        'name' => 'numero_reintentos_c',
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
