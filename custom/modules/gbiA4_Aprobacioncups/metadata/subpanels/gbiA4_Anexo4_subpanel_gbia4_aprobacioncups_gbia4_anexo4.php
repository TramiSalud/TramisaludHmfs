<?php
// created: 2014-04-04 11:36:59
$subpanel_layout['list_fields'] = array (
  'cups_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_CUPS',
    'id' => 'GBICU_CUPS_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'GBICU_CUPS',
    'target_record_key' => 'gbicu_cups_id_c',
  ),
  'cantidad_cups' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_CANTIDAD_CUPS',
    'width' => '10%',
    'default' => true,
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'gbiA4_Aprobacioncups',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'gbiA4_Aprobacioncups',
    'width' => '5%',
    'default' => true,
  ),
);