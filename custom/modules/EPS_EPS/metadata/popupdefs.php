<?php
$popupMeta = array (
    'moduleMain' => 'EPS_EPS',
    'varName' => 'EPS_EPS',
    'orderBy' => 'eps_eps.name',
    'whereClauses' => array (
  'name' => 'eps_eps.name',
  'odigoeps' => 'eps_eps.odigoeps',
  'tipodocumento' => 'eps_eps.tipodocumento',
  'nrodocumento' => 'eps_eps.nrodocumento',
  'estado' => 'eps_eps.estado',
  'correo' => 'eps_eps.correo',
  'emailanexo1' => 'eps_eps.emailanexo1',
  'emailanexo2' => 'eps_eps.emailanexo2',
  'emailanexo3' => 'eps_eps.emailanexo3',
  'emailanexo9_c' => 'eps_eps_cstm.emailanexo9_c',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'odigoeps',
  5 => 'tipodocumento',
  6 => 'nrodocumento',
  8 => 'estado',
  10 => 'correo',
  11 => 'emailanexo1',
  12 => 'emailanexo2',
  13 => 'emailanexo3',
  14 => 'emailanexo9_c',
),
    'searchdefs' => array (
  'odigoeps' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ODIGOEPS',
    'width' => '10%',
    'name' => 'odigoeps',
  ),
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'tipodocumento' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TIPODOCUMENTO',
    'width' => '10%',
    'name' => 'tipodocumento',
  ),
  'nrodocumento' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NRODOCUMENTO',
    'width' => '10%',
    'name' => 'nrodocumento',
  ),
  'correo' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CORREO',
    'width' => '10%',
    'name' => 'correo',
  ),
  'emailanexo1' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAILANEXO1',
    'width' => '10%',
    'name' => 'emailanexo1',
  ),
  'emailanexo2' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAILANEXO2',
    'width' => '10%',
    'name' => 'emailanexo2',
  ),
  'emailanexo3' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAILANEXO3',
    'width' => '10%',
    'name' => 'emailanexo3',
  ),
  'emailanexo9_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAILANEXO9',
    'width' => '10%',
    'name' => 'emailanexo9_c',
  ),
  'estado' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'name' => 'estado',
  ),
),
    'listviewdefs' => array (
  'ODIGOEPS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ODIGOEPS',
    'width' => '10%',
    'default' => true,
    'name' => 'odigoeps',
  ),
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
  ),
  'TIPODOCUMENTO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TIPODOCUMENTO',
    'width' => '10%',
    'default' => true,
    'name' => 'tipodocumento',
  ),
  'NRODOCUMENTO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NRODOCUMENTO',
    'width' => '10%',
    'default' => true,
    'name' => 'nrodocumento',
  ),
  'CONTACTOPRINCIPAL' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CONTACTOPRINCIPAL',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'contactoprincipal',
  ),
  'CORREO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CORREO',
    'width' => '10%',
    'default' => true,
  ),
  'EMAILANEXO1' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAILANEXO1',
    'width' => '10%',
    'default' => true,
  ),
  'EMAILANEXO2' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAILANEXO2',
    'width' => '10%',
    'default' => true,
  ),
  'EMAILANEXO3' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAILANEXO3',
    'width' => '10%',
    'default' => true,
  ),
  'EMAILANEXO9_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_EMAILANEXO9',
    'width' => '10%',
  ),
  'ESTADO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'default' => true,
    'name' => 'estado',
  ),
),
);
