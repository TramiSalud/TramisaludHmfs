<?php
// created: 2014-08-20 17:37:19
$dictionary["gbi_anexo3npos_calls_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'gbi_anexo3npos_calls_1' => 
    array (
      'lhs_module' => 'gbi_anexo3npos',
      'lhs_table' => 'gbi_anexo3npos',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'gbi_anexo3npos_calls_1_c',
      'join_key_lhs' => 'gbi_anexo3npos_calls_1gbi_anexo3npos_ida',
      'join_key_rhs' => 'gbi_anexo3npos_calls_1calls_idb',
    ),
  ),
  'table' => 'gbi_anexo3npos_calls_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'gbi_anexo3npos_calls_1gbi_anexo3npos_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'gbi_anexo3npos_calls_1calls_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'gbi_anexo3npos_calls_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'gbi_anexo3npos_calls_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'gbi_anexo3npos_calls_1gbi_anexo3npos_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'gbi_anexo3npos_calls_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'gbi_anexo3npos_calls_1calls_idb',
      ),
    ),
  ),
);