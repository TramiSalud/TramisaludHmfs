<?php
$module_name = 'gbiA4_Anexo4';
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/modules/gbiA4_Anexo4/custom_view.js',
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
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'fecha_recibida_c',
            'label' => 'LBL_FECHA_RECIBIDA',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'gbian_anexo2_gbia4_anexo4_1_name',
            'label' => 'LBL_GBIAN_ANEXO2_GBIA4_ANEXO4_1_FROM_GBIAN_ANEXO2_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'gbia4_anexo4_gbia3_anexo3_name',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'accounts_gbia4_anexo4_1_name',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'ubicacion_paciente_c',
            'studio' => 'visible',
            'label' => 'LBL_UBICACION_PACIENTE',
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
            'name' => 'prestador_servicio',
            'studio' => 'visible',
            'label' => 'LBL_PRESTADOR_SERVICIO',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'diagnostico_principal_c',
            'studio' => 'visible',
            'label' => 'LBL_DIAGNOSTICO_PRINCIPAL',
	    'displayParams' =>
	    array (
		   'field_to_name_array' =>
		   array (
			 'id' => 'cie_cie10_id_c',
			 'name' => 'diagnostico_principal_c',
			 'description' => 'descripcion_diagnostico_pp_c',
			 ),
		   ),
          ),
          1 => 
          array (
            'name' => 'descripcion_diagnostico_pp_c',
            'label' => 'LBL_DESCRIPCION_DIAGNOSTICO_PP',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'diagnostico_secundario_c',
            'studio' => 'visible',
            'label' => 'LBL_DIAGNOSTICO_SECUNDARIO',
	    'displayParams' =>
	    array (
		   'field_to_name_array' =>
		   array (
			  'id' => 'cie_cie10_id1_c',
			  'name' => 'diagnostico_secundario_c',
			  'description' => 'descripcion_diagnostico_sec_c',
			  ),
		   ),
          ),
          1 => 
          array (
            'name' => 'descripcion_diagnostico_sec_c',
            'label' => 'LBL_DESCRIPCION_DIAGNOSTICO_SEC',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'diagnostico_adicional_c',
            'studio' => 'visible',
            'label' => 'LBL_DIAGNOSTICO_ADICIONAL',
	    'displayParams' =>
	    array (
		   'field_to_name_array' =>
		   array(
			 'id' => 'cie_cie10_id2_c',
			 'name' => 'diagnostico_adicional_c',
			 'description' => 'descripcion_diagnostico_ad_c',
			 ),
		   ),
          ),
          1 => 
          array (
            'name' => 'descripcion_diagnostico_ad_c',
            'label' => 'LBL_DESCRIPCION_DIAGNOSTICO_AD',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'porcentaje_servicio',
            'label' => 'LBL_PORCENTAJE_SERVICIO',
          ),
          1 => 
          array (
            'name' => 'semanas_afiliacion',
            'label' => 'LBL_SEMANAS_AFILIACION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'reclamo_tiquete',
            'label' => 'LBL_RECLAMO_TIQUETE',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'concepto',
            'studio' => 'visible',
            'label' => 'LBL_CONCEPTO',
          ),
          1 => 
          array (
            'name' => 'valor_pesos',
            'label' => 'LBL_VALOR_PESOS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'porcentaje',
            'label' => 'LBL_PORCENTAJE',
          ),
          1 => 
          array (
            'name' => 'maximo_valor',
            'label' => 'LBL_MAXIMO_VALOR',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'nombquienautoriza_c',
            'label' => 'LBL_NOMBQUIENAUTORIZA',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'indicativoquienautoriza_c',
            'label' => 'LBL_INDICATIVOQUIENAUTORIZA',
          ),
          1 => 
          array (
            'name' => 'cargoquienautoriza_c',
            'label' => 'LBL_CARGOQUIENAUTORIZA',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'numeroquienautoriza_c',
            'label' => 'LBL_NUMEROQUIENAUTORIZA',
          ),
          1 => 
          array (
            'name' => 'celquienautoriza_c',
            'label' => 'LBL_CELQUIENAUTORIZA',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'extensionquienautoriza_c',
            'label' => 'LBL_EXTENSIONQUIENAUTORIZA',
          ),
        ),
      ),
    ),
  ),
);
?>
