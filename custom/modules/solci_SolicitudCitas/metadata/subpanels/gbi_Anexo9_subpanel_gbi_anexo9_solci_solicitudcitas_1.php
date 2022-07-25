<?php
// created: 2014-07-29 09:51:09
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'vname' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => NULL,
    'target_record_key' => NULL,
  ),
  'fechasolicitud' => 
  array (
    'type' => 'datetimecombo',
    'vname' => 'LBL_FECHASOLICITUD',
    'width' => '10%',
    'default' => true,
  ),
  'fechacenregulador' => 
  array (
    'type' => 'datetimecombo',
    'vname' => 'LBL_FECHACENREGULADOR',
    'width' => '10%',
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
  'diagnostico' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_DIAGNOSTICO',
    'id' => 'CIE_CIE10_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'CIE_CIE10',
    'target_record_key' => 'cie_cie10_id_c',
  ),
  'cup' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_CUP ',
    'id' => 'GBICU_CUPS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'GBICU_CUPS',
    'target_record_key' => 'gbicu_cups_id_c',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'solci_SolicitudCitas',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'solci_SolicitudCitas',
    'width' => '5%',
    'default' => true,
  ),
);