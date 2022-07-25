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
  'accounts_tms_habeasdata_1' => 
  array (
    'id' => '33ad0bff-7026-de23-6c94-581c8f9b6888',
    'relationship_name' => 'accounts_tms_habeasdata_1',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_habeasdata',
    'rhs_table' => 'tms_habeasdata',
    'rhs_key' => 'id',
    'join_table' => 'accounts_tms_habeasdata_1_c',
    'join_key_lhs' => 'accounts_tms_habeasdata_1accounts_ida',
    'join_key_rhs' => 'accounts_tms_habeasdata_1tms_habeasdata_idb',
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
  'tms_habeasdata_tms_habeasdata_1' => 
  array (
    'id' => '3b237e10-9cc7-5f70-20cf-581c8fc186ff',
    'relationship_name' => 'tms_habeasdata_tms_habeasdata_1',
    'lhs_module' => 'tms_habeasdata',
    'lhs_table' => 'tms_habeasdata',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_habeasdata',
    'rhs_table' => 'tms_habeasdata',
    'rhs_key' => 'id',
    'join_table' => 'tms_habeasdata_tms_habeasdata_1_c',
    'join_key_lhs' => 'tms_habeasdata_tms_habeasdata_1tms_habeasdata_ida',
    'join_key_rhs' => 'tms_habeasdata_tms_habeasdata_1tms_habeasdata_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'tms_habeasdata_modified_user' => 
  array (
    'id' => 'e0b99348-8918-9d35-9b5c-581c8f58962c',
    'relationship_name' => 'tms_habeasdata_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_habeasdata',
    'rhs_table' => 'tms_habeasdata',
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
  'tms_habeasdata_created_by' => 
  array (
    'id' => 'e13d7b82-612a-e32c-0883-581c8f9ba455',
    'relationship_name' => 'tms_habeasdata_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_habeasdata',
    'rhs_table' => 'tms_habeasdata',
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
  'tms_habeasdata_assigned_user' => 
  array (
    'id' => 'e1e638d4-cfb5-e6c4-7939-581c8f1e9efe',
    'relationship_name' => 'tms_habeasdata_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_habeasdata',
    'rhs_table' => 'tms_habeasdata',
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
  'tms_habeasdata_documents_1' => 
  array (
    'rhs_label' => 'Documentos',
    'lhs_label' => 'Reclamación y Consulta Habeas',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'tms_habeasdata',
    'rhs_module' => 'Documents',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'tms_habeasdata_documents_1',
  ),
);