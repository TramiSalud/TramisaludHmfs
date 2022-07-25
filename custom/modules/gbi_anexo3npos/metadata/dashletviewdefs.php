<?php
$dashletData['gbi_anexo3nposDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'accounts_gbi_anexo3npos_1_name' => 
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
$dashletData['gbi_anexo3nposDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'accounts_gbi_anexo3npos_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_GBI_ANEXO3NPOS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_GBI_ANEXO3NPOS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'accounts_gbi_anexo3npos_1_name',
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
  'primernombre' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMERNOMBRE',
    'width' => '10%',
    'default' => false,
    'name' => 'primernombre',
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
  'nombresolicitante' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NOMBRESOLICITANTE',
    'width' => '10%',
    'default' => false,
    'name' => 'nombresolicitante',
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
  'cargoactividadrelacion' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CARGOACTIVIDADRELACION',
    'width' => '10%',
    'default' => false,
    'name' => 'cargoactividadrelacion',
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
  'descripcioncodigodiag_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DESCRIPCIONCODIGODIAG',
    'width' => '10%',
    'name' => 'descripcioncodigodiag_c',
  ),
  'correo_enviado_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_CORREO_ENVIADO',
    'width' => '10%',
    'name' => 'correo_enviado_c',
  ),
  'responsableseguimiento_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_RESPONSABLESEGUIMIENTO',
    'id' => 'USER_ID1_C',
    'link' => true,
    'width' => '10%',
    'name' => 'responsableseguimiento_c',
  ),
  'rebotado_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_REBOTADO',
    'width' => '10%',
    'name' => 'rebotado_c',
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
  'dxcodigodgrelacionado_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DXCODIGODGRELACIONADO',
    'width' => '10%',
    'name' => 'dxcodigodgrelacionado_c',
  ),
  'dxcodigodgnprincip_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DXCODIGODGNPRINCIP',
    'width' => '10%',
    'name' => 'dxcodigodgnprincip_c',
  ),
  'correoemail' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CORREOEMAIL',
    'width' => '10%',
    'default' => false,
    'name' => 'correoemail',
  ),
  'paciente' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PACIENTE',
    'id' => 'ACCOUNT_ID1_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'paciente',
  ),
  'celularsolicitante' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CELULARSOLICITANTE',
    'width' => '10%',
    'default' => false,
    'name' => 'celularsolicitante',
  ),
  'extensionsolicitante' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EXTENSIONSOLICITANTE',
    'width' => '10%',
    'default' => false,
    'name' => 'extensionsolicitante',
  ),
  'codigodiagnostico' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CODIGODIAGNOSTICO',
    'id' => 'CIE_CIE10_ID1_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'codigodiagnostico',
  ),
  'telefonosolicitante' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TELEFONOSOLICITANTE',
    'width' => '10%',
    'default' => false,
    'name' => 'telefonosolicitante',
  ),
  'codigodiagnosticorelacion' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CODIGODIAGNOSTICORELACION',
    'id' => 'CIE_CIE10_ID2_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'codigodiagnosticorelacion',
  ),
  'justificacionclinica' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_JUSTIFICACIONCLINICA',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
    'name' => 'justificacionclinica',
  ),
  'codigodiagnosticoppal' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CODIGODIAGNOSTICOPPAL',
    'id' => 'CIE_CIE10_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'codigodiagnosticoppal',
  ),
  'cama' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CAMA',
    'width' => '10%',
    'default' => false,
    'name' => 'cama',
  ),
  'servicio' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SERVICIO',
    'width' => '10%',
    'default' => false,
    'name' => 'servicio',
  ),
  'ubicacion' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_UBICACION',
    'width' => '10%',
    'default' => false,
    'name' => 'ubicacion',
  ),
  'prioridadatencion2' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PRIORIDADATENCION2',
    'width' => '10%',
    'default' => false,
    'name' => 'prioridadatencion2',
  ),
  'tiposerviciosolicitado' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TIPOSERVICIOSOLICITADO',
    'width' => '10%',
    'default' => false,
    'name' => 'tiposerviciosolicitado',
  ),
  'fuenteorden' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_FUENTEORDEN',
    'width' => '10%',
    'default' => false,
    'name' => 'fuenteorden',
  ),
  'motivoconsulta' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_MOTIVOCONSULTA',
    'width' => '10%',
    'default' => false,
    'name' => 'motivoconsulta',
  ),
  'celular' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_CELULAR',
    'width' => '10%',
    'default' => false,
    'name' => 'celular',
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
  'gestorexterno' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_GESTOREXTERNO',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'gestorexterno',
  ),
  'formaenvisolicitud' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_FORMAENVISOLICITUD',
    'width' => '10%',
    'default' => false,
    'name' => 'formaenvisolicitud',
  ),
  'fechaseguinicial' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHASEGUINICIAL',
    'width' => '10%',
    'default' => false,
    'name' => 'fechaseguinicial',
  ),
  'fechaenviosolicitud' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHAENVIOSOLICITUD',
    'width' => '10%',
    'default' => false,
    'name' => 'fechaenviosolicitud',
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
  'apellidossolicitante' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_APELLIDOSSOLICITANTE',
    'width' => '10%',
    'default' => false,
    'name' => 'apellidossolicitante',
  ),
  'pacientes' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PACIENTES',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'pacientes',
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
  'primerapellido' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMERAPELLIDO',
    'width' => '10%',
    'default' => false,
    'name' => 'primerapellido',
  ),
  'origenatencion' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ORIGENATENCION',
    'width' => '10%',
    'default' => false,
    'name' => 'origenatencion',
  ),
);
