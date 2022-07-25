<?php
$module_name = 'tms_TMS_CentralAutorizaciones';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '8%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'TIPO_DE_TAREA' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TIPO_DE_TAREA',
    'width' => '15%',
  ),
  'ESTADO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_DE_VENCIMIENTO' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_DE_VENCIMIENTO',
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
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => true,
  ),
  'ASIGNAR_A_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ASIGNAR_A',
    'width' => '10%',
  ),
  'ASIGNAR_AC_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ASIGNAR_AC',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
  ),
);
?>
