<?php
// created: 2022-06-29 18:56:41
$dictionary["vd_validacion_derechos"]["fields"]["vd_validacion_derechos_accounts"] = array (
  'name' => 'vd_validacion_derechos_accounts',
  'type' => 'link',
  'relationship' => 'vd_validacion_derechos_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_VD_VALIDACION_DERECHOS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'vd_validacion_derechos_accountsaccounts_ida',
);
$dictionary["vd_validacion_derechos"]["fields"]["vd_validacion_derechos_accounts_name"] = array (
  'name' => 'vd_validacion_derechos_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VD_VALIDACION_DERECHOS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'vd_validacion_derechos_accountsaccounts_ida',
  'link' => 'vd_validacion_derechos_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["vd_validacion_derechos"]["fields"]["vd_validacion_derechos_accountsaccounts_ida"] = array (
  'name' => 'vd_validacion_derechos_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'vd_validacion_derechos_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VD_VALIDACION_DERECHOS_ACCOUNTS_FROM_VD_VALIDACION_DERECHOS_TITLE',
);
