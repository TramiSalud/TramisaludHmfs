<?php 
 $GLOBALS["dictionary"]["GBIA3_ManejoIntegral"]=array (
  'table' => 'gbia3_manejointegral',
  'audited' => true,
  'duplicate_merge' => true,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => '255',
      'unified_search' => false,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'required' => false,
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'merge_filter' => 'selected',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'duplicate_merge_dom_value' => '3',
      'audited' => false,
      'reportable' => true,
      'size' => '20',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'gbia3_manejointegral_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'gbia3_manejointegral_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'gbia3_manejointegral_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'gbicu_cups_id_c' => 
    array (
      'required' => false,
      'name' => 'gbicu_cups_id_c',
      'vname' => 'LBL_CODIGOCUPS_GBICU_CUPS_ID',
      'type' => 'id',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 36,
      'size' => '20',
    ),
    'codigocups' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'codigocups',
      'vname' => 'LBL_CODIGOCUPS',
      'type' => 'relate',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id_name' => 'gbicu_cups_id_c',
      'ext2' => 'GBICU_CUPS',
      'module' => 'GBICU_CUPS',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      'populate_list' => 
      array (
        0 => 'name',
        1 => 'id',
        2 => 'description',
      ),
      'field_list' => 
      array (
        0 => 'name',
        1 => 'gbicu_cups_id_c',
        2 => 'gbi_detalle_c',
      ),
    ),
    'cantidadcups' => 
    array (
      'required' => true,
      'name' => 'cantidadcups',
      'vname' => 'LBL_CANTIDADCUPS',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '60',
      'size' => '20',
    ),
    'gbia3_anexo3_gbia3_manejointegral_1' => 
    array (
      'name' => 'gbia3_anexo3_gbia3_manejointegral_1',
      'type' => 'link',
      'relationship' => 'gbia3_anexo3_gbia3_manejointegral_1',
      'source' => 'non-db',
      'module' => 'GBIA3_ANEXO3',
      'bean_name' => 'GBIA3_ANEXO3',
      'vname' => 'LBL_GBIA3_ANEXO3_GBIA3_MANEJOINTEGRAL_1_FROM_GBIA3_ANEXO3_TITLE',
      'id_name' => 'gbia3_anexo3_gbia3_manejointegral_1gbia3_anexo3_ida',
    ),
    'gbia3_anexo3_gbia3_manejointegral_1_name' => 
    array (
      'name' => 'gbia3_anexo3_gbia3_manejointegral_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_GBIA3_ANEXO3_GBIA3_MANEJOINTEGRAL_1_FROM_GBIA3_ANEXO3_TITLE',
      'save' => true,
      'id_name' => 'gbia3_anexo3_gbia3_manejointegral_1gbia3_anexo3_ida',
      'link' => 'gbia3_anexo3_gbia3_manejointegral_1',
      'table' => 'gbia3_anexo3',
      'module' => 'GBIA3_ANEXO3',
      'rname' => 'name',
    ),
    'gbia3_anexo3_gbia3_manejointegral_1gbia3_anexo3_ida' => 
    array (
      'name' => 'gbia3_anexo3_gbia3_manejointegral_1gbia3_anexo3_ida',
      'type' => 'link',
      'relationship' => 'gbia3_anexo3_gbia3_manejointegral_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_GBIA3_ANEXO3_GBIA3_MANEJOINTEGRAL_1_FROM_GBIA3_MANEJOINTEGRAL_TITLE',
    ),
    'cups_interno_c' => 
    array (
      'labelValue' => 'CUPS Interno',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'cups_interno_c',
      'vname' => 'LBL_CUPS_INTERNO',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'GBIA3_ManejoIntegralcups_interno_c',
      'custom_module' => 'GBIA3_ManejoIntegral',
    ),
    'gbi_detalle_c' => 
    array (
      'labelValue' => 'Detalle',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'gbi_detalle_c',
      'vname' => 'LBL_GBI_DETALLE',
      'type' => 'text',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'studio' => 'visible',
      'rows' => '6',
      'cols' => '40',
      'id' => 'GBIA3_ManejoIntegralgbi_detalle_c',
      'custom_module' => 'GBIA3_ManejoIntegral',
    ),
  ),
  'relationships' => 
  array (
    'gbia3_manejointegral_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'GBIA3_ManejoIntegral',
      'rhs_table' => 'gbia3_manejointegral',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'gbia3_manejointegral_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'GBIA3_ManejoIntegral',
      'rhs_table' => 'gbia3_manejointegral',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'gbia3_manejointegral_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'GBIA3_ManejoIntegral',
      'rhs_table' => 'gbia3_manejointegral',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'gbia3_manejointegralpk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'templates' => 
  array (
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => true,
);