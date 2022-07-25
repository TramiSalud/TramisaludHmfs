<?php
$popupMeta = array (
    'moduleMain' => 'gbiA4_Anexo4',
    'varName' => 'gbiA4_Anexo4',
    'orderBy' => 'gbia4_anexo4.name',
    'whereClauses' => array (
  'name' => 'gbia4_anexo4.name',
  'gbia4_anexo4_gbia3_anexo3_name' => 'gbia4_anexo4.gbia4_anexo4_gbia3_anexo3_name',
  'gbian_anexo2_gbia4_anexo4_1_name' => 'gbia4_anexo4.gbian_anexo2_gbia4_anexo4_1_name',
  'prestador_servicio' => 'gbia4_anexo4.prestador_servicio',
  'nombquienautoriza_c' => 'gbia4_anexo4_cstm.nombquienautoriza_c',
  'date_entered' => 'gbia4_anexo4.date_entered',
  'created_by_name' => 'gbia4_anexo4.created_by_name',
  'fecha_recibida_c' => 'gbia4_anexo4_cstm.fecha_recibida_c',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'gbia4_anexo4_gbia3_anexo3_name',
  5 => 'gbian_anexo2_gbia4_anexo4_1_name',
  6 => 'prestador_servicio',
  7 => 'nombquienautoriza_c',
  8 => 'date_entered',
  9 => 'created_by_name',
  10 => 'fecha_recibida_c',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'gbian_anexo2_gbia4_anexo4_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_GBIAN_ANEXO2_GBIA4_ANEXO4_1_FROM_GBIAN_ANEXO2_TITLE',
    'id' => 'GBIAN_ANEXO2_GBIA4_ANEXO4_1GBIAN_ANEXO2_IDA',
    'width' => '10%',
    'name' => 'gbian_anexo2_gbia4_anexo4_1_name',
  ),
  'gbia4_anexo4_gbia3_anexo3_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_GBIA4_ANEXO4_GBIA3_ANEXO3_FROM_GBIA3_ANEXO3_TITLE',
    'id' => 'GBIA4_ANEXO4_GBIA3_ANEXO3GBIA3_ANEXO3_IDA',
    'width' => '10%',
    'name' => 'gbia4_anexo4_gbia3_anexo3_name',
  ),
  'prestador_servicio' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PRESTADOR_SERVICIO',
    'id' => 'IPS_IPS_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'prestador_servicio',
  ),
  'nombquienautoriza_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NOMBQUIENAUTORIZA',
    'width' => '10%',
    'name' => 'nombquienautoriza_c',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'name' => 'date_entered',
  ),
  'fecha_recibida_c' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_FECHA_RECIBIDA',
    'width' => '10%',
    'name' => 'fecha_recibida_c',
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'name' => 'created_by_name',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
  ),
  'GBIAN_ANEXO2_GBIA4_ANEXO4_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_GBIAN_ANEXO2_GBIA4_ANEXO4_1_FROM_GBIAN_ANEXO2_TITLE',
    'id' => 'GBIAN_ANEXO2_GBIA4_ANEXO4_1GBIAN_ANEXO2_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'gbian_anexo2_gbia4_anexo4_1_name',
  ),
  'GBIA4_ANEXO4_GBIA3_ANEXO3_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_GBIA4_ANEXO4_GBIA3_ANEXO3_FROM_GBIA3_ANEXO3_TITLE',
    'id' => 'GBIA4_ANEXO4_GBIA3_ANEXO3GBIA3_ANEXO3_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'gbia4_anexo4_gbia3_anexo3_name',
  ),
  'PRESTADOR_SERVICIO' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PRESTADOR_SERVICIO',
    'id' => 'IPS_IPS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'prestador_servicio',
  ),
  'NOMBQUIENAUTORIZA_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_NOMBQUIENAUTORIZA',
    'width' => '10%',
    'name' => 'nombquienautoriza_c',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_entered',
  ),
  'FECHA_RECIBIDA_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'label' => 'LBL_FECHA_RECIBIDA',
    'width' => '10%',
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
    'name' => 'created_by_name',
  ),
),
);
