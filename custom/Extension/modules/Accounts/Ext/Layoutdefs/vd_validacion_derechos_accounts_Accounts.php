<?php
 // created: 2022-06-29 18:56:41
$layout_defs["Accounts"]["subpanel_setup"]['vd_validacion_derechos_accounts'] = array (
  'order' => 100,
  'module' => 'vd_validacion_derechos',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VD_VALIDACION_DERECHOS_ACCOUNTS_FROM_VD_VALIDACION_DERECHOS_TITLE',
  'get_subpanel_data' => 'vd_validacion_derechos_accounts',
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
