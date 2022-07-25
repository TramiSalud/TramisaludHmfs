<?php
$module_name = 'gbian_Anexo2';
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
          4 => 
          array (
            'customCode' => '<input title="GenerarPDF" type="submit" name="button" value="Generar PDF Anexo 2" onClick="window.open(\'index.php?module=gbian_Anexo2&action=GenerarPdf&record={$fields.id.value}\')";>',
            'name' => 'GenerarPDF',
            'label' => 'Generar PDF',
          ),
          5 => 
          array (
            'customCode' => '<input title="EnviarCorreo" type="submit" name="button" value="Enviar Correo" onClick="location.href=\'index.php?module=gbian_Anexo2&action=EnviarCorreo&record={$fields.id.value}\'";>',
            'name' => 'EnviarCorreo',
            'label' => 'Enviar Correo',
          ),
          6 => 
          array (
            'customCode' => '<input title="GenerarTRAZA" type="submit" name="button" value="Generar Trazabilidad" onClick="window.open(\'index.php?module=gbian_Anexo2&action=GenerarTraza&record={$fields.id.value}\')";>',
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
          0 => 'name',
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
          ),
          1 => 
          array (
            'name' => 'apellidos_informador_c',
            'label' => 'LBL_APELLIDOS_INFORMADOR',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cargo_informador',
            'label' => 'LBL_CARGO_INFORMADOR',
          ),
          1 => 
          array (
            'name' => 'tel_informador',
            'label' => 'LBL_TEL_INFORMADOR',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ext',
            'label' => 'LBL_EXT',
          ),
          1 => 
          array (
            'name' => 'cel_informador_c',
            'label' => 'LBL_CEL_INFORMADOR',
          ),
        ),
      ),
    ),
  ),
);
?>
