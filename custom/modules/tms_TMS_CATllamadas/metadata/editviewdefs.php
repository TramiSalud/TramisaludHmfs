<?php
$module_name = 'tms_TMS_CATllamadas';
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
      'syncDetailEditViews' => false,
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
            'name' => 'tipo_de_llamada',
            'studio' => 'visible',
            'label' => 'LBL_TIPO_DE_LLAMADA',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'duracion',
            'label' => 'LBL_DURACION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'telefono_que_llamo_c',
            'label' => 'LBL_TELEFONO_QUE_LLAMO',
          ),
          1 => 
          array (
            'name' => 'con_quien_hablo',
            'label' => 'LBL_CON_QUIEN_HABLO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'accounts_tms_tms_catllamadas_1_name',
          ),
        ),
        5 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
