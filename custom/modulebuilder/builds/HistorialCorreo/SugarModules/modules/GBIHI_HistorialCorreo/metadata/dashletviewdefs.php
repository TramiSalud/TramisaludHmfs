<?php
$dashletData['GBIHI_HistorialCorreoDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'correo_envio' => 
  array (
    'default' => '',
  ),
  'fecha_envio_correo' => 
  array (
    'default' => '',
  ),
  'numero_reintento' => 
  array (
    'default' => '',
  ),
  'correo_enviado' => 
  array (
    'default' => '',
  ),
);
$dashletData['GBIHI_HistorialCorreoDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'correo_envio' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CORREO_ENVIO',
    'width' => '10%',
    'default' => true,
  ),
  'fecha_envio_correo' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_FECHA_ENVIO_CORREO',
    'width' => '10%',
    'default' => true,
  ),
  'numero_reintento' => 
  array (
    'type' => 'int',
    'label' => 'LBL_NUMERO_REINTENTO',
    'width' => '10%',
    'default' => true,
  ),
  'correo_enviado' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_CORREO_ENVIADO',
    'width' => '10%',
  ),
);
