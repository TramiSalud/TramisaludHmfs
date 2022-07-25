<?php
$module_name = 'minpo_Manejo_integra';
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
            'name' => 'descripcion_cup_c',
            'label' => 'LBL_DESCRIPCION_CUP',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cantidad',
            'label' => 'LBL_CANTIDAD',
          ),
          1 => 
          array (
            'name' => 'gbi_anexo3npos_minpo_manejo_integra_1_name',
            'label' => 'LBL_GBI_ANEXO3NPOS_MINPO_MANEJO_INTEGRA_1_FROM_GBI_ANEXO3NPOS_TITLE',
          ),
        ),
      ),
    ),
  ),
);
?>
