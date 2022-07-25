<?php
// created: 2016-11-04 08:37:21
$dictionary["tms_habeasdata_tms_habeasdata_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'tms_habeasdata_tms_habeasdata_1' => 
    array (
      'lhs_module' => 'tms_habeasdata',
      'lhs_table' => 'tms_habeasdata',
      'lhs_key' => 'id',
      'rhs_module' => 'tms_habeasdata',
      'rhs_table' => 'tms_habeasdata',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tms_habeasdata_tms_habeasdata_1_c',
      'join_key_lhs' => 'tms_habeasdata_tms_habeasdata_1tms_habeasdata_ida',
      'join_key_rhs' => 'tms_habeasdata_tms_habeasdata_1tms_habeasdata_idb',
    ),
  ),
  'table' => 'tms_habeasdata_tms_habeasdata_1_c',
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
      'name' => 'tms_habeasdata_tms_habeasdata_1tms_habeasdata_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tms_habeasdata_tms_habeasdata_1tms_habeasdata_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tms_habeasdata_tms_habeasdata_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tms_habeasdata_tms_habeasdata_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tms_habeasdata_tms_habeasdata_1tms_habeasdata_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'tms_habeasdata_tms_habeasdata_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tms_habeasdata_tms_habeasdata_1tms_habeasdata_idb',
      ),
    ),
  ),
);