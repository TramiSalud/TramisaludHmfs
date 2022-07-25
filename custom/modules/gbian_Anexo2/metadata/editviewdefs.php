<?php
$module_name = 'gbian_Anexo2';
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
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL10' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
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
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'prestador',
            'studio' => 'visible',
            'label' => 'LBL_PRESTADOR',
          ),
        ),
      ),
      'lbl_editview_panel10' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'eps',
            'studio' => 'visible',
            'label' => 'LBL_EPS',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'eps_eps_id_c',
                'name' => 'eps',
                'emailanexo3' => 'correo_pagador_c',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'correo_pagador_c',
            'label' => 'LBL_CORREO_PAGADOR',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fecha_envio',
            'label' => 'LBL_FECHA_ENVIO',
            'type' => 'readOnly',
          ),
          1 => 
          array (
            'name' => 'forma_envio',
            'studio' => 'visible',
            'label' => 'LBL_FORMA_ENVIO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fecha_seg',
            'label' => 'LBL_FECHA_SEG',
          ),
          1 => 
          array (
            'name' => 'gestor_externo_c',
            'studio' => 'visible',
            'label' => 'LBL_GESTOR_EXTERNO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'paciente_remitido_c',
            'studio' => 'visible',
            'label' => 'LBL_PACIENTE_REMITIDO',
          ),
          1 => 
          array (
            'name' => 'responsable_seguim_c',
            'studio' => 'visible',
            'label' => 'LBL_RESPONSABLE_SEGUIM',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'fecha_ingreso_c',
            'label' => 'LBL_FECHA_INGRESO',
          ),
          1 => 
          array (
            'name' => 'clasificacion_c',
            'studio' => 'visible',
            'label' => 'LBL_CLASIFICACION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
            'customCode' => '<textarea name="description" id="description" maxlength="500" rows="5" cols="100">{$fields.description.value }</textarea>',
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
            'name' => 'gbian_anexo2_accounts_name',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'gbian_anexo2_accountsaccounts_ida',
                'name' => 'gbian_anexo2_accounts_name',
                'primernombre_c' => 'primer_nombre',
                'segundonombre_c' => 'segundo_nombre',
                'primerapellido_c' => 'primer_apellido',
                'segundoapellido_c' => 'segundo_apellido',
                'celular_c' => 'celular_pte',
                'email1' => 'correo',
              ),
            ),
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'origen_atencion',
            'studio' => 'visible',
            'label' => 'LBL_ORIGEN_ATENCION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'prestador_remite_c',
            'studio' => 'visible',
            'label' => 'LBL_PRESTADOR_REMITE',
          ),
        ),
      ),
      'lbl_editview_panel8' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'codigo_relad_c',
            'studio' => 'visible',
            'label' => 'LBL_CODIGO_RELAD',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'cie_cie10_id3_c',
                'name' => 'codigo_relad_c',
                'description' => 'descripciondiagnostico0_c',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'descripciondiagnostico0_c',
            'label' => 'LBL_DESCRIPCIONDIAGNOSTICO0',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cod_diagnostico',
            'studio' => 'visible',
            'label' => 'LBL_COD_DIAGNOSTICO',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'cie_cie10_id_c',
                'name' => 'cod_diagnostico',
                'description' => 'descripciondediagnostico1_c',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'descripciondediagnostico1_c',
            'label' => 'LBL_DESCRIPCIONDEDIAGNOSTICO1',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'codigo_diagnostico',
            'studio' => 'visible',
            'label' => 'LBL_CODIGO_DIAGNOSTICO',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'cie_cie10_id1_c',
                'name' => 'codigo_diagnostico',
                'description' => 'descripciondediagnostico2_c',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'descripciondediagnostico2_c',
            'label' => 'LBL_DESCRIPCIONDEDIAGNOSTICO2',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'codigo_relacionado',
            'studio' => 'visible',
            'label' => 'LBL_CODIGO_RELACIONADO',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'cie_cie10_id2_c',
                'name' => 'codigo_relacionado',
                'description' => 'descripciondediagnostico3_c',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'descripciondediagnostico3_c',
            'label' => 'LBL_DESCRIPCIONDEDIAGNOSTICO3',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'destino_pte',
            'studio' => 'visible',
            'label' => 'LBL_DESTINO_PTE',
          ),
        ),
      ),
      'lbl_editview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'nombre_informador',
            'label' => 'LBL_NOMBRE_INFORMADOR',
            'customCode' => '<input name="nombre_informador" id="nombre_informador" size="30" maxlength="100" 
			type="text" value="{$fields.nombre_informador.value}">',
          ),
          1 => 
          array (
            'name' => 'apellidos_informador_c',
            'label' => 'LBL_APELLIDOS_INFORMADOR',
            'customCode' => '<input name="apellidos_informador_c" id="apellidos_informador_c" size="30" maxlength="100" 
			type="text" value="{$fields.apellidos_informador_c.value}">',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cargo_informador',
            'label' => 'LBL_CARGO_INFORMADOR',
            'customCode' => '<input name="cargo_informador" id="cargo_informador" size="30" maxlength="100" 
			type="text" value="{$fields.cargo_informador.value}">',
          ),
          1 => 
          array (
            'name' => 'tel_informador',
            'label' => 'LBL_TEL_INFORMADOR',
            'customCode' => '<input name="tel_informador" id="tel_informador" size="30" maxlength="100" 
			type="text" value="{$fields.tel_informador.value}">',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ext',
            'label' => 'LBL_EXT',
            'customCode' => '<input name="ext" id="ext" size="30" maxlength="100" 
			type="text" value="{$fields.ext.value}">',
          ),
          1 => 
          array (
            'name' => 'cel_informador_c',
            'label' => 'LBL_CEL_INFORMADOR',
            'customCode' => '<input name="cel_informador_c" id="cel_informador_c" size="30" maxlength="100" 
	     		type="text" value="{$fields.cel_informador_c.value}">',
          ),
        ),
      ),
    ),
  ),
);
?>
