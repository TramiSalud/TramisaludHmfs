<?php
// created: 2014-07-10 15:14:24
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '15%',
    'default' => true,
  ),
  'correo_envio' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_CORREO_ENVIO',
    'width' => '15%',
    'default' => true,
  ),
  'fecha_envio_correo' => 
  array (
    'type' => 'datetimecombo',
    'vname' => 'LBL_FECHA_ENVIO_CORREO',
    'width' => '15%',
    'default' => true,
  ),
  'numero_reintento' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_NUMERO_REINTENTO',
    'width' => '15%',
    'default' => true,
  ),
  'correo_enviado' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_CORREO_ENVIADO',
    'width' => '15%',
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'vname' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'assigned_user_id',
  ),
);