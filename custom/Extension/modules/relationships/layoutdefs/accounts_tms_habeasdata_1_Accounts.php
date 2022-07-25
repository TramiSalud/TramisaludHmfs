<?php
 // created: 2016-11-04 08:30:56
$layout_defs["Accounts"]["subpanel_setup"]['accounts_tms_habeasdata_1'] = array (
  'order' => 100,
  'module' => 'tms_habeasdata',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_TMS_HABEASDATA_1_FROM_TMS_HABEASDATA_TITLE',
  'get_subpanel_data' => 'accounts_tms_habeasdata_1',
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
