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

$relationships = array (
  'basa1_anexo1_modified_user' => 
  array (
    'id' => '25891506-a69b-ad02-904a-550b2f129305',
    'relationship_name' => 'basa1_anexo1_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'basa1_ANEXO1',
    'rhs_table' => 'basa1_anexo1',
    'rhs_key' => 'modified_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'basa1_anexo1_created_by' => 
  array (
    'id' => '25dd6989-9c02-cae5-ba10-550b2f45b904',
    'relationship_name' => 'basa1_anexo1_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'basa1_ANEXO1',
    'rhs_table' => 'basa1_anexo1',
    'rhs_key' => 'created_by',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'basa1_anexo1_assigned_user' => 
  array (
    'id' => '2627d1b6-c30d-6739-cf7c-550b2f534fa7',
    'relationship_name' => 'basa1_anexo1_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'basa1_ANEXO1',
    'rhs_table' => 'basa1_anexo1',
    'rhs_key' => 'assigned_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'basa1_anexo1_accounts' => 
  array (
    'id' => '596f8f43-3e29-af45-aa65-550b2f5d210e',
    'relationship_name' => 'basa1_anexo1_accounts',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'basa1_ANEXO1',
    'rhs_table' => 'basa1_anexo1',
    'rhs_key' => 'id',
    'join_table' => 'basa1_anexo1_accounts_c',
    'join_key_lhs' => 'basa1_anexo1_accountsaccounts_ida',
    'join_key_rhs' => 'basa1_anexo1_accountsbasa1_anexo1_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => true,
  ),
  'basa1_anexo1_gbihi_historialcorreo_1' => 
  array (
    'id' => '5a0af411-cbc2-656b-3d2c-550b2f77ed9f',
    'relationship_name' => 'basa1_anexo1_gbihi_historialcorreo_1',
    'lhs_module' => 'basa1_ANEXO1',
    'lhs_table' => 'basa1_anexo1',
    'lhs_key' => 'id',
    'rhs_module' => 'GBIHI_HistorialCorreo',
    'rhs_table' => 'gbihi_historialcorreo',
    'rhs_key' => 'id',
    'join_table' => 'basa1_anexo1_gbihi_historialcorreo_1_c',
    'join_key_lhs' => 'basa1_anexo1_gbihi_historialcorreo_1basa1_anexo1_ida',
    'join_key_rhs' => 'basa1_anexo1_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'basa1_anexo1_documents_1' => 
  array (
    'rhs_label' => 'Documentos',
    'lhs_label' => 'ANEXO1',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'basa1_ANEXO1',
    'rhs_module' => 'Documents',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'basa1_anexo1_documents_1',
  ),
);