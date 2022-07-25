<?php
// created: 2015-03-24 08:56:52
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'prestador' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_PRESTADOR',
    'id' => 'IPS_IPS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'IPS_IPS',
    'target_record_key' => 'ips_ips_id_c',
  ),
  'eps' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_EPS',
    'id' => 'EPS_EPS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'EPS_EPS',
    'target_record_key' => 'eps_eps_id_c',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'correo_enviado_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_CORREO_ENVIADO',
    'width' => '10%',
  ),
  'numero_reintentos_c' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_NUMERO_REINTENTOS',
    'width' => '10%',
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'created_by',
  ),
);