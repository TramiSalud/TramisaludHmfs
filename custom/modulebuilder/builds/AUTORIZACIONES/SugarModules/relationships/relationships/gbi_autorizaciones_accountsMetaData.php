<?php
// created: 2014-03-21 14:18:50
$dictionary["gbi_autorizaciones_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'gbi_autorizaciones_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'GBI_AUTORIZACIONES',
      'rhs_table' => 'gbi_autorizaciones',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'gbi_autorizaciones_accounts_c',
      'join_key_lhs' => 'gbi_autorizaciones_accountsaccounts_ida',
      'join_key_rhs' => 'gbi_autorizaciones_accountsgbi_autorizaciones_idb',
    ),
  ),
  'table' => 'gbi_autorizaciones_accounts_c',
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
      'name' => 'gbi_autorizaciones_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'gbi_autorizaciones_accountsgbi_autorizaciones_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'gbi_autorizaciones_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'gbi_autorizaciones_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'gbi_autorizaciones_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'gbi_autorizaciones_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'gbi_autorizaciones_accountsgbi_autorizaciones_idb',
      ),
    ),
  ),
);