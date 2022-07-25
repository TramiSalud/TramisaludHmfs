<?php
$module_name = 'GBIA3_ANEXO3';
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
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
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
            'name' => 'hora',
            'label' => 'LBL_HORA',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'guia',
            'studio' => 'visible',
            'label' => 'LBL_GUIA',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'gbia3_anexo3_accounts_name',
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
            'name' => 'enviadopor',
            'studio' => 'visible',
            'label' => 'LBL_ENVIADOPOR',
          ),
          1 => 
          array (
            'name' => 'prioridadatencion',
            'studio' => 'visible',
            'label' => 'LBL_PRIORIDADATENCION',
          ),
        ),
        3 => 
        array (
          1 => 
          array (
            'name' => 'fechaseguinicial',
            'label' => 'LBL_FECHASEGUINICIAL',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'generartarea',
            'label' => 'LBL_GENERARTAREA',
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
          1 => 
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
            'name' => 'nombresolicitante',
            'label' => 'LBL_NOMBRESOLICITANTE',
          ),
          1 => 
          array (
            'name' => 'celular',
            'label' => 'LBL_CELULAR',
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
            'name' => 'correoemail',
            'label' => 'LBL_CORREOEMAIL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'cargoactividadrelacion',
            'label' => 'LBL_CARGOACTIVIDADRELACION',
          ),
          1 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
?>
