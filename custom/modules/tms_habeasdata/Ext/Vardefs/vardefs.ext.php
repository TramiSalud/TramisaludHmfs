<?php 
 //WARNING: The contents of this file are auto-generated


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


// created: 2016-11-04 08:38:13
$dictionary["tms_habeasdata"]["fields"]["tms_habeasdata_documents_1"] = array (
  'name' => 'tms_habeasdata_documents_1',
  'type' => 'link',
  'relationship' => 'tms_habeasdata_documents_1',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'side' => 'right',
  'vname' => 'LBL_TMS_HABEASDATA_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


// created: 2016-11-04 08:37:21
$dictionary["tms_habeasdata"]["fields"]["tms_habeasdata_tms_habeasdata_1"] = array (
  'name' => 'tms_habeasdata_tms_habeasdata_1',
  'type' => 'link',
  'relationship' => 'tms_habeasdata_tms_habeasdata_1',
  'source' => 'non-db',
  'module' => 'tms_habeasdata',
  'bean_name' => 'tms_habeasdata',
  'vname' => 'LBL_TMS_HABEASDATA_TMS_HABEASDATA_1_FROM_TMS_HABEASDATA_L_TITLE',
  'id_name' => 'tms_habeasdata_tms_habeasdata_1tms_habeasdata_ida',
);
$dictionary["tms_habeasdata"]["fields"]["tms_habeasdata_tms_habeasdata_1_name"] = array (
  'name' => 'tms_habeasdata_tms_habeasdata_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TMS_HABEASDATA_TMS_HABEASDATA_1_FROM_TMS_HABEASDATA_L_TITLE',
  'save' => true,
  'id_name' => 'tms_habeasdata_tms_habeasdata_1tms_habeasdata_ida',
  'link' => 'tms_habeasdata_tms_habeasdata_1',
  'table' => 'tms_habeasdata',
  'module' => 'tms_habeasdata',
  'rname' => 'name',
);
$dictionary["tms_habeasdata"]["fields"]["tms_habeasdata_tms_habeasdata_1tms_habeasdata_ida"] = array (
  'name' => 'tms_habeasdata_tms_habeasdata_1tms_habeasdata_ida',
  'type' => 'link',
  'relationship' => 'tms_habeasdata_tms_habeasdata_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TMS_HABEASDATA_TMS_HABEASDATA_1_FROM_TMS_HABEASDATA_R_TITLE',
);

?>