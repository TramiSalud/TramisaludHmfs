<?php
// created: 2014-03-21 14:18:50
$dictionary["GBI_AUTORIZACIONES"]["fields"]["gbi_autorizaciones_accounts"] = array (
  'name' => 'gbi_autorizaciones_accounts',
  'type' => 'link',
  'relationship' => 'gbi_autorizaciones_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_GBI_AUTORIZACIONES_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'gbi_autorizaciones_accountsaccounts_ida',
);
$dictionary["GBI_AUTORIZACIONES"]["fields"]["gbi_autorizaciones_accounts_name"] = array (
  'name' => 'gbi_autorizaciones_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GBI_AUTORIZACIONES_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'gbi_autorizaciones_accountsaccounts_ida',
  'link' => 'gbi_autorizaciones_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["GBI_AUTORIZACIONES"]["fields"]["gbi_autorizaciones_accountsaccounts_ida"] = array (
  'name' => 'gbi_autorizaciones_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'gbi_autorizaciones_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_GBI_AUTORIZACIONES_ACCOUNTS_FROM_GBI_AUTORIZACIONES_TITLE',
);
