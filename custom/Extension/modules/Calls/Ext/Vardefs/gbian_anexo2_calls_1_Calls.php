<?php
// created: 2014-08-20 17:32:59
$dictionary["Call"]["fields"]["gbian_anexo2_calls_1"] = array (
  'name' => 'gbian_anexo2_calls_1',
  'type' => 'link',
  'relationship' => 'gbian_anexo2_calls_1',
  'source' => 'non-db',
  'module' => 'gbian_Anexo2',
  'bean_name' => 'gbian_Anexo2',
  'vname' => 'LBL_GBIAN_ANEXO2_CALLS_1_FROM_GBIAN_ANEXO2_TITLE',
  'id_name' => 'gbian_anexo2_calls_1gbian_anexo2_ida',
);
$dictionary["Call"]["fields"]["gbian_anexo2_calls_1_name"] = array (
  'name' => 'gbian_anexo2_calls_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GBIAN_ANEXO2_CALLS_1_FROM_GBIAN_ANEXO2_TITLE',
  'save' => true,
  'id_name' => 'gbian_anexo2_calls_1gbian_anexo2_ida',
  'link' => 'gbian_anexo2_calls_1',
  'table' => 'gbian_anexo2',
  'module' => 'gbian_Anexo2',
  'rname' => 'name',
);
$dictionary["Call"]["fields"]["gbian_anexo2_calls_1gbian_anexo2_ida"] = array (
  'name' => 'gbian_anexo2_calls_1gbian_anexo2_ida',
  'type' => 'link',
  'relationship' => 'gbian_anexo2_calls_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_GBIAN_ANEXO2_CALLS_1_FROM_CALLS_TITLE',
);
