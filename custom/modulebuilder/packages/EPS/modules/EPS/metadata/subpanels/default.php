<?php
$module_name='EPS_EPS';
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
      'popup_module' => 'EPS_EPS',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'odigoeps' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_ODIGOEPS',
      'width' => '10%',
      'default' => true,
    ),
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'tipodocumento' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_TIPODOCUMENTO',
      'width' => '10%',
      'default' => true,
    ),
    'nrodocumento' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_NRODOCUMENTO',
      'width' => '10%',
      'default' => true,
    ),
    'contactoprincipal' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_CONTACTOPRINCIPAL',
      'id' => 'CONTACT_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Contacts',
      'target_record_key' => 'contact_id_c',
    ),
    'estado' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_ESTADO',
      'width' => '10%',
      'default' => true,
    ),
    'date_modified' => 
    array (
      'vname' => 'LBL_DATE_MODIFIED',
      'width' => '45%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'EPS_EPS',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'EPS_EPS',
      'width' => '5%',
      'default' => true,
    ),
  ),
);