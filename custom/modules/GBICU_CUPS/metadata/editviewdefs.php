<?php
$module_name = 'GBICU_CUPS';
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
        'LBL_EDITVIEW_PANEL4' => 
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
            'name' => 'estadocups',
            'studio' => 'visible',
            'label' => 'LBL_ESTADOCUPS',
          ),
        ),
        1 => 
        array (
          0 => 'description',
          1 => 'assigned_user_name',
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'codmp_c',
            'label' => 'LBL_CODMP',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'nombreservmp_c',
            'studio' => 'visible',
            'label' => 'LBL_NOMBRESERVMP',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'codiss_c',
            'label' => 'LBL_CODISS',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'nombreserviss',
            'studio' => 'visible',
            'label' => 'LBL_NOMBRESERVISS',
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
            'name' => 'codsoat_c',
            'label' => 'LBL_CODSOAT',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'nombreservsoat',
            'studio' => 'visible',
            'label' => 'LBL_NOMBRESERVSOAT',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
