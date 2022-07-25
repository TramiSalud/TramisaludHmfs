<?php
$popupMeta = array (
    'moduleMain' => 'basa1_ANEXO1',
    'varName' => 'basa1_ANEXO1',
    'orderBy' => 'basa1_anexo1.name',
    'whereClauses' => array (
  'name' => 'basa1_anexo1.name',
  'prestador' => 'basa1_anexo1.prestador',
  'eps' => 'basa1_anexo1.eps',
  'fecha' => 'basa1_anexo1.fecha',
  'created_by_name' => 'basa1_anexo1.created_by_name',
  'basa1_anexo1_accounts_name' => 'basa1_anexo1.basa1_anexo1_accounts_name',
),
    'searchInputs' => array (
  1 => 'name',
  5 => 'prestador',
  6 => 'eps',
  7 => 'fecha',
  8 => 'created_by_name',
  9 => 'basa1_anexo1_accounts_name',
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
  'basa1_anexo1_accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_BASA1_ANEXO1_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'BASA1_ANEXO1_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'name' => 'basa1_anexo1_accounts_name',
  ),
  'prestador' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PRESTADOR',
    'id' => 'IPS_IPS_ID_C',
    'link' => true,
    'width' => '10%',
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
    'name' => 'eps',
  ),
  'fecha' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_FECHA',
    'width' => '10%',
    'name' => 'fecha',
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'name' => 'created_by_name',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
  ),
  'BASA1_ANEXO1_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_BASA1_ANEXO1_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'BASA1_ANEXO1_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'PRESTADOR' => 
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
  'EPS' => 
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
  'FECHA' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_FECHA',
    'width' => '10%',
    'default' => true,
    'name' => 'fecha',
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
    'name' => 'created_by_name',
  ),
),
);
