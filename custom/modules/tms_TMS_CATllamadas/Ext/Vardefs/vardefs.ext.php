<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2016-01-04 06:45:13
$dictionary["tms_TMS_CATllamadas"]["fields"]["accounts_tms_tms_catllamadas_1"] = array (
  'name' => 'accounts_tms_tms_catllamadas_1',
  'type' => 'link',
  'relationship' => 'accounts_tms_tms_catllamadas_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_TMS_TMS_CATLLAMADAS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_tms_tms_catllamadas_1accounts_ida',
);
$dictionary["tms_TMS_CATllamadas"]["fields"]["accounts_tms_tms_catllamadas_1_name"] = array (
  'name' => 'accounts_tms_tms_catllamadas_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_TMS_TMS_CATLLAMADAS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_tms_tms_catllamadas_1accounts_ida',
  'link' => 'accounts_tms_tms_catllamadas_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["tms_TMS_CATllamadas"]["fields"]["accounts_tms_tms_catllamadas_1accounts_ida"] = array (
  'name' => 'accounts_tms_tms_catllamadas_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_tms_tms_catllamadas_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_TMS_TMS_CATLLAMADAS_1_FROM_TMS_TMS_CATLLAMADAS_TITLE',
);


 // created: 2016-01-22 09:07:12
$dictionary['tms_TMS_CATllamadas']['fields']['estado']['default']='';

 

 // created: 2016-01-04 06:46:35
$dictionary['tms_TMS_CATllamadas']['fields']['name']['unified_search']=false;

 

 // created: 2016-01-08 15:15:28
$dictionary['tms_TMS_CATllamadas']['fields']['telefono_que_llamo_c']['labelValue']='Teléfono de Contacto';

 

 // created: 2016-01-08 15:27:35

 
?>