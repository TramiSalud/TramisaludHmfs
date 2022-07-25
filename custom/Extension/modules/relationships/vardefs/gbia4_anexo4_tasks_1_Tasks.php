<?php
// created: 2014-08-20 17:38:40
$dictionary["Task"]["fields"]["gbia4_anexo4_tasks_1"] = array (
  'name' => 'gbia4_anexo4_tasks_1',
  'type' => 'link',
  'relationship' => 'gbia4_anexo4_tasks_1',
  'source' => 'non-db',
  'module' => 'gbiA4_Anexo4',
  'bean_name' => 'gbiA4_Anexo4',
  'vname' => 'LBL_GBIA4_ANEXO4_TASKS_1_FROM_GBIA4_ANEXO4_TITLE',
  'id_name' => 'gbia4_anexo4_tasks_1gbia4_anexo4_ida',
);
$dictionary["Task"]["fields"]["gbia4_anexo4_tasks_1_name"] = array (
  'name' => 'gbia4_anexo4_tasks_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GBIA4_ANEXO4_TASKS_1_FROM_GBIA4_ANEXO4_TITLE',
  'save' => true,
  'id_name' => 'gbia4_anexo4_tasks_1gbia4_anexo4_ida',
  'link' => 'gbia4_anexo4_tasks_1',
  'table' => 'gbia4_anexo4',
  'module' => 'gbiA4_Anexo4',
  'rname' => 'name',
);
$dictionary["Task"]["fields"]["gbia4_anexo4_tasks_1gbia4_anexo4_ida"] = array (
  'name' => 'gbia4_anexo4_tasks_1gbia4_anexo4_ida',
  'type' => 'link',
  'relationship' => 'gbia4_anexo4_tasks_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_GBIA4_ANEXO4_TASKS_1_FROM_TASKS_TITLE',
);
