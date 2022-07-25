<?php
// created: 2014-08-11 18:47:03
$dictionary["Document"]["fields"]["gbi_anexo3npos_documents_1"] = array (
  'name' => 'gbi_anexo3npos_documents_1',
  'type' => 'link',
  'relationship' => 'gbi_anexo3npos_documents_1',
  'source' => 'non-db',
  'module' => 'gbi_anexo3npos',
  'bean_name' => 'gbi_anexo3npos',
  'vname' => 'LBL_GBI_ANEXO3NPOS_DOCUMENTS_1_FROM_GBI_ANEXO3NPOS_TITLE',
  'id_name' => 'gbi_anexo3npos_documents_1gbi_anexo3npos_ida',
);
$dictionary["Document"]["fields"]["gbi_anexo3npos_documents_1_name"] = array (
  'name' => 'gbi_anexo3npos_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GBI_ANEXO3NPOS_DOCUMENTS_1_FROM_GBI_ANEXO3NPOS_TITLE',
  'save' => true,
  'id_name' => 'gbi_anexo3npos_documents_1gbi_anexo3npos_ida',
  'link' => 'gbi_anexo3npos_documents_1',
  'table' => 'gbi_anexo3npos',
  'module' => 'gbi_anexo3npos',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["gbi_anexo3npos_documents_1gbi_anexo3npos_ida"] = array (
  'name' => 'gbi_anexo3npos_documents_1gbi_anexo3npos_ida',
  'type' => 'link',
  'relationship' => 'gbi_anexo3npos_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_GBI_ANEXO3NPOS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);
