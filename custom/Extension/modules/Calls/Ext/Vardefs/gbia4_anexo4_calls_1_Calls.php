<?php
// created: 2014-08-20 17:39:27
$dictionary["Call"]["fields"]["gbia4_anexo4_calls_1"] = array (
  'name' => 'gbia4_anexo4_calls_1',
  'type' => 'link',
  'relationship' => 'gbia4_anexo4_calls_1',
  'source' => 'non-db',
  'module' => 'gbiA4_Anexo4',
  'bean_name' => 'gbiA4_Anexo4',
  'vname' => 'LBL_GBIA4_ANEXO4_CALLS_1_FROM_GBIA4_ANEXO4_TITLE',
  'id_name' => 'gbia4_anexo4_calls_1gbia4_anexo4_ida',
);
$dictionary["Call"]["fields"]["gbia4_anexo4_calls_1_name"] = array (
  'name' => 'gbia4_anexo4_calls_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GBIA4_ANEXO4_CALLS_1_FROM_GBIA4_ANEXO4_TITLE',
  'save' => true,
  'id_name' => 'gbia4_anexo4_calls_1gbia4_anexo4_ida',
  'link' => 'gbia4_anexo4_calls_1',
  'table' => 'gbia4_anexo4',
  'module' => 'gbiA4_Anexo4',
  'rname' => 'name',
);
$dictionary["Call"]["fields"]["gbia4_anexo4_calls_1gbia4_anexo4_ida"] = array (
  'name' => 'gbia4_anexo4_calls_1gbia4_anexo4_ida',
  'type' => 'link',
  'relationship' => 'gbia4_anexo4_calls_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_GBIA4_ANEXO4_CALLS_1_FROM_CALLS_TITLE',
);
