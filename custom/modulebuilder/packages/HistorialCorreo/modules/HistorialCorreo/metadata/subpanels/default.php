<?php
$module_name='GBIHI_HistorialCorreo';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'GBIHI_HistorialCorreo',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'correo_envio' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_CORREO_ENVIO',
      'width' => '10%',
      'default' => true,
    ),
    'fecha_envio_correo' => 
    array (
      'type' => 'datetimecombo',
      'vname' => 'LBL_FECHA_ENVIO_CORREO',
      'width' => '10%',
      'default' => true,
    ),
    'numero_reintento' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_NUMERO_REINTENTO',
      'width' => '10%',
      'default' => true,
    ),
    'correo_enviado' => 
    array (
      'type' => 'bool',
      'default' => true,
      'vname' => 'LBL_CORREO_ENVIADO',
      'width' => '10%',
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'GBIHI_HistorialCorreo',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'GBIHI_HistorialCorreo',
      'width' => '5%',
      'default' => true,
    ),
  ),
);