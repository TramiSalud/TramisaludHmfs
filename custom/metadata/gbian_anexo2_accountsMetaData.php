<?php
// created: 2014-03-21 10:10:10
$dictionary["gbian_anexo2_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'gbian_anexo2_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'gbian_Anexo2',
      'rhs_table' => 'gbian_anexo2',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'gbian_anexo2_accounts_c',
      'join_key_lhs' => 'gbian_anexo2_accountsaccounts_ida',
      'join_key_rhs' => 'gbian_anexo2_accountsgbian_anexo2_idb',
    ),
  ),
  'table' => 'gbian_anexo2_accounts_c',
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
      'name' => 'gbian_anexo2_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'gbian_anexo2_accountsgbian_anexo2_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'gbian_anexo2_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'gbian_anexo2_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'gbian_anexo2_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'gbian_anexo2_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'gbian_anexo2_accountsgbian_anexo2_idb',
      ),
    ),
  ),
);