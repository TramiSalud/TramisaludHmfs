<?php 
 //WARNING: The contents of this file are auto-generated



$dictionary["gbiA4_Aprobacioncups"]["fields"]["cups_c"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["gbiA4_Aprobacioncups"]["fields"]["cups_c"]["field_list"] = array(
		"name","gbicu_cups_id_c","description"
);



// created: 2014-03-21 17:31:02
$dictionary["gbiA4_Aprobacioncups"]["fields"]["gbia4_aprobacioncups_gbia4_anexo4"] = array (
  'name' => 'gbia4_aprobacioncups_gbia4_anexo4',
  'type' => 'link',
  'relationship' => 'gbia4_aprobacioncups_gbia4_anexo4',
  'source' => 'non-db',
  'module' => 'gbiA4_Anexo4',
  'bean_name' => 'gbiA4_Anexo4',
  'vname' => 'LBL_GBIA4_APROBACIONCUPS_GBIA4_ANEXO4_FROM_GBIA4_ANEXO4_TITLE',
  'id_name' => 'gbia4_aprobacioncups_gbia4_anexo4gbia4_anexo4_ida',
);
$dictionary["gbiA4_Aprobacioncups"]["fields"]["gbia4_aprobacioncups_gbia4_anexo4_name"] = array (
  'name' => 'gbia4_aprobacioncups_gbia4_anexo4_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GBIA4_APROBACIONCUPS_GBIA4_ANEXO4_FROM_GBIA4_ANEXO4_TITLE',
  'save' => true,
  'id_name' => 'gbia4_aprobacioncups_gbia4_anexo4gbia4_anexo4_ida',
  'link' => 'gbia4_aprobacioncups_gbia4_anexo4',
  'table' => 'gbia4_anexo4',
  'module' => 'gbiA4_Anexo4',
  'rname' => 'name',
);
$dictionary["gbiA4_Aprobacioncups"]["fields"]["gbia4_aprobacioncups_gbia4_anexo4gbia4_anexo4_ida"] = array (
  'name' => 'gbia4_aprobacioncups_gbia4_anexo4gbia4_anexo4_ida',
  'type' => 'link',
  'relationship' => 'gbia4_aprobacioncups_gbia4_anexo4',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_GBIA4_APROBACIONCUPS_GBIA4_ANEXO4_FROM_GBIA4_APROBACIONCUPS_TITLE',
);


 // created: 2014-04-04 08:35:59
$dictionary['gbiA4_Aprobacioncups']['fields']['cantidad_cups']['required']=true;

 

 // created: 2014-04-04 08:39:45
$dictionary['gbiA4_Aprobacioncups']['fields']['cups_c']['labelValue']='Código CUPS';

 

 // created: 2014-04-04 08:42:25
$dictionary['gbiA4_Aprobacioncups']['fields']['description']['comments']='Full text of the note';
$dictionary['gbiA4_Aprobacioncups']['fields']['description']['merge_filter']='disabled';

 

 // created: 2014-04-04 08:42:46

 

 // created: 2014-04-04 08:42:53

 

 // created: 2014-04-04 08:34:04

 
?>