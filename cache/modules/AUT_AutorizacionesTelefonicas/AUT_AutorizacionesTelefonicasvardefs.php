<?php 
 $GLOBALS["dictionary"]["AUT_AutorizacionesTelefonicas"]=array (
  'table' => 'aut_autorizacionestelefonicas',
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
      'required' => true,
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
      'comments' => 'Full text of the note',
      'merge_filter' => 'disabled',
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
      'relationship' => 'aut_autorizacionestelefonicas_created_by',
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
      'relationship' => 'aut_autorizacionestelefonicas_modified_user',
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
      'rname' => 'name',
      'type' => 'relate',
      'reportable' => true,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => '',
      'duplicate_merge' => 'disabled',
      'required' => false,
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'ext2' => '',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'aut_autorizacionestelefonicas_assigned_user',
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
    'eps_eps_id_c' => 
    array (
      'required' => false,
      'name' => 'eps_eps_id_c',
      'vname' => 'LBL_EPS_EPS_EPS_ID',
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
    'eps' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'eps',
      'vname' => 'LBL_EPS',
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
      'id_name' => 'eps_eps_id_c',
      'ext2' => 'EPS_EPS',
      'module' => 'EPS_EPS',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'account_id_c' => 
    array (
      'required' => false,
      'name' => 'account_id_c',
      'vname' => 'LBL_PACIENTE_ACCOUNT_ID',
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
    'paciente' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'paciente',
      'vname' => 'LBL_PACIENTE',
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
      'id_name' => 'account_id_c',
      'ext2' => 'Accounts',
      'module' => 'Accounts',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'tipodoc' => 
    array (
      'required' => false,
      'name' => 'tipodoc',
      'vname' => 'LBL_TIPODOC',
      'type' => 'enum',
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
      'len' => 100,
      'size' => '20',
      'options' => 'tipo_documento_acc',
      'studio' => 'visible',
      'dependency' => false,
      'default' => 'R.C.',
    ),
    'nrodoc' => 
    array (
      'required' => false,
      'name' => 'nrodoc',
      'vname' => 'LBL_NRODOC',
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
      'len' => '20',
      'size' => '20',
    ),
    'autorizacionnro' => 
    array (
      'required' => false,
      'name' => 'autorizacionnro',
      'vname' => 'LBL_AUTORIZACIONNRO',
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
    'esp_especialista_id_c' => 
    array (
      'required' => false,
      'name' => 'esp_especialista_id_c',
      'vname' => 'LBL_AUTORIZA_ESP_ESPECIALISTA_ID',
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
    'autoriza' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'autoriza',
      'vname' => 'LBL_AUTORIZA',
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
      'id_name' => 'esp_especialista_id_c',
      'ext2' => 'ESP_Especialista',
      'module' => 'ESP_Especialista',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'fechaingreso' => 
    array (
      'required' => false,
      'name' => 'fechaingreso',
      'vname' => 'LBL_FECHAINGRESO',
      'type' => 'date',
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
    ),
    'gbia3_anexo3_aut_autorizacionestelefonicas_1' => 
    array (
      'name' => 'gbia3_anexo3_aut_autorizacionestelefonicas_1',
      'type' => 'link',
      'relationship' => 'gbia3_anexo3_aut_autorizacionestelefonicas_1',
      'source' => 'non-db',
      'module' => 'GBIA3_ANEXO3',
      'bean_name' => 'GBIA3_ANEXO3',
      'vname' => 'LBL_GBIA3_ANEXO3_AUT_AUTORIZACIONESTELEFONICAS_1_FROM_GBIA3_ANEXO3_TITLE',
      'id_name' => 'gbia3_anexo3_aut_autorizacionestelefonicas_1gbia3_anexo3_ida',
    ),
    'gbia3_anexo3_aut_autorizacionestelefonicas_1_name' => 
    array (
      'name' => 'gbia3_anexo3_aut_autorizacionestelefonicas_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_GBIA3_ANEXO3_AUT_AUTORIZACIONESTELEFONICAS_1_FROM_GBIA3_ANEXO3_TITLE',
      'save' => true,
      'id_name' => 'gbia3_anexo3_aut_autorizacionestelefonicas_1gbia3_anexo3_ida',
      'link' => 'gbia3_anexo3_aut_autorizacionestelefonicas_1',
      'table' => 'gbia3_anexo3',
      'module' => 'GBIA3_ANEXO3',
      'rname' => 'name',
    ),
    'gbia3_anexo3_aut_autorizacionestelefonicas_1gbia3_anexo3_ida' => 
    array (
      'name' => 'gbia3_anexo3_aut_autorizacionestelefonicas_1gbia3_anexo3_ida',
      'type' => 'link',
      'relationship' => 'gbia3_anexo3_aut_autorizacionestelefonicas_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_GBIA3_ANEXO3_AUT_AUTORIZACIONESTELEFONICAS_1_FROM_AUT_AUTORIZACIONESTELEFONICAS_TITLE',
    ),
    'gbian_anexo2_aut_autorizacionestelefonicas_1' => 
    array (
      'name' => 'gbian_anexo2_aut_autorizacionestelefonicas_1',
      'type' => 'link',
      'relationship' => 'gbian_anexo2_aut_autorizacionestelefonicas_1',
      'source' => 'non-db',
      'module' => 'gbian_Anexo2',
      'bean_name' => 'gbian_Anexo2',
      'vname' => 'LBL_GBIAN_ANEXO2_AUT_AUTORIZACIONESTELEFONICAS_1_FROM_GBIAN_ANEXO2_TITLE',
      'id_name' => 'gbian_anexo2_aut_autorizacionestelefonicas_1gbian_anexo2_ida',
    ),
    'gbian_anexo2_aut_autorizacionestelefonicas_1_name' => 
    array (
      'name' => 'gbian_anexo2_aut_autorizacionestelefonicas_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_GBIAN_ANEXO2_AUT_AUTORIZACIONESTELEFONICAS_1_FROM_GBIAN_ANEXO2_TITLE',
      'save' => true,
      'id_name' => 'gbian_anexo2_aut_autorizacionestelefonicas_1gbian_anexo2_ida',
      'link' => 'gbian_anexo2_aut_autorizacionestelefonicas_1',
      'table' => 'gbian_anexo2',
      'module' => 'gbian_Anexo2',
      'rname' => 'name',
    ),
    'gbian_anexo2_aut_autorizacionestelefonicas_1gbian_anexo2_ida' => 
    array (
      'name' => 'gbian_anexo2_aut_autorizacionestelefonicas_1gbian_anexo2_ida',
      'type' => 'link',
      'relationship' => 'gbian_anexo2_aut_autorizacionestelefonicas_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_GBIAN_ANEXO2_AUT_AUTORIZACIONESTELEFONICAS_1_FROM_AUT_AUTORIZACIONESTELEFONICAS_TITLE',
    ),
    'quienautoriza_c' => 
    array (
      'labelValue' => 'Autoriza',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'quienautoriza_c',
      'vname' => 'LBL_QUIENAUTORIZA',
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
      'id' => 'AUT_AutorizacionesTelefonicasquienautoriza_c',
      'custom_module' => 'AUT_AutorizacionesTelefonicas',
    ),
  ),
  'relationships' => 
  array (
    'aut_autorizacionestelefonicas_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'AUT_AutorizacionesTelefonicas',
      'rhs_table' => 'aut_autorizacionestelefonicas',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'aut_autorizacionestelefonicas_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'AUT_AutorizacionesTelefonicas',
      'rhs_table' => 'aut_autorizacionestelefonicas',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'aut_autorizacionestelefonicas_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'AUT_AutorizacionesTelefonicas',
      'rhs_table' => 'aut_autorizacionestelefonicas',
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
      'name' => 'aut_autorizacionestelefonicaspk',
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