<?php
$module_name = 'gbiA4_Aprobacioncups';
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
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cups_c',
            'studio' => 'visible',
            'label' => 'LBL_CUPS',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'id' => 'gbicu_cups_id_c',
                'description' => 'description',
                'name' => 'cups_c',
              ),
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cantidad_cups',
            'label' => 'LBL_CANTIDAD_CUPS',
          ),
        ),
        2 => 
        array (
          0 => 
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
