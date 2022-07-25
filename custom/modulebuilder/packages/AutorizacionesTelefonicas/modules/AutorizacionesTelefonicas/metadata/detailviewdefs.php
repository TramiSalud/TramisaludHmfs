<?php
$module_name = 'AUT_AutorizacionesTelefonicas';
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
      ),
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
            'name' => 'eps',
            'studio' => 'visible',
            'label' => 'LBL_EPS',
          ),
          1 => 
          array (
            'name' => 'autorizacionnro',
            'label' => 'LBL_AUTORIZACIONNRO',
          ),
        ),
        2 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'fechaingreso',
            'label' => 'LBL_FECHAINGRESO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'paciente',
            'studio' => 'visible',
            'label' => 'LBL_PACIENTE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'tipodoc',
            'studio' => 'visible',
            'label' => 'LBL_TIPODOC',
          ),
          1 => 
          array (
            'name' => 'nrodoc',
            'label' => 'LBL_NRODOC',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'autoriza',
            'studio' => 'visible',
            'label' => 'LBL_AUTORIZA',
          ),
        ),
        6 => 
        array (
          0 => 'assigned_user_name',
          1 => '',
        ),
      ),
    ),
  ),
);
?>
