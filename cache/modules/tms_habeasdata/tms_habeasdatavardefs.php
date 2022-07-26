<?php 
 $GLOBALS["dictionary"]["tms_habeasdata"]=array (
  'table' => 'tms_habeasdata',
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
      'unified_search' => true,
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
      'relationship' => 'tms_habeasdata_created_by',
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
      'relationship' => 'tms_habeasdata_modified_user',
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
      'relationship' => 'tms_habeasdata_assigned_user',
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
    'fecha' => 
    array (
      'required' => false,
      'name' => 'fecha',
      'vname' => 'LBL_FECHA',
      'type' => 'date',
      'massupdate' => '1',
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
    'nombre' => 
    array (
      'required' => false,
      'name' => 'nombre',
      'vname' => 'LBL_NOMBRE',
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
    'cedula' => 
    array (
      'required' => false,
      'name' => 'cedula',
      'vname' => 'LBL_CEDULA',
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
    'expedida' => 
    array (
      'required' => false,
      'name' => 'expedida',
      'vname' => 'LBL_EXPEDIDA',
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
    'conocer_datos' => 
    array (
      'required' => false,
      'name' => 'conocer_datos',
      'vname' => 'LBL_CONOCER_DATOS',
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
    'prueba_autorizacion' => 
    array (
      'required' => false,
      'name' => 'prueba_autorizacion',
      'vname' => 'LBL_PRUEBA_AUTORIZACION',
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
    'actualizacion_datos' => 
    array (
      'required' => false,
      'name' => 'actualizacion_datos',
      'vname' => 'LBL_ACTUALIZACION_DATOS',
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
    'suprimir_datos' => 
    array (
      'required' => false,
      'name' => 'suprimir_datos',
      'vname' => 'LBL_SUPRIMIR_DATOS',
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
    'revocar_autorizacion' => 
    array (
      'required' => false,
      'name' => 'revocar_autorizacion',
      'vname' => 'LBL_REVOCAR_AUTORIZACION',
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
    'info_registrada' => 
    array (
      'required' => false,
      'name' => 'info_registrada',
      'vname' => 'LBL_INFO_REGISTRADA',
      'type' => 'text',
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
      'studio' => 'visible',
      'rows' => '8',
      'cols' => '50',
    ),
    'info_actualizada' => 
    array (
      'required' => false,
      'name' => 'info_actualizada',
      'vname' => 'LBL_INFO_ACTUALIZADA',
      'type' => 'text',
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
      'studio' => 'visible',
      'rows' => '8',
      'cols' => '50',
    ),
    'hechos' => 
    array (
      'required' => false,
      'name' => 'hechos',
      'vname' => 'LBL_HECHOS',
      'type' => 'text',
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
      'studio' => 'visible',
      'rows' => '8',
      'cols' => '100',
    ),
    'firma' => 
    array (
      'required' => false,
      'name' => 'firma',
      'vname' => 'LBL_FIRMA',
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
    'num_identificacion' => 
    array (
      'required' => false,
      'name' => 'num_identificacion',
      'vname' => 'LBL_NUM_IDENTIFICACION',
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
    'telefono' => 
    array (
      'required' => false,
      'name' => 'telefono',
      'vname' => 'LBL_TELEFONO',
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
    'direccion' => 
    array (
      'required' => false,
      'name' => 'direccion',
      'vname' => 'LBL_DIRECCION',
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
    'correo' => 
    array (
      'required' => false,
      'name' => 'correo',
      'vname' => 'LBL_CORREO',
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
    'estado' => 
    array (
      'required' => false,
      'name' => 'estado',
      'vname' => 'LBL_ESTADO',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'en_proceso',
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
      'options' => 'habeas_estado_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'ips_ips_id_c' => 
    array (
      'required' => false,
      'name' => 'ips_ips_id_c',
      'vname' => 'LBL_IPS_IPS_IPS_ID',
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
    'ips' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'ips',
      'vname' => 'LBL_IPS',
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
      'id_name' => 'ips_ips_id_c',
      'ext2' => 'IPS_IPS',
      'module' => 'IPS_IPS',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'usuarios' => 
    array (
      'name' => 'usuarios',
      'vname' => 'LBL_USUARIOS',
      'type' => 'text',
      'comment' => 'Campo donde se almacena los identificadores de los usuarios a los cuales se compartio',
      'rows' => '8',
      'cols' => '80',
      'required' => false,
      'massupdate' => 0,
      'default' => ' ',
      'no_default' => false,
      'comments' => 'Campo donde se almacena los identificadores de los usuarios a los cuales se compartio',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '60',
      'studio' => 'visible',
    ),
    'accounts_tms_habeasdata_1' => 
    array (
      'name' => 'accounts_tms_habeasdata_1',
      'type' => 'link',
      'relationship' => 'accounts_tms_habeasdata_1',
      'source' => 'non-db',
      'module' => 'Accounts',
      'bean_name' => 'Account',
      'vname' => 'LBL_ACCOUNTS_TMS_HABEASDATA_1_FROM_ACCOUNTS_TITLE',
      'id_name' => 'accounts_tms_habeasdata_1accounts_ida',
    ),
    'accounts_tms_habeasdata_1_name' => 
    array (
      'name' => 'accounts_tms_habeasdata_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ACCOUNTS_TMS_HABEASDATA_1_FROM_ACCOUNTS_TITLE',
      'save' => true,
      'id_name' => 'accounts_tms_habeasdata_1accounts_ida',
      'link' => 'accounts_tms_habeasdata_1',
      'table' => 'accounts',
      'module' => 'Accounts',
      'rname' => 'name',
    ),
    'accounts_tms_habeasdata_1accounts_ida' => 
    array (
      'name' => 'accounts_tms_habeasdata_1accounts_ida',
      'type' => 'link',
      'relationship' => 'accounts_tms_habeasdata_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_ACCOUNTS_TMS_HABEASDATA_1_FROM_TMS_HABEASDATA_TITLE',
    ),
    'tms_habeasdata_documents_1' => 
    array (
      'name' => 'tms_habeasdata_documents_1',
      'type' => 'link',
      'relationship' => 'tms_habeasdata_documents_1',
      'source' => 'non-db',
      'module' => 'Documents',
      'bean_name' => 'Document',
      'side' => 'right',
      'vname' => 'LBL_TMS_HABEASDATA_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
    ),
    'tms_habeasdata_tms_habeasdata_1' => 
    array (
      'name' => 'tms_habeasdata_tms_habeasdata_1',
      'type' => 'link',
      'relationship' => 'tms_habeasdata_tms_habeasdata_1',
      'source' => 'non-db',
      'module' => 'tms_habeasdata',
      'bean_name' => 'tms_habeasdata',
      'vname' => 'LBL_TMS_HABEASDATA_TMS_HABEASDATA_1_FROM_TMS_HABEASDATA_L_TITLE',
      'id_name' => 'tms_habeasdata_tms_habeasdata_1tms_habeasdata_ida',
    ),
    'tms_habeasdata_tms_habeasdata_1_name' => 
    array (
      'name' => 'tms_habeasdata_tms_habeasdata_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_TMS_HABEASDATA_TMS_HABEASDATA_1_FROM_TMS_HABEASDATA_L_TITLE',
      'save' => true,
      'id_name' => 'tms_habeasdata_tms_habeasdata_1tms_habeasdata_ida',
      'link' => 'tms_habeasdata_tms_habeasdata_1',
      'table' => 'tms_habeasdata',
      'module' => 'tms_habeasdata',
      'rname' => 'name',
    ),
    'tms_habeasdata_tms_habeasdata_1tms_habeasdata_ida' => 
    array (
      'name' => 'tms_habeasdata_tms_habeasdata_1tms_habeasdata_ida',
      'type' => 'link',
      'relationship' => 'tms_habeasdata_tms_habeasdata_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_TMS_HABEASDATA_TMS_HABEASDATA_1_FROM_TMS_HABEASDATA_R_TITLE',
    ),
  ),
  'relationships' => 
  array (
    'tms_habeasdata_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'tms_habeasdata',
      'rhs_table' => 'tms_habeasdata',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'tms_habeasdata_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'tms_habeasdata',
      'rhs_table' => 'tms_habeasdata',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'tms_habeasdata_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'tms_habeasdata',
      'rhs_table' => 'tms_habeasdata',
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
      'name' => 'tms_habeasdatapk',
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
  'custom_fields' => false,
);