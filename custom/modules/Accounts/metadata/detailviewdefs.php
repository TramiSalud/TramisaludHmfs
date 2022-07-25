<?php
$viewdefs ['Accounts'] = 
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'tipo_documento_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPO_DOCUMENTO',
          ),
          1 => 
          array (
            'name' => 'name',
            'comment' => 'Name of the Company',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
            ),
          ),
        ),
        1 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'confirmaciondocumento_c',
            'label' => 'LBL_CONFIRMACIONDOCUMENTO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'primernombre_c',
            'label' => 'LBL_PRIMERNOMBRE',
          ),
          1 => 
          array (
            'name' => 'segundonombre_c',
            'label' => 'LBL_SEGUNDONOMBRE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'primerapellido_c',
            'label' => 'LBL_PRIMERAPELLIDO',
          ),
          1 => 
          array (
            'name' => 'segundoapellido_c',
            'label' => 'LBL_SEGUNDOAPELLIDO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'fechanacimiento_c',
            'label' => 'LBL_FECHANACIMIENTO',
          ),
          1 => 
          array (
            'name' => 'genero_c',
            'studio' => 'visible',
            'label' => 'LBL_GENERO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'telefonopersonal_c',
            'label' => 'LBL_TELEFONOPERSONAL',
          ),
          1 => 
          array (
            'name' => 'telefonoadicional_c',
            'label' => 'LBL_TELEFONOADICIONAL',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'celular_c',
            'label' => 'LBL_CELULAR',
          ),
          1 => 
          array (
            'name' => 'estratoeconomico_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTRATOECONOMICO',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
          1 => '',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'direccionresidencia_c',
            'studio' => 'visible',
            'label' => 'LBL_DIRECCIONRESIDENCIA',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'barrio_c',
            'studio' => 'visible',
            'label' => 'LBL_BARRIO',
          ),
          1 => '',
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'vereda_c',
            'label' => 'LBL_VEREDA',
          ),
          1 => '',
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'paises',
            'studio' => 'visible',
            'label' => 'LBL_PAISES',
          ),
          1 => '',
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'departamento_c',
            'studio' => 'visible',
            'label' => 'LBL_DEPARTAMENTO',
          ),
          1 => '',
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'municipio_c',
            'studio' => 'visible',
            'label' => 'LBL_MUNICIPIO',
          ),
          1 => '',
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'acudiente_c',
            'studio' => 'visible',
            'label' => 'LBL_ACUDIENTE',
          ),
          1 => '',
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 'leydata_c',
            'label' => 'LBL_LEYDATA',
          ),
        ),
        16 => 
        array (
          0 => 
          array (
            'name' => 'numeroformulario_c',
            'label' => 'LBL_NUMEROFORMULARIO',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'tipocobertura_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPOCOBERTURA',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'epsactual_c',
            'studio' => 'visible',
            'label' => 'LBL_EPSACTUAL',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ipsactual_c',
            'studio' => 'visible',
            'label' => 'LBL_IPSACTUAL',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
