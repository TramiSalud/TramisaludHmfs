<?php 
 $GLOBALS["dictionary"]["GBIHI_HistorialCorreo"]=array (
  'table' => 'gbihi_historialcorreo',
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
      'len' => 255,
      'unified_search' => false,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'merge_filter' => 'selected',
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
      'relationship' => 'gbihi_historialcorreo_created_by',
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
      'relationship' => 'gbihi_historialcorreo_modified_user',
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
      'relationship' => 'gbihi_historialcorreo_assigned_user',
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
    'numero_reintento' => 
    array (
      'required' => false,
      'name' => 'numero_reintento',
      'vname' => 'LBL_NUMERO_REINTENTO',
      'type' => 'int',
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
      'len' => '10',
      'size' => '20',
      'enable_range_search' => false,
      'disable_num_format' => '',
      'min' => false,
      'max' => false,
    ),
    'fecha_envio_correo' => 
    array (
      'required' => false,
      'name' => 'fecha_envio_correo',
      'vname' => 'LBL_FECHA_ENVIO_CORREO',
      'type' => 'datetimecombo',
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
      'size' => '20',
      'enable_range_search' => false,
      'dbType' => 'datetime',
    ),
    'correo_envio' => 
    array (
      'required' => false,
      'name' => 'correo_envio',
      'vname' => 'LBL_CORREO_ENVIO',
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
      'len' => '255',
      'size' => '20',
    ),
    'correo_enviado' => 
    array (
      'required' => false,
      'name' => 'correo_enviado',
      'vname' => 'LBL_CORREO_ENVIADO',
      'type' => 'bool',
      'massupdate' => 0,
      'default' => '0',
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
    ),
    'basa1_anexo1_gbihi_historialcorreo_1' => 
    array (
      'name' => 'basa1_anexo1_gbihi_historialcorreo_1',
      'type' => 'link',
      'relationship' => 'basa1_anexo1_gbihi_historialcorreo_1',
      'source' => 'non-db',
      'module' => 'basa1_ANEXO1',
      'bean_name' => 'basa1_ANEXO1',
      'vname' => 'LBL_BASA1_ANEXO1_GBIHI_HISTORIALCORREO_1_FROM_BASA1_ANEXO1_TITLE',
      'id_name' => 'basa1_anexo1_gbihi_historialcorreo_1basa1_anexo1_ida',
    ),
    'basa1_anexo1_gbihi_historialcorreo_1_name' => 
    array (
      'name' => 'basa1_anexo1_gbihi_historialcorreo_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_BASA1_ANEXO1_GBIHI_HISTORIALCORREO_1_FROM_BASA1_ANEXO1_TITLE',
      'save' => true,
      'id_name' => 'basa1_anexo1_gbihi_historialcorreo_1basa1_anexo1_ida',
      'link' => 'basa1_anexo1_gbihi_historialcorreo_1',
      'table' => 'basa1_anexo1',
      'module' => 'basa1_ANEXO1',
      'rname' => 'name',
    ),
    'basa1_anexo1_gbihi_historialcorreo_1basa1_anexo1_ida' => 
    array (
      'name' => 'basa1_anexo1_gbihi_historialcorreo_1basa1_anexo1_ida',
      'type' => 'link',
      'relationship' => 'basa1_anexo1_gbihi_historialcorreo_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_BASA1_ANEXO1_GBIHI_HISTORIALCORREO_1_FROM_GBIHI_HISTORIALCORREO_TITLE',
    ),
    'gbia3_anexo3_gbihi_historialcorreo_1' => 
    array (
      'name' => 'gbia3_anexo3_gbihi_historialcorreo_1',
      'type' => 'link',
      'relationship' => 'gbia3_anexo3_gbihi_historialcorreo_1',
      'source' => 'non-db',
      'module' => 'GBIA3_ANEXO3',
      'bean_name' => 'GBIA3_ANEXO3',
      'vname' => 'LBL_GBIA3_ANEXO3_GBIHI_HISTORIALCORREO_1_FROM_GBIA3_ANEXO3_TITLE',
      'id_name' => 'gbia3_anexo3_gbihi_historialcorreo_1gbia3_anexo3_ida',
    ),
    'gbia3_anexo3_gbihi_historialcorreo_1_name' => 
    array (
      'name' => 'gbia3_anexo3_gbihi_historialcorreo_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_GBIA3_ANEXO3_GBIHI_HISTORIALCORREO_1_FROM_GBIA3_ANEXO3_TITLE',
      'save' => true,
      'id_name' => 'gbia3_anexo3_gbihi_historialcorreo_1gbia3_anexo3_ida',
      'link' => 'gbia3_anexo3_gbihi_historialcorreo_1',
      'table' => 'gbia3_anexo3',
      'module' => 'GBIA3_ANEXO3',
      'rname' => 'name',
    ),
    'gbia3_anexo3_gbihi_historialcorreo_1gbia3_anexo3_ida' => 
    array (
      'name' => 'gbia3_anexo3_gbihi_historialcorreo_1gbia3_anexo3_ida',
      'type' => 'link',
      'relationship' => 'gbia3_anexo3_gbihi_historialcorreo_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_GBIA3_ANEXO3_GBIHI_HISTORIALCORREO_1_FROM_GBIHI_HISTORIALCORREO_TITLE',
    ),
    'gbian_anexo2_gbihi_historialcorreo_1' => 
    array (
      'name' => 'gbian_anexo2_gbihi_historialcorreo_1',
      'type' => 'link',
      'relationship' => 'gbian_anexo2_gbihi_historialcorreo_1',
      'source' => 'non-db',
      'module' => 'gbian_Anexo2',
      'bean_name' => 'gbian_Anexo2',
      'vname' => 'LBL_GBIAN_ANEXO2_GBIHI_HISTORIALCORREO_1_FROM_GBIAN_ANEXO2_TITLE',
      'id_name' => 'gbian_anexo2_gbihi_historialcorreo_1gbian_anexo2_ida',
    ),
    'gbian_anexo2_gbihi_historialcorreo_1_name' => 
    array (
      'name' => 'gbian_anexo2_gbihi_historialcorreo_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_GBIAN_ANEXO2_GBIHI_HISTORIALCORREO_1_FROM_GBIAN_ANEXO2_TITLE',
      'save' => true,
      'id_name' => 'gbian_anexo2_gbihi_historialcorreo_1gbian_anexo2_ida',
      'link' => 'gbian_anexo2_gbihi_historialcorreo_1',
      'table' => 'gbian_anexo2',
      'module' => 'gbian_Anexo2',
      'rname' => 'name',
    ),
    'gbian_anexo2_gbihi_historialcorreo_1gbian_anexo2_ida' => 
    array (
      'name' => 'gbian_anexo2_gbihi_historialcorreo_1gbian_anexo2_ida',
      'type' => 'link',
      'relationship' => 'gbian_anexo2_gbihi_historialcorreo_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_GBIAN_ANEXO2_GBIHI_HISTORIALCORREO_1_FROM_GBIHI_HISTORIALCORREO_TITLE',
    ),
    'gbi_anexo3npos_gbihi_historialcorreo_1' => 
    array (
      'name' => 'gbi_anexo3npos_gbihi_historialcorreo_1',
      'type' => 'link',
      'relationship' => 'gbi_anexo3npos_gbihi_historialcorreo_1',
      'source' => 'non-db',
      'module' => 'gbi_anexo3npos',
      'bean_name' => 'gbi_anexo3npos',
      'vname' => 'LBL_GBI_ANEXO3NPOS_GBIHI_HISTORIALCORREO_1_FROM_GBI_ANEXO3NPOS_TITLE',
      'id_name' => 'gbi_anexo3npos_gbihi_historialcorreo_1gbi_anexo3npos_ida',
    ),
    'gbi_anexo3npos_gbihi_historialcorreo_1_name' => 
    array (
      'name' => 'gbi_anexo3npos_gbihi_historialcorreo_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_GBI_ANEXO3NPOS_GBIHI_HISTORIALCORREO_1_FROM_GBI_ANEXO3NPOS_TITLE',
      'save' => true,
      'id_name' => 'gbi_anexo3npos_gbihi_historialcorreo_1gbi_anexo3npos_ida',
      'link' => 'gbi_anexo3npos_gbihi_historialcorreo_1',
      'table' => 'gbi_anexo3npos',
      'module' => 'gbi_anexo3npos',
      'rname' => 'name',
    ),
    'gbi_anexo3npos_gbihi_historialcorreo_1gbi_anexo3npos_ida' => 
    array (
      'name' => 'gbi_anexo3npos_gbihi_historialcorreo_1gbi_anexo3npos_ida',
      'type' => 'link',
      'relationship' => 'gbi_anexo3npos_gbihi_historialcorreo_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_GBI_ANEXO3NPOS_GBIHI_HISTORIALCORREO_1_FROM_GBIHI_HISTORIALCORREO_TITLE',
    ),
    'gbi_anexo9_gbihi_historialcorreo_1' => 
    array (
      'name' => 'gbi_anexo9_gbihi_historialcorreo_1',
      'type' => 'link',
      'relationship' => 'gbi_anexo9_gbihi_historialcorreo_1',
      'source' => 'non-db',
      'module' => 'gbi_Anexo9',
      'bean_name' => 'gbi_Anexo9',
      'vname' => 'LBL_GBI_ANEXO9_GBIHI_HISTORIALCORREO_1_FROM_GBI_ANEXO9_TITLE',
      'id_name' => 'gbi_anexo9_gbihi_historialcorreo_1gbi_anexo9_ida',
    ),
    'gbi_anexo9_gbihi_historialcorreo_1_name' => 
    array (
      'name' => 'gbi_anexo9_gbihi_historialcorreo_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_GBI_ANEXO9_GBIHI_HISTORIALCORREO_1_FROM_GBI_ANEXO9_TITLE',
      'save' => true,
      'id_name' => 'gbi_anexo9_gbihi_historialcorreo_1gbi_anexo9_ida',
      'link' => 'gbi_anexo9_gbihi_historialcorreo_1',
      'table' => 'gbi_anexo9',
      'module' => 'gbi_Anexo9',
      'rname' => 'name',
    ),
    'gbi_anexo9_gbihi_historialcorreo_1gbi_anexo9_ida' => 
    array (
      'name' => 'gbi_anexo9_gbihi_historialcorreo_1gbi_anexo9_ida',
      'type' => 'link',
      'relationship' => 'gbi_anexo9_gbihi_historialcorreo_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_GBI_ANEXO9_GBIHI_HISTORIALCORREO_1_FROM_GBIHI_HISTORIALCORREO_TITLE',
    ),
    'enviado_de_c' => 
    array (
      'labelValue' => 'De',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'enviado_de_c',
      'vname' => 'LBL_ENVIADO_DE',
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
      'id' => 'GBIHI_HistorialCorreoenviado_de_c',
      'custom_module' => 'GBIHI_HistorialCorreo',
    ),
  ),
  'relationships' => 
  array (
    'gbihi_historialcorreo_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'GBIHI_HistorialCorreo',
      'rhs_table' => 'gbihi_historialcorreo',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'gbihi_historialcorreo_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'GBIHI_HistorialCorreo',
      'rhs_table' => 'gbihi_historialcorreo',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'gbihi_historialcorreo_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'GBIHI_HistorialCorreo',
      'rhs_table' => 'gbihi_historialcorreo',
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
      'name' => 'gbihi_historialcorreopk',
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