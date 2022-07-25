<?php
$dashletData['AccountsDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'primernombre_c' => 
  array (
    'default' => '',
  ),
  'segundonombre_c' => 
  array (
    'default' => '',
  ),
  'primerapellido_c' => 
  array (
    'default' => '',
  ),
  'segundoapellido_c' => 
  array (
    'default' => '',
  ),
  'estado_c' => 
  array (
    'default' => '',
  ),
  'tipocobertura_c' => 
  array (
    'default' => '',
  ),
  'epsactual_c' => 
  array (
    'default' => '',
  ),
  'ipsactual_c' => 
  array (
    'default' => '',
  ),
);
$dashletData['AccountsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'primernombre_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PRIMERNOMBRE',
    'width' => '10%',
    'name' => 'primernombre_c',
  ),
  'segundonombre_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_SEGUNDONOMBRE',
    'width' => '10%',
    'name' => 'segundonombre_c',
  ),
  'primerapellido_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PRIMERAPELLIDO',
    'width' => '10%',
    'name' => 'primerapellido_c',
  ),
  'segundoapellido_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_SEGUNDOAPELLIDO',
    'width' => '10%',
    'name' => 'segundoapellido_c',
  ),
  'estado_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'name' => 'estado_c',
  ),
  'tipocobertura_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TIPOCOBERTURA',
    'width' => '10%',
    'name' => 'tipocobertura_c',
  ),
  'epsactual_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_EPSACTUAL',
    'id' => 'EPS_EPS_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'epsactual_c',
  ),
  'ipsactual_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_IPSACTUAL',
    'id' => 'IPS_IPS_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'ipsactual_c',
  ),
  'actividadindependiente_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_ACTIVIDADINDEPENDIENTE',
    'width' => '10%',
    'name' => 'actividadindependiente_c',
  ),
  'cargoempresa_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CARGOEMPRESA',
    'width' => '10%',
    'name' => 'cargoempresa_c',
  ),
  'actividadeconomica_c' => 
  array (
    'type' => 'multienum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ACTIVIDADECONOMICA',
    'width' => '10%',
    'name' => 'actividadeconomica_c',
  ),
  'ciudad_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CIUDAD',
    'id' => 'MUN_MUNICIPIO_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'ciudad_c',
  ),
  'comuna_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_COMUNA',
    'id' => 'COM_COMUNAS_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'comuna_c',
  ),
  'telefonopersonal_c' => 
  array (
    'type' => 'phone',
    'default' => false,
    'label' => 'LBL_TELEFONOPERSONAL',
    'width' => '10%',
    'name' => 'telefonopersonal_c',
  ),
  'tipo_documento_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_TIPO_DOCUMENTO',
    'width' => '10%',
    'name' => 'tipo_documento_c',
  ),
  'pasatiempofavorito_c' => 
  array (
    'type' => 'multienum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PASATIEMPOFAVORITO',
    'width' => '10%',
    'name' => 'pasatiempofavorito_c',
  ),
  'telefonoempresa_c' => 
  array (
    'type' => 'phone',
    'default' => false,
    'label' => 'LBL_TELEFONOEMPRESA',
    'width' => '10%',
    'name' => 'telefonoempresa_c',
  ),
  'telefonoadicional_c' => 
  array (
    'type' => 'phone',
    'default' => false,
    'label' => 'LBL_TELEFONOADICIONAL',
    'width' => '10%',
    'name' => 'telefonoadicional_c',
  ),
  'pais_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PAIS',
    'width' => '10%',
    'name' => 'pais_c',
  ),
  'origen_c' => 
  array (
    'type' => 'multienum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ORIGEN',
    'width' => '10%',
    'name' => 'origen_c',
  ),
  'observacionesmercadeo_c' => 
  array (
    'type' => 'text',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_OBSERVACIONESMERCADEO',
    'sortable' => false,
    'width' => '10%',
    'name' => 'observacionesmercadeo_c',
  ),
  'numerohijos_c' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_NUMEROHIJOS',
    'width' => '10%',
    'name' => 'numerohijos_c',
  ),
  'numeroformulario_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_NUMEROFORMULARIO',
    'width' => '10%',
    'name' => 'numeroformulario_c',
  ),
  'municipio_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_MUNICIPIO',
    'id' => 'MUN_MUNICIPIO_ID1_C',
    'link' => true,
    'width' => '10%',
    'name' => 'municipio_c',
  ),
  'lugartrabajo_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_LUGARTRABAJO',
    'width' => '10%',
    'name' => 'lugartrabajo_c',
  ),
  'jornadacitas_c' => 
  array (
    'type' => 'multienum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_JORNADACITAS',
    'width' => '10%',
    'name' => 'jornadacitas_c',
  ),
  'leydata_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_LEYDATA',
    'width' => '10%',
    'name' => 'leydata_c',
  ),
  'genero_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_GENERO',
    'width' => '10%',
    'name' => 'genero_c',
  ),
  'fechanacimiento_c' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_FECHANACIMIENTO',
    'width' => '10%',
    'name' => 'fechanacimiento_c',
  ),
  'estratoeconomico_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ESTRATOECONOMICO',
    'width' => '10%',
    'name' => 'estratoeconomico_c',
  ),
  'extensionempresa_c' => 
  array (
    'type' => 'phone',
    'default' => false,
    'label' => 'LBL_EXTENSIONEMPRESA',
    'width' => '10%',
    'name' => 'extensionempresa_c',
  ),
  'estadocivil_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ESTADOCIVIL',
    'width' => '10%',
    'name' => 'estadocivil_c',
  ),
  'direcciontredsocial_c' => 
  array (
    'type' => 'url',
    'default' => false,
    'label' => 'LBL_DIRECCIONTREDSOCIAL',
    'width' => '10%',
    'name' => 'direcciontredsocial_c',
  ),
  'direccionfredsocial_c' => 
  array (
    'type' => 'url',
    'default' => false,
    'label' => 'LBL_DIRECCIONFREDSOCIAL',
    'width' => '10%',
    'name' => 'direccionfredsocial_c',
  ),
  'direccionresidencia_c' => 
  array (
    'type' => 'text',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_DIRECCIONRESIDENCIA',
    'sortable' => false,
    'width' => '10%',
    'name' => 'direccionresidencia_c',
  ),
  'departamento_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_DEPARTAMENTO',
    'id' => 'DEP_DEPARTAMENTOS_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'departamento_c',
  ),
  'clasificacionmercadeo_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CLASIFICACIONMERCADEO',
    'width' => '10%',
    'name' => 'clasificacionmercadeo_c',
  ),
  'celular_c' => 
  array (
    'type' => 'phone',
    'default' => false,
    'label' => 'LBL_CELULAR',
    'width' => '10%',
    'name' => 'celular_c',
  ),
  'beneficios_c' => 
  array (
    'type' => 'text',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_BENEFICIOS',
    'sortable' => false,
    'width' => '10%',
    'name' => 'beneficios_c',
  ),
  'barrio_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_BARRIO',
    'id' => 'BAR_BARRIO_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'barrio_c',
  ),
  'acudiente_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ACUDIENTE',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'acudiente_c',
  ),
  'email1' => 
  array (
    'type' => 'varchar',
    'studio' => 
    array (
      'editField' => true,
      'searchview' => false,
    ),
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'default' => false,
    'name' => 'email1',
  ),
);
