<?php
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
