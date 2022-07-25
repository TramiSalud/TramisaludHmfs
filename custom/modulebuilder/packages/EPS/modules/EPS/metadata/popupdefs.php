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
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'odigoeps',
  5 => 'tipodocumento',
  6 => 'nrodocumento',
  8 => 'estado',
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
  ),
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'TIPODOCUMENTO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TIPODOCUMENTO',
    'width' => '10%',
    'default' => true,
  ),
  'NRODOCUMENTO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NRODOCUMENTO',
    'width' => '10%',
    'default' => true,
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
  ),
  'ESTADO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'default' => true,
  ),
),
);
