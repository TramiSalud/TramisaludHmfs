<?php
// created: 2014-04-09 19:14:48
$dictionary["gbia3_manejointegral_gbia3_anexo3"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'gbia3_manejointegral_gbia3_anexo3' => 
    array (
      'lhs_module' => 'GBIA3_ANEXO3',
      'lhs_table' => 'gbia3_anexo3',
      'lhs_key' => 'id',
      'rhs_module' => 'GBIA3_manejo_integ',
      'rhs_table' => 'gbia3_manejo_integ',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'gbia3_manejointegral_gbia3_anexo3_c',
      'join_key_lhs' => 'gbia3_manejointegral_gbia3_anexo3gbia3_anexo3_ida',
      'join_key_rhs' => 'gbia3_manejointegral_gbia3_anexo3gbia3_manejo_integ_idb',
    ),
  ),
  'table' => 'gbia3_manejointegral_gbia3_anexo3_c',
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
      'name' => 'gbia3_manejointegral_gbia3_anexo3gbia3_anexo3_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'gbia3_manejointegral_gbia3_anexo3gbia3_manejo_integ_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'gbia3_manejointegral_gbia3_anexo3spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'gbia3_manejointegral_gbia3_anexo3_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'gbia3_manejointegral_gbia3_anexo3gbia3_anexo3_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'gbia3_manejointegral_gbia3_anexo3_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'gbia3_manejointegral_gbia3_anexo3gbia3_manejo_integ_idb',
      ),
    ),
  ),
);