<?php 
 $GLOBALS["dictionary"]["tms_TMS_CentralAutorizaciones"]=array (
  'table' => 'tms_tms_centralautorizaciones',
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
      'merge_filter' => 'disabled',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'duplicate_merge_dom_value' => 1,
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
      'rows' => '6',
      'cols' => '80',
      'required' => false,
      'massupdate' => 0,
      'no_default' => false,
      'comments' => 'Full text of the note',
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
      'relationship' => 'tms_tms_centralautorizaciones_created_by',
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
      'relationship' => 'tms_tms_centralautorizaciones_modified_user',
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
      'relationship' => 'tms_tms_centralautorizaciones_assigned_user',
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
    'estado' => 
    array (
      'required' => true,
      'name' => 'estado',
      'vname' => 'LBL_ESTADO',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => '1',
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
      'options' => 'estado_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'fecha_de_vencimiento' => 
    array (
      'required' => true,
      'name' => 'fecha_de_vencimiento',
      'vname' => 'LBL_FECHA_DE_VENCIMIENTO',
      'type' => 'date',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
      'display_default' => 'now',
    ),
    'tipo_de_tarea' => 
    array (
      'required' => false,
      'name' => 'tipo_de_tarea',
      'vname' => 'LBL_TIPO_DE_TAREA',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => '1',
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
      'options' => 'tipo_de_tarea_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'accounts_tms_tms_centralautorizaciones_1' => 
    array (
      'name' => 'accounts_tms_tms_centralautorizaciones_1',
      'type' => 'link',
      'relationship' => 'accounts_tms_tms_centralautorizaciones_1',
      'source' => 'non-db',
      'module' => 'Accounts',
      'bean_name' => 'Account',
      'vname' => 'LBL_ACCOUNTS_TMS_TMS_CENTRALAUTORIZACIONES_1_FROM_ACCOUNTS_TITLE',
      'id_name' => 'accounts_tms_tms_centralautorizaciones_1accounts_ida',
    ),
    'accounts_tms_tms_centralautorizaciones_1_name' => 
    array (
      'name' => 'accounts_tms_tms_centralautorizaciones_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ACCOUNTS_TMS_TMS_CENTRALAUTORIZACIONES_1_FROM_ACCOUNTS_TITLE',
      'save' => true,
      'id_name' => 'accounts_tms_tms_centralautorizaciones_1accounts_ida',
      'link' => 'accounts_tms_tms_centralautorizaciones_1',
      'table' => 'accounts',
      'module' => 'Accounts',
      'rname' => 'name',
    ),
    'accounts_tms_tms_centralautorizaciones_1accounts_ida' => 
    array (
      'name' => 'accounts_tms_tms_centralautorizaciones_1accounts_ida',
      'type' => 'link',
      'relationship' => 'accounts_tms_tms_centralautorizaciones_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_ACCOUNTS_TMS_TMS_CENTRALAUTORIZACIONES_1_FROM_TMS_TMS_CENTRALAUTORIZACIONES_TITLE',
    ),
    'asignar_ac_c' => 
    array (
      'labelValue' => 'Asignar a:',
      'required' => false,
      'source' => 'non-db',
      'name' => 'asignar_ac_c',
      'vname' => 'LBL_ASIGNAR_AC',
      'type' => 'relate',
      'massupdate' => '0',
      'default' => NULL,
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
      'id_name' => 'user_id_c',
      'ext2' => 'Users',
      'module' => 'Users',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      'id' => 'tms_TMS_CentralAutorizacionesasignar_ac_c',
      'custom_module' => 'tms_TMS_CentralAutorizaciones',
    ),
    'asignar_a_c' => 
    array (
      'labelValue' => 'Asignar Tarea a:',
      'required' => true,
      'source' => 'custom_fields',
      'name' => 'asignar_a_c',
      'vname' => 'LBL_ASIGNAR_A',
      'type' => 'enum',
      'massupdate' => '0',
      'default' => NULL,
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
      'options' => 'asignar_a_list',
      'studio' => 'visible',
      'dependency' => NULL,
      'id' => 'tms_TMS_CentralAutorizacionesasignar_a_c',
      'custom_module' => 'tms_TMS_CentralAutorizaciones',
    ),
    'cups_solicitados_c' => 
    array (
      'labelValue' => 'Cups Solicitados',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'cups_solicitados_c',
      'vname' => 'LBL_CUPS_SOLICITADOS ',
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
      'id' => 'tms_TMS_CentralAutorizacionescups_solicitados_c',
      'custom_module' => 'tms_TMS_CentralAutorizaciones',
    ),
    'documento_de_paciente_c' => 
    array (
      'labelValue' => 'Documento de Paciente:',
      'required' => true,
      'source' => 'custom_fields',
      'name' => 'documento_de_paciente_c',
      'vname' => 'LBL_DOCUMENTO_DE_PACIENTE',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => NULL,
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
      'id' => 'tms_TMS_CentralAutorizacionesdocumento_de_paciente_c',
      'custom_module' => 'tms_TMS_CentralAutorizaciones',
    ),
    'pagadores_responsables_c' => 
    array (
      'labelValue' => 'Pagadores Responsables:',
      'required' => true,
      'source' => 'custom_fields',
      'name' => 'pagadores_responsables_c',
      'vname' => 'LBL_PAGADORES_RESPONSABLES',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => NULL,
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
      'id' => 'tms_TMS_CentralAutorizacionespagadores_responsables_c',
      'custom_module' => 'tms_TMS_CentralAutorizaciones',
    ),
    'prueba_c' => 
    array (
      'labelValue' => 'prueba',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'prueba_c',
      'vname' => 'LBL_PRUEBA',
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
      'id' => 'tms_TMS_CentralAutorizacionesprueba_c',
      'custom_module' => 'tms_TMS_CentralAutorizaciones',
    ),
    'user_id_c' => 
    array (
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'user_id_c',
      'vname' => 'LBL_ASIGNAR_AC_USER_ID',
      'type' => 'id',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '36',
      'size' => '20',
      'id' => 'tms_TMS_CentralAutorizacionesuser_id_c',
      'custom_module' => 'tms_TMS_CentralAutorizaciones',
    ),
  ),
  'relationships' => 
  array (
    'tms_tms_centralautorizaciones_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'tms_TMS_CentralAutorizaciones',
      'rhs_table' => 'tms_tms_centralautorizaciones',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'tms_tms_centralautorizaciones_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'tms_TMS_CentralAutorizaciones',
      'rhs_table' => 'tms_tms_centralautorizaciones',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'tms_tms_centralautorizaciones_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'tms_TMS_CentralAutorizaciones',
      'rhs_table' => 'tms_tms_centralautorizaciones',
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
      'name' => 'tms_tms_centralautorizacionespk',
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