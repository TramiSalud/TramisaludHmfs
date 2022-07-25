<?php
$dashletData['gbiA4_Anexo4Dashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'gbian_anexo2_gbia4_anexo4_1_name' => 
  array (
    'default' => '',
  ),
  'gbia4_anexo4_gbia3_anexo3_name' => 
  array (
    'default' => '',
  ),
  'prestador_servicio' => 
  array (
    'default' => '',
  ),
  'nombquienautoriza_c' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'fecha_recibida_c' => 
  array (
    'default' => '',
  ),
  'created_by_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['gbiA4_Anexo4Dashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'gbian_anexo2_gbia4_anexo4_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_GBIAN_ANEXO2_GBIA4_ANEXO4_1_FROM_GBIAN_ANEXO2_TITLE',
    'id' => 'GBIAN_ANEXO2_GBIA4_ANEXO4_1GBIAN_ANEXO2_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'gbian_anexo2_gbia4_anexo4_1_name',
  ),
  'gbia4_anexo4_gbia3_anexo3_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_GBIA4_ANEXO4_GBIA3_ANEXO3_FROM_GBIA3_ANEXO3_TITLE',
    'id' => 'GBIA4_ANEXO4_GBIA3_ANEXO3GBIA3_ANEXO3_IDA',
    'width' => '10%',
    'default' => true,
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
    'default' => true,
    'name' => 'prestador_servicio',
  ),
  'nombquienautoriza_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_NOMBQUIENAUTORIZA',
    'width' => '10%',
    'name' => 'nombquienautoriza_c',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'fecha_recibida_c' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'label' => 'LBL_FECHA_RECIBIDA',
    'width' => '10%',
    'name' => 'fecha_recibida_c',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => true,
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'concepto' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CONCEPTO',
    'width' => '10%',
    'default' => false,
  ),
  'reclamo_tiquete' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_RECLAMO_TIQUETE',
    'width' => '10%',
  ),
  'maximo_valor' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MAXIMO_VALOR',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'currency_id' => 
  array (
    'type' => 'currency_id',
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
    'default' => false,
  ),
  'numeroquienautoriza_c' => 
  array (
    'type' => 'phone',
    'default' => false,
    'label' => 'LBL_NUMEROQUIENAUTORIZA',
    'width' => '10%',
  ),
  'indicativoquienautoriza_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_INDICATIVOQUIENAUTORIZA',
    'width' => '10%',
  ),
  'extensionquienautoriza_c' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_EXTENSIONQUIENAUTORIZA',
    'width' => '10%',
  ),
  'celquienautoriza_c' => 
  array (
    'type' => 'phone',
    'default' => false,
    'label' => 'LBL_CELQUIENAUTORIZA',
    'width' => '10%',
  ),
  'cargoquienautoriza_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CARGOQUIENAUTORIZA',
    'width' => '10%',
  ),
  'porcentaje' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PORCENTAJE',
    'width' => '10%',
    'default' => false,
  ),
  'valor_pesos' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_VALOR_PESOS',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'semanas_afiliacion' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SEMANAS_AFILIACION',
    'width' => '10%',
    'default' => false,
  ),
  'porcentaje_servicio' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PORCENTAJE_SERVICIO',
    'width' => '10%',
    'default' => false,
  ),
  'nro_autorizacipn' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NRO_AUTORIZACIPN',
    'width' => '10%',
    'default' => false,
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
);
