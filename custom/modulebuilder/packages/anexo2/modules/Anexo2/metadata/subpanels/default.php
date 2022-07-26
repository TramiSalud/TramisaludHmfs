<?php
$module_name='gbian_Anexo2';
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
      'popup_module' => 'gbian_Anexo2',
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
    'paciente' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_PACIENTE',
      'id' => 'ACCOUNT_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Accounts',
      'target_record_key' => 'account_id_c',
    ),
    'prestador' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_PRESTADOR',
      'id' => 'IPS_IPS_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'IPS_IPS',
      'target_record_key' => 'ips_ips_id_c',
    ),
    'eps' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_EPS',
      'id' => 'EPS_EPS_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'EPS_EPS',
      'target_record_key' => 'eps_eps_id_c',
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'gbian_Anexo2',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'gbian_Anexo2',
      'width' => '5%',
      'default' => true,
    ),
  ),
);