<?php
 // created: 2014-03-21 14:18:50
$layout_defs["Accounts"]["subpanel_setup"]['gbi_autorizaciones_accounts'] = array (
  'order' => 100,
  'module' => 'GBI_AUTORIZACIONES',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_GBI_AUTORIZACIONES_ACCOUNTS_FROM_GBI_AUTORIZACIONES_TITLE',
  'get_subpanel_data' => 'gbi_autorizaciones_accounts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
