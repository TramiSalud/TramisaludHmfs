<?php
// created: 2016-01-08 15:29:33
$dictionary["Note"]["fields"]["accounts_notes_1"] = array (
  'name' => 'accounts_notes_1',
  'type' => 'link',
  'relationship' => 'accounts_notes_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_NOTES_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_notes_1accounts_ida',
);
$dictionary["Note"]["fields"]["accounts_notes_1_name"] = array (
  'name' => 'accounts_notes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_NOTES_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_notes_1accounts_ida',
  'link' => 'accounts_notes_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["accounts_notes_1accounts_ida"] = array (
  'name' => 'accounts_notes_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_notes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_NOTES_1_FROM_NOTES_TITLE',
);
