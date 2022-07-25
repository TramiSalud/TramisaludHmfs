<?php
// created: 2010-09-22 11:11:02
$dictionary["basa1_ANEXO1"]["fields"]["basa1_anexo1_accounts"] = array (
  'name' => 'basa1_anexo1_accounts',
  'type' => 'link',
  'relationship' => 'basa1_anexo1_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_BASA1_ANEXO1_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'basa1_anexo1_accountsaccounts_ida',
);
$dictionary["basa1_ANEXO1"]["fields"]["basa1_anexo1_accounts_name"] = array (
  'name' => 'basa1_anexo1_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BASA1_ANEXO1_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'basa1_anexo1_accountsaccounts_ida',
  'link' => 'basa1_anexo1_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["basa1_ANEXO1"]["fields"]["basa1_anexo1_accountsaccounts_ida"] = array (
  'name' => 'basa1_anexo1_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'basa1_anexo1_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_BASA1_ANEXO1_ACCOUNTS_FROM_BASA1_ANEXO1_TITLE',
);
