<?php
// created: 2014-04-10 11:49:47
$dictionary["gbi_anexo3npos"]["fields"]["accounts_gbi_anexo3npos_1"] = array (
  'name' => 'accounts_gbi_anexo3npos_1',
  'type' => 'link',
  'relationship' => 'accounts_gbi_anexo3npos_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_GBI_ANEXO3NPOS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_gbi_anexo3npos_1accounts_ida',
);
$dictionary["gbi_anexo3npos"]["fields"]["accounts_gbi_anexo3npos_1_name"] = array (
  'name' => 'accounts_gbi_anexo3npos_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_GBI_ANEXO3NPOS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_gbi_anexo3npos_1accounts_ida',
  'link' => 'accounts_gbi_anexo3npos_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["gbi_anexo3npos"]["fields"]["accounts_gbi_anexo3npos_1accounts_ida"] = array (
  'name' => 'accounts_gbi_anexo3npos_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_gbi_anexo3npos_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_GBI_ANEXO3NPOS_1_FROM_GBI_ANEXO3NPOS_TITLE',
);
