<?php
// created: 2016-01-04 07:12:57
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'tipo_de_llamada' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_TIPO_DE_LLAMADA',
    'width' => '10%',
    'default' => true,
  ),
  'estado' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_ESTADO',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'duracion' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_DURACION',
    'width' => '10%',
    'default' => true,
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