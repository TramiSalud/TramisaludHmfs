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
  'gbi_anexo3npos_modified_user' => 
  array (
    'id' => '3e1bfa14-7d2c-77d0-be0a-53f4bfeeb537',
    'relationship_name' => 'gbi_anexo3npos_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbi_anexo3npos',
    'rhs_table' => 'gbi_anexo3npos',
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
  'gbi_anexo3npos_created_by' => 
  array (
    'id' => '3e7331ff-520c-3645-22a6-53f4bfd7d1da',
    'relationship_name' => 'gbi_anexo3npos_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbi_anexo3npos',
    'rhs_table' => 'gbi_anexo3npos',
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
  'gbi_anexo3npos_assigned_user' => 
  array (
    'id' => '3eb592a1-f8fd-05ef-7d7c-53f4bf23a619',
    'relationship_name' => 'gbi_anexo3npos_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbi_anexo3npos',
    'rhs_table' => 'gbi_anexo3npos',
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
  'accounts_gbi_anexo3npos_1' => 
  array (
    'id' => '7d15979b-f0cb-871d-0990-53f4bf593ff7',
    'relationship_name' => 'accounts_gbi_anexo3npos_1',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'gbi_anexo3npos',
    'rhs_table' => 'gbi_anexo3npos',
    'rhs_key' => 'id',
    'join_table' => 'accounts_gbi_anexo3npos_1_c',
    'join_key_lhs' => 'accounts_gbi_anexo3npos_1accounts_ida',
    'join_key_rhs' => 'accounts_gbi_anexo3npos_1gbi_anexo3npos_idb',
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
  'gbi_anexo3npos_documents_1' => 
  array (
    'id' => 'a4ce36ec-0e2e-4f15-2820-53f4bf097064',
    'relationship_name' => 'gbi_anexo3npos_documents_1',
    'lhs_module' => 'gbi_anexo3npos',
    'lhs_table' => 'gbi_anexo3npos',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'join_table' => 'gbi_anexo3npos_documents_1_c',
    'join_key_lhs' => 'gbi_anexo3npos_documents_1gbi_anexo3npos_ida',
    'join_key_rhs' => 'gbi_anexo3npos_documents_1documents_idb',
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
  'gbi_anexo3npos_gbihi_historialcorreo_1' => 
  array (
    'id' => 'a6eb0dfc-aa7f-bcce-32ea-53f4bf69c458',
    'relationship_name' => 'gbi_anexo3npos_gbihi_historialcorreo_1',
    'lhs_module' => 'gbi_anexo3npos',
    'lhs_table' => 'gbi_anexo3npos',
    'lhs_key' => 'id',
    'rhs_module' => 'GBIHI_HistorialCorreo',
    'rhs_table' => 'gbihi_historialcorreo',
    'rhs_key' => 'id',
    'join_table' => 'gbi_anexo3npos_gbihi_historialcorreo_1_c',
    'join_key_lhs' => 'gbi_anexo3npos_gbihi_historialcorreo_1gbi_anexo3npos_ida',
    'join_key_rhs' => 'gbi_anexo3npos_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
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
  'gbi_anexo3npos_minpo_manejo_integra_1' => 
  array (
    'id' => 'af2a8f02-c962-3ae8-e5ce-53f4bf45c047',
    'relationship_name' => 'gbi_anexo3npos_minpo_manejo_integra_1',
    'lhs_module' => 'gbi_anexo3npos',
    'lhs_table' => 'gbi_anexo3npos',
    'lhs_key' => 'id',
    'rhs_module' => 'minpo_Manejo_integra',
    'rhs_table' => 'minpo_manejo_integra',
    'rhs_key' => 'id',
    'join_table' => 'gbi_anexo3npos_minpo_manejo_integra_1_c',
    'join_key_lhs' => 'gbi_anexo3npos_minpo_manejo_integra_1gbi_anexo3npos_ida',
    'join_key_rhs' => 'gbi_anexo3npos_minpo_manejo_integra_1minpo_manejo_integra_idb',
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
  'gbi_anexo3npos_tasks_1' => 
  array (
    'id' => 'b74b34bd-79ae-034d-796a-53f4bfb223c6',
    'relationship_name' => 'gbi_anexo3npos_tasks_1',
    'lhs_module' => 'gbi_anexo3npos',
    'lhs_table' => 'gbi_anexo3npos',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'id',
    'join_table' => 'gbi_anexo3npos_tasks_1_c',
    'join_key_lhs' => 'gbi_anexo3npos_tasks_1gbi_anexo3npos_ida',
    'join_key_rhs' => 'gbi_anexo3npos_tasks_1tasks_idb',
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
  'gbi_anexo3npos_calls_1' => 
  array (
    'rhs_label' => 'Llamadas',
    'lhs_label' => 'Anexo 3 No Pos',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'gbi_anexo3npos',
    'rhs_module' => 'Calls',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'gbi_anexo3npos_calls_1',
  ),
);