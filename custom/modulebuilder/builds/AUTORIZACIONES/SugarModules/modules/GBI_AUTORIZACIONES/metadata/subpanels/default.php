<?php
$module_name='GBI_AUTORIZACIONES';
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
      'popup_module' => 'GBI_AUTORIZACIONES',
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
    'entidad' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_ENTIDAD',
      'width' => '10%',
      'default' => true,
    ),
  ),
);