<?php
$module_name = 'tms_habeasdata';
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
            'name' => 'estado',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'nombre',
            'label' => 'LBL_NOMBRE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'cedula',
            'label' => 'LBL_CEDULA',
          ),
          1 => 
          array (
            'name' => 'expedida',
            'label' => 'LBL_EXPEDIDA',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'firma',
            'label' => 'LBL_FIRMA',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'telefono',
            'label' => 'LBL_TELEFONO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'direccion',
            'label' => 'LBL_DIRECCION',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'correo',
            'label' => 'LBL_CORREO',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'ips',
            'studio' => 'visible',
            'label' => 'LBL_IPS',
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
            'name' => 'conocer_datos',
            'label' => 'LBL_CONOCER_DATOS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'prueba_autorizacion',
            'label' => 'LBL_PRUEBA_AUTORIZACION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'actualizacion_datos',
            'label' => 'LBL_ACTUALIZACION_DATOS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'info_registrada',
            'studio' => 'visible',
            'label' => 'LBL_INFO_REGISTRADA',
          ),
          1 => 
          array (
            'name' => 'info_actualizada',
            'studio' => 'visible',
            'label' => 'LBL_INFO_ACTUALIZADA',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'suprimir_datos',
            'label' => 'LBL_SUPRIMIR_DATOS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'revocar_autorizacion',
            'label' => 'LBL_REVOCAR_AUTORIZACION',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'hechos',
            'studio' => 'visible',
            'label' => 'LBL_HECHOS',
          ),
        ),
      ),
    ),
  ),
);
?>
