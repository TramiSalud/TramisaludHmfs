<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2014-09-30 07:35:54
$dictionary["solci_SolicitudCitas"]["fields"]["accounts_solci_solicitudcitas_1"] = array (
  'name' => 'accounts_solci_solicitudcitas_1',
  'type' => 'link',
  'relationship' => 'accounts_solci_solicitudcitas_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_SOLCI_SOLICITUDCITAS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_solci_solicitudcitas_1accounts_ida',
);
$dictionary["solci_SolicitudCitas"]["fields"]["accounts_solci_solicitudcitas_1_name"] = array (
  'name' => 'accounts_solci_solicitudcitas_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_SOLCI_SOLICITUDCITAS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_solci_solicitudcitas_1accounts_ida',
  'link' => 'accounts_solci_solicitudcitas_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["solci_SolicitudCitas"]["fields"]["accounts_solci_solicitudcitas_1accounts_ida"] = array (
  'name' => 'accounts_solci_solicitudcitas_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_solci_solicitudcitas_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_SOLCI_SOLICITUDCITAS_1_FROM_SOLCI_SOLICITUDCITAS_TITLE',
);



$dictionary["solci_SolicitudCitas"]["fields"]["diagnostico"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["solci_SolicitudCitas"]["fields"]["diagnostico"]["field_list"] = array(
		"diagnostico","cie_cie10_id_c","cie10descripcion"
);





$dictionary["solci_SolicitudCitas"]["fields"]["codigodediagnostico2_c"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["solci_SolicitudCitas"]["fields"]["codigodediagnostico2_c"]["field_list"] = array(
		"codigodediagnostico2_c","cie_cie10_id1_c","codigodediagnostico2descripc_c"
);





$dictionary["solci_SolicitudCitas"]["fields"]["codigodiagnostico3_c"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["solci_SolicitudCitas"]["fields"]["codigodiagnostico3_c"]["field_list"] = array(
		"codigodiagnostico3_c","cie_cie10_id2_c","codigodiagnostico3descripcio_c"
);





$dictionary["solci_SolicitudCitas"]["fields"]["accounts_solci_solicitudcitas_1_name"]["populate_list"] = array(
		"name","id","primernombre_c","segundonombre_c","primerapellido_c","segundoapellido_c","telefonopersonal_c","celular_c","email1"
);

$dictionary["solci_SolicitudCitas"]["fields"]["accounts_solci_solicitudcitas_1_name"]["field_list"] = array(
		"accounts_solci_solicitudcitas_1_name","accounts_solci_solicitudcitas_1accounts_ida","nombresapellpaciente","segundonombre_c","primerapellido_c","segundoapellido_c","telefono_c","celular","correoemail"
);




 // created: 2014-12-18 08:15:34
$dictionary['solci_SolicitudCitas']['fields']['ambulancia']['options']='tipo_am_list';

 

 // created: 2014-12-16 14:53:51
$dictionary['solci_SolicitudCitas']['fields']['causaremision_c']['labelValue']='Causa de Remisión';

 

 // created: 2014-09-30 19:30:53
$dictionary['solci_SolicitudCitas']['fields']['causa_remision_c']['labelValue']='Causa de la remision';

 

 // created: 2014-08-11 14:31:22

 

 // created: 2014-08-11 14:47:18

 

 // created: 2014-08-11 14:35:47
$dictionary['solci_SolicitudCitas']['fields']['codigodediagnostico2descripc_c']['labelValue']='Código de Diagnóstico 2 Descripción';

 

 // created: 2014-08-11 14:31:22
$dictionary['solci_SolicitudCitas']['fields']['codigodediagnostico2_c']['labelValue']='Código de  Diagnóstico 2';

 

 // created: 2014-08-11 14:48:28
$dictionary['solci_SolicitudCitas']['fields']['codigodiagnostico3descripcio_c']['labelValue']='Código de Diagnóstico 3 Descripción';

 

 // created: 2014-08-11 14:47:18
$dictionary['solci_SolicitudCitas']['fields']['codigodiagnostico3_c']['labelValue']='Código de Diagnóstico 3';

 

 // created: 2014-08-11 14:29:33

 

 // created: 2014-08-11 14:17:15
$dictionary['solci_SolicitudCitas']['fields']['cup2_c']['labelValue']='CUPS 2';

 

 // created: 2014-08-11 14:22:14
$dictionary['solci_SolicitudCitas']['fields']['cup2_descripcion_c']['labelValue']='CUPS 2 Descripción';

 

 // created: 2014-08-11 14:23:30
$dictionary['solci_SolicitudCitas']['fields']['cup3_c']['labelValue']='CUPS 3';

 

 // created: 2014-08-11 14:25:19
$dictionary['solci_SolicitudCitas']['fields']['cup3_descripcion_c']['labelValue']='CUPS 3 Descripción';

 

 // created: 2014-08-11 14:44:36

 

 // created: 2014-08-11 14:54:30
$dictionary['solci_SolicitudCitas']['fields']['enfermera_solicita_c']['labelValue']='Enfermera que solicita';

 

 // created: 2014-08-11 15:01:51
$dictionary['solci_SolicitudCitas']['fields']['especilidadmedico_c']['labelValue']='Especialidad';

 

 // created: 2014-08-11 15:05:54
$dictionary['solci_SolicitudCitas']['fields']['firma_centro_regulador_c']['labelValue']='Firma Centro Regulador';

 

 // created: 2014-08-11 14:17:15

 

 // created: 2014-08-11 14:23:30

 

 // created: 2015-01-06 11:43:28
$dictionary['solci_SolicitudCitas']['fields']['l_sexo_c']['labelValue']='Sexo';

 

 // created: 2014-08-11 15:07:44
$dictionary['solci_SolicitudCitas']['fields']['munpac_c']['labelValue']='Municipio';

 

 // created: 2014-08-11 15:07:44

 

 // created: 2014-08-11 14:21:24
$dictionary['solci_SolicitudCitas']['fields']['name']['unified_search']=false;

 

 // created: 2014-10-27 21:37:24

 

 // created: 2014-08-11 14:51:58
$dictionary['solci_SolicitudCitas']['fields']['obsadicionacompanan_c']['labelValue']='Datos adicionales acompañante';

 

 // created: 2014-08-11 14:28:14

 

 // created: 2014-08-11 15:16:20

 

 // created: 2014-08-11 14:29:03

 

 // created: 2014-08-11 15:12:01
$dictionary['solci_SolicitudCitas']['fields']['obstienemovilidad_c']['labelValue']='Si es no especifique por qué y modo';

 

 // created: 2014-08-11 14:58:09

 

 // created: 2014-08-11 14:52:34

 

 // created: 2014-08-11 15:23:22
$dictionary['solci_SolicitudCitas']['fields']['pacientemoviliza_c']['labelValue']='¿El paciente se moviliza?';

 

 // created: 2014-08-11 15:10:34
$dictionary['solci_SolicitudCitas']['fields']['peso_c']['labelValue']='Peso';

 

 // created: 2014-10-27 21:34:22
$dictionary['solci_SolicitudCitas']['fields']['primerapellido_c']['labelValue']='Primer Apellido';

 

 // created: 2014-10-27 21:34:43
$dictionary['solci_SolicitudCitas']['fields']['segundoapellido_c']['labelValue']='Segundo Apellido';

 

 // created: 2014-10-27 21:33:58
$dictionary['solci_SolicitudCitas']['fields']['segundonombre_c']['labelValue']='Segundo Nombre';

 

 // created: 2015-01-06 11:37:32

 

 // created: 2014-08-11 15:13:25
$dictionary['solci_SolicitudCitas']['fields']['talla_c']['labelValue']='Talla';

 

 // created: 2014-08-11 15:20:23

 

 // created: 2014-08-11 15:05:54

 

 // created: 2014-08-11 14:54:30

 
?>