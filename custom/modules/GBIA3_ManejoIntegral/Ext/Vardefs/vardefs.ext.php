<?php 
 //WARNING: The contents of this file are auto-generated



$dictionary["GBIA3_ManejoIntegral"]["fields"]["codigocups"]["populate_list"] = array(
		"name","id","description"
);

$dictionary["GBIA3_ManejoIntegral"]["fields"]["codigocups"]["field_list"] = array(
		"name","gbicu_cups_id_c","gbi_detalle_c"
);



// created: 2014-04-09 19:50:10
$dictionary["GBIA3_ManejoIntegral"]["fields"]["gbia3_anexo3_gbia3_manejointegral_1"] = array (
  'name' => 'gbia3_anexo3_gbia3_manejointegral_1',
  'type' => 'link',
  'relationship' => 'gbia3_anexo3_gbia3_manejointegral_1',
  'source' => 'non-db',
  'module' => 'GBIA3_ANEXO3',
  'bean_name' => 'GBIA3_ANEXO3',
  'vname' => 'LBL_GBIA3_ANEXO3_GBIA3_MANEJOINTEGRAL_1_FROM_GBIA3_ANEXO3_TITLE',
  'id_name' => 'gbia3_anexo3_gbia3_manejointegral_1gbia3_anexo3_ida',
);
$dictionary["GBIA3_ManejoIntegral"]["fields"]["gbia3_anexo3_gbia3_manejointegral_1_name"] = array (
  'name' => 'gbia3_anexo3_gbia3_manejointegral_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GBIA3_ANEXO3_GBIA3_MANEJOINTEGRAL_1_FROM_GBIA3_ANEXO3_TITLE',
  'save' => true,
  'id_name' => 'gbia3_anexo3_gbia3_manejointegral_1gbia3_anexo3_ida',
  'link' => 'gbia3_anexo3_gbia3_manejointegral_1',
  'table' => 'gbia3_anexo3',
  'module' => 'GBIA3_ANEXO3',
  'rname' => 'name',
);
$dictionary["GBIA3_ManejoIntegral"]["fields"]["gbia3_anexo3_gbia3_manejointegral_1gbia3_anexo3_ida"] = array (
  'name' => 'gbia3_anexo3_gbia3_manejointegral_1gbia3_anexo3_ida',
  'type' => 'link',
  'relationship' => 'gbia3_anexo3_gbia3_manejointegral_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_GBIA3_ANEXO3_GBIA3_MANEJOINTEGRAL_1_FROM_GBIA3_MANEJOINTEGRAL_TITLE',
);


 // created: 2014-04-04 14:44:52
$dictionary['GBIA3_ManejoIntegral']['fields']['cantidadcups']['required']=true;

 

 // created: 2014-08-21 18:22:32
$dictionary['GBIA3_ManejoIntegral']['fields']['cups_interno_c']['labelValue']='CUPS Interno';

 

 // created: 2014-03-08 09:43:22
$dictionary['GBIA3_ManejoIntegral']['fields']['gbi_detalle_c']['labelValue']='Detalle';

 
?>