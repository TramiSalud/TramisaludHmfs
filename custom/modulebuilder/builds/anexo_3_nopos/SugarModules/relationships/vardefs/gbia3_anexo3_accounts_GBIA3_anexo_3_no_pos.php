<?php
// created: 2014-04-09 19:14:47
$dictionary["GBIA3_anexo_3_no_pos"]["fields"]["gbia3_anexo3_accounts"] = array (
  'name' => 'gbia3_anexo3_accounts',
  'type' => 'link',
  'relationship' => 'gbia3_anexo3_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_GBIA3_ANEXO3_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'gbia3_anexo3_accountsaccounts_ida',
);
$dictionary["GBIA3_anexo_3_no_pos"]["fields"]["gbia3_anexo3_accounts_name"] = array (
  'name' => 'gbia3_anexo3_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GBIA3_ANEXO3_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'gbia3_anexo3_accountsaccounts_ida',
  'link' => 'gbia3_anexo3_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["GBIA3_anexo_3_no_pos"]["fields"]["gbia3_anexo3_accountsaccounts_ida"] = array (
  'name' => 'gbia3_anexo3_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'gbia3_anexo3_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_GBIA3_ANEXO3_ACCOUNTS_FROM_GBIA3_ANEXO_3_NO_POS_TITLE',
);
