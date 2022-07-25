<?php
// created: 2014-03-21 17:31:02
$dictionary["gbia4_aprobacioncups_gbia4_anexo4"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'gbia4_aprobacioncups_gbia4_anexo4' => 
    array (
      'lhs_module' => 'gbiA4_Anexo4',
      'lhs_table' => 'gbia4_anexo4',
      'lhs_key' => 'id',
      'rhs_module' => 'gbiA4_Aprobacioncups',
      'rhs_table' => 'gbia4_aprobacioncups',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'gbia4_aprobacioncups_gbia4_anexo4_c',
      'join_key_lhs' => 'gbia4_aprobacioncups_gbia4_anexo4gbia4_anexo4_ida',
      'join_key_rhs' => 'gbia4_aprobacioncups_gbia4_anexo4gbia4_aprobacioncups_idb',
    ),
  ),
  'table' => 'gbia4_aprobacioncups_gbia4_anexo4_c',
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
      'name' => 'gbia4_aprobacioncups_gbia4_anexo4gbia4_anexo4_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'gbia4_aprobacioncups_gbia4_anexo4gbia4_aprobacioncups_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'gbia4_aprobacioncups_gbia4_anexo4spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'gbia4_aprobacioncups_gbia4_anexo4_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'gbia4_aprobacioncups_gbia4_anexo4gbia4_anexo4_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'gbia4_aprobacioncups_gbia4_anexo4_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'gbia4_aprobacioncups_gbia4_anexo4gbia4_aprobacioncups_idb',
      ),
    ),
  ),
);