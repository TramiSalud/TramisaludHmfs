<?php
$module_name = 'gbi_egreso_centro_regulador';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
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
            'name' => 'paciente',
            'studio' => 'visible',
            'label' => 'LBL_PACIENTE',
          ),
          1 => 
          array (
            'name' => 'nombres_apepaciente',
            'label' => 'LBL_NOMBRES_APEPACIENTE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'edad_paciente',
            'label' => 'LBL_EDAD_PACIENTE',
          ),
          1 => 
          array (
            'name' => 'tele_paciente',
            'label' => 'LBL_TELE_PACIENTE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'aseguradora_p',
            'studio' => 'visible',
            'label' => 'LBL_ASEGURADORA_P',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'area_servicio',
            'label' => 'LBL_AREA_SERVICIO',
          ),
          1 => 
          array (
            'name' => 'espec_requerida',
            'studio' => 'visible',
            'label' => 'LBL_ESPEC_REQUERIDA',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'diagnostico_clini',
            'studio' => 'visible',
            'label' => 'LBL_DIAGNOSTICO_CLINI',
          ),
          1 => 
          array (
            'name' => 'descrip_dig',
            'label' => 'LBL_DESCRIP_DIG',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ayuda_diag_clinica',
            'studio' => 'visible',
            'label' => 'LBL_AYUDA_DIAG_CLINICA',
          ),
          1 => 
          array (
            'name' => 'cups_clinica',
            'label' => 'LBL_CUPS_CLINICA',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'nombre_acompa',
            'label' => 'LBL_NOMBRE_ACOMPA',
          ),
          1 => 
          array (
            'name' => 'telefono_fijo',
            'label' => 'LBL_TELEFONO_FIJO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'celular_acom',
            'label' => 'LBL_CELULAR_ACOM',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'institucion_asi_ips',
            'studio' => 'visible',
            'label' => 'LBL_INSTITUCION_ASI_IPS',
          ),
          1 => 
          array (
            'name' => 'fecha_hora_cita',
            'label' => 'LBL_FECHA_HORA_CITA',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'valor',
            'label' => 'LBL_VALOR',
          ),
          1 => 
          array (
            'name' => 'copago',
            'studio' => 'visible',
            'label' => 'LBL_COPAGO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'observacion_1',
            'studio' => 'visible',
            'label' => 'LBL_OBSERVACION_1',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'institucion_asign',
            'studio' => 'visible',
            'label' => 'LBL_INSTITUCION_ASIGN',
          ),
          1 => 
          array (
            'name' => 'codigo_autorizado',
            'studio' => 'visible',
            'label' => 'LBL_CODIGO_AUTORIZADO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'funcionario_eps',
            'label' => 'LBL_FUNCIONARIO_EPS',
          ),
          1 => 
          array (
            'name' => 'registro_medico',
            'studio' => 'visible',
            'label' => 'LBL_REGISTRO_MEDICO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'nombre_medicos',
            'label' => 'LBL_NOMBRE_MEDICOS',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'tipo_am',
            'studio' => 'visible',
            'label' => 'LBL_TIPO_AM',
          ),
          1 => 
          array (
            'name' => 'institucional',
            'label' => 'LBL_INSTITUCIONAL',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'eps_a',
            'studio' => 'visible',
            'label' => 'LBL_EPS_A',
          ),
          1 => 
          array (
            'name' => 'tele_1',
            'label' => 'LBL_TELE_1',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tel_2',
            'label' => 'LBL_TEL_2',
          ),
          1 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'observaciones',
            'studio' => 'visible',
            'label' => 'LBL_OBSERVACIONES',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'fecha_hora_entrega',
            'label' => 'LBL_FECHA_HORA_ENTREGA',
          ),
          1 => 
          array (
            'name' => 'firma_centro_r',
            'label' => 'LBL_FIRMA_CENTRO_R',
          ),
        ),
      ),
    ),
  ),
);
?>
