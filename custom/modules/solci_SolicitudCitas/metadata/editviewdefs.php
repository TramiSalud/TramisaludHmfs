<?php
$module_name = 'solci_SolicitudCitas';
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
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL8' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL7' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
            'type' => 'readonly',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fechasolicitud',
            'label' => 'LBL_FECHASOLICITUD',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fechacenregulador',
            'label' => 'LBL_FECHACENREGULADOR',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'accounts_solci_solicitudcitas_1_name',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'accounts_solci_solicitudcitas_1accounts_ida',
                'name' => 'accounts_solci_solicitudcitas_1_name',
                'primernombre_c' => 'nombresapellpaciente',
                'segundonombre_c' => 'segundonombre_c',
                'primerapellido_c' => 'primerapellido_c',
                'segundoapellido_c' => 'segundoapellido_c',
                'telefonopersonal_c' => 'telpersonal',
              ),
            ),
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'nombresapellpaciente',
            'label' => 'LBL_NOMBRESAPELLPACIENTE',
          ),
          1 => 
          array (
            'name' => 'segundonombre_c',
            'label' => 'LBL_SEGUNDONOMBRE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'primerapellido_c',
            'label' => 'LBL_PRIMERAPELLIDO',
          ),
          1 => 
          array (
            'name' => 'segundoapellido_c',
            'label' => 'LBL_SEGUNDOAPELLIDO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'telpersonal',
            'label' => 'LBL_TELPERSONAL',
          ),
          1 => 
          array (
            'name' => 'teladicional',
            'label' => 'LBL_TELADICIONAL',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'acompanante',
            'label' => 'LBL_ACOMPANANTE',
          ),
          1 => 
          array (
            'name' => 'telacompanante',
            'label' => 'LBL_TELACOMPANANTE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'obsadicionacompanan_c',
            'studio' => 'visible',
            'label' => 'LBL_OBSADICIONACOMPANAN',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'munpac_c',
            'studio' => 'visible',
            'label' => 'LBL_MUNPAC',
          ),
          1 => 
          array (
            'name' => 'l_sexo_c',
            'studio' => 'visible',
            'label' => 'LBL_L_SEXO',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'fechanac',
            'label' => 'LBL_FECHANAC',
          ),
          1 => 
          array (
            'name' => 'edad',
            'label' => 'LBL_EDAD',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'eps',
            'studio' => 'visible',
            'label' => 'LBL_EPS',
          ),
          1 => 
          array (
            'name' => 'cama',
            'label' => 'LBL_CAMA',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'diagnostico',
            'studio' => 'visible',
            'label' => 'LBL_DIAGNOSTICO',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'cie_cie10_id_c',
                'name' => 'diagnostico',
                'description' => 'cie10descripcion',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'cie10descripcion',
            'label' => 'LBL_CIE10DESCRIPCION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'codigodediagnostico2_c',
            'studio' => 'visible',
            'label' => 'LBL_CODIGODEDIAGNOSTICO2',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'cie_cie10_id1_c',
                'name' => 'codigodediagnostico2_c',
                'description' => 'codigodediagnostico2descripc_c',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'codigodediagnostico2descripc_c',
            'label' => 'LBL_CODIGODEDIAGNOSTICO2DESCRIPC',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'codigodiagnostico3_c',
            'studio' => 'visible',
            'label' => 'LBL_CODIGODIAGNOSTICO3',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'cie_cie10_id2_c',
                'name' => 'codigodiagnostico3_c',
                'description' => 'codigodiagnostico3descripcio_c',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'codigodiagnostico3descripcio_c',
            'label' => 'LBL_CODIGODIAGNOSTICO3DESCRIPCIO',
          ),
        ),
      ),
      'lbl_editview_panel8' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cup',
            'studio' => 'visible',
            'label' => 'LBL_CUP ',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'gbicu_cups_id_c',
                'name' => 'cup',
                'description' => 'cupdescripcion',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'cupdescripcion',
            'label' => 'LBL_CUPDESCRIPCION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cup2_c',
            'studio' => 'visible',
            'label' => 'LBL_CUP2',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'gbicu_cups_id_c',
                'name' => 'cup2_c',
                'description' => 'cup2_descripcion_c',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'cup2_descripcion_c',
            'label' => 'LBL_CUP2_DESCRIPCION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'cup3_c',
            'studio' => 'visible',
            'label' => 'LBL_CUP3',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'gbicu_cups_id2_c',
                'name' => 'cup3_c',
                'description' => 'cup3_descripcion_c',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'cup3_descripcion_c',
            'label' => 'LBL_CUP3_DESCRIPCION ',
          ),
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'especialista',
            'studio' => 'visible',
            'label' => 'LBL_ESPECIALISTA',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'esp_especialista_id_c',
                'name' => 'especialista',
                'nombres' => 'nombremedico',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'nombremedico',
            'label' => 'LBL_NOMBREMEDICO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'especilidadmedico_c',
            'studio' => 'visible',
            'label' => 'LBL_ESPECILIDADMEDICO',
          ),
        ),
      ),
      'lbl_editview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'infectocontagio',
            'studio' => 'visible',
            'label' => 'LBL_INFECTOCONTAGIO',
          ),
          1 => 
          array (
            'name' => 'enfinfectocontagio',
            'studio' => 'visible',
            'label' => 'LBL_ENFINFECTOCONTAGIO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'obsinfectocontagio',
            'studio' => 'visible',
            'label' => 'LBL_OBSINFECTOCONTAGIO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'aislamiento',
            'studio' => 'visible',
            'label' => 'LBL_AISLAMIENTO',
          ),
          1 => 
          array (
            'name' => 'obsaislamiento',
            'studio' => 'visible',
            'label' => 'LBL_OBSAISLAMIENTO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'pacientetienecateter',
            'studio' => 'visible',
            'label' => 'LBL_PACIENTETIENECATETER',
          ),
          1 => 
          array (
            'name' => 'selectpacientetienecateter',
            'studio' => 'visible',
            'label' => 'LBL_SELECTPACIENTETIENECATETER',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'obspacientetienecateter',
            'studio' => 'visible',
            'label' => 'LBL_OBSPACIENTETIENECATETER',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'escalaglasgow',
            'studio' => 'visible',
            'label' => 'LBL_ESCALAGLASGOW',
          ),
          1 => 
          array (
            'name' => 'valorglasgow',
            'studio' => 'visible',
            'label' => 'LBL_VALORGLASGOW',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'obsglasgow',
            'studio' => 'visible',
            'label' => 'LBL_OBSGLASGOW',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'pacientemoviliza_c',
            'studio' => 'visible',
            'label' => 'LBL_PACIENTEMOVILIZA',
          ),
          1 => 
          array (
            'name' => 'obstienemovilidad_c',
            'studio' => 'visible',
            'label' => 'LBL_OBSTIENEMOVILIDAD',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'tienemarcapasos',
            'studio' => 'visible',
            'label' => 'LBL_TIENEMARCAPASOS',
          ),
          1 => 
          array (
            'name' => 'obstienemarcapasos',
            'studio' => 'visible',
            'label' => 'LBL_OBSTIENEMARCAPASOS',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'tieneoxigeno',
            'studio' => 'visible',
            'label' => 'LBL_TIENEOXIGENO',
          ),
          1 => 
          array (
            'name' => 'obstieneoxigeno',
            'studio' => 'visible',
            'label' => 'LBL_OBSTIENEOXIGENO',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'tieneclaustrofobia',
            'studio' => 'visible',
            'label' => 'LBL_TIENECLAUSTROFOBIA',
          ),
          1 => 
          array (
            'name' => 'obstieneclaustrofobia',
            'studio' => 'visible',
            'label' => 'LBL_OBSTIENECLAUSTROFOBIA',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'realizadoexamen48h',
            'studio' => 'visible',
            'label' => 'LBL_REALIZADOEXAMEN48H',
          ),
          1 => 
          array (
            'name' => 'obsexamen48h',
            'studio' => 'visible',
            'label' => 'LBL_OBSEXAMEN48H',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'ambulancia',
            'studio' => 'visible',
            'label' => 'LBL_AMBULANCIA',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'peso_c',
            'label' => 'LBL_PESO',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'talla_c',
            'label' => 'LBL_TALLA',
          ),
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        16 => 
        array (
          0 => 
          array (
            'name' => 'enfermera_solicita_c',
            'studio' => 'visible',
            'label' => 'LBL_ENFERMERA_SOLICITA',
          ),
          1 => 
          array (
            'name' => 'firma_centro_regulador_c',
            'studio' => 'visible',
            'label' => 'LBL_FIRMA_CENTRO_REGULADOR',
          ),
        ),
        17 => 
        array (
          0 => 
          array (
            'name' => 'causaremision_c',
            'studio' => 'visible',
            'label' => 'LBL_CAUSAREMISION',
          ),
        ),
      ),
    ),
  ),
);
?>
