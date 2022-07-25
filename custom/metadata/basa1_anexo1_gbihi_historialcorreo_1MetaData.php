<?php
// created: 2014-10-21 00:51:17
$dictionary["basa1_anexo1_gbihi_historialcorreo_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'basa1_anexo1_gbihi_historialcorreo_1' => 
    array (
      'lhs_module' => 'basa1_ANEXO1',
      'lhs_table' => 'basa1_anexo1',
      'lhs_key' => 'id',
      'rhs_module' => 'GBIHI_HistorialCorreo',
      'rhs_table' => 'gbihi_historialcorreo',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'basa1_anexo1_gbihi_historialcorreo_1_c',
      'join_key_lhs' => 'basa1_anexo1_gbihi_historialcorreo_1basa1_anexo1_ida',
      'join_key_rhs' => 'basa1_anexo1_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
    ),
  ),
  'table' => 'basa1_anexo1_gbihi_historialcorreo_1_c',
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
      'name' => 'basa1_anexo1_gbihi_historialcorreo_1basa1_anexo1_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'basa1_anexo1_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'basa1_anexo1_gbihi_historialcorreo_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'basa1_anexo1_gbihi_historialcorreo_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'basa1_anexo1_gbihi_historialcorreo_1basa1_anexo1_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'basa1_anexo1_gbihi_historialcorreo_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'basa1_anexo1_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
      ),
    ),
  ),
);