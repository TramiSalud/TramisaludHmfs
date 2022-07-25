<?php
$popupMeta = array (
    'moduleMain' => 'gbi_Anexo9',
    'varName' => 'gbi_Anexo9',
    'orderBy' => 'gbi_anexo9.name',
    'whereClauses' => array (
  'name' => 'gbi_anexo9.name',
  'eps' => 'gbi_anexo9.eps',
  'prestador' => 'gbi_anexo9.prestador',
  'especialista' => 'gbi_anexo9.especialista',
  'date_entered' => 'gbi_anexo9.date_entered',
  'created_by_name' => 'gbi_anexo9.created_by_name',
  'accounts_gbi_anexo9_1_name' => 'gbi_anexo9.accounts_gbi_anexo9_1_name',
),
    'searchInputs' => array (
  1 => 'name',
  5 => 'eps',
  6 => 'prestador',
  7 => 'especialista',
  8 => 'date_entered',
  9 => 'created_by_name',
  10 => 'accounts_gbi_anexo9_1_name',
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
  'accounts_gbi_anexo9_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_GBI_ANEXO9_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_GBI_ANEXO9_1ACCOUNTS_IDA',
    'width' => '10%',
    'name' => 'accounts_gbi_anexo9_1_name',
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
  'especialista' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ESPECIALISTA',
    'id' => 'ESP_ESPECIALISTA_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'especialista',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'name' => 'date_entered',
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
  'ACCOUNTS_GBI_ANEXO9_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_GBI_ANEXO9_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_GBI_ANEXO9_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'accounts_gbi_anexo9_1_name',
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
