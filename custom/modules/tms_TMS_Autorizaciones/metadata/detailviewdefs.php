<?php
$module_name = 'tms_TMS_Autorizaciones';
$_object_name = 'tms_tms_autorizaciones';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
      ),
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
          0 => 'uploadfile',
          1 => 'document_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'tipo_documento',
            'studio' => 'visible',
            'label' => 'LBL_TIPO_DOCUMENTO',
          ),
          1 => 
          array (
            'name' => 'tipo_autorizacion',
            'studio' => 'visible',
            'label' => 'LBL_TIPO_AUTORIZACION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'accounts_tms_tms_autorizaciones_1_name',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 'description',
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
      ),
    ),
  ),
);
?>
