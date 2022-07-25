<?php
// created: 2015-03-24 08:50:14
$dictionary["Document"]["fields"]["basa1_anexo1_documents_1"] = array (
  'name' => 'basa1_anexo1_documents_1',
  'type' => 'link',
  'relationship' => 'basa1_anexo1_documents_1',
  'source' => 'non-db',
  'module' => 'basa1_ANEXO1',
  'bean_name' => 'basa1_ANEXO1',
  'vname' => 'LBL_BASA1_ANEXO1_DOCUMENTS_1_FROM_BASA1_ANEXO1_TITLE',
  'id_name' => 'basa1_anexo1_documents_1basa1_anexo1_ida',
);
$dictionary["Document"]["fields"]["basa1_anexo1_documents_1_name"] = array (
  'name' => 'basa1_anexo1_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BASA1_ANEXO1_DOCUMENTS_1_FROM_BASA1_ANEXO1_TITLE',
  'save' => true,
  'id_name' => 'basa1_anexo1_documents_1basa1_anexo1_ida',
  'link' => 'basa1_anexo1_documents_1',
  'table' => 'basa1_anexo1',
  'module' => 'basa1_ANEXO1',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["basa1_anexo1_documents_1basa1_anexo1_ida"] = array (
  'name' => 'basa1_anexo1_documents_1basa1_anexo1_ida',
  'type' => 'link',
  'relationship' => 'basa1_anexo1_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_BASA1_ANEXO1_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);
