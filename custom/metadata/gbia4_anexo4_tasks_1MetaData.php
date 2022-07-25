<?php
// created: 2014-08-20 17:38:40
$dictionary["gbia4_anexo4_tasks_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'gbia4_anexo4_tasks_1' => 
    array (
      'lhs_module' => 'gbiA4_Anexo4',
      'lhs_table' => 'gbia4_anexo4',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'gbia4_anexo4_tasks_1_c',
      'join_key_lhs' => 'gbia4_anexo4_tasks_1gbia4_anexo4_ida',
      'join_key_rhs' => 'gbia4_anexo4_tasks_1tasks_idb',
    ),
  ),
  'table' => 'gbia4_anexo4_tasks_1_c',
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
      'name' => 'gbia4_anexo4_tasks_1gbia4_anexo4_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'gbia4_anexo4_tasks_1tasks_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'gbia4_anexo4_tasks_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'gbia4_anexo4_tasks_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'gbia4_anexo4_tasks_1gbia4_anexo4_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'gbia4_anexo4_tasks_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'gbia4_anexo4_tasks_1tasks_idb',
      ),
    ),
  ),
);