<?php
// created: 2014-08-20 17:33:58
$dictionary["Call"]["fields"]["gbia3_anexo3_calls_1"] = array (
  'name' => 'gbia3_anexo3_calls_1',
  'type' => 'link',
  'relationship' => 'gbia3_anexo3_calls_1',
  'source' => 'non-db',
  'module' => 'GBIA3_ANEXO3',
  'bean_name' => 'GBIA3_ANEXO3',
  'vname' => 'LBL_GBIA3_ANEXO3_CALLS_1_FROM_GBIA3_ANEXO3_TITLE',
  'id_name' => 'gbia3_anexo3_calls_1gbia3_anexo3_ida',
);
$dictionary["Call"]["fields"]["gbia3_anexo3_calls_1_name"] = array (
  'name' => 'gbia3_anexo3_calls_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GBIA3_ANEXO3_CALLS_1_FROM_GBIA3_ANEXO3_TITLE',
  'save' => true,
  'id_name' => 'gbia3_anexo3_calls_1gbia3_anexo3_ida',
  'link' => 'gbia3_anexo3_calls_1',
  'table' => 'gbia3_anexo3',
  'module' => 'GBIA3_ANEXO3',
  'rname' => 'name',
);
$dictionary["Call"]["fields"]["gbia3_anexo3_calls_1gbia3_anexo3_ida"] = array (
  'name' => 'gbia3_anexo3_calls_1gbia3_anexo3_ida',
  'type' => 'link',
  'relationship' => 'gbia3_anexo3_calls_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_GBIA3_ANEXO3_CALLS_1_FROM_CALLS_TITLE',
);
