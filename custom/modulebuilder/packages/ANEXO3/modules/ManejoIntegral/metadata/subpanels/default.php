<?php
$module_name='GBIA3_ManejoIntegral';
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
    'codigocups' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_CODIGOCUPS',
      'id' => 'GBICU_CUPS_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'GBICU_CUPS',
      'target_record_key' => 'gbicu_cups_id_c',
    ),
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