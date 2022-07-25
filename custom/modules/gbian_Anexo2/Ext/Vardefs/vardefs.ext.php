<?php 
 //WARNING: The contents of this file are auto-generated



$dictionary["gbian_Anexo2"]["fields"]["codigo_relad_c"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["gbian_Anexo2"]["fields"]["codigo_relad_c"]["field_list"] = array(
		"codigo_relad_c","cie_cie10_id3_c","descripciondiagnostico0_c"
);




$dictionary["gbian_Anexo2"]["fields"]["cod_diagnostico"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["gbian_Anexo2"]["fields"]["cod_diagnostico"]["field_list"] = array(
		"cod_diagnostico","cie_cie10_id_c","descripciondediagnostico1_c"
);




$dictionary["gbian_Anexo2"]["fields"]["codigo_diagnostico"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["gbian_Anexo2"]["fields"]["codigo_diagnostico"]["field_list"] = array(
		"codigo_diagnostico","cie_cie10_id1_c","descripciondediagnostico2_c"
);




$dictionary["gbian_Anexo2"]["fields"]["codigo_relacionado"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["gbian_Anexo2"]["fields"]["codigo_relacionado"]["field_list"] = array(
		"codigo_relacionado","cie_cie10_id2_c","descripciondediagnostico3_c"
);




$dictionary["gbian_Anexo2"]["fields"]["nombrequienautoriza_c"]["populate_list"] = array(
		"name","id","nombres","apellidos","cargo","telppal","extension","telcel"
);

$dictionary["gbian_Anexo2"]["fields"]["nombrequienautoriza_c"]["field_list"] = array(
		"name","esp_especialista_id_c","nombre_informador","apellidos_informador_c","cargo_informador","tel_informador","ext","cel_informador_c"
);



$dictionary["gbian_Anexo2"]["fields"]["eps"]["populate_list"] = array(
		"name","id", 'emailanexo2'
);

$dictionary["gbian_Anexo2"]["fields"]["eps"]["field_list"] = array(
		"eps","eps_eps_id_c","correo_pagador_c"
);


// created: 2014-03-21 10:10:10
$dictionary["gbian_Anexo2"]["fields"]["gbian_anexo2_accounts"] = array (
  'name' => 'gbian_anexo2_accounts',
  'type' => 'link',
  'relationship' => 'gbian_anexo2_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_GBIAN_ANEXO2_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'gbian_anexo2_accountsaccounts_ida',
);
$dictionary["gbian_Anexo2"]["fields"]["gbian_anexo2_accounts_name"] = array (
  'name' => 'gbian_anexo2_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GBIAN_ANEXO2_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'gbian_anexo2_accountsaccounts_ida',
  'link' => 'gbian_anexo2_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["gbian_Anexo2"]["fields"]["gbian_anexo2_accountsaccounts_ida"] = array (
  'name' => 'gbian_anexo2_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'gbian_anexo2_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_GBIAN_ANEXO2_ACCOUNTS_FROM_GBIAN_ANEXO2_TITLE',
);


// created: 2014-04-08 10:31:47
$dictionary["gbian_Anexo2"]["fields"]["gbian_anexo2_aut_autorizacionestelefonicas_1"] = array (
  'name' => 'gbian_anexo2_aut_autorizacionestelefonicas_1',
  'type' => 'link',
  'relationship' => 'gbian_anexo2_aut_autorizacionestelefonicas_1',
  'source' => 'non-db',
  'module' => 'AUT_AutorizacionesTelefonicas',
  'bean_name' => 'AUT_AutorizacionesTelefonicas',
  'side' => 'right',
  'vname' => 'LBL_GBIAN_ANEXO2_AUT_AUTORIZACIONESTELEFONICAS_1_FROM_AUT_AUTORIZACIONESTELEFONICAS_TITLE',
);


// created: 2014-08-20 17:32:59
$dictionary["gbian_Anexo2"]["fields"]["gbian_anexo2_calls_1"] = array (
  'name' => 'gbian_anexo2_calls_1',
  'type' => 'link',
  'relationship' => 'gbian_anexo2_calls_1',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'side' => 'right',
  'vname' => 'LBL_GBIAN_ANEXO2_CALLS_1_FROM_CALLS_TITLE',
);


// created: 2014-08-11 18:45:14
$dictionary["gbian_Anexo2"]["fields"]["gbian_anexo2_documents_1"] = array (
  'name' => 'gbian_anexo2_documents_1',
  'type' => 'link',
  'relationship' => 'gbian_anexo2_documents_1',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'side' => 'right',
  'vname' => 'LBL_GBIAN_ANEXO2_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


// created: 2014-04-07 16:09:07
$dictionary["gbian_Anexo2"]["fields"]["gbian_anexo2_gbia4_anexo4_1"] = array (
  'name' => 'gbian_anexo2_gbia4_anexo4_1',
  'type' => 'link',
  'relationship' => 'gbian_anexo2_gbia4_anexo4_1',
  'source' => 'non-db',
  'module' => 'gbiA4_Anexo4',
  'bean_name' => 'gbiA4_Anexo4',
  'side' => 'right',
  'vname' => 'LBL_GBIAN_ANEXO2_GBIA4_ANEXO4_1_FROM_GBIA4_ANEXO4_TITLE',
);


// created: 2014-05-27 15:40:29
$dictionary["gbian_Anexo2"]["fields"]["gbian_anexo2_gbihi_historialcorreo_1"] = array (
  'name' => 'gbian_anexo2_gbihi_historialcorreo_1',
  'type' => 'link',
  'relationship' => 'gbian_anexo2_gbihi_historialcorreo_1',
  'source' => 'non-db',
  'module' => 'GBIHI_HistorialCorreo',
  'bean_name' => 'GBIHI_HistorialCorreo',
  'side' => 'right',
  'vname' => 'LBL_GBIAN_ANEXO2_GBIHI_HISTORIALCORREO_1_FROM_GBIHI_HISTORIALCORREO_TITLE',
);


// created: 2014-08-20 17:31:33
$dictionary["gbian_Anexo2"]["fields"]["gbian_anexo2_tasks_1"] = array (
  'name' => 'gbian_anexo2_tasks_1',
  'type' => 'link',
  'relationship' => 'gbian_anexo2_tasks_1',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'side' => 'right',
  'vname' => 'LBL_GBIAN_ANEXO2_TASKS_1_FROM_TASKS_TITLE',
);


 // created: 2014-05-16 08:32:01
$dictionary['gbian_Anexo2']['fields']['apellidos_informador_c']['labelValue']='Apellidos Informador';

 

 // created: 2014-04-07 14:36:21

 

 // created: 2014-05-16 08:33:32
$dictionary['gbian_Anexo2']['fields']['cel_informador_c']['labelValue']='Celular Informador';

 

 // created: 2014-04-04 15:41:41

 

 // created: 2014-08-11 18:08:11

 

 // created: 2014-04-04 08:36:26
$dictionary['gbian_Anexo2']['fields']['clasificacion_c']['labelValue']='Clasificación Triage';

 

 // created: 2014-04-08 16:51:34

 

 // created: 2014-04-08 16:51:45

 

 // created: 2014-08-20 17:04:44
$dictionary['gbian_Anexo2']['fields']['codigo_relad_c']['labelValue']='Diagnóstico Principal';

 

 // created: 2014-04-08 16:50:42

 

 // created: 2014-08-11 18:08:11
$dictionary['gbian_Anexo2']['fields']['cod_diagnostico_c']['labelValue']='Diagnóstico Relacionado 1';

 

 // created: 2014-07-10 16:57:38
$dictionary['gbian_Anexo2']['fields']['correo']['required']=false;

 

 // created: 2014-05-27 15:05:08
$dictionary['gbian_Anexo2']['fields']['correo_enviado_c']['labelValue']='Correo Enviado';

 

 // created: 2014-10-08 04:18:40
$dictionary['gbian_Anexo2']['fields']['correo_pagador_c']['labelValue']='Correo pagador (Informador)';

 

 // created: 2014-08-11 18:00:10
$dictionary['gbian_Anexo2']['fields']['descripciondediagnostico1_c']['labelValue']='Descripción de Diagnóstico 1';

 

 // created: 2014-08-11 18:00:59
$dictionary['gbian_Anexo2']['fields']['descripciondediagnostico2_c']['labelValue']='Descripción de Diagnóstico 2';

 

 // created: 2014-08-11 18:03:12
$dictionary['gbian_Anexo2']['fields']['descripciondediagnostico3_c']['labelValue']='Descripción de Diagnóstico 3';

 

 // created: 2014-08-11 18:04:25
$dictionary['gbian_Anexo2']['fields']['descripciondiagnostico0_c']['labelValue']='Descripción Diagnóstico ';

 

 // created: 2014-04-07 09:00:32
$dictionary['gbian_Anexo2']['fields']['description']['comments']='Full text of the note';
$dictionary['gbian_Anexo2']['fields']['description']['merge_filter']='disabled';

 

 // created: 2014-03-21 11:39:15
$dictionary['gbian_Anexo2']['fields']['destino_pte']['default']='';

 

 // created: 2014-03-21 15:03:01

 

 // created: 2014-05-14 15:48:56

 

 // created: 2014-03-21 10:38:20
$dictionary['gbian_Anexo2']['fields']['estado']['options']='estado_1';
$dictionary['gbian_Anexo2']['fields']['estado']['default']='';

 

 // created: 2014-05-16 08:34:10

 

 // created: 2014-08-20 16:55:40
$dictionary['gbian_Anexo2']['fields']['fecha_envio']['display_default']='now';
$dictionary['gbian_Anexo2']['fields']['fecha_envio']['options']='date_range_search_dom';
$dictionary['gbian_Anexo2']['fields']['fecha_envio']['enable_range_search']='1';

 

 // created: 2014-05-27 15:02:34
$dictionary['gbian_Anexo2']['fields']['fecha_envio_correo_c']['options']='date_range_search_dom';
$dictionary['gbian_Anexo2']['fields']['fecha_envio_correo_c']['labelValue']='Fecha Envío de Correo';
$dictionary['gbian_Anexo2']['fields']['fecha_envio_correo_c']['enable_range_search']='1';

 

 // created: 2014-04-04 08:29:02
$dictionary['gbian_Anexo2']['fields']['fecha_ingreso_c']['labelValue']='Fecha Ingreso Urgencias';

 

 // created: 2014-07-10 16:57:57
$dictionary['gbian_Anexo2']['fields']['forma_envio']['default']='';
$dictionary['gbian_Anexo2']['fields']['forma_envio']['options']='forma_envio_list';
$dictionary['gbian_Anexo2']['fields']['forma_envio']['required']=true;

 

 // created: 2014-04-07 14:37:00
$dictionary['gbian_Anexo2']['fields']['gestor_externo_c']['labelValue']='Gestor Externo';

 

 // created: 2014-04-07 13:28:16
$dictionary['gbian_Anexo2']['fields']['indicativo_a_c']['labelValue']='Indicativo';

 

 // created: 2014-08-20 17:01:42

 

 // created: 2014-05-27 15:06:22
$dictionary['gbian_Anexo2']['fields']['marcado_enviar_c']['labelValue']='Marcado Para Enviar';

 

 // created: 2014-03-21 12:07:11
$dictionary['gbian_Anexo2']['fields']['name']['full_text_search']=array (
);

 

 // created: 2014-05-16 08:34:54
$dictionary['gbian_Anexo2']['fields']['nombrequienautoriza_c']['labelValue']='Especialista';

 

 // created: 2014-05-16 08:31:45

 

 // created: 2014-08-20 16:59:48
$dictionary['gbian_Anexo2']['fields']['nombre_prestador_serv_c']['labelValue']='_Nombre del Prestador de Servicio que remite';

 

 // created: 2014-05-27 15:08:15
$dictionary['gbian_Anexo2']['fields']['numero_reintentos_c']['labelValue']='Número Reintentos';

 

 // created: 2014-03-21 11:58:17
$dictionary['gbian_Anexo2']['fields']['origen_atencion']['default']='';
$dictionary['gbian_Anexo2']['fields']['origen_atencion']['options']='origen_atencion_list';

 

 // created: 2014-04-04 08:24:03
$dictionary['gbian_Anexo2']['fields']['paciente_remitido_c']['labelValue']='Paciente viene Remitido';

 

 // created: 2014-08-20 17:01:42
$dictionary['gbian_Anexo2']['fields']['prestador_remite_c']['labelValue']='Nombre del Prestador de Servicio que remite';

 

 // created: 2014-03-21 10:53:52
$dictionary['gbian_Anexo2']['fields']['prioridad']['default']='';
$dictionary['gbian_Anexo2']['fields']['prioridad']['options']='prioridad_list';

 

 // created: 2014-07-10 15:03:58
$dictionary['gbian_Anexo2']['fields']['rebotado_c']['labelValue']='Rebotado';

 

 // created: 2014-04-07 14:54:12
$dictionary['gbian_Anexo2']['fields']['responsable_seguim_c']['labelValue']='Responsable Seguimiento';

 

 // created: 2014-07-10 16:55:47
$dictionary['gbian_Anexo2']['fields']['telefono']['required']=true;

 

 // created: 2014-05-16 08:33:05

 

 // created: 2014-03-21 10:50:32
$dictionary['gbian_Anexo2']['fields']['tipo_servicio']['default']='';
$dictionary['gbian_Anexo2']['fields']['tipo_servicio']['options']='tipo_servicio_list';

 

 // created: 2014-04-07 14:54:12

 

 // created: 2014-04-07 14:37:00

 
?>