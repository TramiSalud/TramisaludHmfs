<?php
// created: 2014-03-21 10:10:10
$dictionary["gbian_Anexo2"]["fields"]["gbian_anexo2_accounts"] = array (
  'name' => 'gbian_anexo2_accounts',
  'type' => 'link',
  'relationship' => 'gbian_anexo2_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_GBIAN_ANEXO2_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'gbian_anexo2_accountsaccounts_ida',
);
$dictionary["gbian_Anexo2"]["fields"]["gbian_anexo2_accounts_name"] = array (
  'name' => 'gbian_anexo2_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GBIAN_ANEXO2_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'gbian_anexo2_accountsaccounts_ida',
  'link' => 'gbian_anexo2_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["gbian_Anexo2"]["fields"]["gbian_anexo2_accountsaccounts_ida"] = array (
  'name' => 'gbian_anexo2_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'gbian_anexo2_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_GBIAN_ANEXO2_ACCOUNTS_FROM_GBIAN_ANEXO2_TITLE',
);
