<?php 
 //WARNING: The contents of this file are auto-generated



$dictionary["gbi_egreso_centro_regulador"]["fields"]["ayuda_diag_clinica"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["gbi_egreso_centro_regulador"]["fields"]["ayuda_diag_clinica"]["field_list"] = array(
		"ayuda_diag_clinica","gbicu_cups_id_c","cups_clinica"
);





$dictionary["gbi_egreso_centro_regulador"]["fields"]["diagnostico_clini"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["gbi_egreso_centro_regulador"]["fields"]["diagnostico_clini"]["field_list"] = array(
		"diagnostico_clini","cie_cie10_id_c","descrip_dig"
);





$dictionary["gbi_egreso_centro_regulador"]["fields"]["cups2_c"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["gbi_egreso_centro_regulador"]["fields"]["cups2_c"]["field_list"] = array(
		"cups2_c","gbicu_cups_id2_c","cup2_desc_c"
);





$dictionary["gbi_egreso_centro_regulador"]["fields"]["dx2_c"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["gbi_egreso_centro_regulador"]["fields"]["dx2_c"]["field_list"] = array(
		"dx2_c","cie_cie10_id1_c","dx2_desc_c"
);





$dictionary["gbi_egreso_centro_regulador"]["fields"]["cups3_c"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["gbi_egreso_centro_regulador"]["fields"]["cups3_c"]["field_list"] = array(
		"cups3_c","gbicu_cups_id3_c","cups3_desc_c"
);





$dictionary["gbi_egreso_centro_regulador"]["fields"]["dx3_c"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["gbi_egreso_centro_regulador"]["fields"]["dx3_c"]["field_list"] = array(
		"dx3_c","cie_cie10_id2_c","dx3_desc_c"
);





$dictionary["gbi_egreso_centro_regulador"]["fields"]["paciente"]["populate_list"] = array(
		"name","id","primernombre_c","segundonombre_c","primerapellido_c","segundoapellido_c","telefonopersonal_c","celular_c","email1"
);

$dictionary["gbi_egreso_centro_regulador"]["fields"]["paciente"]["field_list"] = array(
		"paciente","account_id_c","nombres_apepaciente","segundonombre_c","primerapellido_c","segundoapellido_c","telefono_c","celular","correoemail"
);




// created: 2014-08-11 12:19:22
$dictionary["gbi_egreso_centro_regulador"]["fields"]["gbi_anexo9_gbi_egreso_centro_regulador_1"] = array (
  'name' => 'gbi_anexo9_gbi_egreso_centro_regulador_1',
  'type' => 'link',
  'relationship' => 'gbi_anexo9_gbi_egreso_centro_regulador_1',
  'source' => 'non-db',
  'module' => 'gbi_Anexo9',
  'bean_name' => 'gbi_Anexo9',
  'vname' => 'LBL_GBI_ANEXO9_GBI_EGRESO_CENTRO_REGULADOR_1_FROM_GBI_ANEXO9_TITLE',
  'id_name' => 'gbi_anexo9_gbi_egreso_centro_regulador_1gbi_anexo9_ida',
);
$dictionary["gbi_egreso_centro_regulador"]["fields"]["gbi_anexo9_gbi_egreso_centro_regulador_1_name"] = array (
  'name' => 'gbi_anexo9_gbi_egreso_centro_regulador_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GBI_ANEXO9_GBI_EGRESO_CENTRO_REGULADOR_1_FROM_GBI_ANEXO9_TITLE',
  'save' => true,
  'id_name' => 'gbi_anexo9_gbi_egreso_centro_regulador_1gbi_anexo9_ida',
  'link' => 'gbi_anexo9_gbi_egreso_centro_regulador_1',
  'table' => 'gbi_anexo9',
  'module' => 'gbi_Anexo9',
  'rname' => 'name',
);
$dictionary["gbi_egreso_centro_regulador"]["fields"]["gbi_anexo9_gbi_egreso_centro_regulador_1gbi_anexo9_ida"] = array (
  'name' => 'gbi_anexo9_gbi_egreso_centro_regulador_1gbi_anexo9_ida',
  'type' => 'link',
  'relationship' => 'gbi_anexo9_gbi_egreso_centro_regulador_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_GBI_ANEXO9_GBI_EGRESO_CENTRO_REGULADOR_1_FROM_GBI_EGRESO_CENTRO_REGULADOR_TITLE',
);


 // created: 2014-10-28 10:11:23
$dictionary['gbi_egreso_centro_regulador']['fields']['area_servicio']['default']='10';
$dictionary['gbi_egreso_centro_regulador']['fields']['area_servicio']['len']=100;
$dictionary['gbi_egreso_centro_regulador']['fields']['area_servicio']['options']='servicio_c_list';

 

 // created: 2014-08-11 15:53:04

 

 // created: 2014-08-11 16:00:37

 

 // created: 2014-08-11 15:45:25
$dictionary['gbi_egreso_centro_regulador']['fields']['codigo_autorizacion_c']['labelValue']='Código Autorización';

 

 // created: 2014-08-11 15:46:35
$dictionary['gbi_egreso_centro_regulador']['fields']['codigo_autorizacion_rem_c']['labelValue']='Código Autorización';

 

 // created: 2014-08-11 15:24:59

 

 // created: 2014-08-11 15:32:06
$dictionary['gbi_egreso_centro_regulador']['fields']['cup2_desc_c']['labelValue']='CUPS 2 Descripción';

 

 // created: 2014-08-11 15:28:41
$dictionary['gbi_egreso_centro_regulador']['fields']['cups2_c']['labelValue']='CUPS 2';

 

 // created: 2014-08-11 15:34:48
$dictionary['gbi_egreso_centro_regulador']['fields']['cups3_c']['labelValue']='CUPS 3';

 

 // created: 2014-08-11 15:36:26
$dictionary['gbi_egreso_centro_regulador']['fields']['cups3_desc_c']['labelValue']='CUPS 3 Descripción';

 

 // created: 2014-08-11 15:53:05
$dictionary['gbi_egreso_centro_regulador']['fields']['dx2_c']['labelValue']='Código de Diagnóstico 2';

 

 // created: 2014-08-11 15:54:22
$dictionary['gbi_egreso_centro_regulador']['fields']['dx2_desc_c']['labelValue']='Código de Diagnóstico 2 Descripción';

 

 // created: 2014-08-11 16:00:37
$dictionary['gbi_egreso_centro_regulador']['fields']['dx3_c']['labelValue']='Código de Diagnóstico 3';

 

 // created: 2014-08-11 16:08:43
$dictionary['gbi_egreso_centro_regulador']['fields']['dx3_desc_c']['labelValue']='Código de Diagnóstico 3 Descripción';

 

 // created: 2015-01-26 11:31:14
$dictionary['gbi_egreso_centro_regulador']['fields']['especialidad_requerida_c']['labelValue']='Especialidad Requerida';

 

 // created: 2014-08-11 15:25:15

 

 // created: 2014-08-11 16:19:06
$dictionary['gbi_egreso_centro_regulador']['fields']['firma_centro_regulador_c']['labelValue']='Firma de Centro Regulador';

 

 // created: 2015-03-26 10:31:08
$dictionary['gbi_egreso_centro_regulador']['fields']['funcionario_eps_dc_c']['labelValue']='Funcionario EPS ';

 

 // created: 2014-08-11 15:28:41

 

 // created: 2014-08-11 15:34:48

 

 // created: 2014-08-11 15:26:36
$dictionary['gbi_egreso_centro_regulador']['fields']['name']['unified_search']=false;

 

 // created: 2014-10-28 08:35:04

 

 // created: 2015-01-26 08:34:19
$dictionary['gbi_egreso_centro_regulador']['fields']['pambulancia_c']['labelValue']='Proveedor de Ambulancia';

 

 // created: 2014-10-28 08:33:57
$dictionary['gbi_egreso_centro_regulador']['fields']['primerapellido_c']['labelValue']='Primer Apellido';

 

 // created: 2015-03-13 08:59:57
$dictionary['gbi_egreso_centro_regulador']['fields']['respuesta_c']['labelValue']='Respuesta';

 

 // created: 2015-02-19 12:11:14
$dictionary['gbi_egreso_centro_regulador']['fields']['respuesta_dc_c']['labelValue']='Respuesta';

 

 // created: 2015-02-19 12:11:54
$dictionary['gbi_egreso_centro_regulador']['fields']['respuesta_dr_c']['labelValue']='Respuesta';

 

 // created: 2014-10-28 08:34:20
$dictionary['gbi_egreso_centro_regulador']['fields']['segundoapellido_c']['labelValue']='Segundo Apellido';

 

 // created: 2014-10-28 08:34:45
$dictionary['gbi_egreso_centro_regulador']['fields']['segundonombre_c']['labelValue']='Segundo Nombre';

 

 // created: 2014-08-11 16:19:06

 
?>