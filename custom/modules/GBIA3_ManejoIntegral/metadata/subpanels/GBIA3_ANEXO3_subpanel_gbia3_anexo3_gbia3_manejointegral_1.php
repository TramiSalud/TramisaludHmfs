<?php
// created: 2014-10-03 23:57:24
$subpanel_layout['list_fields'] = array (
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
  'cups_interno_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_CUPS_INTERNO',
    'width' => '10%',
  ),
  'cantidadcups' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_CANTIDADCUPS',
    'width' => '10%',
    'default' => true,
  ),
  'gbi_detalle_c' => 
  array (
    'type' => 'text',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_GBI_DETALLE',
    'sortable' => false,
    'width' => '10%',
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
);