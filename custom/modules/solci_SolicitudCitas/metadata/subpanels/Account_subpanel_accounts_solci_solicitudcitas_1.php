<?php
// created: 2015-03-24 09:48:46
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '15%',
    'default' => true,
  ),
  'nombresapellpaciente' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_NOMBRESAPELLPACIENTE',
    'width' => '10%',
    'default' => true,
  ),
  'segundonombre_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_SEGUNDONOMBRE',
    'width' => '10%',
  ),
  'primerapellido_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_PRIMERAPELLIDO',
    'width' => '10%',
  ),
  'segundoapellido_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_SEGUNDOAPELLIDO',
    'width' => '10%',
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
);