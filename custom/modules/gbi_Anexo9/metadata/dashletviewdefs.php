<?php
$dashletData['gbi_Anexo9Dashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'accounts_gbi_anexo9_1_name' => 
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
  'created_by_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['gbi_Anexo9Dashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'accounts_gbi_anexo9_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_GBI_ANEXO9_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_GBI_ANEXO9_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'accounts_gbi_anexo9_1_name',
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
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
    'name' => 'created_by_name',
  ),
  'servicio_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_SERVICIO_C',
    'width' => '10%',
    'name' => 'servicio_c',
  ),
  'rebotado_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_REBOTADO',
    'width' => '10%',
    'name' => 'rebotado_c',
  ),
  'especialista' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ESPECIALISTA',
    'id' => 'ESP_ESPECIALISTA_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'especialista',
  ),
  'numero_reintentos_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_NUMERO_REINTENTOS',
    'width' => '10%',
    'name' => 'numero_reintentos_c',
  ),
  'marcado_enviar_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_MARCADO_ENVIAR',
    'width' => '10%',
    'name' => 'marcado_enviar_c',
  ),
  'fecha_envio_correo_c' => 
  array (
    'type' => 'datetimecombo',
    'default' => false,
    'label' => 'LBL_FECHA_ENVIO_CORREO',
    'width' => '10%',
    'name' => 'fecha_envio_correo_c',
  ),
  'dxcups_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DXCUPS',
    'width' => '10%',
    'name' => 'dxcups_c',
  ),
  'dxcups3_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DXCUPS3',
    'width' => '10%',
    'name' => 'dxcups3_c',
  ),
  'dxcups2_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DXCUPS2',
    'width' => '10%',
    'name' => 'dxcups2_c',
  ),
  'dxcodigodignostico2_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DXCODIGODIGNOSTICO2',
    'width' => '10%',
    'name' => 'dxcodigodignostico2_c',
  ),
  'dxcodigodiagnostico_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DXCODIGODIAGNOSTICO',
    'width' => '10%',
    'name' => 'dxcodigodiagnostico_c',
  ),
  'dxcodigodiagnostico3_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DXCODIGODIAGNOSTICO3',
    'width' => '10%',
    'name' => 'dxcodigodiagnostico3_c',
  ),
  'correo_enviado_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_CORREO_ENVIADO',
    'width' => '10%',
    'name' => 'correo_enviado_c',
  ),
  'cama_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CAMA_C',
    'width' => '10%',
    'name' => 'cama_c',
  ),
  'codigo_diagnostico_3_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CODIGO_DIAGNOSTICO_3',
    'id' => 'CIE_CIE10_ID2_C',
    'link' => true,
    'width' => '10%',
    'name' => 'codigo_diagnostico_3_c',
  ),
  'cups3_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CUPS3',
    'id' => 'GBICU_CUPS_ID2_C',
    'link' => true,
    'width' => '10%',
    'name' => 'cups3_c',
  ),
  'codigo_de_diagnostico_2_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CODIGO_DE_DIAGNOSTICO_2',
    'id' => 'CIE_CIE10_ID1_C',
    'link' => true,
    'width' => '10%',
    'name' => 'codigo_de_diagnostico_2_c',
  ),
  'cups2_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CUPS2',
    'id' => 'GBICU_CUPS_ID1_C',
    'link' => true,
    'width' => '10%',
    'name' => 'cups2_c',
  ),
  'codigo_diagnostico_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CODIGO_DIAGNOSTICO_C',
    'id' => 'CIE_CIE10_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'codigo_diagnostico_c',
  ),
  'servicio_soli' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SERVICIO_SOLI',
    'width' => '10%',
    'default' => false,
    'name' => 'servicio_soli',
  ),
  'servicio_soli_refe' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_SERVICIO_SOLI_REFE',
    'id' => 'GBICU_CUPS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'servicio_soli_refe',
  ),
  'cargoactividad' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CARGOACTIVIDAD',
    'width' => '10%',
    'default' => false,
    'name' => 'cargoactividad',
  ),
  'apellidoespecialistaso' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_APELLIDOESPECIALISTASO',
    'width' => '10%',
    'default' => false,
    'name' => 'apellidoespecialistaso',
  ),
  'nombreespecialistaso' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NOMBREESPECIALISTASO',
    'width' => '10%',
    'default' => false,
    'name' => 'nombreespecialistaso',
  ),
  'celularsolicitante' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_CELULARSOLICITANTE',
    'width' => '10%',
    'default' => false,
    'name' => 'celularsolicitante',
  ),
  'extensionsolicitante' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_EXTENSIONSOLICITANTE',
    'width' => '10%',
    'default' => false,
    'name' => 'extensionsolicitante',
  ),
  'telefonoespecialista' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_TELEFONOESPECIALISTA',
    'width' => '10%',
    'default' => false,
    'name' => 'telefonoespecialista',
  ),
  'correoemail' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CORREOEMAIL',
    'width' => '10%',
    'default' => false,
    'name' => 'correoemail',
  ),
  'segundoapellido' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SEGUNDOAPELLIDO',
    'width' => '10%',
    'default' => false,
    'name' => 'segundoapellido',
  ),
  'segundonombre' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SEGUNDONOMBRE',
    'width' => '10%',
    'default' => false,
    'name' => 'segundonombre',
  ),
  'celular' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_CELULAR',
    'width' => '10%',
    'default' => false,
    'name' => 'celular',
  ),
  'primerapellido' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMERAPELLIDO',
    'width' => '10%',
    'default' => false,
    'name' => 'primerapellido',
  ),
  'primernombre' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMERNOMBRE',
    'width' => '10%',
    'default' => false,
    'name' => 'primernombre',
  ),
  'ciudad' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CIUDAD',
    'id' => 'MUN_MUNICIPIO_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'ciudad',
  ),
  'dpto' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_DPTO',
    'id' => 'DEP_DEPARTAMENTOS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'dpto',
  ),
  'telefono' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_TELEFONO',
    'width' => '10%',
    'default' => false,
    'name' => 'telefono',
  ),
  'direccion_r' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DIRECCION_R',
    'width' => '10%',
    'default' => false,
    'name' => 'direccion_r',
  ),
  'primer_nom' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMER_NOM',
    'width' => '10%',
    'default' => false,
    'name' => 'primer_nom',
  ),
  'tipo_documento' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TIPO_DOCUMENTO',
    'width' => '10%',
    'default' => false,
    'name' => 'tipo_documento',
  ),
  'documento_respon' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DOCUMENTO_RESPON',
    'width' => '10%',
    'default' => false,
    'name' => 'documento_respon',
  ),
  'segundo_apellido' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SEGUNDO_APELLIDO',
    'width' => '10%',
    'default' => false,
    'name' => 'segundo_apellido',
  ),
  'primer_apellido' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMER_APELLIDO',
    'width' => '10%',
    'default' => false,
    'name' => 'primer_apellido',
  ),
  'sdo_nombre' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SDO_NOMBRE',
    'width' => '10%',
    'default' => false,
    'name' => 'sdo_nombre',
  ),
  'servicio_referencia' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SERVICIO_REFERENCIA',
    'width' => '10%',
    'default' => false,
    'name' => 'servicio_referencia',
  ),
  'servicio_solicita' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SERVICIO_SOLICITA',
    'width' => '10%',
    'default' => false,
    'name' => 'servicio_solicita',
  ),
  'datos_responsable' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DATOS_RESPONSABLE',
    'width' => '10%',
    'default' => false,
    'name' => 'datos_responsable',
  ),
  'estado' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'default' => false,
    'name' => 'estado',
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => false,
    'name' => 'assigned_user_name',
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
  'date_modified' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
    'name' => 'date_modified',
  ),
);
