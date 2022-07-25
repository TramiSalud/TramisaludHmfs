<?php
// created: 2016-01-07 10:57:10
$dictionary["accounts_tms_tms_centralautorizaciones_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_tms_tms_centralautorizaciones_1' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'tms_TMS_CentralAutorizaciones',
      'rhs_table' => 'tms_tms_centralautorizaciones',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_tms_tms_centralautorizaciones_1_c',
      'join_key_lhs' => 'accounts_tms_tms_centralautorizaciones_1accounts_ida',
      'join_key_rhs' => 'accounts_t6bd9aciones_idb',
    ),
  ),
  'table' => 'accounts_tms_tms_centralautorizaciones_1_c',
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
      'name' => 'accounts_tms_tms_centralautorizaciones_1accounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_t6bd9aciones_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_tms_tms_centralautorizaciones_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_tms_tms_centralautorizaciones_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_tms_tms_centralautorizaciones_1accounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_tms_tms_centralautorizaciones_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_t6bd9aciones_idb',
      ),
    ),
  ),
);