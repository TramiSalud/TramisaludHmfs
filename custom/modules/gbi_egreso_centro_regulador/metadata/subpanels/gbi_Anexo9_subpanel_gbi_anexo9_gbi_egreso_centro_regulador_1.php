<?php
// created: 2015-03-24 09:43:48
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
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
  'nombres_apepaciente' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_NOMBRES_APEPACIENTE',
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
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
);