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
        'LBL_EDITVIEW_PANEL1' => 
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
            'name' => 'subcategoria',
            'label' => 'LBL_SUBCATEGORIA',
          ),
          1 => 
          array (
            'name' => 'estadocups',
            'studio' => 'visible',
            'label' => 'LBL_ESTADOCUPS',
          ),
        ),
        2 => 
        array (
          0 => 'description',
          1 => 'assigned_user_name',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'codigosoat',
            'studio' => 'visible',
            'label' => 'LBL_CODIGOSOAT',
          ),
          1 => 
          array (
            'name' => 'codigoiss',
            'studio' => 'visible',
            'label' => 'LBL_CODIGOISS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'nombreservsoat',
            'studio' => 'visible',
            'label' => 'LBL_NOMBRESERVSOAT',
          ),
          1 => 
          array (
            'name' => 'nombreserviss',
            'studio' => 'visible',
            'label' => 'LBL_NOMBRESERVISS',
          ),
        ),
      ),
    ),
  ),
);
?>
