<?php
$module_name = 'GBIA3_ANEXO3';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL7' => 
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
        'LBL_EDITVIEW_PANEL8' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL6' => 
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
          1 => '',
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
          1 => '',
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'eps',
            'studio' => 'visible',
            'label' => 'LBL_EPS',
          ),
          1 => 
          array (
            'name' => 'formaenvisolicitud',
            'studio' => 'visible',
            'label' => 'LBL_FORMAENVISOLICITUD',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fechaenviosolicitud',
            'label' => 'LBL_FECHAENVIOSOLICITUD',
          ),
          1 => 
          array (
            'name' => 'gestorexterno_c',
            'studio' => 'visible',
            'label' => 'LBL_GESTOREXTERNO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fechaseguinicial',
            'label' => 'LBL_FECHASEGUINICIAL',
          ),
          1 => 
          array (
            'name' => 'responsableseguimiento',
            'studio' => 'visible',
            'label' => 'LBL_RESPONSABLESEGUIMIENTO',
          ),
        ),
      ),
      'lbl_editview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'accounts_gbia3_anexo3_1_name',
            'label' => 'LBL_ACCOUNTS_GBIA3_ANEXO3_1_FROM_ACCOUNTS_TITLE',
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
            'name' => 'origenatencion',
            'studio' => 'visible',
            'label' => 'LBL_ORIGENATENCION',
          ),
          1 => 
          array (
            'name' => 'motivoconsulta_c',
            'studio' => 'visible',
            'label' => 'LBL_MOTIVOCONSULTA',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'tiposerviciosolicitado',
            'studio' => 'visible',
            'label' => 'LBL_TIPOSERVICIOSOLICITADO',
          ),
          1 => 
          array (
            'name' => 'fuenteorden_c',
            'studio' => 'visible',
            'label' => 'LBL_FUENTEORDEN',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'prioridadatencion2',
            'studio' => 'visible',
            'label' => 'LBL_PRIORIDADATENCION2',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ubicacion',
            'studio' => 'visible',
            'label' => 'LBL_UBICACION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'servicio',
            'label' => 'LBL_SERVICIO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'cama',
            'label' => 'LBL_CAMA',
          ),
        ),
      ),
      'lbl_editview_panel8' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'justificacionclinica',
            'studio' => 'visible',
            'label' => 'LBL_JUSTIFICACIONCLINICA',
            'customCode' => '<textarea name="justificacionclinica" id="justificacionclinica" maxlength="500" rows="5" cols="100">{$fields.justificacionclinica.value }</textarea>',
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
            'name' => 'codigodiagnosticoppal',
            'studio' => 'visible',
            'label' => 'LBL_CODIGODIAGNOSTICOPPAL',
            'displayParams' => 
            array (
            'field_to_name_array' => 
              array (
                'id' => 'cie_cie10_id_c',
                'name' => 'codigodiagnosticoppal',
                'description' => 'decodigoprincipal_c',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'decodigoprincipal_c',
            'label' => 'LBL_DECODIGOPRINCIPAL',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'codigodiagnostico',
            'studio' => 'visible',
            'label' => 'LBL_CODIGODIAGNOSTICO',
            'displayParams' => 
            array (
            'field_to_name_array' => 
              array (
                'id' => 'cie_cie10_id1_c',
                'name' => 'codigodiagnostico',
                'description' => 'codiagnostico2_c',
              ),
            ),

          ),
          1 => 
          array (
            'name' => 'codiagnostico2_c',
            'label' => 'LBL_CODIAGNOSTICO2',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'codigodiagnosticorelacion',
            'studio' => 'visible',
            'label' => 'LBL_CODIGODIAGNOSTICORELACION',
            'displayParams' => 
            array (
            'field_to_name_array' => 
              array (
                'id' => 'cie_cie10_id2_c',
                'name' => 'codigodiagnosticorelacion',
                'description' => 'decodigorelacionado_c',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'decodigorelacionado_c',
            'label' => 'LBL_DECODIGORELACIONADO',
          ),
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'especialist_c',
            'studio' => 'visible',
            'label' => 'LBL_ESPECIALIST',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'esp_especialista_id_c',
                'name' => 'especialist_c',
                'nombres' => 'nombresolicitante',
                'apellidos' => 'apellidossolicitante_c',
                'cargo' => 'cargoactividadrelacion',
                'telppal' => 'telefonosolicitante',
                'extension' => 'extensionsolicitante_c',
                'telcel' => 'celularsolicitante_c',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'nombresolicitante',
            'label' => 'LBL_NOMBRESOLICITANTE',
            'customCode' => '<input name="nombresolicitante" id="nombresolicitante" size="30" maxlength="100" 
			     type="text" value="{$fields.nombresolicitante.value}" OnFocus="this.blur()">',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'telefonosolicitante',
            'label' => 'LBL_TELEFONOSOLICITANTE',
            'customCode' => '<input name="telefonosolicitante" id="telefonosolicitante" size="30" maxlength="100" 
			type="text" value="{$fields.telefonosolicitante.value}" OnFocus="this.blur()">',
          ),
          1 => 
          array (
            'name' => 'apellidossolicitante_c',
            'label' => 'LBL_APELLIDOSSOLICITANTE',
            'customCode' => '<input name="apellidossolicitante_c" id="apellidossolicitante_c" size="30" maxlength="100" 
			type="text" value="{$fields.apellidossolicitante_c.value}" OnFocus="this.blur()">',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'extensionsolicitante_c',
            'label' => 'LBL_EXTENSIONSOLICITANTE',
            'customCode' => '<input name="extensionsolicitante_c" id="extensionsolicitante_c" size="30" maxlength="100" 
			type="text" value="{$fields.extensionsolicitante_c.value}" OnFocus="this.blur()">',
          ),
          1 => 
          array (
            'name' => 'cargoactividadrelacion',
            'label' => 'LBL_CARGOACTIVIDADRELACION',
            'customCode' => '<input name="cargoactividadrelacion" id="cargoactividadrelacion" size="30" maxlength="100" 
			type="text" value="{$fields.cargoactividadrelacion.value}" OnFocus="this.blur()">',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'celularsolicitante_c',
            'label' => 'LBL_CELULARSOLICITANTE',
            'customCode' => '<input name="celularsolicitante_c" id="celularsolicitante_c" size="30" maxlength="100" 
			type="text" value="{$fields.celularsolicitante_c.value}" OnFocus="this.blur()">',
          ),
        ),
      ),
    ),
  ),
);
?>