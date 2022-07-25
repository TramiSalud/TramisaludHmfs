<?php
$module_name = 'basa1_ANEXO1';
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
		  4 => array (
            'customCode' => '<input title="GenerarPDF" type="submit" name="button" value="Generar PDF" onClick="window.open(\'index.php?module=basa1_ANEXO1&action=sugarpdf&record={$fields.id.value}&sugarpdf=pdf\');">',
            'name' => 'GenerarPDF',
            'label' => 'Generar PDF',
          ),
          5 => 
          array (
            'customCode' => '<input title="EnviarCorreo" type="submit" name="button" value="Enviar Correo" onClick="location.href=\'index.php?module=basa1_ANEXO1&action=EnviarCorreo&record={$fields.id.value}\';">',
            'name' => 'EnviarCorreo',
            'label' => 'Enviar Correo',
          ),
          6 => 
          array (
            'customCode' => '<input title="GenerarTRAZA" type="submit" name="button" value="Generar Trazabilidad" onClick="window.open(\'index.php?module=basa1_ANEXO1&action=GenerarTraza&record={$fields.id.value}\');">',
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
        'LBL_EDITVIEW_PANEL6' => 
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
        1 => 
        array (
          0 => 
          array (
            'name' => 'fecha',
            'label' => 'LBL_FECHA',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
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
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'eps',
            'studio' => 'visible',
            'label' => 'LBL_EPS',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'usuarionoexiste',
            'label' => 'LBL_USUARIONOEXISTE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'datosincorrectos',
            'label' => 'LBL_DATOSINCORRECTOS',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'basa1_anexo1_accounts_name',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'primerapellido',
            'label' => 'LBL_PRIMERAPELLIDO',
          ),
          1 => 
          array (
            'name' => 'primerapellidotext',
            'label' => 'LBL_PRIMERAPELLIDOTEXT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'segundoapellido',
            'label' => 'LBL_SEGUNDOAPELLIDO',
          ),
          1 => 
          array (
            'name' => 'segundoapellidotext',
            'label' => 'LBL_SEGUNDOAPELLIDOTEXT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'primernombre',
            'label' => 'LBL_PRIMERNOMBRE',
          ),
          1 => 
          array (
            'name' => 'primernombretext',
            'label' => 'LBL_PRIMERNOMBRETEXT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'segundonombre',
            'label' => 'LBL_SEGUNDONOMBRE',
          ),
          1 => 
          array (
            'name' => 'segundonombretext',
            'label' => 'LBL_SEGUNDONOMBRETEXT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'tipodocumento',
            'label' => 'LBL_TIPODOCUMENTO',
          ),
          1 => 
          array (
            'name' => 'tipodocumentolist',
            'studio' => 'visible',
            'label' => 'LBL_TIPODOCUMENTOLIST',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'numdocumentoidentificacion',
            'label' => 'LBL_NUMDOCUMENTOIDENTIFICACION',
          ),
          1 => 
          array (
            'name' => 'nrodocumentotext',
            'label' => 'LBL_NRODOCUMENTOTEXT',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'fechanacimiento',
            'label' => 'LBL_FECHANACIMIENTO',
          ),
          1 => 
          array (
            'name' => 'fechanacimientodate',
            'label' => 'LBL_FECHANACIMIENTODATE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
      ),
    ),
  ),
);
?>
