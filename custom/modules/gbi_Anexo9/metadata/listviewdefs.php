<?php
$module_name = 'gbi_Anexo9';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ACCOUNTS_GBI_ANEXO9_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_GBI_ANEXO9_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_GBI_ANEXO9_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'PRIMERNOMBRE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMERNOMBRE',
    'width' => '10%',
    'default' => true,
  ),
  'SEGUNDONOMBRE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SEGUNDONOMBRE',
    'width' => '10%',
    'default' => true,
  ),
  'PRIMERAPELLIDO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMERAPELLIDO',
    'width' => '10%',
    'default' => true,
  ),
  'SEGUNDOAPELLIDO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SEGUNDOAPELLIDO',
    'width' => '10%',
    'default' => true,
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
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
  ),
);
?>