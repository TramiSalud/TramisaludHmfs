<?php
// created: 2016-01-11 09:44:35
$dictionary["tms_TMS_Autorizaciones"]["fields"]["accounts_tms_tms_autorizaciones_1"] = array (
  'name' => 'accounts_tms_tms_autorizaciones_1',
  'type' => 'link',
  'relationship' => 'accounts_tms_tms_autorizaciones_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_TMS_TMS_AUTORIZACIONES_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_tms_tms_autorizaciones_1accounts_ida',
);
$dictionary["tms_TMS_Autorizaciones"]["fields"]["accounts_tms_tms_autorizaciones_1_name"] = array (
  'name' => 'accounts_tms_tms_autorizaciones_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_TMS_TMS_AUTORIZACIONES_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_tms_tms_autorizaciones_1accounts_ida',
  'link' => 'accounts_tms_tms_autorizaciones_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["tms_TMS_Autorizaciones"]["fields"]["accounts_tms_tms_autorizaciones_1accounts_ida"] = array (
  'name' => 'accounts_tms_tms_autorizaciones_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_tms_tms_autorizaciones_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_TMS_TMS_AUTORIZACIONES_1_FROM_TMS_TMS_AUTORIZACIONES_TITLE',
);
