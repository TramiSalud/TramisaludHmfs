<?php
// created: 2016-11-04 08:38:13
$dictionary["Document"]["fields"]["tms_habeasdata_documents_1"] = array (
  'name' => 'tms_habeasdata_documents_1',
  'type' => 'link',
  'relationship' => 'tms_habeasdata_documents_1',
  'source' => 'non-db',
  'module' => 'tms_habeasdata',
  'bean_name' => 'tms_habeasdata',
  'vname' => 'LBL_TMS_HABEASDATA_DOCUMENTS_1_FROM_TMS_HABEASDATA_TITLE',
  'id_name' => 'tms_habeasdata_documents_1tms_habeasdata_ida',
);
$dictionary["Document"]["fields"]["tms_habeasdata_documents_1_name"] = array (
  'name' => 'tms_habeasdata_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TMS_HABEASDATA_DOCUMENTS_1_FROM_TMS_HABEASDATA_TITLE',
  'save' => true,
  'id_name' => 'tms_habeasdata_documents_1tms_habeasdata_ida',
  'link' => 'tms_habeasdata_documents_1',
  'table' => 'tms_habeasdata',
  'module' => 'tms_habeasdata',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["tms_habeasdata_documents_1tms_habeasdata_ida"] = array (
  'name' => 'tms_habeasdata_documents_1tms_habeasdata_ida',
  'type' => 'link',
  'relationship' => 'tms_habeasdata_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TMS_HABEASDATA_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);
