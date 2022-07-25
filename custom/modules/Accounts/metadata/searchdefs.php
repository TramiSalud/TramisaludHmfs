<?php
$searchdefs ['Accounts'] = 
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
      'primernombre_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PRIMERNOMBRE',
        'width' => '10%',
        'name' => 'primernombre_c',
      ),
      'segundonombre_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_SEGUNDONOMBRE',
        'width' => '10%',
        'name' => 'segundonombre_c',
      ),
      'primerapellido_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PRIMERAPELLIDO',
        'width' => '10%',
        'name' => 'primerapellido_c',
      ),
      'segundoapellido_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_SEGUNDOAPELLIDO',
        'width' => '10%',
        'name' => 'segundoapellido_c',
      ),
      'epsactual_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_EPSACTUAL',
        'link' => true,
        'width' => '10%',
        'id' => 'EPS_EPS_ID_C',
        'name' => 'epsactual_c',
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
      'primernombre_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PRIMERNOMBRE',
        'width' => '10%',
        'name' => 'primernombre_c',
      ),
      'segundonombre_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_SEGUNDONOMBRE',
        'width' => '10%',
        'name' => 'segundonombre_c',
      ),
      'primerapellido_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PRIMERAPELLIDO',
        'width' => '10%',
        'name' => 'primerapellido_c',
      ),
      'segundoapellido_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_SEGUNDOAPELLIDO',
        'width' => '10%',
        'name' => 'segundoapellido_c',
      ),
      'estado_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO',
        'width' => '10%',
        'name' => 'estado_c',
      ),
      'tipocobertura_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TIPOCOBERTURA',
        'width' => '10%',
        'name' => 'tipocobertura_c',
      ),
      'epsactual_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_EPSACTUAL',
        'id' => 'EPS_EPS_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'epsactual_c',
      ),
      'ipsactual_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_IPSACTUAL',
        'id' => 'IPS_IPS_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'ipsactual_c',
      ),
      'numeroformulario_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NUMEROFORMULARIO',
        'width' => '10%',
        'name' => 'numeroformulario_c',
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
