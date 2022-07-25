<?php
$dashletData['IPS_IPSDashlet']['searchFields'] = array (
  'codigoips' => 
  array (
    'default' => '',
  ),
  'name' => 
  array (
    'default' => '',
  ),
  'tipodocumento' => 
  array (
    'default' => '',
  ),
  'nrodocumento' => 
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
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
  'contactoprincipal' => 
  array (
    'default' => '',
  ),
  'estado' => 
  array (
    'default' => '',
  ),
);
$dashletData['IPS_IPSDashlet']['columns'] = array (
  'codigoips' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CODIGOIPS',
    'width' => '10%',
    'default' => true,
    'name' => 'codigoips',
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'tipodocumento' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TIPODOCUMENTO',
    'width' => '10%',
    'default' => true,
    'name' => 'tipodocumento',
  ),
  'nrodocumento' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NRODOCUMENTO',
    'width' => '10%',
    'default' => true,
    'name' => 'nrodocumento',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'contactoprincipal' => 
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
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
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
