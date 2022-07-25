<?php
$module_name='gbi_Anexo9';
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
      'popup_module' => 'gbi_Anexo9',
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
    'estado' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_ESTADO',
      'width' => '10%',
      'default' => true,
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
    'especialista' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_ESPECIALISTA',
      'id' => 'ESP_ESPECIALISTA_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'ESP_Especialista',
      'target_record_key' => 'esp_especialista_id_c',
    ),
    'date_entered' => 
    array (
      'type' => 'datetime',
      'vname' => 'LBL_DATE_ENTERED',
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
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'gbi_Anexo9',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'gbi_Anexo9',
      'width' => '5%',
      'default' => true,
    ),
  ),
);