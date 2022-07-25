<?php
$module_name = 'AUT_AutorizacionesTelefonicas';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'paciente' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PACIENTE',
        'id' => 'ACCOUNT_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'paciente',
      ),
      'assigned_user_name' => 
      array (
        'link' => true,
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_ASSIGNED_TO_NAME',
        'id' => 'ASSIGNED_USER_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'assigned_user_name',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'eps' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_EPS',
        'id' => 'EPS_EPS_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'eps',
      ),
      'paciente' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PACIENTE',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'ACCOUNT_ID_C',
        'name' => 'paciente',
      ),
      'nrodoc' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_NRODOC',
        'width' => '10%',
        'default' => true,
        'name' => 'nrodoc',
      ),
      'autorizacionnro' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_AUTORIZACIONNRO',
        'width' => '10%',
        'default' => true,
        'name' => 'autorizacionnro',
      ),
      'quienautoriza_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_QUIENAUTORIZA',
        'width' => '10%',
        'name' => 'quienautoriza_c',
      ),
      'fechaingreso' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHAINGRESO',
        'width' => '10%',
        'default' => true,
        'name' => 'fechaingreso',
      ),
      'assigned_user_name' => 
      array (
        'link' => true,
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_ASSIGNED_TO_NAME',
        'width' => '10%',
        'default' => true,
        'id' => 'ASSIGNED_USER_ID',
        'name' => 'assigned_user_name',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
