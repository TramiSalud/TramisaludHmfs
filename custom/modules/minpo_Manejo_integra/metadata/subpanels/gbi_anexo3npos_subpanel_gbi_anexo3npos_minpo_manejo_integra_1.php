<?php
// created: 2014-04-11 10:47:48
$subpanel_layout['list_fields'] = array (
  'cantidad' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_CANTIDAD',
    'width' => '5%',
    'default' => true,
  ),
  'descripcion_cup_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_DESCRIPCION_CUP',
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
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
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'modified_user_id',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'minpo_Manejo_integra',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'minpo_Manejo_integra',
    'width' => '5%',
    'default' => true,
  ),
);