<?php
$module_name = 'gbi_Anexo9';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL7' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'estado',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'prestador',
            'studio' => 'visible',
            'label' => 'LBL_PRESTADOR',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'eps',
            'studio' => 'visible',
            'label' => 'LBL_EPS',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'primernombre',
            'label' => 'LBL_PRIMERNOMBRE',
             'customCode' => '<input name="primernombre" id="primernombre" size="30" maxlength="100" 
              type="text" value="{$fields.primernombre.value}" OnFocus="this.blur()">',
          ),
          1 => 
          array (
            'name' => 'segundonombre',
            'label' => 'LBL_SEGUNDONOMBRE',
             'customCode' => '<input name="segundonombre" id="segundonombre" size="30" maxlength="100" 
              type="text" value="{$fields.segundonombre.value}" OnFocus="this.blur()">',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'primerapellido',
            'label' => 'LBL_PRIMERAPELLIDO',
            'customCode' => '<input name="primerapellido" id="primerapellido" size="30" maxlength="100" 
              type="text" value="{$fields.primerapellido.value}" OnFocus="this.blur()">',
          ),
          1 => 
          array (
            'name' => 'segundoapellido',
            'label' => 'LBL_SEGUNDOAPELLIDO',
            'customCode' => '<input name="segundoapellido" id="segundoapellido" size="30" maxlength="100" 
            type="text" value="{$fields.segundoapellido.value}" OnFocus="this.blur()">',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'celular',
            'label' => 'LBL_CELULAR',
            'customCode' => '<input name="celular" id="celular" size="30" maxlength="100" 
            type="text" value="{$fields.celular.value}" OnFocus="this.blur()">',
          ),
          1 => 
          array (
            'name' => 'correoemail',
            'label' => 'LBL_CORREOEMAIL',
            'customCode' => '<input name="correoemail" id="correoemail" size="30" maxlength="100" 
            type="text" value="{$fields.correoemail.value}" OnFocus="this.blur()">',

          ),
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'tipo_documento',
            'studio' => 'visible',
            'label' => 'LBL_TIPO_DOCUMENTO',
          ),
          1 => 
          array (
            'name' => 'documento_respon',
            'label' => 'LBL_DOCUMENTO_RESPON',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'primer_nom',
            'label' => 'LBL_PRIMER_NOM',
          ),
          1 => 
          array (
            'name' => 'sdo_nombre',
            'label' => 'LBL_SDO_NOMBRE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'primer_apellido',
            'label' => 'LBL_PRIMER_APELLIDO',
          ),
          1 => 
          array (
            'name' => 'segundo_apellido',
            'label' => 'LBL_SEGUNDO_APELLIDO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'dpto',
            'studio' => 'visible',
            'label' => 'LBL_DPTO',
          ),
          1 => 
          array (
            'name' => 'ciudad',
            'studio' => 'visible',
            'label' => 'LBL_CIUDAD',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'direccion_r',
            'label' => 'LBL_DIRECCION_R',
          ),
          1 => 
          array (
            'name' => 'telefono',
            'label' => 'LBL_TELEFONO',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'especialista',
            'studio' => 'visible',
            'label' => 'LBL_ESPECIALISTA',
          ),
          1 => 
          array (
            'name' => 'nombreespecialistaso',
            'label' => 'LBL_NOMBREESPECIALISTASO',
            'customCode' => '<input name="nombreespecialistaso" id="nombreespecialistaso" size="30" maxlength="100" 
              type="text" value="{$fields.nombreespecialistaso.value}" OnFocus="this.blur()">',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'telefonoespecialista',
            'label' => 'LBL_TELEFONOESPECIALISTA',
            'customCode' => '<input name="telefonoespecialista" id="telefonoespecialista" size="30" maxlength="100" 
              type="text" value="{$fields.telefonoespecialista.value}" OnFocus="this.blur()">',
          ),
          1 => 
          array (
            'name' => 'apellidoespecialistaso',
            'label' => 'LBL_APELLIDOESPECIALISTASO',
            'customCode' => '<input name="apellidoespecialistaso" id="apellidoespecialistaso" size="30" maxlength="100" 
              type="text" value="{$fields.apellidoespecialistaso.value}" OnFocus="this.blur()">',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'extensionsolicitante',
            'label' => 'LBL_EXTENSIONSOLICITANTE',
            'customCode' => '<input name="extensionsolicitante" id="extensionsolicitante" size="30" maxlength="100" 
              type="text" value="{$fields.extensionsolicitante.value}" OnFocus="this.blur()">',
          ),
          1 => 
          array (
            'name' => 'cargoactividad',
            'label' => 'LBL_CARGOACTIVIDAD',
            'customCode' => '<input name="cargoactividad" id="cargoactividad" size="30" maxlength="100" 
              type="text" value="{$fields.cargoactividad.value}" OnFocus="this.blur()">',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'celularsolicitante',
            'label' => 'LBL_CELULARSOLICITANTE',
            'customCode' => '<input name="celularsolicitante" id="celularsolicitante" size="30" maxlength="100" 
              type="text" value="{$fields.celularsolicitante.value}" OnFocus="this.blur()">',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'servicio_referencia',
            'label' => 'LBL_SERVICIO_REFERENCIA',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'servicio_soli',
            'studio' => 'visible',
            'label' => 'LBL_SERVICIO_SOLI',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
?>
