<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2014-04-10 10:06:56
$dictionary["GBIA3_ANEXO3"]["fields"]["accounts_gbia3_anexo3_1"] = array (
  'name' => 'accounts_gbia3_anexo3_1',
  'type' => 'link',
  'relationship' => 'accounts_gbia3_anexo3_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_GBIA3_ANEXO3_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_gbia3_anexo3_1accounts_ida',
);
$dictionary["GBIA3_ANEXO3"]["fields"]["accounts_gbia3_anexo3_1_name"] = array (
  'name' => 'accounts_gbia3_anexo3_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_GBIA3_ANEXO3_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_gbia3_anexo3_1accounts_ida',
  'link' => 'accounts_gbia3_anexo3_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["GBIA3_ANEXO3"]["fields"]["accounts_gbia3_anexo3_1accounts_ida"] = array (
  'name' => 'accounts_gbia3_anexo3_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_gbia3_anexo3_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_GBIA3_ANEXO3_1_FROM_GBIA3_ANEXO3_TITLE',
);



$dictionary["GBIA3_ANEXO3"]["fields"]["codigodiagnosticoppal"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["GBIA3_ANEXO3"]["fields"]["codigodiagnosticoppal"]["field_list"] = array(
		"codigodiagnosticoppal","cie_cie10_id_c","decodigoprincipal_c"
);




$dictionary["GBIA3_ANEXO3"]["fields"]["codigodiagnostico"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["GBIA3_ANEXO3"]["fields"]["codigodiagnostico"]["field_list"] = array(
		"codigodiagnostico","cie_cie10_id1_c","codiagnostico2_c"
);




$dictionary["GBIA3_ANEXO3"]["fields"]["codigodiagnosticorelacion"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["GBIA3_ANEXO3"]["fields"]["codigodiagnosticorelacion"]["field_list"] = array(
		"codigodiagnosticorelacion","cie_cie10_id2_c","decodigorelacionado_c"
);




$dictionary["GBIA3_ANEXO3"]["fields"]["especialist_c"]["populate_list"] = array(
		"name","id","nombres","apellidos","cargo","telppal","extension","telcel"
);

$dictionary["GBIA3_ANEXO3"]["fields"]["especialist_c"]["field_list"] = array(
		"name","esp_especialista_id_c","nombresolicitante","apellidossolicitante_c","cargoactividadrelacion","telefonosolicitante","extensionsolicitante_c","celularsolicitante_c"
);




$dictionary["GBIA3_ANEXO3"]["fields"]["accounts_gbia3_anexo3_1_name"]["populate_list"] = array(
		"name","id","primernombre_c","segundonombre_c","primerapellido_c","segundoapellido_c","telefonopersonal_c","celular_c","email1"
);

$dictionary["GBIA3_ANEXO3"]["fields"]["accounts_gbia3_anexo3_1_name"]["field_list"] = array(
		"accounts_gbia3_anexo3_1_name","accounts_gbia3_anexo3_1accounts_ida","primernombre_c","segundonombre_c","primerapellido_c","segundoapellido_c","telefono_c","celular","correoemail"
);



$dictionary["GBIA3_ANEXO3"]["fields"]["eps"]["populate_list"] = array(
		"name","id", 'emailanexo3'
);

$dictionary["GBIA3_ANEXO3"]["fields"]["eps"]["field_list"] = array(
		"eps","eps_eps_id_c","correo_pagador_c"
);


// created: 2014-04-08 10:33:00
$dictionary["GBIA3_ANEXO3"]["fields"]["gbia3_anexo3_aut_autorizacionestelefonicas_1"] = array (
  'name' => 'gbia3_anexo3_aut_autorizacionestelefonicas_1',
  'type' => 'link',
  'relationship' => 'gbia3_anexo3_aut_autorizacionestelefonicas_1',
  'source' => 'non-db',
  'module' => 'AUT_AutorizacionesTelefonicas',
  'bean_name' => 'AUT_AutorizacionesTelefonicas',
  'side' => 'right',
  'vname' => 'LBL_GBIA3_ANEXO3_AUT_AUTORIZACIONESTELEFONICAS_1_FROM_AUT_AUTORIZACIONESTELEFONICAS_TITLE',
);


// created: 2014-08-20 17:33:58
$dictionary["GBIA3_ANEXO3"]["fields"]["gbia3_anexo3_calls_1"] = array (
  'name' => 'gbia3_anexo3_calls_1',
  'type' => 'link',
  'relationship' => 'gbia3_anexo3_calls_1',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'side' => 'right',
  'vname' => 'LBL_GBIA3_ANEXO3_CALLS_1_FROM_CALLS_TITLE',
);


// created: 2014-03-07 14:38:08
$dictionary["GBIA3_ANEXO3"]["fields"]["gbia3_anexo3_documents_1"] = array (
  'name' => 'gbia3_anexo3_documents_1',
  'type' => 'link',
  'relationship' => 'gbia3_anexo3_documents_1',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'side' => 'right',
  'vname' => 'LBL_GBIA3_ANEXO3_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


// created: 2014-04-09 19:50:10
$dictionary["GBIA3_ANEXO3"]["fields"]["gbia3_anexo3_gbia3_manejointegral_1"] = array (
  'name' => 'gbia3_anexo3_gbia3_manejointegral_1',
  'type' => 'link',
  'relationship' => 'gbia3_anexo3_gbia3_manejointegral_1',
  'source' => 'non-db',
  'module' => 'GBIA3_ManejoIntegral',
  'bean_name' => 'GBIA3_ManejoIntegral',
  'side' => 'right',
  'vname' => 'LBL_GBIA3_ANEXO3_GBIA3_MANEJOINTEGRAL_1_FROM_GBIA3_MANEJOINTEGRAL_TITLE',
);


// created: 2014-05-22 15:05:21
$dictionary["GBIA3_ANEXO3"]["fields"]["gbia3_anexo3_gbihi_historialcorreo_1"] = array (
  'name' => 'gbia3_anexo3_gbihi_historialcorreo_1',
  'type' => 'link',
  'relationship' => 'gbia3_anexo3_gbihi_historialcorreo_1',
  'source' => 'non-db',
  'module' => 'GBIHI_HistorialCorreo',
  'bean_name' => 'GBIHI_HistorialCorreo',
  'side' => 'right',
  'vname' => 'LBL_GBIA3_ANEXO3_GBIHI_HISTORIALCORREO_1_FROM_GBIHI_HISTORIALCORREO_TITLE',
);


// created: 2014-02-26 20:47:30
$dictionary["GBIA3_ANEXO3"]["fields"]["gbia3_anexo3_tasks_1"] = array (
  'name' => 'gbia3_anexo3_tasks_1',
  'type' => 'link',
  'relationship' => 'gbia3_anexo3_tasks_1',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'side' => 'right',
  'vname' => 'LBL_GBIA3_ANEXO3_TASKS_1_FROM_TASKS_TITLE',
);


// created: 2014-03-21 17:31:01
$dictionary["GBIA3_ANEXO3"]["fields"]["gbia4_anexo4_gbia3_anexo3"] = array (
  'name' => 'gbia4_anexo4_gbia3_anexo3',
  'type' => 'link',
  'relationship' => 'gbia4_anexo4_gbia3_anexo3',
  'source' => 'non-db',
  'module' => 'gbiA4_Anexo4',
  'bean_name' => 'gbiA4_Anexo4',
  'side' => 'right',
  'vname' => 'LBL_GBIA4_ANEXO4_GBIA3_ANEXO3_FROM_GBIA4_ANEXO4_TITLE',
);


 // created: 2014-03-11 13:36:48
$dictionary['GBIA3_ANEXO3']['fields']['apellidossolicitante_c']['labelValue']='Apellidos Solicitante';

 

 // created: 2014-04-10 17:15:46
$dictionary['GBIA3_ANEXO3']['fields']['cama']['help']='adfaeraeraererer';
$dictionary['GBIA3_ANEXO3']['fields']['cama']['comments']='tttttggggg';

 

 // created: 2014-03-06 17:44:42
$dictionary['GBIA3_ANEXO3']['fields']['cargactirela_c']['labelValue']='Cargo/Actividad/Relación';

 

 // created: 2014-04-10 17:15:20
$dictionary['GBIA3_ANEXO3']['fields']['cargoactividadrelacion']['len']='100';
$dictionary['GBIA3_ANEXO3']['fields']['cargoactividadrelacion']['help']='cajjj';

 

 // created: 2014-03-11 13:38:56
$dictionary['GBIA3_ANEXO3']['fields']['celularsolicitante_c']['labelValue']='Celular Solicitante';

 

 // created: 2014-08-11 18:15:22
$dictionary['GBIA3_ANEXO3']['fields']['codiagnostico2_c']['labelValue']='Descripción de Código Diagnóstico';

 

 // created: 2014-08-20 17:04:00
$dictionary['GBIA3_ANEXO3']['fields']['codigodiagnosticoppal']['required']=true;

 

 // created: 2014-03-10 15:00:29

 

 // created: 2014-05-19 10:40:32
$dictionary['GBIA3_ANEXO3']['fields']['correo_enviado_c']['labelValue']='Correo Enviado';

 

 // created: 2014-10-08 04:17:16
$dictionary['GBIA3_ANEXO3']['fields']['correo_pagador_c']['labelValue']='Correo pagador (Informativo)';

 

 // created: 2015-02-03 10:25:03
$dictionary['GBIA3_ANEXO3']['fields']['date_entered']['comments']='Date record created';
$dictionary['GBIA3_ANEXO3']['fields']['date_entered']['merge_filter']='disabled';

 

 // created: 2014-08-11 18:16:23
$dictionary['GBIA3_ANEXO3']['fields']['decodigoprincipal_c']['labelValue']='Descripción de Código Diagnóstico Principal';

 

 // created: 2014-08-11 18:17:15
$dictionary['GBIA3_ANEXO3']['fields']['decodigorelacionado_c']['labelValue']='Descripción de Código Diagnóstico Relacionado';

 

 // created: 2014-04-07 16:35:21
$dictionary['GBIA3_ANEXO3']['fields']['especialista_c']['labelValue']='Especialista_';

 

 // created: 2014-04-07 16:35:40
$dictionary['GBIA3_ANEXO3']['fields']['especialist_c']['labelValue']='Especialista';

 

 // created: 2014-04-07 16:35:00

 

 // created: 2014-03-07 15:26:44
$dictionary['GBIA3_ANEXO3']['fields']['estado_c']['labelValue']='Estado';

 

 // created: 2014-03-11 13:41:47
$dictionary['GBIA3_ANEXO3']['fields']['extensionsolicitante_c']['labelValue']='Extensión Solicitante';

 

 // created: 2014-05-19 10:43:04
$dictionary['GBIA3_ANEXO3']['fields']['fecha_envio_correo_c']['options']='date_range_search_dom';
$dictionary['GBIA3_ANEXO3']['fields']['fecha_envio_correo_c']['labelValue']='Fecha Envío de Correo';
$dictionary['GBIA3_ANEXO3']['fields']['fecha_envio_correo_c']['enable_range_search']='1';

 

 // created: 2014-10-09 19:05:24
$dictionary['GBIA3_ANEXO3']['fields']['formaenvisolicitud']['required']=true;

 

 // created: 2014-03-19 10:26:43
$dictionary['GBIA3_ANEXO3']['fields']['fuenteorden_c']['labelValue']='Fuente de Orden(SOLO PARA SAVIA)';

 

 // created: 2014-03-11 08:10:24
$dictionary['GBIA3_ANEXO3']['fields']['gestorexterno_c']['labelValue']='Gestor Externo';

 

 // created: 2014-05-23 15:27:04
$dictionary['GBIA3_ANEXO3']['fields']['marcado_enviar_c']['labelValue']='Marcado Para Enviar';

 

 // created: 2014-03-19 10:24:07
$dictionary['GBIA3_ANEXO3']['fields']['motivoconsulta_c']['labelValue']='Motivo de Consulta(SOLO PARA SAVIA)';

 

 // created: 2014-03-11 13:35:23

 

 // created: 2014-05-19 10:41:29
$dictionary['GBIA3_ANEXO3']['fields']['numero_reintentos_c']['labelValue']='Número Reintentos';

 

 // created: 2014-04-04 08:21:14
$dictionary['GBIA3_ANEXO3']['fields']['pacienremitido_c']['labelValue']='Paciente viene Remitido';

 

 // created: 2014-10-09 19:04:13
$dictionary['GBIA3_ANEXO3']['fields']['prestador']['required']=true;

 

 // created: 2014-03-11 15:00:36
$dictionary['GBIA3_ANEXO3']['fields']['primerapellido_c']['labelValue']='Primer Apellido';

 

 // created: 2014-06-26 11:03:12
$dictionary['GBIA3_ANEXO3']['fields']['primernombre_c']['labelValue']='Primer Nombre';

 

 // created: 2014-04-09 13:36:50

 

 // created: 2014-07-10 14:41:35
$dictionary['GBIA3_ANEXO3']['fields']['rebotado_c']['labelValue']='Rebotado';

 

 // created: 2014-03-11 15:04:04
$dictionary['GBIA3_ANEXO3']['fields']['segundoapellido_c']['labelValue']='Segundo Apellido';

 

 // created: 2014-03-11 14:59:55
$dictionary['GBIA3_ANEXO3']['fields']['segundonombre_c']['labelValue']='Segundo Nombre';

 

 // created: 2014-03-11 13:41:23

 

 // created: 2014-04-11 18:40:53
$dictionary['GBIA3_ANEXO3']['fields']['telefono_c']['labelValue']='Teléfono';

 

 // created: 2014-10-09 19:01:39

 

 // created: 2014-03-11 08:10:24

 
?>