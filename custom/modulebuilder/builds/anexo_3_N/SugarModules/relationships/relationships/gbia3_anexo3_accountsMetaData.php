<?php
// created: 2014-04-10 08:35:32
$dictionary["gbia3_anexo3_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'gbia3_anexo3_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'GBIA3_an3_no_pos',
      'rhs_table' => 'gbia3_an3_no_pos',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'gbia3_anexo3_accounts_c',
      'join_key_lhs' => 'gbia3_anexo3_accountsaccounts_ida',
      'join_key_rhs' => 'gbia3_anexo3_accountsgbia3_an3_no_pos_idb',
    ),
  ),
  'table' => 'gbia3_anexo3_accounts_c',
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
      'name' => 'gbia3_anexo3_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'gbia3_anexo3_accountsgbia3_an3_no_pos_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'gbia3_anexo3_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'gbia3_anexo3_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'gbia3_anexo3_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'gbia3_anexo3_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'gbia3_anexo3_accountsgbia3_an3_no_pos_idb',
      ),
    ),
  ),
);