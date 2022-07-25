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
  'gbia4_anexo4_gbia3_anexo3' => 
  array (
    'id' => '686438f9-cd30-8573-e1f6-53f4c13e82e5',
    'relationship_name' => 'gbia4_anexo4_gbia3_anexo3',
    'lhs_module' => 'GBIA3_ANEXO3',
    'lhs_table' => 'gbia3_anexo3',
    'lhs_key' => 'id',
    'rhs_module' => 'gbiA4_Anexo4',
    'rhs_table' => 'gbia4_anexo4',
    'rhs_key' => 'id',
    'join_table' => 'gbia4_anexo4_gbia3_anexo3_c',
    'join_key_lhs' => 'gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida',
    'join_key_rhs' => 'gbia4_anexo4_gbia3_anexo3gbia4_anexo4_idb',
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
  'gbia4_anexo4_tasks_1' => 
  array (
    'id' => '68fff559-106a-e48a-dfbc-53f4c1acd90f',
    'relationship_name' => 'gbia4_anexo4_tasks_1',
    'lhs_module' => 'gbiA4_Anexo4',
    'lhs_table' => 'gbia4_anexo4',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'id',
    'join_table' => 'gbia4_anexo4_tasks_1_c',
    'join_key_lhs' => 'gbia4_anexo4_tasks_1gbia4_anexo4_ida',
    'join_key_rhs' => 'gbia4_anexo4_tasks_1tasks_idb',
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
  'gbia4_aprobacioncups_gbia4_anexo4' => 
  array (
    'id' => '69837951-d51e-77f2-fe86-53f4c19ec2bf',
    'relationship_name' => 'gbia4_aprobacioncups_gbia4_anexo4',
    'lhs_module' => 'gbiA4_Anexo4',
    'lhs_table' => 'gbia4_anexo4',
    'lhs_key' => 'id',
    'rhs_module' => 'gbiA4_Aprobacioncups',
    'rhs_table' => 'gbia4_aprobacioncups',
    'rhs_key' => 'id',
    'join_table' => 'gbia4_aprobacioncups_gbia4_anexo4_c',
    'join_key_lhs' => 'gbia4_aprobacioncups_gbia4_anexo4gbia4_anexo4_ida',
    'join_key_rhs' => 'gbia4_aprobacioncups_gbia4_anexo4gbia4_aprobacioncups_idb',
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
  'gbian_anexo2_gbia4_anexo4_1' => 
  array (
    'id' => '6bfb9863-fcf1-0c99-c6b9-53f4c1504ab8',
    'relationship_name' => 'gbian_anexo2_gbia4_anexo4_1',
    'lhs_module' => 'gbian_Anexo2',
    'lhs_table' => 'gbian_anexo2',
    'lhs_key' => 'id',
    'rhs_module' => 'gbiA4_Anexo4',
    'rhs_table' => 'gbia4_anexo4',
    'rhs_key' => 'id',
    'join_table' => 'gbian_anexo2_gbia4_anexo4_1_c',
    'join_key_lhs' => 'gbian_anexo2_gbia4_anexo4_1gbian_anexo2_ida',
    'join_key_rhs' => 'gbian_anexo2_gbia4_anexo4_1gbia4_anexo4_idb',
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
  'gbia4_anexo4_modified_user' => 
  array (
    'id' => 'c020a7a6-380b-949e-13af-53f4c1b1dde3',
    'relationship_name' => 'gbia4_anexo4_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbiA4_Anexo4',
    'rhs_table' => 'gbia4_anexo4',
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
  'gbia4_anexo4_created_by' => 
  array (
    'id' => 'c06a0834-4027-66b0-864d-53f4c14c08a0',
    'relationship_name' => 'gbia4_anexo4_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbiA4_Anexo4',
    'rhs_table' => 'gbia4_anexo4',
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
  'gbia4_anexo4_assigned_user' => 
  array (
    'id' => 'c0afadc3-e4f2-74aa-b6e7-53f4c1643737',
    'relationship_name' => 'gbia4_anexo4_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbiA4_Anexo4',
    'rhs_table' => 'gbia4_anexo4',
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
  'gbia4_anexo4_calls_1' => 
  array (
    'rhs_label' => 'Llamadas',
    'lhs_label' => 'ANEXO 4',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'gbiA4_Anexo4',
    'rhs_module' => 'Calls',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'gbia4_anexo4_calls_1',
  ),
);