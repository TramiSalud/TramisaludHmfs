<?php
// created: 2016-11-04 08:30:56
$dictionary["tms_habeasdata"]["fields"]["accounts_tms_habeasdata_1"] = array (
  'name' => 'accounts_tms_habeasdata_1',
  'type' => 'link',
  'relationship' => 'accounts_tms_habeasdata_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_TMS_HABEASDATA_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_tms_habeasdata_1accounts_ida',
);
$dictionary["tms_habeasdata"]["fields"]["accounts_tms_habeasdata_1_name"] = array (
  'name' => 'accounts_tms_habeasdata_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_TMS_HABEASDATA_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_tms_habeasdata_1accounts_ida',
  'link' => 'accounts_tms_habeasdata_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["tms_habeasdata"]["fields"]["accounts_tms_habeasdata_1accounts_ida"] = array (
  'name' => 'accounts_tms_habeasdata_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_tms_habeasdata_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_TMS_HABEASDATA_1_FROM_TMS_HABEASDATA_TITLE',
);
