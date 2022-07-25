<?php
// created: 2014-03-21 17:31:01
$dictionary["gbia4_anexo4_gbia3_anexo3"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'gbia4_anexo4_gbia3_anexo3' => 
    array (
      'lhs_module' => 'GBIA3_ANEXO3',
      'lhs_table' => 'gbia3_anexo3',
      'lhs_key' => 'id',
      'rhs_module' => 'gbiA4_Anexo4',
      'rhs_table' => 'gbia4_anexo4',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'gbia4_anexo4_gbia3_anexo3_c',
      'join_key_lhs' => 'gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida',
      'join_key_rhs' => 'gbia4_anexo4_gbia3_anexo3gbia4_anexo4_idb',
    ),
  ),
  'table' => 'gbia4_anexo4_gbia3_anexo3_c',
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
      'name' => 'gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'gbia4_anexo4_gbia3_anexo3gbia4_anexo4_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'gbia4_anexo4_gbia3_anexo3spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'gbia4_anexo4_gbia3_anexo3_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'gbia4_anexo4_gbia3_anexo3_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'gbia4_anexo4_gbia3_anexo3gbia4_anexo4_idb',
      ),
    ),
  ),
);