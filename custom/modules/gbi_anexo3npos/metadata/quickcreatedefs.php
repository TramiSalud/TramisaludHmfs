<?php
$module_name = 'gbi_anexo3npos';
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
        'LBL_EDITVIEW_PANEL7' => 
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
        'LBL_EDITVIEW_PANEL9' => 
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
            'type' => 'readOnly',
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
            'name' => 'gestorexterno',
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
            'name' => 'responsableseguimiento_c',
            'studio' => 'visible',
            'label' => 'LBL_RESPONSABLESEGUIMIENTO',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'accounts_gbi_anexo3npos_1_name',
            'label' => 'LBL_ACCOUNTS_GBI_ANEXO3NPOS_1_FROM_ACCOUNTS_TITLE',
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
            'name' => 'origenatencion',
            'studio' => 'visible',
            'label' => 'LBL_ORIGENATENCION',
          ),
          1 => 
          array (
            'name' => 'motivoconsulta',
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
            'name' => 'fuenteorden',
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
      'lbl_editview_panel7' => 
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
                'description' => 'dxcodigodgnprincip_c',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'dxcodigodgnprincip_c',
            'label' => 'LBL_DXCODIGODGNPRINCIP',
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
                'description' => 'descripcioncodigodiag_c',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'descripcioncodigodiag_c',
            'label' => 'LBL_DESCRIPCIONCODIGODIAG',
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
                'description' => 'dxcodigodgrelacionado_c',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'dxcodigodgrelacionado_c',
            'label' => 'LBL_DXCODIGODGRELACIONADO',
          ),
        ),
      ),
      'lbl_editview_panel9' => 
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
                'nombres' => 'nombresolicitante',
                'apellidos' => 'apellidossolicitante',
                'cargo' => 'cargoactividadrelacion',
                'telppal' => 'telefonosolicitante',
                'extension' => 'extensionsolicitante',
                'telcel' => 'celularsolicitante',
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
            'name' => 'apellidossolicitante',
            'label' => 'LBL_APELLIDOSSOLICITANTE',
            'customCode' => '<input name="apellidossolicitante" id="apellidossolicitante" size="30" maxlength="100" 
			type="text" value="{$fields.apellidossolicitante.value}" OnFocus="this.blur()">',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'extensionsolicitante',
            'label' => 'LBL_EXTENSIONSOLICITANTE',
            'customCode' => '<input name="extensionsolicitante" id="extensionsolicitante" size="30" maxlength="100" 
			type="text" value="{$fields.extensionsolicitante.value}" OnFocus="this.blur()">',
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
            'name' => 'celularsolicitante',
            'label' => 'LBL_CELULARSOLICITANTE',
            'customCode' => '<input name="celularsolicitante" id="celularsolicitante" size="30" maxlength="100" 
			type="text" value="{$fields.celularsolicitante.value}" OnFocus="this.blur()">',
          ),
        ),
      ),
    ),
  ),
);
?>
