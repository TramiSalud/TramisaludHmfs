<?php
$popupMeta = array (
    'moduleMain' => 'gbi_anexo3npos',
    'varName' => 'gbi_anexo3npos',
    'orderBy' => 'gbi_anexo3npos.name',
    'whereClauses' => array (
  'name' => 'gbi_anexo3npos.name',
),
    'searchInputs' => array (
  0 => 'gbi_anexo3npos_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'ACCOUNTS_GBI_ANEXO3NPOS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_GBI_ANEXO3NPOS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_GBI_ANEXO3NPOS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'accounts_gbi_anexo3npos_1_name',
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
  'ESPECIALISTA' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ESPECIALISTA',
    'id' => 'ESP_ESPECIALISTA_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'especialista',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_entered',
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
