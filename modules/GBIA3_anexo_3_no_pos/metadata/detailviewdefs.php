<?php
$module_name = 'GBIA3_anexo_3_no_pos';
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
      'syncDetailEditViews' => true,
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
            'name' => 'estado',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
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
            'name' => 'responsableseguimiento',
            'studio' => 'visible',
            'label' => 'LBL_RESPONSABLESEGUIMIENTO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fechaseguinicial',
            'label' => 'LBL_FECHASEGUINICIAL',
          ),
        ),
      ),
      'lbl_editview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'paciente',
            'studio' => 'visible',
            'label' => 'LBL_PACIENTE',
          ),
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
            'name' => 'segundonombre_c',
            'label' => 'LBL_SEGUNDONOMBRE_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'primerapellido',
            'label' => 'LBL_PRIMERAPELLIDO',
          ),
          1 => 
          array (
            'name' => 'segundoapellido',
            'label' => 'LBL_SEGUNDOAPELLIDO',
          ),
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
            'name' => 'tiposerviciosolicitado',
            'studio' => 'visible',
            'label' => 'LBL_TIPOSERVICIOSOLICITADO',
          ),
        ),
        1 => 
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
          1 => 
          array (
            'name' => 'servicio',
            'label' => 'LBL_SERVICIO',
          ),
        ),
        1 => 
        array (
          0 => 
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
            'name' => 'codigodiagnosticoppal',
            'studio' => 'visible',
            'label' => 'LBL_CODIGODIAGNOSTICOPPAL',
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
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'codigodiagnosticorelacion',
            'studio' => 'visible',
            'label' => 'LBL_CODIGODIAGNOSTICORELACION',
          ),
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'especialist',
            'studio' => 'visible',
            'label' => 'LBL_ESPECIALIST',
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
            'name' => 'celularsolicitante',
            'label' => 'LBL_CELULARSOLICITANTE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'correoemail',
            'label' => 'LBL_CORREOEMAIL',
          ),
          1 => 
          array (
            'name' => 'cargo_acti',
            'label' => 'LBL_CARGO_ACTI',
          ),
        ),
      ),
    ),
  ),
);
?>
