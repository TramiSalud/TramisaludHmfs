<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2010-09-22 11:11:02
$dictionary["basa1_ANEXO1"]["fields"]["basa1_anexo1_accounts"] = array (
  'name' => 'basa1_anexo1_accounts',
  'type' => 'link',
  'relationship' => 'basa1_anexo1_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_BASA1_ANEXO1_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'basa1_anexo1_accountsaccounts_ida',
);
$dictionary["basa1_ANEXO1"]["fields"]["basa1_anexo1_accounts_name"] = array (
  'name' => 'basa1_anexo1_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BASA1_ANEXO1_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'basa1_anexo1_accountsaccounts_ida',
  'link' => 'basa1_anexo1_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["basa1_ANEXO1"]["fields"]["basa1_anexo1_accountsaccounts_ida"] = array (
  'name' => 'basa1_anexo1_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'basa1_anexo1_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_BASA1_ANEXO1_ACCOUNTS_FROM_BASA1_ANEXO1_TITLE',
);


// created: 2015-03-24 08:50:14
$dictionary["basa1_ANEXO1"]["fields"]["basa1_anexo1_documents_1"] = array (
  'name' => 'basa1_anexo1_documents_1',
  'type' => 'link',
  'relationship' => 'basa1_anexo1_documents_1',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'side' => 'right',
  'vname' => 'LBL_BASA1_ANEXO1_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


// created: 2014-10-21 00:51:17
$dictionary["basa1_ANEXO1"]["fields"]["basa1_anexo1_gbihi_historialcorreo_1"] = array (
  'name' => 'basa1_anexo1_gbihi_historialcorreo_1',
  'type' => 'link',
  'relationship' => 'basa1_anexo1_gbihi_historialcorreo_1',
  'source' => 'non-db',
  'module' => 'GBIHI_HistorialCorreo',
  'bean_name' => 'GBIHI_HistorialCorreo',
  'side' => 'right',
  'vname' => 'LBL_BASA1_ANEXO1_GBIHI_HISTORIALCORREO_1_FROM_GBIHI_HISTORIALCORREO_TITLE',
);


 // created: 2014-10-21 01:19:03
$dictionary['basa1_ANEXO1']['fields']['correo_enviado_c']['labelValue']='Correo enviado';

 

 // created: 2014-10-21 01:19:39
$dictionary['basa1_ANEXO1']['fields']['fecha_envio_correo_c']['labelValue']='Fecha envio correo';

 

 // created: 2014-10-21 01:20:07
$dictionary['basa1_ANEXO1']['fields']['marcado_enviar_c']['labelValue']='Marcado enviar';

 

 // created: 2014-10-21 01:20:31
$dictionary['basa1_ANEXO1']['fields']['numero_reintentos_c']['labelValue']='Numero reintentos';

 

 // created: 2019-03-25 01:29:39
$dictionary['basa1_ANEXO1']['fields']['tipodocumentolist']['options']='tipo_documento_acc';

 
?>