<?php
// created: 2022-07-05 15:49:30
$subpanel_layout['list_fields'] = array (
  'tipo_consulta' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_TIPO_CONSULTA',
    'width' => '25%',
    'default' => true,
  ),
  'institucion' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_INSTITUCION',
    'width' => '25%',
  ),
  'object_image' => 
  array (
    'widget_class' => 'SubPanelIcon',
    'width' => '2%',
    'image2' => 'attachment',
    'image2_url_field' => 
    array (
      'id_field' => 'selected_revision_id',
      'filename_field' => 'selected_revision_filename',
    ),
    'attachment_image_only' => true,
    'default' => true,
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'vd_validacion_derechos',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'vd_validacion_derechos',
    'width' => '5%',
    'default' => true,
  ),
);