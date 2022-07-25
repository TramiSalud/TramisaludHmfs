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
          1 => 
          array (
            'name' => 'estado',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'gbian_anexo2_accounts_name',
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
          ),
          1 => 
          array (
            'name' => 'forma_envio',
            'studio' => 'visible',
            'label' => 'LBL_FORMA_ENVIO',
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
            'name' => 'gestor',
            'studio' => 'visible',
            'label' => 'LBL_GESTOR',
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
            'name' => 'responsable',
            'studio' => 'visible',
            'label' => 'LBL_RESPONSABLE',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
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
            'name' => 'primer_nombre',
            'label' => 'LBL_PRIMER_NOMBRE',
          ),
          1 => 
          array (
            'name' => 'segundo_nombre',
            'label' => 'LBL_SEGUNDO_NOMBRE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'primer_apellido',
            'label' => 'LBL_PRIMER_APELLIDO',
          ),
          1 => 
          array (
            'name' => 'segundo_apellido',
            'label' => 'LBL_SEGUNDO_APELLIDO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tel_informador',
            'label' => 'LBL_TEL_INFORMADOR',
          ),
          1 => 
          array (
            'name' => 'celular_pte',
            'label' => 'LBL_CELULAR_PTE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'correo',
            'label' => 'LBL_CORREO',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'tipo_servicio',
            'studio' => 'visible',
            'label' => 'LBL_TIPO_SERVICIO',
          ),
          1 => 
          array (
            'name' => 'prioridad',
            'studio' => 'visible',
            'label' => 'LBL_PRIORIDAD',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'origen_atencion',
            'studio' => 'visible',
            'label' => 'LBL_ORIGEN_ATENCION',
          ),
        ),
      ),
      'lbl_editview_panel8' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cod_diagnostico',
            'studio' => 'visible',
            'label' => 'LBL_COD_DIAGNOSTICO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'codigo_diagnostico',
            'studio' => 'visible',
            'label' => 'LBL_CODIGO_DIAGNOSTICO',
          ),
          1 => 
          array (
            'name' => 'destino_pte',
            'studio' => 'visible',
            'label' => 'LBL_DESTINO_PTE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'codigo_relacionado',
            'studio' => 'visible',
            'label' => 'LBL_CODIGO_RELACIONADO',
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
            'name' => 'profesional',
            'studio' => 'visible',
            'label' => 'LBL_PROFESIONAL',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'telefono',
            'label' => 'LBL_TELEFONO',
          ),
          1 => 
          array (
            'name' => 'ext',
            'label' => 'LBL_EXT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'cargo_informador',
            'label' => 'LBL_CARGO_INFORMADOR',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'celular_informador',
            'label' => 'LBL_CELULAR_INFORMADOR',
          ),
        ),
      ),
    ),
  ),
);
?>
