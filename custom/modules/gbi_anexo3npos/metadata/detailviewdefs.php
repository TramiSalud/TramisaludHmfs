<?php
$module_name = 'gbi_anexo3npos';
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
          //1 => 'DUPLICATE',
          2 => 'DELETE',
          //3 => 'FIND_DUPLICATES',
          4 => 
          array (
            'customCode' => '<input title="GenerarPDF" type="submit" name="button" value="Generar PDF Anexo 3 No Pos" 
			onClick="window.open(\'index.php?module=gbi_anexo3npos&action=GenerarPdf&record={$fields.id.value}\')";>',
            'name' => 'GenerarPDF',
            'label' => 'Generar PDF',
          ),
          5 => 
          array (
            'customCode' => '<input title="EnviarCorreo" type="submit" name="button" value="Enviar Correo" onClick="window.open(\'index.php?module=gbi_anexo3npos&action=EnviarCorreo&record={$fields.id.value}\')";>',
            'name' => 'EnviarCorreo',
            'label' => 'Enviar Correo',
          ),
          6 => 
          array (
            'customCode' => '<input title="GenerarTRAZA" type="submit" name="button" value="Generar Trazabilidad" onClick="window.open(\'index.php?module=gbi_anexo3npos&action=GenerarTraza&record={$fields.id.value}\')";>',
            'name' => 'GenerarTRAZA',
            'label' => 'Generar TRAZA',
          ),
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
          0 => 'name',
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'fecha_envio_correo_c',
            'label' => 'LBL_FECHA_ENVIO_CORREO',
          ),
          1 => 
          array (
            'name' => 'numero_reintentos_c',
            'label' => 'LBL_NUMERO_REINTENTOS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'correo_enviado_c',
            'label' => 'LBL_CORREO_ENVIADO',
          ),
          1 => 
          array (
            'name' => 'marcado_enviar_c',
            'label' => 'LBL_MARCADO_ENVIAR',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'rebotado_c',
            'label' => 'LBL_REBOTADO',
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
        1 => 
        array (
          0 => 
          array (
            'name' => 'primernombre',
            'label' => 'LBL_PRIMERNOMBRE',
          ),
          1 => 
          array (
            'name' => 'primerapellido',
            'label' => 'LBL_PRIMERAPELLIDO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'segundonombre',
            'label' => 'LBL_SEGUNDONOMBRE',
          ),
          1 => 
          array (
            'name' => 'segundoapellido',
            'label' => 'LBL_SEGUNDOAPELLIDO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'celular',
            'label' => 'LBL_CELULAR',
          ),
          1 => 
          array (
            'name' => 'correoemail',
            'label' => 'LBL_CORREOEMAIL',
          ),
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
          ),
          1 => 
          array (
            'name' => 'nombresolicitante',
            'label' => 'LBL_NOMBRESOLICITANTE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'telefonosolicitante',
            'label' => 'LBL_TELEFONOSOLICITANTE',
          ),
          1 => 
          array (
            'name' => 'apellidossolicitante',
            'label' => 'LBL_APELLIDOSSOLICITANTE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'extensionsolicitante',
            'label' => 'LBL_EXTENSIONSOLICITANTE',
          ),
          1 => 
          array (
            'name' => 'cargoactividadrelacion',
            'label' => 'LBL_CARGOACTIVIDADRELACION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'celularsolicitante',
            'label' => 'LBL_CELULARSOLICITANTE',
          ),
        ),
      ),
    ),
  ),
);
?>
