<?php
// created: 2014-04-10 10:06:56
$dictionary["GBIA3_ANEXO3"]["fields"]["accounts_gbia3_anexo3_1"] = array (
  'name' => 'accounts_gbia3_anexo3_1',
  'type' => 'link',
  'relationship' => 'accounts_gbia3_anexo3_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_GBIA3_ANEXO3_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_gbia3_anexo3_1accounts_ida',
);
$dictionary["GBIA3_ANEXO3"]["fields"]["accounts_gbia3_anexo3_1_name"] = array (
  'name' => 'accounts_gbia3_anexo3_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_GBIA3_ANEXO3_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_gbia3_anexo3_1accounts_ida',
  'link' => 'accounts_gbia3_anexo3_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["GBIA3_ANEXO3"]["fields"]["accounts_gbia3_anexo3_1accounts_ida"] = array (
  'name' => 'accounts_gbia3_anexo3_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_gbia3_anexo3_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_GBIA3_ANEXO3_1_FROM_GBIA3_ANEXO3_TITLE',
);
