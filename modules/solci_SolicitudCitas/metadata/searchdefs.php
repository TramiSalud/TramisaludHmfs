<?php
$module_name = 'solci_SolicitudCitas';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'fechasolicitud' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_FECHASOLICITUD',
        'width' => '10%',
        'default' => true,
        'name' => 'fechasolicitud',
      ),
      'paciente' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PACIENTE',
        'id' => 'ACCOUNT_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'paciente',
      ),
    ),
    'advanced_search' => 
    array (
      'fechasolicitud' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_FECHASOLICITUD',
        'width' => '10%',
        'default' => true,
        'name' => 'fechasolicitud',
      ),
      'fechacenregulador' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_FECHACENREGULADOR',
        'width' => '10%',
        'default' => true,
        'name' => 'fechacenregulador',
      ),
      'paciente' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PACIENTE',
        'id' => 'ACCOUNT_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'paciente',
      ),
      'especialista' => 
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
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
