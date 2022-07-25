<?php
$module_name='gbiRE_RebotesEmail';
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
      'popup_module' => 'gbiRE_RebotesEmail',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '15%',
      'default' => true,
    ),
    'cedula' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_CEDULA',
      'width' => '10%',
      'default' => true,
    ),
    'numerorebotes' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_NUMEROREBOTES',
      'width' => '10%',
      'default' => true,
    ),
    'description' => 
    array (
      'type' => 'text',
      'vname' => 'LBL_DESCRIPTION',
      'sortable' => false,
      'width' => '30%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'gbiRE_RebotesEmail',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'gbiRE_RebotesEmail',
      'width' => '5%',
      'default' => true,
    ),
  ),
);