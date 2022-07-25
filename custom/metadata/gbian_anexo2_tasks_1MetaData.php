<?php
// created: 2014-08-20 17:31:33
$dictionary["gbian_anexo2_tasks_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'gbian_anexo2_tasks_1' => 
    array (
      'lhs_module' => 'gbian_Anexo2',
      'lhs_table' => 'gbian_anexo2',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'gbian_anexo2_tasks_1_c',
      'join_key_lhs' => 'gbian_anexo2_tasks_1gbian_anexo2_ida',
      'join_key_rhs' => 'gbian_anexo2_tasks_1tasks_idb',
    ),
  ),
  'table' => 'gbian_anexo2_tasks_1_c',
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
      'name' => 'gbian_anexo2_tasks_1gbian_anexo2_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'gbian_anexo2_tasks_1tasks_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'gbian_anexo2_tasks_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'gbian_anexo2_tasks_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'gbian_anexo2_tasks_1gbian_anexo2_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'gbian_anexo2_tasks_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'gbian_anexo2_tasks_1tasks_idb',
      ),
    ),
  ),
);