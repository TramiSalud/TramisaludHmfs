<?php
// created: 2014-06-26 13:20:08
$dictionary["gbi_Anexo9"]["fields"]["accounts_gbi_anexo9_1"] = array (
  'name' => 'accounts_gbi_anexo9_1',
  'type' => 'link',
  'relationship' => 'accounts_gbi_anexo9_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_GBI_ANEXO9_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_gbi_anexo9_1accounts_ida',
);
$dictionary["gbi_Anexo9"]["fields"]["accounts_gbi_anexo9_1_name"] = array (
  'name' => 'accounts_gbi_anexo9_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_GBI_ANEXO9_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_gbi_anexo9_1accounts_ida',
  'link' => 'accounts_gbi_anexo9_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["gbi_Anexo9"]["fields"]["accounts_gbi_anexo9_1accounts_ida"] = array (
  'name' => 'accounts_gbi_anexo9_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_gbi_anexo9_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_GBI_ANEXO9_1_FROM_GBI_ANEXO9_TITLE',
);
