<?php
// created: 2014-08-20 17:37:19
$dictionary["Call"]["fields"]["gbi_anexo3npos_calls_1"] = array (
  'name' => 'gbi_anexo3npos_calls_1',
  'type' => 'link',
  'relationship' => 'gbi_anexo3npos_calls_1',
  'source' => 'non-db',
  'module' => 'gbi_anexo3npos',
  'bean_name' => 'gbi_anexo3npos',
  'vname' => 'LBL_GBI_ANEXO3NPOS_CALLS_1_FROM_GBI_ANEXO3NPOS_TITLE',
  'id_name' => 'gbi_anexo3npos_calls_1gbi_anexo3npos_ida',
);
$dictionary["Call"]["fields"]["gbi_anexo3npos_calls_1_name"] = array (
  'name' => 'gbi_anexo3npos_calls_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GBI_ANEXO3NPOS_CALLS_1_FROM_GBI_ANEXO3NPOS_TITLE',
  'save' => true,
  'id_name' => 'gbi_anexo3npos_calls_1gbi_anexo3npos_ida',
  'link' => 'gbi_anexo3npos_calls_1',
  'table' => 'gbi_anexo3npos',
  'module' => 'gbi_anexo3npos',
  'rname' => 'name',
);
$dictionary["Call"]["fields"]["gbi_anexo3npos_calls_1gbi_anexo3npos_ida"] = array (
  'name' => 'gbi_anexo3npos_calls_1gbi_anexo3npos_ida',
  'type' => 'link',
  'relationship' => 'gbi_anexo3npos_calls_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_GBI_ANEXO3NPOS_CALLS_1_FROM_CALLS_TITLE',
);
