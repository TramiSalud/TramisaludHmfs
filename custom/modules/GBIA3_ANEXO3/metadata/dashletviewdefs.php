<?php
$dashletData['GBIA3_ANEXO3Dashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'accounts_gbia3_anexo3_1_name' => 
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
$dashletData['GBIA3_ANEXO3Dashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'accounts_gbia3_anexo3_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_GBIA3_ANEXO3_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_GBIA3_ANEXO3_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
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
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => true,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'fechaenviosolicitud' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHAENVIOSOLICITUD',
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
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'fechaseguinicial' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHASEGUINICIAL',
    'width' => '10%',
    'default' => false,
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
  'segundoapellido_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_SEGUNDOAPELLIDO',
    'width' => '10%',
  ),
  'formaenvisolicitud' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_FORMAENVISOLICITUD',
    'width' => '10%',
    'default' => false,
  ),
  'telefono_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_TELEFONO_C',
    'width' => '10%',
  ),
  'segundonombre_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_SEGUNDONOMBRE',
    'width' => '10%',
  ),
  'hora' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_HORA',
    'width' => '10%',
    'default' => false,
  ),
  'enviadopor' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ENVIADOPOR',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
  ),
  'telefonosolicitante' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_TELEFONOSOLICITANTE',
    'width' => '10%',
    'default' => false,
  ),
  'responsableseguimiento' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_RESPONSABLESEGUIMIENTO',
    'id' => 'USER_ID1_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
  ),
  'prioridadatencion' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PRIORIDADATENCION',
    'width' => '10%',
    'default' => false,
  ),
  'guia' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_GUIA',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'tiposerviciosolicitado' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TIPOSERVICIOSOLICITADO',
    'width' => '10%',
    'default' => false,
  ),
  'generartarea' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_GENERARTAREA',
    'width' => '10%',
  ),
  'origenatencion' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ORIGENATENCION',
    'width' => '10%',
    'default' => false,
  ),
  'ubicacion' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_UBICACION',
    'width' => '10%',
    'default' => false,
  ),
  'servicio' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SERVICIO',
    'width' => '10%',
    'default' => false,
  ),
  'cama' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CAMA',
    'width' => '10%',
    'default' => false,
  ),
  'rebotado_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_REBOTADO',
    'width' => '10%',
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
  ),
  'justificacionclinica' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_JUSTIFICACIONCLINICA',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'nombresolicitante' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NOMBRESOLICITANTE',
    'width' => '10%',
    'default' => false,
  ),
  'celularsolicitante_c' => 
  array (
    'type' => 'phone',
    'default' => false,
    'label' => 'LBL_CELULARSOLICITANTE',
    'width' => '10%',
  ),
  'primerapellido_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_PRIMERAPELLIDO',
    'width' => '10%',
  ),
  'primernombre_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_PRIMERNOMBRE',
    'width' => '10%',
  ),
  'pacienremitido_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_PACIENREMITIDO',
    'width' => '10%',
  ),
  'numero_reintentos_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_NUMERO_REINTENTOS',
    'width' => '10%',
  ),
  'motivoconsulta_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_MOTIVOCONSULTA',
    'width' => '10%',
  ),
  'marcado_enviar_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_MARCADO_ENVIAR',
    'width' => '10%',
  ),
  'gestorexterno_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_GESTOREXTERNO',
    'id' => 'USER_ID2_C',
    'link' => true,
    'width' => '10%',
  ),
  'fuenteorden_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_FUENTEORDEN',
    'width' => '10%',
  ),
  'especialista_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ESPECIALISTA',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'decodigorelacionado_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DECODIGORELACIONADO',
    'width' => '10%',
  ),
  'fecha_envio_correo_c' => 
  array (
    'type' => 'datetimecombo',
    'default' => false,
    'label' => 'LBL_FECHA_ENVIO_CORREO',
    'width' => '10%',
  ),
  'extensionsolicitante_c' => 
  array (
    'type' => 'phone',
    'default' => false,
    'label' => 'LBL_EXTENSIONSOLICITANTE',
    'width' => '10%',
  ),
  'estado_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
  ),
  'decodigoprincipal_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DECODIGOPRINCIPAL',
    'width' => '10%',
  ),
  'correo_enviado_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_CORREO_ENVIADO',
    'width' => '10%',
  ),
  'codiagnostico2_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CODIAGNOSTICO2',
    'width' => '10%',
  ),
  'cargactirela_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CARGACTIRELA',
    'width' => '10%',
  ),
  'celular' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_CELULAR',
    'width' => '10%',
    'default' => false,
  ),
  'correoemail' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CORREOEMAIL',
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
    'name' => 'created_by_name',
  ),
  'especialist_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ESPECIALIST',
    'id' => 'ESP_ESPECIALISTA_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'prioridadatencion2' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PRIORIDADATENCION2',
    'width' => '10%',
    'default' => false,
  ),
  'apellidossolicitante_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_APELLIDOSSOLICITANTE',
    'width' => '10%',
  ),
  'cargoactividadrelacion' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CARGOACTIVIDADRELACION',
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
);
