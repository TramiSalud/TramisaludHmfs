<?php
$module_name='vd_validacion_derechos';
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
      'popup_module' => 'vd_validacion_derechos',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'tipo_consulta' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_TIPO_CONSULTA',
      'width' => '10%',
      'default' => true,
    ),
    'institucion' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_INSTITUCION',
      'width' => '10%',
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
    'document_name' => 
    array (
      'name' => 'document_name',
      'vname' => 'LBL_LIST_DOCUMENT_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
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
  ),
);