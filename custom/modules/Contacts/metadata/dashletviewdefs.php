<?php
$dashletData['ContactsDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'last_name' => 
  array (
    'default' => '',
  ),
  'first_name' => 
  array (
    'default' => '',
  ),
  'apellidos_c' => 
  array (
    'default' => '',
  ),
  'tipocontacto_c' => 
  array (
    'default' => '',
  ),
);
$dashletData['ContactsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '30%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
    ),
    'name' => 'name',
  ),
  'last_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'last_name',
  ),
  'first_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'first_name',
  ),
  'apellidos_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_APELLIDOS',
    'width' => '10%',
    'name' => 'apellidos_c',
  ),
  'tipocontacto_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TIPOCONTACTO',
    'width' => '10%',
    'name' => 'tipocontacto_c',
  ),
  'email1' => 
  array (
    'width' => '10%',
    'label' => 'LBL_EMAIL_ADDRESS',
    'sortable' => false,
    'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
    'name' => 'email1',
    'default' => false,
  ),
  'cargactirela_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CARGACTIRELA',
    'width' => '10%',
    'name' => 'cargactirela_c',
  ),
  'direccionprincipal_c' => 
  array (
    'type' => 'text',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_DIRECCIONPRINCIPAL',
    'sortable' => false,
    'width' => '10%',
    'name' => 'direccionprincipal_c',
  ),
  'extension_c' => 
  array (
    'type' => 'phone',
    'default' => false,
    'label' => 'LBL_EXTENSION',
    'width' => '10%',
    'name' => 'extension_c',
  ),
  'municipio_c' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_MUNICIPIO',
    'id' => 'MUN_MUNICIPIO_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'municipio_c',
  ),
  'telefonocelular_c' => 
  array (
    'type' => 'phone',
    'default' => false,
    'label' => 'LBL_TELEFONOCELULAR',
    'width' => '10%',
    'name' => 'telefonocelular_c',
  ),
  'tipodocumento_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_TIPODOCUMENTO',
    'width' => '10%',
    'name' => 'tipodocumento_c',
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
  'registromedico_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_REGISTROMEDICO',
    'width' => '10%',
    'name' => 'registromedico_c',
  ),
  'telefonoprincipal_c' => 
  array (
    'type' => 'phone',
    'default' => false,
    'label' => 'LBL_TELEFONOPRINCIPAL',
    'width' => '10%',
    'name' => 'telefonoprincipal_c',
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
  'estado_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'name' => 'estado_c',
  ),
);
