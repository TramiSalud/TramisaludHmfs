<?php
// created: 2014-04-10 19:05:01
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '15%',
    'default' => true,
  ),
  'prestador_servicio' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_PRESTADOR_SERVICIO',
    'id' => 'IPS_IPS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'IPS_IPS',
    'target_record_key' => 'ips_ips_id_c',
  ),
  'gbia4_anexo4_gbia3_anexo3_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_GBIA4_ANEXO4_GBIA3_ANEXO3_FROM_GBIA3_ANEXO3_TITLE',
    'id' => 'GBIA4_ANEXO4_GBIA3_ANEXO3GBIA3_ANEXO3_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'GBIA3_ANEXO3',
    'target_record_key' => 'gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida',
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
    'module' => 'gbiA4_Anexo4',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'gbiA4_Anexo4',
    'width' => '5%',
    'default' => true,
  ),
);