<?php
// created: 2016-01-07 10:57:11
$dictionary["tms_TMS_CentralAutorizaciones"]["fields"]["accounts_tms_tms_centralautorizaciones_1"] = array (
  'name' => 'accounts_tms_tms_centralautorizaciones_1',
  'type' => 'link',
  'relationship' => 'accounts_tms_tms_centralautorizaciones_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_TMS_TMS_CENTRALAUTORIZACIONES_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_tms_tms_centralautorizaciones_1accounts_ida',
);
$dictionary["tms_TMS_CentralAutorizaciones"]["fields"]["accounts_tms_tms_centralautorizaciones_1_name"] = array (
  'name' => 'accounts_tms_tms_centralautorizaciones_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_TMS_TMS_CENTRALAUTORIZACIONES_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_tms_tms_centralautorizaciones_1accounts_ida',
  'link' => 'accounts_tms_tms_centralautorizaciones_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["tms_TMS_CentralAutorizaciones"]["fields"]["accounts_tms_tms_centralautorizaciones_1accounts_ida"] = array (
  'name' => 'accounts_tms_tms_centralautorizaciones_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_tms_tms_centralautorizaciones_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_TMS_TMS_CENTRALAUTORIZACIONES_1_FROM_TMS_TMS_CENTRALAUTORIZACIONES_TITLE',
);
