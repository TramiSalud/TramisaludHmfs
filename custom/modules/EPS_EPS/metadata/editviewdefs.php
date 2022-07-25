<?php
$module_name = 'EPS_EPS';
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
            'name' => 'odigoeps',
            'label' => 'LBL_ODIGOEPS',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 'name',
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tipodocumento',
            'studio' => 'visible',
            'label' => 'LBL_TIPODOCUMENTO',
          ),
          1 => 
          array (
            'name' => 'estado',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'nrodocumento',
            'label' => 'LBL_NRODOCUMENTO',
          ),
          1 => 'assigned_user_name',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'digitoverificacion',
            'label' => 'LBL_DIGITOVERIFICACION',
          ),
          1 => 
          array (
            'name' => 'contactoprincipal',
            'studio' => 'visible',
            'label' => 'LBL_CONTACTOPRINCIPAL',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'direccion',
            'label' => 'LBL_DIRECCION',
          ),
          1 => 
          array (
            'name' => 'paises',
            'studio' => 'visible',
            'label' => 'LBL_PAISES',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'telpersonal',
            'label' => 'LBL_TELPERSONAL',
          ),
          1 => 
          array (
            'name' => 'departamento',
            'studio' => 'visible',
            'label' => 'LBL_DEPARTAMENTO',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'teladicional',
            'label' => 'LBL_TELADICIONAL',
          ),
          1 => 
          array (
            'name' => 'municipio',
            'studio' => 'visible',
            'label' => 'LBL_MUNICIPIO',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'fax',
            'label' => 'LBL_FAX',
          ),
          1 => 
          array (
            'name' => 'celular',
            'label' => 'LBL_CELULAR',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'correo',
            'label' => 'LBL_CORREO',
          ),
          1 => 
          array (
            'name' => 'tiempoprioritario',
            'label' => 'LBL_TIEMPOPRIORITARIO',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'web',
            'label' => 'LBL_WEB',
          ),
          1 => 
          array (
            'name' => 'tiemponoprioritario',
            'label' => 'LBL_TIEMPONOPRIORITARIO',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'emailanexo1',
            'label' => 'LBL_EMAILANEXO1',
          ),
          1 => 
          array (
            'name' => 'tipoactoraccount',
            'label' => 'LBL_TIPOACTORACCOUNT',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'emailanexo2',
            'label' => 'LBL_EMAILANEXO2',
          ),
          1 => '',
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'emailanexo3',
            'label' => 'LBL_EMAILANEXO3',
          ),
          1 => '',
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'emailanexo3electivo',
            'label' => 'LBL_EMAILANEXO3ELECTIVO',
          ),
          1 => '',
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 'emailanexo9_c',
            'label' => 'LBL_EMAILANEXO9',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        16 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
