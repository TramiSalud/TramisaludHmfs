<?php
$popupMeta = array (
    'moduleMain' => 'Contact',
    'varName' => 'CONTACT',
    'orderBy' => 'contacts.first_name, contacts.last_name',
    'whereClauses' => array (
  'first_name' => 'contacts.first_name',
  'last_name' => 'contacts.last_name',
  'apellidos_c' => 'contacts_cstm.apellidos_c',
  'tipocontacto_c' => 'contacts_cstm.tipocontacto_c',
  'name' => 'contacts.name',
),
    'searchInputs' => array (
  0 => 'first_name',
  1 => 'last_name',
  4 => 'apellidos_c',
  5 => 'tipocontacto_c',
  7 => 'name',
),
    'create' => array (
  'formBase' => 'ContactFormBase.php',
  'formBaseClass' => 'ContactFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'ContactSave',
  ),
  'createButton' => 'LNK_NEW_CONTACT',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'last_name' => 
  array (
    'name' => 'last_name',
    'width' => '10%',
  ),
  'first_name' => 
  array (
    'name' => 'first_name',
    'width' => '10%',
  ),
  'apellidos_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_APELLIDOS',
    'width' => '10%',
    'name' => 'apellidos_c',
  ),
  'tipocontacto_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TIPOCONTACTO',
    'width' => '10%',
    'name' => 'tipocontacto_c',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
      3 => 'account_name',
      4 => 'account_id',
    ),
    'name' => 'name',
  ),
  'LAST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'last_name',
  ),
  'FIRST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'first_name',
  ),
  'APELLIDOS_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_APELLIDOS',
    'width' => '10%',
    'name' => 'apellidos_c',
  ),
  'TIPOCONTACTO_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TIPOCONTACTO',
    'width' => '10%',
    'name' => 'tipocontacto_c',
  ),
),
);
