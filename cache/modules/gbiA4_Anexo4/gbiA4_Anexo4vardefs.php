<?php 
 $GLOBALS["dictionary"]["gbiA4_Anexo4"]=array (
  'table' => 'gbia4_anexo4',
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
      'relationship' => 'anexo4_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'required' => false,
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
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'gbia4_anexo4_modified_user',
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
      'relationship' => 'gbia4_anexo4_assigned_user',
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
    'ips_ips_id_c' => 
    array (
      'required' => false,
      'name' => 'ips_ips_id_c',
      'vname' => 'LBL_PRESTADOR_SERVICIO_IPS_IPS_ID',
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
    'prestador_servicio' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'prestador_servicio',
      'vname' => 'LBL_PRESTADOR_SERVICIO',
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
    'nro_autorizacipn' => 
    array (
      'required' => false,
      'name' => 'nro_autorizacipn',
      'vname' => 'LBL_NRO_AUTORIZACIPN',
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
      'len' => '15',
      'size' => '20',
    ),
    'porcentaje_servicio' => 
    array (
      'required' => false,
      'name' => 'porcentaje_servicio',
      'vname' => 'LBL_PORCENTAJE_SERVICIO',
      'type' => 'decimal',
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
      'len' => '5',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => '2',
    ),
    'semanas_afiliacion' => 
    array (
      'required' => false,
      'name' => 'semanas_afiliacion',
      'vname' => 'LBL_SEMANAS_AFILIACION',
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
      'len' => '10',
      'size' => '20',
    ),
    'reclamo_tiquete' => 
    array (
      'required' => false,
      'name' => 'reclamo_tiquete',
      'vname' => 'LBL_RECLAMO_TIQUETE',
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
    'concepto' => 
    array (
      'required' => false,
      'name' => 'concepto',
      'vname' => 'LBL_CONCEPTO',
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
      'options' => 'concepto_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'valor_pesos' => 
    array (
      'required' => false,
      'name' => 'valor_pesos',
      'vname' => 'LBL_VALOR_PESOS',
      'type' => 'currency',
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
      'len' => 26,
      'size' => '20',
      'enable_range_search' => false,
      'precision' => 6,
    ),
    'currency_id' => 
    array (
      'required' => false,
      'name' => 'currency_id',
      'vname' => 'LBL_CURRENCY',
      'type' => 'currency_id',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 36,
      'size' => '20',
      'dbType' => 'id',
      'studio' => 'visible',
      'function' => 
      array (
        'name' => 'getCurrencyDropDown',
        'returns' => 'html',
      ),
    ),
    'porcentaje' => 
    array (
      'required' => false,
      'name' => 'porcentaje',
      'vname' => 'LBL_PORCENTAJE',
      'type' => 'decimal',
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
      'len' => '5',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => '2',
    ),
    'maximo_valor' => 
    array (
      'required' => false,
      'name' => 'maximo_valor',
      'vname' => 'LBL_MAXIMO_VALOR',
      'type' => 'currency',
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
      'len' => 26,
      'size' => '20',
      'enable_range_search' => false,
      'precision' => 6,
    ),
    'accounts_gbia4_anexo4_1' => 
    array (
      'name' => 'accounts_gbia4_anexo4_1',
      'type' => 'link',
      'relationship' => 'accounts_gbia4_anexo4_1',
      'source' => 'non-db',
      'module' => 'Accounts',
      'bean_name' => 'Account',
      'vname' => 'LBL_ACCOUNTS_GBIA4_ANEXO4_1_FROM_ACCOUNTS_TITLE',
      'id_name' => 'accounts_gbia4_anexo4_1accounts_ida',
    ),
    'accounts_gbia4_anexo4_1_name' => 
    array (
      'name' => 'accounts_gbia4_anexo4_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ACCOUNTS_GBIA4_ANEXO4_1_FROM_ACCOUNTS_TITLE',
      'save' => true,
      'id_name' => 'accounts_gbia4_anexo4_1accounts_ida',
      'link' => 'accounts_gbia4_anexo4_1',
      'table' => 'accounts',
      'module' => 'Accounts',
      'rname' => 'name',
    ),
    'accounts_gbia4_anexo4_1accounts_ida' => 
    array (
      'name' => 'accounts_gbia4_anexo4_1accounts_ida',
      'type' => 'link',
      'relationship' => 'accounts_gbia4_anexo4_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_ACCOUNTS_GBIA4_ANEXO4_1_FROM_GBIA4_ANEXO4_TITLE',
    ),
    'diagnostico_principal_c' => 
    array (
      'populate_list' => 
      array (
        0 => 'name',
        1 => 'id',
        2 => 'description',
      ),
      'field_list' => 
      array (
        0 => 'diagnostico_principal_c',
        1 => 'cie_cie10_id_c',
        2 => 'descripcion_diagnostico_pp_c',
      ),
      'labelValue' => 'Diagnóstico principal',
      'required' => false,
      'source' => 'non-db',
      'name' => 'diagnostico_principal_c',
      'vname' => 'LBL_DIAGNOSTICO_PRINCIPAL',
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
      'id_name' => 'cie_cie10_id_c',
      'ext2' => 'CIE_CIE10',
      'module' => 'CIE_CIE10',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      'id' => 'gbiA4_Anexo4diagnostico_principal_c',
      'custom_module' => 'gbiA4_Anexo4',
    ),
    'diagnostico_secundario_c' => 
    array (
      'populate_list' => 
      array (
        0 => 'name',
        1 => 'id',
        2 => 'description',
      ),
      'field_list' => 
      array (
        0 => 'diagnostico_secundario_c',
        1 => 'cie_cie10_id1_c',
        2 => 'descripcion_diagnostico_sec_c',
      ),
      'labelValue' => 'Diagnóstico secundario',
      'required' => false,
      'source' => 'non-db',
      'name' => 'diagnostico_secundario_c',
      'vname' => 'LBL_DIAGNOSTICO_SECUNDARIO',
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
      'id_name' => 'cie_cie10_id1_c',
      'ext2' => 'CIE_CIE10',
      'module' => 'CIE_CIE10',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      'id' => 'gbiA4_Anexo4diagnostico_secundario_c',
      'custom_module' => 'gbiA4_Anexo4',
    ),
    'diagnostico_adicional_c' => 
    array (
      'populate_list' => 
      array (
        0 => 'name',
        1 => 'id',
        2 => 'description',
      ),
      'field_list' => 
      array (
        0 => 'diagnostico_adicional_c',
        1 => 'cie_cie10_id2_c',
        2 => 'descripcion_diagnostico_ad_c',
      ),
      'labelValue' => 'Diagnóstico adicional',
      'required' => false,
      'source' => 'non-db',
      'name' => 'diagnostico_adicional_c',
      'vname' => 'LBL_DIAGNOSTICO_ADICIONAL',
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
      'id_name' => 'cie_cie10_id2_c',
      'ext2' => 'CIE_CIE10',
      'module' => 'CIE_CIE10',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      'id' => 'gbiA4_Anexo4diagnostico_adicional_c',
      'custom_module' => 'gbiA4_Anexo4',
    ),
    'gbia4_anexo4_calls_1' => 
    array (
      'name' => 'gbia4_anexo4_calls_1',
      'type' => 'link',
      'relationship' => 'gbia4_anexo4_calls_1',
      'source' => 'non-db',
      'module' => 'Calls',
      'bean_name' => 'Call',
      'side' => 'right',
      'vname' => 'LBL_GBIA4_ANEXO4_CALLS_1_FROM_CALLS_TITLE',
    ),
    'gbia4_anexo4_gbia3_anexo3' => 
    array (
      'name' => 'gbia4_anexo4_gbia3_anexo3',
      'type' => 'link',
      'relationship' => 'gbia4_anexo4_gbia3_anexo3',
      'source' => 'non-db',
      'module' => 'GBIA3_ANEXO3',
      'bean_name' => 'GBIA3_ANEXO3',
      'vname' => 'LBL_GBIA4_ANEXO4_GBIA3_ANEXO3_FROM_GBIA3_ANEXO3_TITLE',
      'id_name' => 'gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida',
    ),
    'gbia4_anexo4_gbia3_anexo3_name' => 
    array (
      'name' => 'gbia4_anexo4_gbia3_anexo3_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_GBIA4_ANEXO4_GBIA3_ANEXO3_FROM_GBIA3_ANEXO3_TITLE',
      'save' => true,
      'id_name' => 'gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida',
      'link' => 'gbia4_anexo4_gbia3_anexo3',
      'table' => 'gbia3_anexo3',
      'module' => 'GBIA3_ANEXO3',
      'rname' => 'name',
    ),
    'gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida' => 
    array (
      'name' => 'gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida',
      'type' => 'link',
      'relationship' => 'gbia4_anexo4_gbia3_anexo3',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_GBIA4_ANEXO4_GBIA3_ANEXO3_FROM_GBIA4_ANEXO4_TITLE',
    ),
    'gbia4_anexo4_tasks_1' => 
    array (
      'name' => 'gbia4_anexo4_tasks_1',
      'type' => 'link',
      'relationship' => 'gbia4_anexo4_tasks_1',
      'source' => 'non-db',
      'module' => 'Tasks',
      'bean_name' => 'Task',
      'side' => 'right',
      'vname' => 'LBL_GBIA4_ANEXO4_TASKS_1_FROM_TASKS_TITLE',
    ),
    'gbia4_aprobacioncups_gbia4_anexo4' => 
    array (
      'name' => 'gbia4_aprobacioncups_gbia4_anexo4',
      'type' => 'link',
      'relationship' => 'gbia4_aprobacioncups_gbia4_anexo4',
      'source' => 'non-db',
      'module' => 'gbiA4_Aprobacioncups',
      'bean_name' => 'gbiA4_Aprobacioncups',
      'side' => 'right',
      'vname' => 'LBL_GBIA4_APROBACIONCUPS_GBIA4_ANEXO4_FROM_GBIA4_APROBACIONCUPS_TITLE',
    ),
    'gbian_anexo2_gbia4_anexo4_1' => 
    array (
      'name' => 'gbian_anexo2_gbia4_anexo4_1',
      'type' => 'link',
      'relationship' => 'gbian_anexo2_gbia4_anexo4_1',
      'source' => 'non-db',
      'module' => 'gbian_Anexo2',
      'bean_name' => 'gbian_Anexo2',
      'vname' => 'LBL_GBIAN_ANEXO2_GBIA4_ANEXO4_1_FROM_GBIAN_ANEXO2_TITLE',
      'id_name' => 'gbian_anexo2_gbia4_anexo4_1gbian_anexo2_ida',
    ),
    'gbian_anexo2_gbia4_anexo4_1_name' => 
    array (
      'name' => 'gbian_anexo2_gbia4_anexo4_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_GBIAN_ANEXO2_GBIA4_ANEXO4_1_FROM_GBIAN_ANEXO2_TITLE',
      'save' => true,
      'id_name' => 'gbian_anexo2_gbia4_anexo4_1gbian_anexo2_ida',
      'link' => 'gbian_anexo2_gbia4_anexo4_1',
      'table' => 'gbian_anexo2',
      'module' => 'gbian_Anexo2',
      'rname' => 'name',
    ),
    'gbian_anexo2_gbia4_anexo4_1gbian_anexo2_ida' => 
    array (
      'name' => 'gbian_anexo2_gbia4_anexo4_1gbian_anexo2_ida',
      'type' => 'link',
      'relationship' => 'gbian_anexo2_gbia4_anexo4_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_GBIAN_ANEXO2_GBIA4_ANEXO4_1_FROM_GBIA4_ANEXO4_TITLE',
    ),
    'cargoquienautoriza_c' => 
    array (
      'labelValue' => 'Cargo o actividad',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'cargoquienautoriza_c',
      'vname' => 'LBL_CARGOQUIENAUTORIZA',
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
      'id' => 'gbiA4_Anexo4cargoquienautoriza_c',
      'custom_module' => 'gbiA4_Anexo4',
    ),
    'celquienautoriza_c' => 
    array (
      'labelValue' => 'Teléfono celular',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'celquienautoriza_c',
      'vname' => 'LBL_CELQUIENAUTORIZA',
      'type' => 'phone',
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
      'len' => '10',
      'size' => '20',
      'dbType' => 'varchar',
      'id' => 'gbiA4_Anexo4celquienautoriza_c',
      'custom_module' => 'gbiA4_Anexo4',
    ),
    'descripcion_diagnostico_ad_c' => 
    array (
      'labelValue' => 'Descripción diagnóstico adicional',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'descripcion_diagnostico_ad_c',
      'vname' => 'LBL_DESCRIPCION_DIAGNOSTICO_AD',
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
      'id' => 'gbiA4_Anexo4descripcion_diagnostico_ad_c',
      'custom_module' => 'gbiA4_Anexo4',
    ),
    'descripcion_diagnostico_pp_c' => 
    array (
      'labelValue' => 'Descripción diagnóstico principal',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'descripcion_diagnostico_pp_c',
      'vname' => 'LBL_DESCRIPCION_DIAGNOSTICO_PP',
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
      'id' => 'gbiA4_Anexo4descripcion_diagnostico_pp_c',
      'custom_module' => 'gbiA4_Anexo4',
    ),
    'descripcion_diagnostico_sec_c' => 
    array (
      'labelValue' => 'Descripción diagnóstico secundario',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'descripcion_diagnostico_sec_c',
      'vname' => 'LBL_DESCRIPCION_DIAGNOSTICO_SEC',
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
      'id' => 'gbiA4_Anexo4descripcion_diagnostico_sec_c',
      'custom_module' => 'gbiA4_Anexo4',
    ),
    'extensionquienautoriza_c' => 
    array (
      'labelValue' => 'Extensión',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'extensionquienautoriza_c',
      'vname' => 'LBL_EXTENSIONQUIENAUTORIZA',
      'type' => 'int',
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
      'len' => '5',
      'size' => '20',
      'enable_range_search' => false,
      'disable_num_format' => '',
      'min' => false,
      'max' => false,
      'id' => 'gbiA4_Anexo4extensionquienautoriza_c',
      'custom_module' => 'gbiA4_Anexo4',
    ),
    'fecha_recibida_c' => 
    array (
      'options' => 'date_range_search_dom',
      'labelValue' => 'Fecha Recibida',
      'enable_range_search' => '1',
      'required' => true,
      'source' => 'custom_fields',
      'name' => 'fecha_recibida_c',
      'vname' => 'LBL_FECHA_RECIBIDA',
      'type' => 'datetimecombo',
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
      'dbType' => 'datetime',
      'id' => 'gbiA4_Anexo4fecha_recibida_c',
      'custom_module' => 'gbiA4_Anexo4',
    ),
    'indicativoquienautoriza_c' => 
    array (
      'labelValue' => 'Indicativo',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'indicativoquienautoriza_c',
      'vname' => 'LBL_INDICATIVOQUIENAUTORIZA',
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
      'len' => '5',
      'size' => '20',
      'id' => 'gbiA4_Anexo4indicativoquienautoriza_c',
      'custom_module' => 'gbiA4_Anexo4',
    ),
    'nombquienautoriza_c' => 
    array (
      'labelValue' => 'Nombre de quien autoriza',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'nombquienautoriza_c',
      'vname' => 'LBL_NOMBQUIENAUTORIZA',
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
      'id' => 'gbiA4_Anexo4nombquienautoriza_c',
      'custom_module' => 'gbiA4_Anexo4',
    ),
    'numeroquienautoriza_c' => 
    array (
      'labelValue' => 'Número',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'numeroquienautoriza_c',
      'vname' => 'LBL_NUMEROQUIENAUTORIZA',
      'type' => 'phone',
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
      'len' => '10',
      'size' => '20',
      'dbType' => 'varchar',
      'id' => 'gbiA4_Anexo4numeroquienautoriza_c',
      'custom_module' => 'gbiA4_Anexo4',
    ),
    'tipo_usuario_c' => 
    array (
      'labelValue' => 'Tipo de usuario',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'tipo_usuario_c',
      'vname' => 'LBL_TIPO_USUARIO',
      'type' => 'enum',
      'massupdate' => '0',
      'default' => 'Interno',
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
      'options' => 'tipo_usuario_list',
      'studio' => 'visible',
      'dependency' => false,
      'id' => 'gbiA4_Anexo4tipo_usuario_c',
      'custom_module' => 'gbiA4_Anexo4',
    ),
    'ubicacion_paciente_c' => 
    array (
      'labelValue' => 'Ubicacion del paciente',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'ubicacion_paciente_c',
      'vname' => 'LBL_UBICACION_PACIENTE',
      'type' => 'enum',
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
      'len' => 100,
      'size' => '20',
      'options' => 'ubicacion_paciente_list',
      'studio' => 'visible',
      'dependency' => false,
      'id' => 'gbiA4_Anexo4ubicacion_paciente_c',
      'custom_module' => 'gbiA4_Anexo4',
    ),
    'cie_cie10_id1_c' => 
    array (
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'cie_cie10_id1_c',
      'vname' => 'LBL_DIAGNOSTICO_SECUNDARIO_CIE_CIE10_ID',
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
      'id' => 'gbiA4_Anexo4cie_cie10_id1_c',
      'custom_module' => 'gbiA4_Anexo4',
    ),
    'cie_cie10_id2_c' => 
    array (
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'cie_cie10_id2_c',
      'vname' => 'LBL_DIAGNOSTICO_ADICIONAL_CIE_CIE10_ID',
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
      'id' => 'gbiA4_Anexo4cie_cie10_id2_c',
      'custom_module' => 'gbiA4_Anexo4',
    ),
    'cie_cie10_id_c' => 
    array (
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'cie_cie10_id_c',
      'vname' => 'LBL_DIAGNOSTICO_PRINCIPAL_CIE_CIE10_ID',
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
      'id' => 'gbiA4_Anexo4cie_cie10_id_c',
      'custom_module' => 'gbiA4_Anexo4',
    ),
  ),
  'relationships' => 
  array (
    'gbia4_anexo4_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'gbiA4_Anexo4',
      'rhs_table' => 'gbia4_anexo4',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'gbia4_anexo4_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'gbiA4_Anexo4',
      'rhs_table' => 'gbia4_anexo4',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'gbia4_anexo4_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'gbiA4_Anexo4',
      'rhs_table' => 'gbia4_anexo4',
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
      'name' => 'gbia4_anexo4pk',
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