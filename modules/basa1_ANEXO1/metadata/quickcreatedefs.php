<?php
$module_name = 'basa1_ANEXO1';
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
          'type' => 'readonly',
          ),
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
            'label' => 'LBL_BASA1_ANEXO1_ACCOUNTS_FROM_ACCOUNTS_TITLE',
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
            'customCode' => '<textarea name="description" id="description" maxlength="500" rows="5" cols="100">{$fields.description.value }</textarea>',
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
