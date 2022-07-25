<?php
$searchdefs ['Calls'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'parent_name' => 
      array (
        'type' => 'parent',
        'label' => 'LBL_LIST_RELATED_TO',
        'width' => '10%',
        'default' => true,
        'name' => 'parent_name',
      ),
      'gbian_anexo2_calls_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_GBIAN_ANEXO2_CALLS_1_FROM_GBIAN_ANEXO2_TITLE',
        'id' => 'GBIAN_ANEXO2_CALLS_1GBIAN_ANEXO2_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'gbian_anexo2_calls_1_name',
      ),
      'gbia3_anexo3_calls_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_GBIA3_ANEXO3_CALLS_1_FROM_GBIA3_ANEXO3_TITLE',
        'id' => 'GBIA3_ANEXO3_CALLS_1GBIA3_ANEXO3_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'gbia3_anexo3_calls_1_name',
      ),
      'gbi_anexo3npos_calls_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_GBI_ANEXO3NPOS_CALLS_1_FROM_GBI_ANEXO3NPOS_TITLE',
        'id' => 'GBI_ANEXO3NPOS_CALLS_1GBI_ANEXO3NPOS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'gbi_anexo3npos_calls_1_name',
      ),
      'gbia4_anexo4_calls_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_GBIA4_ANEXO4_CALLS_1_FROM_GBIA4_ANEXO4_TITLE',
        'id' => 'GBIA4_ANEXO4_CALLS_1GBIA4_ANEXO4_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'gbia4_anexo4_calls_1_name',
      ),
      'gbi_anexo9_calls_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_GBI_ANEXO9_CALLS_1_FROM_GBI_ANEXO9_TITLE',
        'id' => 'GBI_ANEXO9_CALLS_1GBI_ANEXO9_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'gbi_anexo9_calls_1_name',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'open_only' => 
      array (
        'name' => 'open_only',
        'label' => 'LBL_OPEN_ITEMS',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'parent_name' => 
      array (
        'type' => 'parent',
        'label' => 'LBL_LIST_RELATED_TO',
        'width' => '10%',
        'default' => true,
        'name' => 'parent_name',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'direction' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_DIRECTION',
        'width' => '10%',
        'default' => true,
        'name' => 'direction',
      ),
      'status' => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10%',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
