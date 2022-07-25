<?php
$popupMeta = array (
    'moduleMain' => 'IPS_IPS',
    'varName' => 'IPS_IPS',
    'orderBy' => 'ips_ips.name',
    'whereClauses' => array (
  'name' => 'ips_ips.name',
  'codigoips' => 'ips_ips.codigoips',
  'tipodocumento' => 'ips_ips.tipodocumento',
  'nrodocumento' => 'ips_ips.nrodocumento',
  'contactoprincipal' => 'ips_ips.contactoprincipal',
  'estado' => 'ips_ips.estado',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'codigoips',
  5 => 'tipodocumento',
  6 => 'nrodocumento',
  7 => 'contactoprincipal',
  8 => 'estado',
),
    'searchdefs' => array (
  'codigoips' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CODIGOIPS',
    'width' => '10%',
    'name' => 'codigoips',
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
  'contactoprincipal' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CONTACTOPRINCIPAL',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'contactoprincipal',
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
  'CODIGOIPS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CODIGOIPS',
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
