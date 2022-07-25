<?php
// created: 2014-08-11 18:50:48
$dictionary["Document"]["fields"]["gbi_anexo9_documents_1"] = array (
  'name' => 'gbi_anexo9_documents_1',
  'type' => 'link',
  'relationship' => 'gbi_anexo9_documents_1',
  'source' => 'non-db',
  'module' => 'gbi_Anexo9',
  'bean_name' => 'gbi_Anexo9',
  'vname' => 'LBL_GBI_ANEXO9_DOCUMENTS_1_FROM_GBI_ANEXO9_TITLE',
  'id_name' => 'gbi_anexo9_documents_1gbi_anexo9_ida',
);
$dictionary["Document"]["fields"]["gbi_anexo9_documents_1_name"] = array (
  'name' => 'gbi_anexo9_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GBI_ANEXO9_DOCUMENTS_1_FROM_GBI_ANEXO9_TITLE',
  'save' => true,
  'id_name' => 'gbi_anexo9_documents_1gbi_anexo9_ida',
  'link' => 'gbi_anexo9_documents_1',
  'table' => 'gbi_anexo9',
  'module' => 'gbi_Anexo9',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["gbi_anexo9_documents_1gbi_anexo9_ida"] = array (
  'name' => 'gbi_anexo9_documents_1gbi_anexo9_ida',
  'type' => 'link',
  'relationship' => 'gbi_anexo9_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_GBI_ANEXO9_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);
