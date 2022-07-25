<?php
// created: 2016-01-12 12:53:29
$dictionary["gbiA4_Anexo4"]["fields"]["accounts_gbia4_anexo4_1"] = array (
  'name' => 'accounts_gbia4_anexo4_1',
  'type' => 'link',
  'relationship' => 'accounts_gbia4_anexo4_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_GBIA4_ANEXO4_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_gbia4_anexo4_1accounts_ida',
);
$dictionary["gbiA4_Anexo4"]["fields"]["accounts_gbia4_anexo4_1_name"] = array (
  'name' => 'accounts_gbia4_anexo4_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_GBIA4_ANEXO4_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_gbia4_anexo4_1accounts_ida',
  'link' => 'accounts_gbia4_anexo4_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["gbiA4_Anexo4"]["fields"]["accounts_gbia4_anexo4_1accounts_ida"] = array (
  'name' => 'accounts_gbia4_anexo4_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_gbia4_anexo4_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_GBIA4_ANEXO4_1_FROM_GBIA4_ANEXO4_TITLE',
);
