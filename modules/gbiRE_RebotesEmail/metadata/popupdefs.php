<?php
$popupMeta = array (
    'moduleMain' => 'gbiRE_RebotesEmail',
    'varName' => 'gbiRE_RebotesEmail',
    'orderBy' => 'gbire_rebotesemail.name',
    'whereClauses' => array (
  'name' => 'gbire_rebotesemail.name',
  'cedula' => 'gbire_rebotesemail.cedula',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'cedula',
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
  'cedula' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CEDULA',
    'width' => '10%',
    'name' => 'cedula',
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
  ),
  'CEDULA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CEDULA',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'NUMEROREBOTES' => 
  array (
    'type' => 'int',
    'label' => 'LBL_NUMEROREBOTES',
    'width' => '10%',
    'default' => true,
  ),
),
);
