<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2016-01-12 12:53:29
$dictionary["gbiA4_Anexo4"]["fields"]["accounts_gbia4_anexo4_1"] = array (
  'name' => 'accounts_gbia4_anexo4_1',
  'type' => 'link',
  'relationship' => 'accounts_gbia4_anexo4_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_GBIA4_ANEXO4_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_gbia4_anexo4_1accounts_ida',
);
$dictionary["gbiA4_Anexo4"]["fields"]["accounts_gbia4_anexo4_1_name"] = array (
  'name' => 'accounts_gbia4_anexo4_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_GBIA4_ANEXO4_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_gbia4_anexo4_1accounts_ida',
  'link' => 'accounts_gbia4_anexo4_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["gbiA4_Anexo4"]["fields"]["accounts_gbia4_anexo4_1accounts_ida"] = array (
  'name' => 'accounts_gbia4_anexo4_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_gbia4_anexo4_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_GBIA4_ANEXO4_1_FROM_GBIA4_ANEXO4_TITLE',
);



$dictionary["gbiA4_Anexo4"]["fields"]["diagnostico_principal_c"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["gbiA4_Anexo4"]["fields"]["diagnostico_principal_c"]["field_list"] = array(
		"diagnostico_principal_c","cie_cie10_id_c","descripcion_diagnostico_pp_c"
);




$dictionary["gbiA4_Anexo4"]["fields"]["diagnostico_secundario_c"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["gbiA4_Anexo4"]["fields"]["diagnostico_secundario_c"]["field_list"] = array(
		"diagnostico_secundario_c","cie_cie10_id1_c","descripcion_diagnostico_sec_c"
);





$dictionary["gbiA4_Anexo4"]["fields"]["diagnostico_adicional_c"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["gbiA4_Anexo4"]["fields"]["diagnostico_adicional_c"]["field_list"] = array(
		"diagnostico_adicional_c","cie_cie10_id2_c","descripcion_diagnostico_ad_c"
);



// created: 2014-08-20 17:39:27
$dictionary["gbiA4_Anexo4"]["fields"]["gbia4_anexo4_calls_1"] = array (
  'name' => 'gbia4_anexo4_calls_1',
  'type' => 'link',
  'relationship' => 'gbia4_anexo4_calls_1',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'side' => 'right',
  'vname' => 'LBL_GBIA4_ANEXO4_CALLS_1_FROM_CALLS_TITLE',
);


// created: 2014-03-21 17:31:01
$dictionary["gbiA4_Anexo4"]["fields"]["gbia4_anexo4_gbia3_anexo3"] = array (
  'name' => 'gbia4_anexo4_gbia3_anexo3',
  'type' => 'link',
  'relationship' => 'gbia4_anexo4_gbia3_anexo3',
  'source' => 'non-db',
  'module' => 'GBIA3_ANEXO3',
  'bean_name' => 'GBIA3_ANEXO3',
  'vname' => 'LBL_GBIA4_ANEXO4_GBIA3_ANEXO3_FROM_GBIA3_ANEXO3_TITLE',
  'id_name' => 'gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida',
);
$dictionary["gbiA4_Anexo4"]["fields"]["gbia4_anexo4_gbia3_anexo3_name"] = array (
  'name' => 'gbia4_anexo4_gbia3_anexo3_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GBIA4_ANEXO4_GBIA3_ANEXO3_FROM_GBIA3_ANEXO3_TITLE',
  'save' => true,
  'id_name' => 'gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida',
  'link' => 'gbia4_anexo4_gbia3_anexo3',
  'table' => 'gbia3_anexo3',
  'module' => 'GBIA3_ANEXO3',
  'rname' => 'name',
);
$dictionary["gbiA4_Anexo4"]["fields"]["gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida"] = array (
  'name' => 'gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida',
  'type' => 'link',
  'relationship' => 'gbia4_anexo4_gbia3_anexo3',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_GBIA4_ANEXO4_GBIA3_ANEXO3_FROM_GBIA4_ANEXO4_TITLE',
);


// created: 2014-08-20 17:38:40
$dictionary["gbiA4_Anexo4"]["fields"]["gbia4_anexo4_tasks_1"] = array (
  'name' => 'gbia4_anexo4_tasks_1',
  'type' => 'link',
  'relationship' => 'gbia4_anexo4_tasks_1',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'side' => 'right',
  'vname' => 'LBL_GBIA4_ANEXO4_TASKS_1_FROM_TASKS_TITLE',
);


// created: 2014-03-21 17:31:02
$dictionary["gbiA4_Anexo4"]["fields"]["gbia4_aprobacioncups_gbia4_anexo4"] = array (
  'name' => 'gbia4_aprobacioncups_gbia4_anexo4',
  'type' => 'link',
  'relationship' => 'gbia4_aprobacioncups_gbia4_anexo4',
  'source' => 'non-db',
  'module' => 'gbiA4_Aprobacioncups',
  'bean_name' => 'gbiA4_Aprobacioncups',
  'side' => 'right',
  'vname' => 'LBL_GBIA4_APROBACIONCUPS_GBIA4_ANEXO4_FROM_GBIA4_APROBACIONCUPS_TITLE',
);


// created: 2014-04-07 16:09:07
$dictionary["gbiA4_Anexo4"]["fields"]["gbian_anexo2_gbia4_anexo4_1"] = array (
  'name' => 'gbian_anexo2_gbia4_anexo4_1',
  'type' => 'link',
  'relationship' => 'gbian_anexo2_gbia4_anexo4_1',
  'source' => 'non-db',
  'module' => 'gbian_Anexo2',
  'bean_name' => 'gbian_Anexo2',
  'vname' => 'LBL_GBIAN_ANEXO2_GBIA4_ANEXO4_1_FROM_GBIAN_ANEXO2_TITLE',
  'id_name' => 'gbian_anexo2_gbia4_anexo4_1gbian_anexo2_ida',
);
$dictionary["gbiA4_Anexo4"]["fields"]["gbian_anexo2_gbia4_anexo4_1_name"] = array (
  'name' => 'gbian_anexo2_gbia4_anexo4_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GBIAN_ANEXO2_GBIA4_ANEXO4_1_FROM_GBIAN_ANEXO2_TITLE',
  'save' => true,
  'id_name' => 'gbian_anexo2_gbia4_anexo4_1gbian_anexo2_ida',
  'link' => 'gbian_anexo2_gbia4_anexo4_1',
  'table' => 'gbian_anexo2',
  'module' => 'gbian_Anexo2',
  'rname' => 'name',
);
$dictionary["gbiA4_Anexo4"]["fields"]["gbian_anexo2_gbia4_anexo4_1gbian_anexo2_ida"] = array (
  'name' => 'gbian_anexo2_gbia4_anexo4_1gbian_anexo2_ida',
  'type' => 'link',
  'relationship' => 'gbian_anexo2_gbia4_anexo4_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_GBIAN_ANEXO2_GBIA4_ANEXO4_1_FROM_GBIA4_ANEXO4_TITLE',
);


 // created: 2014-04-04 11:46:42
$dictionary['gbiA4_Anexo4']['fields']['cargoquienautoriza_c']['labelValue']='Cargo o actividad';

 

 // created: 2014-04-04 12:29:01
$dictionary['gbiA4_Anexo4']['fields']['celquienautoriza_c']['labelValue']='Teléfono celular';

 

 // created: 2016-01-23 12:11:59

 

 // created: 2016-01-23 12:17:33

 

 // created: 2016-01-23 12:05:55

 

 // created: 2014-04-07 16:21:29

 

 // created: 2016-01-23 12:21:53
$dictionary['gbiA4_Anexo4']['fields']['descripcion_diagnostico_ad_c']['labelValue']='Descripción diagnóstico adicional';

 

 // created: 2016-01-23 12:06:45
$dictionary['gbiA4_Anexo4']['fields']['descripcion_diagnostico_pp_c']['labelValue']='Descripción diagnóstico principal';

 

 // created: 2016-01-23 12:19:45
$dictionary['gbiA4_Anexo4']['fields']['descripcion_diagnostico_sec_c']['labelValue']='Descripción diagnóstico secundario';

 

 // created: 2016-01-23 12:17:33
$dictionary['gbiA4_Anexo4']['fields']['diagnostico_adicional_c']['labelValue']='Diagnóstico adicional';

 

 // created: 2016-01-23 12:05:55
$dictionary['gbiA4_Anexo4']['fields']['diagnostico_principal_c']['labelValue']='Diagnóstico principal';

 

 // created: 2016-01-23 12:11:59
$dictionary['gbiA4_Anexo4']['fields']['diagnostico_secundario_c']['labelValue']='Diagnóstico secundario';

 

 // created: 2014-04-04 11:51:05
$dictionary['gbiA4_Anexo4']['fields']['extensionquienautoriza_c']['labelValue']='Extensión';

 

 // created: 2014-07-03 09:23:41
$dictionary['gbiA4_Anexo4']['fields']['fecha_recibida_c']['options']='date_range_search_dom';
$dictionary['gbiA4_Anexo4']['fields']['fecha_recibida_c']['labelValue']='Fecha Recibida';
$dictionary['gbiA4_Anexo4']['fields']['fecha_recibida_c']['enable_range_search']='1';

 

 // created: 2014-04-04 11:49:37
$dictionary['gbiA4_Anexo4']['fields']['indicativoquienautoriza_c']['labelValue']='Indicativo';

 

 // created: 2014-04-04 11:56:19
$dictionary['gbiA4_Anexo4']['fields']['name']['unified_search']=false;

 

 // created: 2014-04-04 11:41:13
$dictionary['gbiA4_Anexo4']['fields']['nombquienautoriza_c']['labelValue']='Nombre de quien autoriza';

 

 // created: 2014-04-04 12:26:52
$dictionary['gbiA4_Anexo4']['fields']['numeroquienautoriza_c']['labelValue']='Número';

 

 // created: 2014-04-08 14:38:09

 

 // created: 2016-01-23 11:40:12
$dictionary['gbiA4_Anexo4']['fields']['tipo_usuario_c']['labelValue']='Tipo de usuario';

 

 // created: 2016-01-12 13:06:47
$dictionary['gbiA4_Anexo4']['fields']['ubicacion_paciente_c']['labelValue']='Ubicacion del paciente';

 
?>