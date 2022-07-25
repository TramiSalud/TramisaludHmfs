<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

$vardefs = array (
  'fields' => 
  array (
    'fechasolicitud' => 
    array (
      'required' => false,
      'name' => 'fechasolicitud',
      'vname' => 'LBL_FECHASOLICITUD',
      'type' => 'datetimecombo',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
      'dbType' => 'datetime',
    ),
    'fechacenregulador' => 
    array (
      'required' => false,
      'name' => 'fechacenregulador',
      'vname' => 'LBL_FECHACENREGULADOR',
      'type' => 'datetimecombo',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
      'dbType' => 'datetime',
    ),
    'account_id_c' => 
    array (
      'required' => false,
      'name' => 'account_id_c',
      'vname' => 'LBL_PACIENTE_ACCOUNT_ID',
      'type' => 'id',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 36,
      'size' => '20',
    ),
    'paciente' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'paciente',
      'vname' => 'LBL_PACIENTE',
      'type' => 'relate',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id_name' => 'account_id_c',
      'ext2' => 'Accounts',
      'module' => 'Accounts',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'acompanante' => 
    array (
      'required' => false,
      'name' => 'acompanante',
      'vname' => 'LBL_ACOMPANANTE',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    ),
    'cie_cie10_id_c' => 
    array (
      'required' => false,
      'name' => 'cie_cie10_id_c',
      'vname' => 'LBL_DIAGNOSTICO_CIE_CIE10_ID',
      'type' => 'id',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 36,
      'size' => '20',
    ),
    'diagnostico' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'diagnostico',
      'vname' => 'LBL_DIAGNOSTICO',
      'type' => 'relate',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id_name' => 'cie_cie10_id_c',
      'ext2' => 'CIE_CIE10',
      'module' => 'CIE_CIE10',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'gbicu_cups_id_c' => 
    array (
      'required' => false,
      'name' => 'gbicu_cups_id_c',
      'vname' => 'LBL_CUP_GBICU_CUPS_ID',
      'type' => 'id',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 36,
      'size' => '20',
    ),
    'cup' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'cup',
      'vname' => 'LBL_CUP ',
      'type' => 'relate',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id_name' => 'gbicu_cups_id_c',
      'ext2' => 'GBICU_CUPS',
      'module' => 'GBICU_CUPS',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'esp_especialista_id_c' => 
    array (
      'required' => false,
      'name' => 'esp_especialista_id_c',
      'vname' => 'LBL_ESPECIALISTA_ESP_ESPECIALISTA_ID',
      'type' => 'id',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 36,
      'size' => '20',
    ),
    'especialista' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'especialista',
      'vname' => 'LBL_ESPECIALISTA',
      'type' => 'relate',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id_name' => 'esp_especialista_id_c',
      'ext2' => 'ESP_Especialista',
      'module' => 'ESP_Especialista',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'nombresapellpaciente' => 
    array (
      'required' => false,
      'name' => 'nombresapellpaciente',
      'vname' => 'LBL_NOMBRESAPELLPACIENTE',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    ),
    'telpersonal' => 
    array (
      'required' => false,
      'name' => 'telpersonal',
      'vname' => 'LBL_TELPERSONAL',
      'type' => 'phone',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '20',
      'size' => '20',
      'dbType' => 'varchar',
    ),
    'teladicional' => 
    array (
      'required' => false,
      'name' => 'teladicional',
      'vname' => 'LBL_TELADICIONAL',
      'type' => 'phone',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '20',
      'size' => '20',
      'dbType' => 'varchar',
    ),
    'telacompanante' => 
    array (
      'required' => false,
      'name' => 'telacompanante',
      'vname' => 'LBL_TELACOMPANANTE',
      'type' => 'phone',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '20',
      'size' => '20',
      'dbType' => 'varchar',
    ),
    'municipio' => 
    array (
      'required' => false,
      'name' => 'municipio',
      'vname' => 'LBL_MUNICIPIO',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    ),
    'sexo' => 
    array (
      'required' => false,
      'name' => 'sexo',
      'vname' => 'LBL_SEXO',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '50',
      'size' => '20',
    ),
    'fechanac' => 
    array (
      'required' => false,
      'name' => 'fechanac',
      'vname' => 'LBL_FECHANAC',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '50',
      'size' => '20',
    ),
    'edad' => 
    array (
      'required' => false,
      'name' => 'edad',
      'vname' => 'LBL_EDAD',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '3',
      'size' => '20',
    ),
    'eps_eps_id_c' => 
    array (
      'required' => false,
      'name' => 'eps_eps_id_c',
      'vname' => 'LBL_EPS_EPS_EPS_ID',
      'type' => 'id',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 36,
      'size' => '20',
    ),
    'eps' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'eps',
      'vname' => 'LBL_EPS',
      'type' => 'relate',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id_name' => 'eps_eps_id_c',
      'ext2' => 'EPS_EPS',
      'module' => 'EPS_EPS',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'cama' => 
    array (
      'required' => false,
      'name' => 'cama',
      'vname' => 'LBL_CAMA',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    ),
    'cupdescripcion' => 
    array (
      'required' => false,
      'name' => 'cupdescripcion',
      'vname' => 'LBL_CUPDESCRIPCION',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    ),
    'cie10descripcion' => 
    array (
      'required' => false,
      'name' => 'cie10descripcion',
      'vname' => 'LBL_CIE10DESCRIPCION',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    ),
    'nombremedico' => 
    array (
      'required' => false,
      'name' => 'nombremedico',
      'vname' => 'LBL_NOMBREMEDICO',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    ),
    'infectocontagio' => 
    array (
      'required' => false,
      'name' => 'infectocontagio',
      'vname' => 'LBL_INFECTOCONTAGIO',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'sino_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'enfinfectocontagio' => 
    array (
      'required' => false,
      'name' => 'enfinfectocontagio',
      'vname' => 'LBL_ENFINFECTOCONTAGIO',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'enfinfectocontagio_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'obsinfectocontagio' => 
    array (
      'required' => false,
      'name' => 'obsinfectocontagio',
      'vname' => 'LBL_OBSINFECTOCONTAGIO',
      'type' => 'text',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'studio' => 'visible',
      'rows' => '2',
      'cols' => '20',
    ),
    'aislamiento' => 
    array (
      'required' => false,
      'name' => 'aislamiento',
      'vname' => 'LBL_AISLAMIENTO',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'SI',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'sino_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'obsaislamiento' => 
    array (
      'required' => false,
      'name' => 'obsaislamiento',
      'vname' => 'LBL_OBSAISLAMIENTO',
      'type' => 'text',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'studio' => 'visible',
      'rows' => '4',
      'cols' => '20',
    ),
    'pacientetienecateter' => 
    array (
      'required' => false,
      'name' => 'pacientetienecateter',
      'vname' => 'LBL_PACIENTETIENECATETER',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'sino_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'selectpacientetienecateter' => 
    array (
      'required' => false,
      'name' => 'selectpacientetienecateter',
      'vname' => 'LBL_SELECTPACIENTETIENECATETER',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'pacientetienecateter_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'obspacientetienecateter' => 
    array (
      'required' => false,
      'name' => 'obspacientetienecateter',
      'vname' => 'LBL_OBSPACIENTETIENECATETER',
      'type' => 'text',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'studio' => 'visible',
      'rows' => '4',
      'cols' => '20',
    ),
    'escalaglasgow' => 
    array (
      'required' => false,
      'name' => 'escalaglasgow',
      'vname' => 'LBL_ESCALAGLASGOW',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'sino_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'valorglasgow' => 
    array (
      'required' => false,
      'name' => 'valorglasgow',
      'vname' => 'LBL_VALORGLASGOW',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'valorglasgow_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'obsglasgow' => 
    array (
      'required' => false,
      'name' => 'obsglasgow',
      'vname' => 'LBL_OBSGLASGOW',
      'type' => 'text',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'studio' => 'visible',
      'rows' => '4',
      'cols' => '20',
    ),
    'tienemarcapasos' => 
    array (
      'required' => false,
      'name' => 'tienemarcapasos',
      'vname' => 'LBL_TIENEMARCAPASOS',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'sino_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'obstienemarcapasos' => 
    array (
      'required' => false,
      'name' => 'obstienemarcapasos',
      'vname' => 'LBL_OBSTIENEMARCAPASOS',
      'type' => 'text',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'studio' => 'visible',
      'rows' => '4',
      'cols' => '20',
    ),
    'tieneoxigeno' => 
    array (
      'required' => false,
      'name' => 'tieneoxigeno',
      'vname' => 'LBL_TIENEOXIGENO',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'sino_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'obstieneoxigeno' => 
    array (
      'required' => false,
      'name' => 'obstieneoxigeno',
      'vname' => 'LBL_OBSTIENEOXIGENO',
      'type' => 'text',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'studio' => 'visible',
      'rows' => '4',
      'cols' => '20',
    ),
    'tieneacompanante' => 
    array (
      'required' => false,
      'name' => 'tieneacompanante',
      'vname' => 'LBL_TIENEACOMPANANTE',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'sino_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'obstieneacompanante' => 
    array (
      'required' => false,
      'name' => 'obstieneacompanante',
      'vname' => 'LBL_OBSTIENEACOMPANANTE',
      'type' => 'text',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'studio' => 'visible',
      'rows' => '4',
      'cols' => '20',
    ),
    'tieneclaustrofobia' => 
    array (
      'required' => false,
      'name' => 'tieneclaustrofobia',
      'vname' => 'LBL_TIENECLAUSTROFOBIA',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'sino_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'obstieneclaustrofobia' => 
    array (
      'required' => false,
      'name' => 'obstieneclaustrofobia',
      'vname' => 'LBL_OBSTIENECLAUSTROFOBIA',
      'type' => 'text',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'studio' => 'visible',
      'rows' => '4',
      'cols' => '20',
    ),
    'realizadoexamen48h' => 
    array (
      'required' => false,
      'name' => 'realizadoexamen48h',
      'vname' => 'LBL_REALIZADOEXAMEN48H',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'sino_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'obsexamen48h' => 
    array (
      'required' => false,
      'name' => 'obsexamen48h',
      'vname' => 'LBL_OBSEXAMEN48H',
      'type' => 'text',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'studio' => 'visible',
      'rows' => '4',
      'cols' => '20',
    ),
    'ambulancia' => 
    array (
      'required' => false,
      'name' => 'ambulancia',
      'vname' => 'LBL_AMBULANCIA',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'ambulancia_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => '6',
      'cols' => '80',
      'required' => false,
      'massupdate' => 0,
      'default' => '1. ANEXO 9 CORRECTAMENTE DILIGENCIADO.
2. COPIA DE DOCUMENTO DE IDENTIDAD.
3. COPIA DE EPICRISIS.
4. COPIA DE ÚLTIMA NOTA DE EVOLUCIÓN MÉDICA DONDE INDIQUE JUSTIFICACIÓN DE LA SOLICITUD.
5. COPIA DE HOJA DE TRATAMIENTOS.
6. COPIA HOJA DE SIGNOS VITALES.
7. COPIA DE RESULTADOS PARACLÍNICOS PREVIAS SEGÚN EL TIPO DE PROCEDIMIENTO A REALIZAR (VER ANEXO EN EL RESPALDO).
8. EN CASO DE REQUERIR MEDICACIÓN U OXÍGENO DOMICILIARIO DEBE ANEXAR FÓRMULA MÉDICA, GASES ARTERIALES Y/O ECOCARDIOGRAFÍA.
9. POR CADA DÍA PASAR EVOLUCIÓN NUEVA.
10. TODA NUEVA REMISIÓN DEBE LLEVAR ANEXO 9 COMPLETO.
11. SI ES ACC. DE TRANSITO CORTE DE CUENTA ACTUALIZADO. 

SI SE CANCELA SOLICITUD O CAMBIA DE ESTADO EL USUARIO INFORMAR',
      'no_default' => false,
      'comments' => 'Full text of the note',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'studio' => 'visible',
    ),
  ),
  'relationships' => 
  array (
  ),
);