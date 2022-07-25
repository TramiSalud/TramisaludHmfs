<?php
$popupMeta = array (
    'moduleMain' => 'GBIHI_HistorialCorreo',
    'varName' => 'GBIHI_HistorialCorreo',
    'orderBy' => 'gbihi_historialcorreo.name',
    'whereClauses' => array (
  'name' => 'gbihi_historialcorreo.name',
  'correo_envio' => 'gbihi_historialcorreo.correo_envio',
  'fecha_envio_correo' => 'gbihi_historialcorreo.fecha_envio_correo',
  'numero_reintento' => 'gbihi_historialcorreo.numero_reintento',
  'correo_enviado' => 'gbihi_historialcorreo.correo_enviado',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'correo_envio',
  5 => 'fecha_envio_correo',
  6 => 'numero_reintento',
  7 => 'correo_enviado',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'correo_envio' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CORREO_ENVIO',
    'width' => '10%',
    'name' => 'correo_envio',
  ),
  'fecha_envio_correo' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_FECHA_ENVIO_CORREO',
    'width' => '10%',
    'name' => 'fecha_envio_correo',
  ),
  'numero_reintento' => 
  array (
    'type' => 'int',
    'label' => 'LBL_NUMERO_REINTENTO',
    'width' => '10%',
    'name' => 'numero_reintento',
  ),
  'correo_enviado' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_CORREO_ENVIADO',
    'width' => '10%',
    'name' => 'correo_enviado',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
  ),
  'CORREO_ENVIO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CORREO_ENVIO',
    'width' => '10%',
    'default' => true,
    'name' => 'correo_envio',
  ),
  'FECHA_ENVIO_CORREO' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_FECHA_ENVIO_CORREO',
    'width' => '10%',
    'default' => true,
    'name' => 'fecha_envio_correo',
  ),
  'NUMERO_REINTENTO' => 
  array (
    'type' => 'int',
    'label' => 'LBL_NUMERO_REINTENTO',
    'width' => '10%',
    'default' => true,
    'name' => 'numero_reintento',
  ),
  'CORREO_ENVIADO' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_CORREO_ENVIADO',
    'width' => '10%',
    'name' => 'correo_enviado',
  ),
),
);
