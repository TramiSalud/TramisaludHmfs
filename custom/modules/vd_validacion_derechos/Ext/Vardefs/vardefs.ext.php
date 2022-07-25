<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2022-07-05 15:04:05
$dictionary['vd_validacion_derechos']['fields']['category_id']['required']=true;
$dictionary['vd_validacion_derechos']['fields']['category_id']['merge_filter']='disabled';
$dictionary['vd_validacion_derechos']['fields']['category_id']['reportable']=true;
$dictionary['vd_validacion_derechos']['fields']['category_id']['default']='01';

 

 // created: 2022-07-05 15:00:13
$dictionary['vd_validacion_derechos']['fields']['document_name']['required']=false;
$dictionary['vd_validacion_derechos']['fields']['document_name']['merge_filter']='disabled';
$dictionary['vd_validacion_derechos']['fields']['document_name']['unified_search']=false;

 

 // created: 2022-07-05 15:04:52
$dictionary['vd_validacion_derechos']['fields']['institucion']['required']=true;
$dictionary['vd_validacion_derechos']['fields']['institucion']['default']='';

 

 // created: 2022-07-05 15:10:59
$dictionary['vd_validacion_derechos']['fields']['tipo_consulta']['required']=true;

 

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

?>