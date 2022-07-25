<?php
// created: 2014-02-26 20:21:17
$dictionary["GBIA3_ManejoIntegral"]["fields"]["gbia3_manejointegral_gbia3_anexo3"] = array (
  'name' => 'gbia3_manejointegral_gbia3_anexo3',
  'type' => 'link',
  'relationship' => 'gbia3_manejointegral_gbia3_anexo3',
  'source' => 'non-db',
  'module' => 'GBIA3_ANEXO3',
  'bean_name' => 'GBIA3_ANEXO3',
  'vname' => 'LBL_GBIA3_MANEJOINTEGRAL_GBIA3_ANEXO3_FROM_GBIA3_ANEXO3_TITLE',
  'id_name' => 'gbia3_manejointegral_gbia3_anexo3gbia3_anexo3_ida',
);
$dictionary["GBIA3_ManejoIntegral"]["fields"]["gbia3_manejointegral_gbia3_anexo3_name"] = array (
  'name' => 'gbia3_manejointegral_gbia3_anexo3_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GBIA3_MANEJOINTEGRAL_GBIA3_ANEXO3_FROM_GBIA3_ANEXO3_TITLE',
  'save' => true,
  'id_name' => 'gbia3_manejointegral_gbia3_anexo3gbia3_anexo3_ida',
  'link' => 'gbia3_manejointegral_gbia3_anexo3',
  'table' => 'gbia3_anexo3',
  'module' => 'GBIA3_ANEXO3',
  'rname' => 'name',
);
$dictionary["GBIA3_ManejoIntegral"]["fields"]["gbia3_manejointegral_gbia3_anexo3gbia3_anexo3_ida"] = array (
  'name' => 'gbia3_manejointegral_gbia3_anexo3gbia3_anexo3_ida',
  'type' => 'link',
  'relationship' => 'gbia3_manejointegral_gbia3_anexo3',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_GBIA3_MANEJOINTEGRAL_GBIA3_ANEXO3_FROM_GBIA3_MANEJOINTEGRAL_TITLE',
);
