<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2014-06-26 13:20:08
$dictionary["gbi_Anexo9"]["fields"]["accounts_gbi_anexo9_1"] = array (
  'name' => 'accounts_gbi_anexo9_1',
  'type' => 'link',
  'relationship' => 'accounts_gbi_anexo9_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_GBI_ANEXO9_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_gbi_anexo9_1accounts_ida',
);
$dictionary["gbi_Anexo9"]["fields"]["accounts_gbi_anexo9_1_name"] = array (
  'name' => 'accounts_gbi_anexo9_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_GBI_ANEXO9_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_gbi_anexo9_1accounts_ida',
  'link' => 'accounts_gbi_anexo9_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["gbi_Anexo9"]["fields"]["accounts_gbi_anexo9_1accounts_ida"] = array (
  'name' => 'accounts_gbi_anexo9_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_gbi_anexo9_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_GBI_ANEXO9_1_FROM_GBI_ANEXO9_TITLE',
);



$dictionary["gbi_Anexo9"]["fields"]["servicio_soli_refe"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["gbi_Anexo9"]["fields"]["servicio_soli_refe"]["field_list"] = array(
		"servicio_soli_refe","gbicu_cups_id_c","dxcups_c"
);




$dictionary["gbi_Anexo9"]["fields"]["codigo_diagnostico_c"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["gbi_Anexo9"]["fields"]["codigo_diagnostico_c"]["field_list"] = array(
		"codigo_diagnostico_c","cie_cie10_id_c","dxcodigodiagnostico_c"
);




$dictionary["gbi_Anexo9"]["fields"]["cups2_c"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["gbi_Anexo9"]["fields"]["cups2_c"]["field_list"] = array(
		"cups2_c","gbicu_cups_id1_c","dxcups2_c"
);




$dictionary["gbi_Anexo9"]["fields"]["codigo_de_diagnostico_2_c"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["gbi_Anexo9"]["fields"]["codigo_de_diagnostico_2_c"]["field_list"] = array(
		"codigo_de_diagnostico_2_c","cie_cie10_id1_c","dxcodigodignostico2_c"
);




$dictionary["gbi_Anexo9"]["fields"]["cups3_c"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["gbi_Anexo9"]["fields"]["cups3_c"]["field_list"] = array(
		"cups3_c","gbicu_cups_id2_c","dxcups3_c"
);




$dictionary["gbi_Anexo9"]["fields"]["codigo_diagnostico_3_c"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["gbi_Anexo9"]["fields"]["codigo_diagnostico_3_c"]["field_list"] = array(
		"codigo_diagnostico_3_c","cie_cie10_id2_c","dxcodigodiagnostico3_c"
);




$dictionary["gbi_Anexo9"]["fields"]["especialista"]["populate_list"] = array(
		"name","id","nombres","apellidos","cargo","telppal","extension","telcel"
);

$dictionary["gbi_Anexo9"]["fields"]["especialista"]["field_list"] = array(
		"especialista","esp_especialista_id_c","nombreespecialistaso","apellidoespecialistaso","cargoactividad","telefonoespecialista","extensionsolicitante","celularsolicitante"
);




$dictionary["gbi_Anexo9"]["fields"]["accounts_gbi_anexo9_1_name"]["populate_list"] = array(
		"name","id","primernombre_c","segundonombre_c","primerapellido_c","segundoapellido_c","celular_c","email1"
);

$dictionary["gbi_Anexo9"]["fields"]["accounts_gbi_anexo9_1_name"]["field_list"] = array(
		"accounts_gbi_anexo9_1_name","accounts_gbi_anexo9_1accounts_ida","primernombre","segundonombre","primerapellido","segundoapellido","celular","correoemail"
);



$dictionary["gbi_Anexo9"]["fields"]["eps"]["populate_list"] = array(
		"name","id", 'emailanexo9_c'
);

$dictionary["gbi_Anexo9"]["fields"]["eps"]["field_list"] = array(
		"eps","eps_eps_id_c","correo_envio_c"
);



// created: 2014-08-20 17:48:18
$dictionary["gbi_Anexo9"]["fields"]["gbi_anexo9_calls_1"] = array (
  'name' => 'gbi_anexo9_calls_1',
  'type' => 'link',
  'relationship' => 'gbi_anexo9_calls_1',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'side' => 'right',
  'vname' => 'LBL_GBI_ANEXO9_CALLS_1_FROM_CALLS_TITLE',
);


// created: 2014-08-11 18:50:48
$dictionary["gbi_Anexo9"]["fields"]["gbi_anexo9_documents_1"] = array (
  'name' => 'gbi_anexo9_documents_1',
  'type' => 'link',
  'relationship' => 'gbi_anexo9_documents_1',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'side' => 'right',
  'vname' => 'LBL_GBI_ANEXO9_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


// created: 2014-07-10 15:06:36
$dictionary["gbi_Anexo9"]["fields"]["gbi_anexo9_gbihi_historialcorreo_1"] = array (
  'name' => 'gbi_anexo9_gbihi_historialcorreo_1',
  'type' => 'link',
  'relationship' => 'gbi_anexo9_gbihi_historialcorreo_1',
  'source' => 'non-db',
  'module' => 'GBIHI_HistorialCorreo',
  'bean_name' => 'GBIHI_HistorialCorreo',
  'side' => 'right',
  'vname' => 'LBL_GBI_ANEXO9_GBIHI_HISTORIALCORREO_1_FROM_GBIHI_HISTORIALCORREO_TITLE',
);


// created: 2014-08-11 12:19:22
$dictionary["gbi_Anexo9"]["fields"]["gbi_anexo9_gbi_egreso_centro_regulador_1"] = array (
  'name' => 'gbi_anexo9_gbi_egreso_centro_regulador_1',
  'type' => 'link',
  'relationship' => 'gbi_anexo9_gbi_egreso_centro_regulador_1',
  'source' => 'non-db',
  'module' => 'gbi_egreso_centro_regulador',
  'bean_name' => 'gbi_egreso_centro_regulador',
  'side' => 'right',
  'vname' => 'LBL_GBI_ANEXO9_GBI_EGRESO_CENTRO_REGULADOR_1_FROM_GBI_EGRESO_CENTRO_REGULADOR_TITLE',
);


// created: 2014-08-20 17:40:34
$dictionary["gbi_Anexo9"]["fields"]["gbi_anexo9_tasks_1"] = array (
  'name' => 'gbi_anexo9_tasks_1',
  'type' => 'link',
  'relationship' => 'gbi_anexo9_tasks_1',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'side' => 'right',
  'vname' => 'LBL_GBI_ANEXO9_TASKS_1_FROM_TASKS_TITLE',
);


 // created: 2014-10-23 10:09:42
$dictionary['gbi_Anexo9']['fields']['cama_c']['labelValue']='Cama';

 

 // created: 2014-08-11 16:41:28

 

 // created: 2014-08-11 16:43:01

 

 // created: 2014-07-14 09:24:22

 

 // created: 2014-08-11 16:41:28
$dictionary['gbi_Anexo9']['fields']['codigo_de_diagnostico_2_c']['labelValue']='Código de Diagnóstico 2';

 

 // created: 2014-08-11 16:43:01
$dictionary['gbi_Anexo9']['fields']['codigo_diagnostico_3_c']['labelValue']='Código de Diagnóstico 3';

 

 // created: 2014-08-20 17:05:13
$dictionary['gbi_Anexo9']['fields']['codigo_diagnostico_c']['labelValue']='Código Diagnóstico';

 

 // created: 2014-07-10 15:09:33
$dictionary['gbi_Anexo9']['fields']['correo_enviado_c']['labelValue']='Correo Enviado';

 

 // created: 2014-10-27 21:54:33
$dictionary['gbi_Anexo9']['fields']['correo_envio_c']['labelValue']='Correo de envio (informativo)';

 

 // created: 2014-08-11 16:39:17
$dictionary['gbi_Anexo9']['fields']['cups2_c']['labelValue']='CUPS 2';

 

 // created: 2014-08-11 16:40:33
$dictionary['gbi_Anexo9']['fields']['cups3_c']['labelValue']='CUPS 3';

 

 // created: 2014-08-11 16:48:45
$dictionary['gbi_Anexo9']['fields']['dxcodigodiagnostico3_c']['labelValue']='Descripción de Código  Diagnostico 3';

 

 // created: 2014-08-11 16:51:45
$dictionary['gbi_Anexo9']['fields']['dxcodigodiagnostico_c']['labelValue']='Descripción de Código Diagnóstico';

 

 // created: 2014-08-11 16:53:16
$dictionary['gbi_Anexo9']['fields']['dxcodigodignostico2_c']['labelValue']='Descripción de Código Diagnóstico 2';

 

 // created: 2014-08-11 16:45:48
$dictionary['gbi_Anexo9']['fields']['dxcups2_c']['labelValue']='Descripción de CUPS 2';

 

 // created: 2014-08-11 16:46:42
$dictionary['gbi_Anexo9']['fields']['dxcups3_c']['labelValue']='Descripción de CUPS 3';

 

 // created: 2014-08-11 16:44:30
$dictionary['gbi_Anexo9']['fields']['dxcups_c']['labelValue']='Descripción de CUPS';

 

 // created: 2014-10-02 07:05:14
$dictionary['gbi_Anexo9']['fields']['especialidad_remite_c']['labelValue']='Especialidad que remite';

 

 // created: 2014-07-10 15:08:05
$dictionary['gbi_Anexo9']['fields']['fecha_envio_correo_c']['options']='date_range_search_dom';
$dictionary['gbi_Anexo9']['fields']['fecha_envio_correo_c']['labelValue']='Fecha Envío de Correo';
$dictionary['gbi_Anexo9']['fields']['fecha_envio_correo_c']['enable_range_search']='1';

 

 // created: 2014-08-11 16:39:17

 

 // created: 2014-08-11 16:40:33

 

 // created: 2014-07-10 15:09:59
$dictionary['gbi_Anexo9']['fields']['marcado_enviar_c']['labelValue']='Marcado Para Enviar';

 

 // created: 2014-07-10 15:08:50
$dictionary['gbi_Anexo9']['fields']['numero_reintentos_c']['labelValue']='Número Reintentos';

 

 // created: 2014-07-10 15:10:59
$dictionary['gbi_Anexo9']['fields']['rebotado_c']['labelValue']='Rebotado';

 

 // created: 2014-10-02 06:57:46
$dictionary['gbi_Anexo9']['fields']['servicio_c']['labelValue']='Servicio';

 

 // created: 2014-10-02 06:44:15
$dictionary['gbi_Anexo9']['fields']['servicio_solicitud_refe_c']['labelValue']='Servicio por el cual solicita la referencia';

 

 // created: 2014-09-30 09:31:06

 
?>