<?php
$module_name='GBIA3_manejo_integ';
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
      'popup_module' => 'GBIA3_ManejoIntegral',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'cantidadcups' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_CANTIDADCUPS',
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'GBIA3_ManejoIntegral',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'GBIA3_ManejoIntegral',
      'width' => '5%',
      'default' => true,
    ),
  ),
);