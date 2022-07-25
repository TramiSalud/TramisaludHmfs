<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2014-04-10 11:49:47
$dictionary["gbi_anexo3npos"]["fields"]["accounts_gbi_anexo3npos_1"] = array (
  'name' => 'accounts_gbi_anexo3npos_1',
  'type' => 'link',
  'relationship' => 'accounts_gbi_anexo3npos_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_GBI_ANEXO3NPOS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_gbi_anexo3npos_1accounts_ida',
);
$dictionary["gbi_anexo3npos"]["fields"]["accounts_gbi_anexo3npos_1_name"] = array (
  'name' => 'accounts_gbi_anexo3npos_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_GBI_ANEXO3NPOS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_gbi_anexo3npos_1accounts_ida',
  'link' => 'accounts_gbi_anexo3npos_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["gbi_anexo3npos"]["fields"]["accounts_gbi_anexo3npos_1accounts_ida"] = array (
  'name' => 'accounts_gbi_anexo3npos_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_gbi_anexo3npos_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_GBI_ANEXO3NPOS_1_FROM_GBI_ANEXO3NPOS_TITLE',
);



$dictionary["gbi_anexo3npos"]["fields"]["codigodiagnosticoppal"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["gbi_anexo3npos"]["fields"]["codigodiagnosticoppal"]["field_list"] = array(
		"codigodiagnosticoppal","cie_cie10_id_c","dxcodigodgnprincip_c"
);




$dictionary["gbi_anexo3npos"]["fields"]["codigodiagnostico"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["gbi_anexo3npos"]["fields"]["codigodiagnostico"]["field_list"] = array(
		"codigodiagnostico","cie_cie10_id1_c","descripcioncodigodiag_c"
);




$dictionary["gbi_anexo3npos"]["fields"]["codigodiagnosticorelacion"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["gbi_anexo3npos"]["fields"]["codigodiagnosticorelacion"]["field_list"] = array(
		"codigodiagnosticorelacion","cie_cie10_id2_c","dxcodigodgrelacionado_c"
);




$dictionary["gbi_anexo3npos"]["fields"]["especialista"]["populate_list"] = array(
		"name","id","nombres","apellidos","cargo","telppal","extension","telcel"
);

$dictionary["gbi_anexo3npos"]["fields"]["especialista"]["field_list"] = array(
		"name","esp_especialista_id_c","nombresolicitante","apellidossolicitante","cargoactividadrelacion","telefonosolicitante","extensionsolicitante","celularsolicitante"
);




$dictionary["gbi_anexo3npos"]["fields"]["accounts_gbi_anexo3npos_1_name"]["populate_list"] = array(
		"name","id","primernombre_c","segundonombre_c","primerapellido_c","segundoapellido_c","celular_c","email1"
);

$dictionary["gbi_anexo3npos"]["fields"]["accounts_gbi_anexo3npos_1_name"]["field_list"] = array(
		"accounts_gbi_anexo3npos_1_name","accounts_gbi_anexo3npos_1accounts_ida","primernombre","segundonombre","primerapellido","segundoapellido","celular","correoemail"
);



// created: 2014-08-20 17:37:19
$dictionary["gbi_anexo3npos"]["fields"]["gbi_anexo3npos_calls_1"] = array (
  'name' => 'gbi_anexo3npos_calls_1',
  'type' => 'link',
  'relationship' => 'gbi_anexo3npos_calls_1',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'side' => 'right',
  'vname' => 'LBL_GBI_ANEXO3NPOS_CALLS_1_FROM_CALLS_TITLE',
);


// created: 2014-08-11 18:47:03
$dictionary["gbi_anexo3npos"]["fields"]["gbi_anexo3npos_documents_1"] = array (
  'name' => 'gbi_anexo3npos_documents_1',
  'type' => 'link',
  'relationship' => 'gbi_anexo3npos_documents_1',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'side' => 'right',
  'vname' => 'LBL_GBI_ANEXO3NPOS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


// created: 2014-05-27 16:38:22
$dictionary["gbi_anexo3npos"]["fields"]["gbi_anexo3npos_gbihi_historialcorreo_1"] = array (
  'name' => 'gbi_anexo3npos_gbihi_historialcorreo_1',
  'type' => 'link',
  'relationship' => 'gbi_anexo3npos_gbihi_historialcorreo_1',
  'source' => 'non-db',
  'module' => 'GBIHI_HistorialCorreo',
  'bean_name' => 'GBIHI_HistorialCorreo',
  'side' => 'right',
  'vname' => 'LBL_GBI_ANEXO3NPOS_GBIHI_HISTORIALCORREO_1_FROM_GBIHI_HISTORIALCORREO_TITLE',
);


// created: 2014-04-10 12:02:15
$dictionary["gbi_anexo3npos"]["fields"]["gbi_anexo3npos_minpo_manejo_integra_1"] = array (
  'name' => 'gbi_anexo3npos_minpo_manejo_integra_1',
  'type' => 'link',
  'relationship' => 'gbi_anexo3npos_minpo_manejo_integra_1',
  'source' => 'non-db',
  'module' => 'minpo_Manejo_integra',
  'bean_name' => 'minpo_Manejo_integra',
  'side' => 'right',
  'vname' => 'LBL_GBI_ANEXO3NPOS_MINPO_MANEJO_INTEGRA_1_FROM_MINPO_MANEJO_INTEGRA_TITLE',
);


// created: 2014-04-11 13:03:14
$dictionary["gbi_anexo3npos"]["fields"]["gbi_anexo3npos_tasks_1"] = array (
  'name' => 'gbi_anexo3npos_tasks_1',
  'type' => 'link',
  'relationship' => 'gbi_anexo3npos_tasks_1',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'side' => 'right',
  'vname' => 'LBL_GBI_ANEXO3NPOS_TASKS_1_FROM_TASKS_TITLE',
);


 // created: 2014-08-20 17:04:23
$dictionary['gbi_anexo3npos']['fields']['codigodiagnosticoppal']['required']=true;

 

 // created: 2014-05-27 16:59:10
$dictionary['gbi_anexo3npos']['fields']['correo_enviado_c']['labelValue']='Correo Enviado';

 

 // created: 2014-08-11 18:23:32
$dictionary['gbi_anexo3npos']['fields']['descripcioncodigodiag_c']['labelValue']='Descripción de Código Diagnóstico';

 

 // created: 2014-08-11 18:24:53
$dictionary['gbi_anexo3npos']['fields']['dxcodigodgnprincip_c']['labelValue']='Descripción de Código Diagnóstico Principal';

 

 // created: 2014-08-11 18:25:32
$dictionary['gbi_anexo3npos']['fields']['dxcodigodgrelacionado_c']['labelValue']='Descripción de Código Diagnóstico Relacionado';

 

 // created: 2014-04-10 12:17:16

 

 // created: 2014-05-27 16:58:11
$dictionary['gbi_anexo3npos']['fields']['fecha_envio_correo_c']['options']='date_range_search_dom';
$dictionary['gbi_anexo3npos']['fields']['fecha_envio_correo_c']['labelValue']='Fecha Envío de Correo';
$dictionary['gbi_anexo3npos']['fields']['fecha_envio_correo_c']['enable_range_search']='1';

 

 // created: 2014-04-10 12:17:36

 

 // created: 2014-05-27 17:00:25
$dictionary['gbi_anexo3npos']['fields']['marcado_enviar_c']['labelValue']='Marcado Para Enviar';

 

 // created: 2014-04-10 12:14:54

 

 // created: 2014-05-27 16:59:53
$dictionary['gbi_anexo3npos']['fields']['numero_reintentos_c']['labelValue']='Número Reintentos';

 

 // created: 2014-04-10 12:17:57

 

 // created: 2014-07-10 15:04:59
$dictionary['gbi_anexo3npos']['fields']['rebotado_c']['labelValue']='Rebotado';

 

 // created: 2014-06-27 08:23:11
$dictionary['gbi_anexo3npos']['fields']['responsableseguimiento_c']['labelValue']='Responsable Seguimiento';

 

 // created: 2014-06-27 08:23:11

 
?>