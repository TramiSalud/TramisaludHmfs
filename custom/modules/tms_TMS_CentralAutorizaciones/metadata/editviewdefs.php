<?php
$module_name = 'tms_TMS_CentralAutorizaciones';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
            'type' => 'readonly',
          ),
          1 => 
          array (
            'name' => 'estado',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fecha_de_vencimiento',
            'label' => 'LBL_FECHA_DE_VENCIMIENTO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'accounts_tms_tms_centralautorizaciones_1_name',
            'label' => 'LBL_ACCOUNTS_TMS_TMS_CENTRALAUTORIZACIONES_1_FROM_ACCOUNTS_TITLE',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tipo_de_tarea',
            'studio' => 'visible',
            'label' => 'LBL_TIPO_DE_TAREA',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'pagadores_responsables_c',
            'label' => 'LBL_PAGADORES_RESPONSABLES',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'cups_solicitados_c',
            'label' => 'LBL_CUPS_SOLICITADOS ',
          ),
        ),
        6 => 
        array (
          0 => 'description',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'asignar_a_c',
            'studio' => 'visible',
            'label' => 'LBL_ASIGNAR_A',
          ),
          1 => 
          array (
            'name' => 'asignar_ac_c',
            'studio' => 'visible',
            'label' => 'LBL_ASIGNAR_AC',
          ),
        ),
      ),
    ),
  ),
);
?>
