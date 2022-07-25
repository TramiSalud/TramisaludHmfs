<?php
$dashletData['gbian_Anexo2Dashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'gbian_anexo2_accounts_name' => 
  array (
    'default' => '',
  ),
  'prestador' => 
  array (
    'default' => '',
  ),
  'eps' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
);
$dashletData['gbian_Anexo2Dashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'gbian_anexo2_accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_GBIAN_ANEXO2_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'GBIAN_ANEXO2_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'gbian_anexo2_accounts_name',
  ),
  'prestador' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PRESTADOR',
    'id' => 'IPS_IPS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'prestador',
  ),
  'eps' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_EPS',
    'id' => 'EPS_EPS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'eps',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'default' => true,
    'name' => 'date_modified',
  ),
  'primernombre_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_PRIMERNOMBRE',
    'width' => '10%',
  ),
  'correo' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CORREO',
    'width' => '10%',
    'default' => false,
    'name' => 'correo',
  ),
  'telefono' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_TELEFONO',
    'width' => '10%',
    'default' => false,
    'name' => 'telefono',
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'width' => '8%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
    'name' => 'assigned_user_name',
  ),
  'segundo_nombre' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SEGUNDO_NOMBRE',
    'width' => '10%',
    'default' => false,
    'name' => 'segundo_nombre',
  ),
  'celular_pte' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_CELULAR_PTE',
    'width' => '10%',
    'default' => false,
    'name' => 'celular_pte',
  ),
  'segundo_apellido' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SEGUNDO_APELLIDO',
    'width' => '10%',
    'default' => false,
    'name' => 'segundo_apellido',
  ),
  'responsable' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_RESPONSABLE',
    'id' => 'GBIA3_ANEXO3_ID1_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'responsable',
  ),
  'gestor' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_GESTOR',
    'id' => 'GBIA3_ANEXO3_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'gestor',
  ),
  'origen_atencion' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ORIGEN_ATENCION',
    'width' => '10%',
    'name' => 'origen_atencion',
  ),
  'forma_envio' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_FORMA_ENVIO',
    'width' => '10%',
    'name' => 'forma_envio',
  ),
  'fecha_seg' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_SEG',
    'width' => '10%',
    'default' => false,
    'name' => 'fecha_seg',
  ),
  'nombre_prestador_serv_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_NOMBRE_PRESTADOR_SERV',
    'id' => 'EPS_EPS_ID1_C',
    'link' => true,
    'width' => '10%',
    'name' => 'nombre_prestador_serv_c',
  ),
  'id_paciente' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ID_PACIENTE',
    'id' => 'GBIA3_ANEXO3_ID2_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'id_paciente',
  ),
  'fecha_envio_correo_c' => 
  array (
    'type' => 'datetimecombo',
    'default' => false,
    'label' => 'LBL_FECHA_ENVIO_CORREO',
    'width' => '10%',
    'name' => 'fecha_envio_correo_c',
  ),
  'paciente' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PACIENTE',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'paciente',
  ),
  'indicativo_a_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_INDICATIVO_A',
    'width' => '10%',
    'name' => 'indicativo_a_c',
  ),
  'numero_reintentos_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_NUMERO_REINTENTOS',
    'width' => '10%',
    'name' => 'numero_reintentos_c',
  ),
  'descripciondiagnostico0_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DESCRIPCIONDIAGNOSTICO0',
    'width' => '10%',
    'name' => 'descripciondiagnostico0_c',
  ),
  'rebotado_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_REBOTADO',
    'width' => '10%',
    'name' => 'rebotado_c',
  ),
  'responsable_seguim_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_RESPONSABLE_SEGUIM',
    'id' => 'USER_ID1_C',
    'link' => true,
    'width' => '10%',
    'name' => 'responsable_seguim_c',
  ),
  'prestador_remite_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PRESTADOR_REMITE',
    'id' => 'IPS_IPS_ID1_C',
    'link' => true,
    'width' => '10%',
    'name' => 'prestador_remite_c',
  ),
  'paciente_remitido_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PACIENTE_REMITIDO',
    'width' => '10%',
    'name' => 'paciente_remitido_c',
  ),
  'marcado_enviar_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_MARCADO_ENVIAR',
    'width' => '10%',
    'name' => 'marcado_enviar_c',
  ),
  'fecha_ingreso_c' => 
  array (
    'type' => 'datetimecombo',
    'default' => false,
    'label' => 'LBL_FECHA_INGRESO',
    'width' => '10%',
    'name' => 'fecha_ingreso_c',
  ),
  'gestor_externo_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_GESTOR_EXTERNO',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'gestor_externo_c',
  ),
  'destino_pte' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_DESTINO_PTE',
    'width' => '10%',
    'name' => 'destino_pte',
  ),
  'descripciondediagnostico3_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DESCRIPCIONDEDIAGNOSTICO3',
    'width' => '10%',
    'name' => 'descripciondediagnostico3_c',
  ),
  'nombrequienautoriza_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_NOMBREQUIENAUTORIZA',
    'id' => 'ESP_ESPECIALISTA_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'nombrequienautoriza_c',
  ),
  'ext' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_EXT',
    'width' => '10%',
    'default' => false,
    'name' => 'ext',
  ),
  'descripciondediagnostico2_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DESCRIPCIONDEDIAGNOSTICO2',
    'width' => '10%',
    'name' => 'descripciondediagnostico2_c',
  ),
  'descripciondediagnostico1_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DESCRIPCIONDEDIAGNOSTICO1',
    'width' => '10%',
    'name' => 'descripciondediagnostico1_c',
  ),
  'clasificacion_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CLASIFICACION',
    'width' => '10%',
    'name' => 'clasificacion_c',
  ),
  'correo_enviado_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_CORREO_ENVIADO',
    'width' => '10%',
    'name' => 'correo_enviado_c',
  ),
  'cel_informador_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CEL_INFORMADOR',
    'width' => '10%',
    'name' => 'cel_informador_c',
  ),
  'codigo_relad_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CODIGO_RELAD',
    'id' => 'CIE_CIE10_ID3_C',
    'link' => true,
    'width' => '10%',
    'name' => 'codigo_relad_c',
  ),
  'codigo_relacionado' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CODIGO_RELACIONADO',
    'id' => 'CIE_CIE10_ID2_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'codigo_relacionado',
  ),
  'tel_informador' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_TEL_INFORMADOR',
    'width' => '10%',
    'default' => false,
    'name' => 'tel_informador',
  ),
  'tipo_servicio' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_TIPO_SERVICIO',
    'width' => '10%',
    'name' => 'tipo_servicio',
  ),
  'cargo_informador' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CARGO_INFORMADOR',
    'width' => '10%',
    'default' => false,
    'name' => 'cargo_informador',
  ),
  'celular_informador' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_CELULAR_INFORMADOR',
    'width' => '10%',
    'default' => false,
    'name' => 'celular_informador',
  ),
  'profesional' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PROFESIONAL',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'profesional',
  ),
  'codigo_diagnostico' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CODIGO_DIAGNOSTICO',
    'id' => 'CIE_CIE10_ID1_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'codigo_diagnostico',
  ),
  'estado' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'name' => 'estado',
  ),
  'prioridad' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PRIORIDAD',
    'width' => '10%',
    'name' => 'prioridad',
  ),
  'cod_diagnostico' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_COD_DIAGNOSTICO',
    'id' => 'CIE_CIE10_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'cod_diagnostico',
  ),
  'fecha_envio' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_ENVIO',
    'width' => '10%',
    'default' => false,
    'name' => 'fecha_envio',
  ),
  'apellidos_informador_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_APELLIDOS_INFORMADOR',
    'width' => '10%',
    'name' => 'apellidos_informador_c',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
    'name' => 'description',
  ),
  'primer_nombre' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMER_NOMBRE',
    'width' => '10%',
    'default' => false,
    'name' => 'primer_nombre',
  ),
  'primer_apellido' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMER_APELLIDO',
    'width' => '10%',
    'default' => false,
    'name' => 'primer_apellido',
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
    'name' => 'modified_by_name',
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
    'name' => 'created_by_name',
  ),
  'nombre_informador' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NOMBRE_INFORMADOR',
    'width' => '10%',
    'default' => false,
    'name' => 'nombre_informador',
  ),
);
