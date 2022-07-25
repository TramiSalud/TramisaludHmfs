<?php 
 $relationships = array (
  'accounts_bugs' => 
  array (
    'name' => 'accounts_bugs',
    'table' => 'accounts_bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'bug_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => false,
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_bugspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_acc_bug_acc',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'account_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_acc_bug_bug',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bug_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_account_bug',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_bugs' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_bugs',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_bugs',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'bug_id',
  ),
  'accounts_contacts' => 
  array (
    'name' => 'accounts_contacts',
    'table' => 'accounts_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => false,
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_account_contact',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_contid_del_accid',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'deleted',
          2 => 'account_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_contacts' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_contacts',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_contacts',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'contact_id',
  ),
  'accounts_opportunities' => 
  array (
    'name' => 'accounts_opportunities',
    'table' => 'accounts_opportunities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'opportunity_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_opportunitiespk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_account_opportunity',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'opportunity_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_oppid_del_accid',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunity_id',
          1 => 'deleted',
          2 => 'account_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_opportunities' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_opportunities',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'opportunity_id',
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_opportunities',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'opportunity_id',
  ),
  'calls_contacts' => 
  array (
    'name' => 'calls_contacts',
    'table' => 'calls_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'call_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'calls_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_call_call',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'call_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_call_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_call_contact',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'call_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'calls_contacts' => 
      array (
        'lhs_module' => 'Calls',
        'lhs_table' => 'calls',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'calls_contacts',
        'join_key_lhs' => 'call_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'calls_contacts',
    'join_key_lhs' => 'call_id',
    'join_key_rhs' => 'contact_id',
  ),
  'calls_users' => 
  array (
    'name' => 'calls_users',
    'table' => 'calls_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'call_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'calls_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_usr_call_call',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'call_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_usr_call_usr',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_call_users',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'call_id',
          1 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'calls_users' => 
      array (
        'lhs_module' => 'Calls',
        'lhs_table' => 'calls',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'calls_users',
        'join_key_lhs' => 'call_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'calls_users',
    'join_key_lhs' => 'call_id',
    'join_key_rhs' => 'user_id',
  ),
  'calls_leads' => 
  array (
    'name' => 'calls_leads',
    'table' => 'calls_leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'call_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'lead_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'calls_leadspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_lead_call_call',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'call_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_lead_call_lead',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'lead_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_call_lead',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'call_id',
          1 => 'lead_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'calls_leads' => 
      array (
        'lhs_module' => 'Calls',
        'lhs_table' => 'calls',
        'lhs_key' => 'id',
        'rhs_module' => 'Leads',
        'rhs_table' => 'leads',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'calls_leads',
        'join_key_lhs' => 'call_id',
        'join_key_rhs' => 'lead_id',
      ),
    ),
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'calls_leads',
    'join_key_lhs' => 'call_id',
    'join_key_rhs' => 'lead_id',
  ),
  'cases_bugs' => 
  array (
    'name' => 'cases_bugs',
    'table' => 'cases_bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'case_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'bug_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'cases_bugspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_cas_bug_cas',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'case_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_cas_bug_bug',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bug_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_case_bug',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'case_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'cases_bugs' => 
      array (
        'lhs_module' => 'Cases',
        'lhs_table' => 'cases',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'cases_bugs',
        'join_key_lhs' => 'case_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'cases_bugs',
    'join_key_lhs' => 'case_id',
    'join_key_rhs' => 'bug_id',
  ),
  'contacts_bugs' => 
  array (
    'name' => 'contacts_bugs',
    'table' => 'contacts_bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'bug_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '50',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contacts_bugspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_bug_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_bug_bug',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bug_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_contact_bug',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contacts_bugs' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contacts_bugs',
        'join_key_lhs' => 'contact_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contacts_bugs',
    'join_key_lhs' => 'contact_id',
    'join_key_rhs' => 'bug_id',
  ),
  'contacts_cases' => 
  array (
    'name' => 'contacts_cases',
    'table' => 'contacts_cases',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'case_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '50',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contacts_casespk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_case_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_case_case',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'case_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_contacts_cases',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'case_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contacts_cases' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'Cases',
        'rhs_table' => 'cases',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contacts_cases',
        'join_key_lhs' => 'contact_id',
        'join_key_rhs' => 'case_id',
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contacts_cases',
    'join_key_lhs' => 'contact_id',
    'join_key_rhs' => 'case_id',
  ),
  'contacts_users' => 
  array (
    'name' => 'contacts_users',
    'table' => 'contacts_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contacts_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_users_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_users_user',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_contacts_users',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contacts_users' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contacts_users',
        'join_key_lhs' => 'contact_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contacts_users',
    'join_key_lhs' => 'contact_id',
    'join_key_rhs' => 'user_id',
  ),
  'emails_accounts_rel' => 
  array (
    'name' => 'emails_accounts_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_bugs_rel' => 
  array (
    'name' => 'emails_bugs_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_cases_rel' => 
  array (
    'name' => 'emails_cases_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Cases',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_contacts_rel' => 
  array (
    'name' => 'emails_contacts_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_leads_rel' => 
  array (
    'name' => 'emails_leads_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_opportunities_rel' => 
  array (
    'name' => 'emails_opportunities_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Opportunities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_tasks_rel' => 
  array (
    'name' => 'emails_tasks_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Tasks',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_users_rel' => 
  array (
    'name' => 'emails_users_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_project_task_rel' => 
  array (
    'name' => 'emails_project_task_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'ProjectTask',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_projects_rel' => 
  array (
    'name' => 'emails_projects_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Project',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_prospects_rel' => 
  array (
    'name' => 'emails_prospects_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Prospects',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_quotes' => 
  array (
    'name' => 'emails_quotes',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Quotes',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'meetings_contacts' => 
  array (
    'name' => 'meetings_contacts',
    'table' => 'meetings_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'meeting_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'meetings_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_mtg_mtg',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'meeting_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_mtg_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_meeting_contact',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'meeting_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'meetings_contacts' => 
      array (
        'lhs_module' => 'Meetings',
        'lhs_table' => 'meetings',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'meetings_contacts',
        'join_key_lhs' => 'meeting_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'meetings_contacts',
    'join_key_lhs' => 'meeting_id',
    'join_key_rhs' => 'contact_id',
  ),
  'meetings_users' => 
  array (
    'name' => 'meetings_users',
    'table' => 'meetings_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'meeting_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'meetings_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_usr_mtg_mtg',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'meeting_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_usr_mtg_usr',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_meeting_users',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'meeting_id',
          1 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'meetings_users' => 
      array (
        'lhs_module' => 'Meetings',
        'lhs_table' => 'meetings',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'meetings_users',
        'join_key_lhs' => 'meeting_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'meetings_users',
    'join_key_lhs' => 'meeting_id',
    'join_key_rhs' => 'user_id',
  ),
  'meetings_leads' => 
  array (
    'name' => 'meetings_leads',
    'table' => 'meetings_leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'meeting_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'lead_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'meetings_leadspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_lead_meeting_meeting',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'meeting_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_lead_meeting_lead',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'lead_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_meeting_lead',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'meeting_id',
          1 => 'lead_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'meetings_leads' => 
      array (
        'lhs_module' => 'Meetings',
        'lhs_table' => 'meetings',
        'lhs_key' => 'id',
        'rhs_module' => 'Leads',
        'rhs_table' => 'leads',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'meetings_leads',
        'join_key_lhs' => 'meeting_id',
        'join_key_rhs' => 'lead_id',
      ),
    ),
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'meetings_leads',
    'join_key_lhs' => 'meeting_id',
    'join_key_rhs' => 'lead_id',
  ),
  'opportunities_contacts' => 
  array (
    'name' => 'opportunities_contacts',
    'table' => 'opportunities_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'opportunity_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '50',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'opportunities_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_opp_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_opp_opp',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunity_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_opportunities_contacts',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'opportunity_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'opportunities_contacts' => 
      array (
        'lhs_module' => 'Opportunities',
        'lhs_table' => 'opportunities',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'opportunities_contacts',
        'join_key_lhs' => 'opportunity_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'opportunities_contacts',
    'join_key_lhs' => 'opportunity_id',
    'join_key_rhs' => 'contact_id',
  ),
  'prospect_list_campaigns' => 
  array (
    'name' => 'prospect_list_campaigns',
    'table' => 'prospect_list_campaigns',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'campaign_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'prospect_list_campaignspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_pro_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'prospect_list_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_cam_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'campaign_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_prospect_list_campaigns',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'prospect_list_id',
          1 => 'campaign_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'prospect_list_campaigns' => 
      array (
        'lhs_module' => 'ProspectLists',
        'lhs_table' => 'prospect_lists',
        'lhs_key' => 'id',
        'rhs_module' => 'Campaigns',
        'rhs_table' => 'campaigns',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'prospect_list_campaigns',
        'join_key_lhs' => 'prospect_list_id',
        'join_key_rhs' => 'campaign_id',
      ),
    ),
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_list_campaigns',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'campaign_id',
  ),
  'prospect_list_contacts' => 
  array (
    'name' => 'prospect_list_contacts',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_prospects' => 
  array (
    'name' => 'prospect_list_prospects',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Prospects',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_leads' => 
  array (
    'name' => 'prospect_list_leads',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_users' => 
  array (
    'name' => 'prospect_list_users',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_accounts' => 
  array (
    'name' => 'prospect_list_accounts',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'roles_users' => 
  array (
    'name' => 'roles_users',
    'table' => 'roles_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'role_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'roles_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_ru_role_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'role_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_ru_user_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'roles_users' => 
      array (
        'lhs_module' => 'Roles',
        'lhs_table' => 'roles',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'roles_users',
        'join_key_lhs' => 'role_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'Roles',
    'lhs_table' => 'roles',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'roles_users',
    'join_key_lhs' => 'role_id',
    'join_key_rhs' => 'user_id',
  ),
  'projects_bugs' => 
  array (
    'name' => 'projects_bugs',
    'table' => 'projects_bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'bug_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_bugs_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_bug_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_bug_bug',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bug_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_bugs_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_bugs' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_bugs',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_bugs',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'bug_id',
  ),
  'projects_cases' => 
  array (
    'name' => 'projects_cases',
    'table' => 'projects_cases',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'case_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_cases_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_case_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_case_case',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'case_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_cases_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'case_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_cases' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Cases',
        'rhs_table' => 'cases',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_cases',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'case_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_cases',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'case_id',
  ),
  'projects_products' => 
  array (
    'name' => 'projects_products',
    'table' => 'projects_products',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'product_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_products_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_prod_project',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_prod_product',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'product_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_products_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'product_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_products' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Products',
        'rhs_table' => 'products',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_products',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'product_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_products',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'product_id',
  ),
  'projects_accounts' => 
  array (
    'name' => 'projects_accounts',
    'table' => 'projects_accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_accounts_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_acct_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_acct_acct',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'account_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_accounts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'account_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_accounts' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Accounts',
        'rhs_table' => 'accounts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_accounts',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'account_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_accounts',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'account_id',
  ),
  'projects_contacts' => 
  array (
    'name' => 'projects_contacts',
    'table' => 'projects_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_contacts_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_con_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_con_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_contacts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_contacts' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_contacts',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_contacts',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'contact_id',
  ),
  'projects_opportunities' => 
  array (
    'name' => 'projects_opportunities',
    'table' => 'projects_opportunities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'opportunity_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_opportunities_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_opp_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_opp_opp',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunity_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_opportunities_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'opportunity_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_opportunities' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_opportunities',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'opportunity_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_opportunities',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'opportunity_id',
  ),
  'acl_roles_actions' => 
  array (
    'name' => 'acl_roles_actions',
    'table' => 'acl_roles_actions',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'role_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'action_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'access_override',
        'type' => 'int',
        'len' => '3',
        'required' => false,
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'acl_roles_actionspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_acl_role_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'role_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_acl_action_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'action_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_aclrole_action',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'role_id',
          1 => 'action_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'acl_roles_actions' => 
      array (
        'lhs_module' => 'ACLRoles',
        'lhs_table' => 'acl_roles',
        'lhs_key' => 'id',
        'rhs_module' => 'ACLActions',
        'rhs_table' => 'acl_actions',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'acl_roles_actions',
        'join_key_lhs' => 'role_id',
        'join_key_rhs' => 'action_id',
      ),
    ),
    'lhs_module' => 'ACLRoles',
    'lhs_table' => 'acl_roles',
    'lhs_key' => 'id',
    'rhs_module' => 'ACLActions',
    'rhs_table' => 'acl_actions',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'acl_roles_actions',
    'join_key_lhs' => 'role_id',
    'join_key_rhs' => 'action_id',
  ),
  'acl_roles_users' => 
  array (
    'name' => 'acl_roles_users',
    'table' => 'acl_roles_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'role_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'acl_roles_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_aclrole_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'role_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_acluser_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_aclrole_user',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'role_id',
          1 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'acl_roles_users' => 
      array (
        'lhs_module' => 'ACLRoles',
        'lhs_table' => 'acl_roles',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'acl_roles_users',
        'join_key_lhs' => 'role_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'ACLRoles',
    'lhs_table' => 'acl_roles',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'acl_roles_users',
    'join_key_lhs' => 'role_id',
    'join_key_rhs' => 'user_id',
  ),
  'email_marketing_prospect_lists' => 
  array (
    'name' => 'email_marketing_prospect_lists',
    'table' => 'email_marketing_prospect_lists',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'email_marketing_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'email_mp_listspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'email_mp_prospects',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'email_marketing_id',
          1 => 'prospect_list_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'email_marketing_prospect_lists' => 
      array (
        'lhs_module' => 'EmailMarketing',
        'lhs_table' => 'email_marketing',
        'lhs_key' => 'id',
        'rhs_module' => 'ProspectLists',
        'rhs_table' => 'prospect_lists',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'email_marketing_prospect_lists',
        'join_key_lhs' => 'email_marketing_id',
        'join_key_rhs' => 'prospect_list_id',
      ),
    ),
    'lhs_module' => 'EmailMarketing',
    'lhs_table' => 'email_marketing',
    'lhs_key' => 'id',
    'rhs_module' => 'ProspectLists',
    'rhs_table' => 'prospect_lists',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_marketing_prospect_lists',
    'join_key_lhs' => 'email_marketing_id',
    'join_key_rhs' => 'prospect_list_id',
  ),
  'contracts_documents' => 
  array (
    'name' => 'contracts_documents',
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'linked_documents',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'document_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contracts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'parent_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'document_revision_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'leads_documents' => 
  array (
    'name' => 'leads_documents',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'linked_documents',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'document_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'parent_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'document_revision_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'contracttype_documents' => 
  array (
    'name' => 'contracttype_documents',
    'lhs_module' => 'ContractTypes',
    'lhs_table' => 'contract_types',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'linked_documents',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'document_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ContracTemplates',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'parent_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'document_revision_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'documents_accounts' => 
  array (
    'name' => 'documents_accounts',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_accounts' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Accounts',
        'rhs_table' => 'accounts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_accounts',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'account_id',
      ),
    ),
    'table' => 'documents_accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_accountsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_accounts_account_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_accounts_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'account_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_accounts',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'account_id',
  ),
  'documents_contacts' => 
  array (
    'name' => 'documents_contacts',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_contacts' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_contacts',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'table' => 'documents_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_contactsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_contacts_contact_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_contacts_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_contacts',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'contact_id',
  ),
  'documents_opportunities' => 
  array (
    'name' => 'documents_opportunities',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_opportunities' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_opportunities',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'opportunity_id',
      ),
    ),
    'table' => 'documents_opportunities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'opportunity_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_opportunitiesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_docu_opps_oppo_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'opportunity_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_docu_oppo_docu_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'opportunity_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_opportunities',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'opportunity_id',
  ),
  'documents_cases' => 
  array (
    'name' => 'documents_cases',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_cases' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Cases',
        'rhs_table' => 'cases',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_cases',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'case_id',
      ),
    ),
    'table' => 'documents_cases',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'case_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_casesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_cases_case_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'case_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_cases_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'case_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_cases',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'case_id',
  ),
  'documents_bugs' => 
  array (
    'name' => 'documents_bugs',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_bugs' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_bugs',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'table' => 'documents_bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bug_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_bugsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_bugs_bug_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bug_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_bugs_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_bugs',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'bug_id',
  ),
  'accounts_gbia3_anexo3_1' => 
  array (
    'name' => 'accounts_gbia3_anexo3_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'accounts_gbia3_anexo3_1' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'GBIA3_ANEXO3',
        'rhs_table' => 'gbia3_anexo3',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_gbia3_anexo3_1_c',
        'join_key_lhs' => 'accounts_gbia3_anexo3_1accounts_ida',
        'join_key_rhs' => 'accounts_gbia3_anexo3_1gbia3_anexo3_idb',
      ),
    ),
    'table' => 'accounts_gbia3_anexo3_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'accounts_gbia3_anexo3_1accounts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'accounts_gbia3_anexo3_1gbia3_anexo3_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_gbia3_anexo3_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'accounts_gbia3_anexo3_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_gbia3_anexo3_1accounts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'accounts_gbia3_anexo3_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_gbia3_anexo3_1gbia3_anexo3_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'GBIA3_ANEXO3',
    'rhs_table' => 'gbia3_anexo3',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_gbia3_anexo3_1_c',
    'join_key_lhs' => 'accounts_gbia3_anexo3_1accounts_ida',
    'join_key_rhs' => 'accounts_gbia3_anexo3_1gbia3_anexo3_idb',
  ),
  'accounts_gbia4_anexo4_1' => 
  array (
    'name' => 'accounts_gbia4_anexo4_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'accounts_gbia4_anexo4_1' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'gbiA4_Anexo4',
        'rhs_table' => 'gbia4_anexo4',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_gbia4_anexo4_1_c',
        'join_key_lhs' => 'accounts_gbia4_anexo4_1accounts_ida',
        'join_key_rhs' => 'accounts_gbia4_anexo4_1gbia4_anexo4_idb',
      ),
    ),
    'table' => 'accounts_gbia4_anexo4_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'accounts_gbia4_anexo4_1accounts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'accounts_gbia4_anexo4_1gbia4_anexo4_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_gbia4_anexo4_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'accounts_gbia4_anexo4_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_gbia4_anexo4_1accounts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'accounts_gbia4_anexo4_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_gbia4_anexo4_1gbia4_anexo4_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'gbiA4_Anexo4',
    'rhs_table' => 'gbia4_anexo4',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_gbia4_anexo4_1_c',
    'join_key_lhs' => 'accounts_gbia4_anexo4_1accounts_ida',
    'join_key_rhs' => 'accounts_gbia4_anexo4_1gbia4_anexo4_idb',
  ),
  'accounts_gbi_anexo3npos_1' => 
  array (
    'name' => 'accounts_gbi_anexo3npos_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'accounts_gbi_anexo3npos_1' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'gbi_anexo3npos',
        'rhs_table' => 'gbi_anexo3npos',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_gbi_anexo3npos_1_c',
        'join_key_lhs' => 'accounts_gbi_anexo3npos_1accounts_ida',
        'join_key_rhs' => 'accounts_gbi_anexo3npos_1gbi_anexo3npos_idb',
      ),
    ),
    'table' => 'accounts_gbi_anexo3npos_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'accounts_gbi_anexo3npos_1accounts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'accounts_gbi_anexo3npos_1gbi_anexo3npos_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_gbi_anexo3npos_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'accounts_gbi_anexo3npos_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_gbi_anexo3npos_1accounts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'accounts_gbi_anexo3npos_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_gbi_anexo3npos_1gbi_anexo3npos_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'gbi_anexo3npos',
    'rhs_table' => 'gbi_anexo3npos',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_gbi_anexo3npos_1_c',
    'join_key_lhs' => 'accounts_gbi_anexo3npos_1accounts_ida',
    'join_key_rhs' => 'accounts_gbi_anexo3npos_1gbi_anexo3npos_idb',
  ),
  'accounts_gbi_anexo9_1' => 
  array (
    'name' => 'accounts_gbi_anexo9_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'accounts_gbi_anexo9_1' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'gbi_Anexo9',
        'rhs_table' => 'gbi_anexo9',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_gbi_anexo9_1_c',
        'join_key_lhs' => 'accounts_gbi_anexo9_1accounts_ida',
        'join_key_rhs' => 'accounts_gbi_anexo9_1gbi_anexo9_idb',
      ),
    ),
    'table' => 'accounts_gbi_anexo9_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'accounts_gbi_anexo9_1accounts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'accounts_gbi_anexo9_1gbi_anexo9_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_gbi_anexo9_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'accounts_gbi_anexo9_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_gbi_anexo9_1accounts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'accounts_gbi_anexo9_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_gbi_anexo9_1gbi_anexo9_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'gbi_Anexo9',
    'rhs_table' => 'gbi_anexo9',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_gbi_anexo9_1_c',
    'join_key_lhs' => 'accounts_gbi_anexo9_1accounts_ida',
    'join_key_rhs' => 'accounts_gbi_anexo9_1gbi_anexo9_idb',
  ),
  'accounts_notes_1' => 
  array (
    'name' => 'accounts_notes_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'accounts_notes_1' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Notes',
        'rhs_table' => 'notes',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_notes_1_c',
        'join_key_lhs' => 'accounts_notes_1accounts_ida',
        'join_key_rhs' => 'accounts_notes_1notes_idb',
      ),
    ),
    'table' => 'accounts_notes_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'accounts_notes_1accounts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'accounts_notes_1notes_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_notes_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'accounts_notes_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_notes_1accounts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'accounts_notes_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_notes_1notes_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_notes_1_c',
    'join_key_lhs' => 'accounts_notes_1accounts_ida',
    'join_key_rhs' => 'accounts_notes_1notes_idb',
  ),
  'accounts_solci_solicitudcitas_1' => 
  array (
    'name' => 'accounts_solci_solicitudcitas_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'accounts_solci_solicitudcitas_1' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'solci_SolicitudCitas',
        'rhs_table' => 'solci_solicitudcitas',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_solci_solicitudcitas_1_c',
        'join_key_lhs' => 'accounts_solci_solicitudcitas_1accounts_ida',
        'join_key_rhs' => 'accounts_solci_solicitudcitas_1solci_solicitudcitas_idb',
      ),
    ),
    'table' => 'accounts_solci_solicitudcitas_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'accounts_solci_solicitudcitas_1accounts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'accounts_solci_solicitudcitas_1solci_solicitudcitas_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_solci_solicitudcitas_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'accounts_solci_solicitudcitas_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_solci_solicitudcitas_1accounts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'accounts_solci_solicitudcitas_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_solci_solicitudcitas_1solci_solicitudcitas_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'solci_SolicitudCitas',
    'rhs_table' => 'solci_solicitudcitas',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_solci_solicitudcitas_1_c',
    'join_key_lhs' => 'accounts_solci_solicitudcitas_1accounts_ida',
    'join_key_rhs' => 'accounts_solci_solicitudcitas_1solci_solicitudcitas_idb',
  ),
  'accounts_tms_habeasdata_1' => 
  array (
    'name' => 'accounts_tms_habeasdata_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'accounts_tms_habeasdata_1' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'tms_habeasdata',
        'rhs_table' => 'tms_habeasdata',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_tms_habeasdata_1_c',
        'join_key_lhs' => 'accounts_tms_habeasdata_1accounts_ida',
        'join_key_rhs' => 'accounts_tms_habeasdata_1tms_habeasdata_idb',
      ),
    ),
    'table' => 'accounts_tms_habeasdata_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'accounts_tms_habeasdata_1accounts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'accounts_tms_habeasdata_1tms_habeasdata_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_tms_habeasdata_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'accounts_tms_habeasdata_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_tms_habeasdata_1accounts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'accounts_tms_habeasdata_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_tms_habeasdata_1tms_habeasdata_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_habeasdata',
    'rhs_table' => 'tms_habeasdata',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_tms_habeasdata_1_c',
    'join_key_lhs' => 'accounts_tms_habeasdata_1accounts_ida',
    'join_key_rhs' => 'accounts_tms_habeasdata_1tms_habeasdata_idb',
  ),
  'accounts_tms_tms_autorizaciones_1' => 
  array (
    'name' => 'accounts_tms_tms_autorizaciones_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'accounts_tms_tms_autorizaciones_1' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'tms_TMS_Autorizaciones',
        'rhs_table' => 'tms_tms_autorizaciones',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_tms_tms_autorizaciones_1_c',
        'join_key_lhs' => 'accounts_tms_tms_autorizaciones_1accounts_ida',
        'join_key_rhs' => 'accounts_tms_tms_autorizaciones_1tms_tms_autorizaciones_idb',
      ),
    ),
    'table' => 'accounts_tms_tms_autorizaciones_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'accounts_tms_tms_autorizaciones_1accounts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'accounts_tms_tms_autorizaciones_1tms_tms_autorizaciones_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_tms_tms_autorizaciones_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'accounts_tms_tms_autorizaciones_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_tms_tms_autorizaciones_1accounts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'accounts_tms_tms_autorizaciones_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_tms_tms_autorizaciones_1tms_tms_autorizaciones_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_TMS_Autorizaciones',
    'rhs_table' => 'tms_tms_autorizaciones',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_tms_tms_autorizaciones_1_c',
    'join_key_lhs' => 'accounts_tms_tms_autorizaciones_1accounts_ida',
    'join_key_rhs' => 'accounts_tms_tms_autorizaciones_1tms_tms_autorizaciones_idb',
  ),
  'accounts_tms_tms_catllamadas_1' => 
  array (
    'name' => 'accounts_tms_tms_catllamadas_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'accounts_tms_tms_catllamadas_1' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'tms_TMS_CATllamadas',
        'rhs_table' => 'tms_tms_catllamadas',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_tms_tms_catllamadas_1_c',
        'join_key_lhs' => 'accounts_tms_tms_catllamadas_1accounts_ida',
        'join_key_rhs' => 'accounts_tms_tms_catllamadas_1tms_tms_catllamadas_idb',
      ),
    ),
    'table' => 'accounts_tms_tms_catllamadas_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'accounts_tms_tms_catllamadas_1accounts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'accounts_tms_tms_catllamadas_1tms_tms_catllamadas_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_tms_tms_catllamadas_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'accounts_tms_tms_catllamadas_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_tms_tms_catllamadas_1accounts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'accounts_tms_tms_catllamadas_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_tms_tms_catllamadas_1tms_tms_catllamadas_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_TMS_CATllamadas',
    'rhs_table' => 'tms_tms_catllamadas',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_tms_tms_catllamadas_1_c',
    'join_key_lhs' => 'accounts_tms_tms_catllamadas_1accounts_ida',
    'join_key_rhs' => 'accounts_tms_tms_catllamadas_1tms_tms_catllamadas_idb',
  ),
  'accounts_tms_tms_centralautorizaciones_1' => 
  array (
    'name' => 'accounts_tms_tms_centralautorizaciones_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'accounts_tms_tms_centralautorizaciones_1' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'tms_TMS_CentralAutorizaciones',
        'rhs_table' => 'tms_tms_centralautorizaciones',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_tms_tms_centralautorizaciones_1_c',
        'join_key_lhs' => 'accounts_tms_tms_centralautorizaciones_1accounts_ida',
        'join_key_rhs' => 'accounts_t6bd9aciones_idb',
      ),
    ),
    'table' => 'accounts_tms_tms_centralautorizaciones_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'accounts_tms_tms_centralautorizaciones_1accounts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'accounts_t6bd9aciones_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_tms_tms_centralautorizaciones_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'accounts_tms_tms_centralautorizaciones_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_tms_tms_centralautorizaciones_1accounts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'accounts_tms_tms_centralautorizaciones_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_t6bd9aciones_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_TMS_CentralAutorizaciones',
    'rhs_table' => 'tms_tms_centralautorizaciones',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_tms_tms_centralautorizaciones_1_c',
    'join_key_lhs' => 'accounts_tms_tms_centralautorizaciones_1accounts_ida',
    'join_key_rhs' => 'accounts_t6bd9aciones_idb',
  ),
  'basa1_anexo1_accounts' => 
  array (
    'name' => 'basa1_anexo1_accounts',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'basa1_anexo1_accounts' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'basa1_ANEXO1',
        'rhs_table' => 'basa1_anexo1',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'basa1_anexo1_accounts_c',
        'join_key_lhs' => 'basa1_anexo1_accountsaccounts_ida',
        'join_key_rhs' => 'basa1_anexo1_accountsbasa1_anexo1_idb',
      ),
    ),
    'table' => 'basa1_anexo1_accounts_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'basa1_anexo1_accountsaccounts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'basa1_anexo1_accountsbasa1_anexo1_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'basa1_anexo1_accountsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'basa1_anexo1_accounts_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'basa1_anexo1_accountsaccounts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'basa1_anexo1_accounts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'basa1_anexo1_accountsbasa1_anexo1_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'basa1_ANEXO1',
    'rhs_table' => 'basa1_anexo1',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'basa1_anexo1_accounts_c',
    'join_key_lhs' => 'basa1_anexo1_accountsaccounts_ida',
    'join_key_rhs' => 'basa1_anexo1_accountsbasa1_anexo1_idb',
  ),
  'basa1_anexo1_documents_1' => 
  array (
    'name' => 'basa1_anexo1_documents_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'basa1_anexo1_documents_1' => 
      array (
        'lhs_module' => 'basa1_ANEXO1',
        'lhs_table' => 'basa1_anexo1',
        'lhs_key' => 'id',
        'rhs_module' => 'Documents',
        'rhs_table' => 'documents',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'basa1_anexo1_documents_1_c',
        'join_key_lhs' => 'basa1_anexo1_documents_1basa1_anexo1_ida',
        'join_key_rhs' => 'basa1_anexo1_documents_1documents_idb',
      ),
    ),
    'table' => 'basa1_anexo1_documents_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'basa1_anexo1_documents_1basa1_anexo1_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'basa1_anexo1_documents_1documents_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
      5 => 
      array (
        'name' => 'document_revision_id',
        'type' => 'varchar',
        'len' => '36',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'basa1_anexo1_documents_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'basa1_anexo1_documents_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'basa1_anexo1_documents_1basa1_anexo1_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'basa1_anexo1_documents_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'basa1_anexo1_documents_1documents_idb',
        ),
      ),
    ),
    'lhs_module' => 'basa1_ANEXO1',
    'lhs_table' => 'basa1_anexo1',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'basa1_anexo1_documents_1_c',
    'join_key_lhs' => 'basa1_anexo1_documents_1basa1_anexo1_ida',
    'join_key_rhs' => 'basa1_anexo1_documents_1documents_idb',
  ),
  'basa1_anexo1_gbihi_historialcorreo_1' => 
  array (
    'name' => 'basa1_anexo1_gbihi_historialcorreo_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'basa1_anexo1_gbihi_historialcorreo_1' => 
      array (
        'lhs_module' => 'basa1_ANEXO1',
        'lhs_table' => 'basa1_anexo1',
        'lhs_key' => 'id',
        'rhs_module' => 'GBIHI_HistorialCorreo',
        'rhs_table' => 'gbihi_historialcorreo',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'basa1_anexo1_gbihi_historialcorreo_1_c',
        'join_key_lhs' => 'basa1_anexo1_gbihi_historialcorreo_1basa1_anexo1_ida',
        'join_key_rhs' => 'basa1_anexo1_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
      ),
    ),
    'table' => 'basa1_anexo1_gbihi_historialcorreo_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'basa1_anexo1_gbihi_historialcorreo_1basa1_anexo1_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'basa1_anexo1_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'basa1_anexo1_gbihi_historialcorreo_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'basa1_anexo1_gbihi_historialcorreo_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'basa1_anexo1_gbihi_historialcorreo_1basa1_anexo1_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'basa1_anexo1_gbihi_historialcorreo_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'basa1_anexo1_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
        ),
      ),
    ),
    'lhs_module' => 'basa1_ANEXO1',
    'lhs_table' => 'basa1_anexo1',
    'lhs_key' => 'id',
    'rhs_module' => 'GBIHI_HistorialCorreo',
    'rhs_table' => 'gbihi_historialcorreo',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'basa1_anexo1_gbihi_historialcorreo_1_c',
    'join_key_lhs' => 'basa1_anexo1_gbihi_historialcorreo_1basa1_anexo1_ida',
    'join_key_rhs' => 'basa1_anexo1_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
  ),
  'gbia3_anexo3_aut_autorizacionestelefonicas_1' => 
  array (
    'name' => 'gbia3_anexo3_aut_autorizacionestelefonicas_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'gbia3_anexo3_aut_autorizacionestelefonicas_1' => 
      array (
        'lhs_module' => 'GBIA3_ANEXO3',
        'lhs_table' => 'gbia3_anexo3',
        'lhs_key' => 'id',
        'rhs_module' => 'AUT_AutorizacionesTelefonicas',
        'rhs_table' => 'aut_autorizacionestelefonicas',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbia3_anexo3_aut_autorizacionestelefonicas_1_c',
        'join_key_lhs' => 'gbia3_anexo3_aut_autorizacionestelefonicas_1gbia3_anexo3_ida',
        'join_key_rhs' => 'gbia3_anexb7affonicas_idb',
      ),
    ),
    'table' => 'gbia3_anexo3_aut_autorizacionestelefonicas_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbia3_anexo3_aut_autorizacionestelefonicas_1gbia3_anexo3_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbia3_anexb7affonicas_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbia3_anexo3_aut_autorizacionestelefonicas_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbia3_anexo3_aut_autorizacionestelefonicas_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbia3_anexo3_aut_autorizacionestelefonicas_1gbia3_anexo3_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbia3_anexo3_aut_autorizacionestelefonicas_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbia3_anexb7affonicas_idb',
        ),
      ),
    ),
    'lhs_module' => 'GBIA3_ANEXO3',
    'lhs_table' => 'gbia3_anexo3',
    'lhs_key' => 'id',
    'rhs_module' => 'AUT_AutorizacionesTelefonicas',
    'rhs_table' => 'aut_autorizacionestelefonicas',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbia3_anexo3_aut_autorizacionestelefonicas_1_c',
    'join_key_lhs' => 'gbia3_anexo3_aut_autorizacionestelefonicas_1gbia3_anexo3_ida',
    'join_key_rhs' => 'gbia3_anexb7affonicas_idb',
  ),
  'gbia3_anexo3_calls_1' => 
  array (
    'name' => 'gbia3_anexo3_calls_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'gbia3_anexo3_calls_1' => 
      array (
        'lhs_module' => 'GBIA3_ANEXO3',
        'lhs_table' => 'gbia3_anexo3',
        'lhs_key' => 'id',
        'rhs_module' => 'Calls',
        'rhs_table' => 'calls',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbia3_anexo3_calls_1_c',
        'join_key_lhs' => 'gbia3_anexo3_calls_1gbia3_anexo3_ida',
        'join_key_rhs' => 'gbia3_anexo3_calls_1calls_idb',
      ),
    ),
    'table' => 'gbia3_anexo3_calls_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbia3_anexo3_calls_1gbia3_anexo3_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbia3_anexo3_calls_1calls_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbia3_anexo3_calls_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbia3_anexo3_calls_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbia3_anexo3_calls_1gbia3_anexo3_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbia3_anexo3_calls_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbia3_anexo3_calls_1calls_idb',
        ),
      ),
    ),
    'lhs_module' => 'GBIA3_ANEXO3',
    'lhs_table' => 'gbia3_anexo3',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbia3_anexo3_calls_1_c',
    'join_key_lhs' => 'gbia3_anexo3_calls_1gbia3_anexo3_ida',
    'join_key_rhs' => 'gbia3_anexo3_calls_1calls_idb',
  ),
  'gbia3_anexo3_documents_1' => 
  array (
    'name' => 'gbia3_anexo3_documents_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'gbia3_anexo3_documents_1' => 
      array (
        'lhs_module' => 'GBIA3_ANEXO3',
        'lhs_table' => 'gbia3_anexo3',
        'lhs_key' => 'id',
        'rhs_module' => 'Documents',
        'rhs_table' => 'documents',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbia3_anexo3_documents_1_c',
        'join_key_lhs' => 'gbia3_anexo3_documents_1gbia3_anexo3_ida',
        'join_key_rhs' => 'gbia3_anexo3_documents_1documents_idb',
      ),
    ),
    'table' => 'gbia3_anexo3_documents_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbia3_anexo3_documents_1gbia3_anexo3_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbia3_anexo3_documents_1documents_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
      5 => 
      array (
        'name' => 'document_revision_id',
        'type' => 'varchar',
        'len' => '36',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbia3_anexo3_documents_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbia3_anexo3_documents_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbia3_anexo3_documents_1gbia3_anexo3_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbia3_anexo3_documents_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbia3_anexo3_documents_1documents_idb',
        ),
      ),
    ),
    'lhs_module' => 'GBIA3_ANEXO3',
    'lhs_table' => 'gbia3_anexo3',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbia3_anexo3_documents_1_c',
    'join_key_lhs' => 'gbia3_anexo3_documents_1gbia3_anexo3_ida',
    'join_key_rhs' => 'gbia3_anexo3_documents_1documents_idb',
  ),
  'gbia3_anexo3_gbia3_manejointegral_1' => 
  array (
    'name' => 'gbia3_anexo3_gbia3_manejointegral_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'gbia3_anexo3_gbia3_manejointegral_1' => 
      array (
        'lhs_module' => 'GBIA3_ANEXO3',
        'lhs_table' => 'gbia3_anexo3',
        'lhs_key' => 'id',
        'rhs_module' => 'GBIA3_ManejoIntegral',
        'rhs_table' => 'gbia3_manejointegral',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbia3_anexo3_gbia3_manejointegral_1_c',
        'join_key_lhs' => 'gbia3_anexo3_gbia3_manejointegral_1gbia3_anexo3_ida',
        'join_key_rhs' => 'gbia3_anexo3_gbia3_manejointegral_1gbia3_manejointegral_idb',
      ),
    ),
    'table' => 'gbia3_anexo3_gbia3_manejointegral_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbia3_anexo3_gbia3_manejointegral_1gbia3_anexo3_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbia3_anexo3_gbia3_manejointegral_1gbia3_manejointegral_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbia3_anexo3_gbia3_manejointegral_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbia3_anexo3_gbia3_manejointegral_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbia3_anexo3_gbia3_manejointegral_1gbia3_anexo3_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbia3_anexo3_gbia3_manejointegral_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbia3_anexo3_gbia3_manejointegral_1gbia3_manejointegral_idb',
        ),
      ),
    ),
    'lhs_module' => 'GBIA3_ANEXO3',
    'lhs_table' => 'gbia3_anexo3',
    'lhs_key' => 'id',
    'rhs_module' => 'GBIA3_ManejoIntegral',
    'rhs_table' => 'gbia3_manejointegral',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbia3_anexo3_gbia3_manejointegral_1_c',
    'join_key_lhs' => 'gbia3_anexo3_gbia3_manejointegral_1gbia3_anexo3_ida',
    'join_key_rhs' => 'gbia3_anexo3_gbia3_manejointegral_1gbia3_manejointegral_idb',
  ),
  'gbia3_anexo3_gbihi_historialcorreo_1' => 
  array (
    'name' => 'gbia3_anexo3_gbihi_historialcorreo_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'gbia3_anexo3_gbihi_historialcorreo_1' => 
      array (
        'lhs_module' => 'GBIA3_ANEXO3',
        'lhs_table' => 'gbia3_anexo3',
        'lhs_key' => 'id',
        'rhs_module' => 'GBIHI_HistorialCorreo',
        'rhs_table' => 'gbihi_historialcorreo',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbia3_anexo3_gbihi_historialcorreo_1_c',
        'join_key_lhs' => 'gbia3_anexo3_gbihi_historialcorreo_1gbia3_anexo3_ida',
        'join_key_rhs' => 'gbia3_anexo3_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
      ),
    ),
    'table' => 'gbia3_anexo3_gbihi_historialcorreo_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbia3_anexo3_gbihi_historialcorreo_1gbia3_anexo3_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbia3_anexo3_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbia3_anexo3_gbihi_historialcorreo_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbia3_anexo3_gbihi_historialcorreo_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbia3_anexo3_gbihi_historialcorreo_1gbia3_anexo3_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbia3_anexo3_gbihi_historialcorreo_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbia3_anexo3_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
        ),
      ),
    ),
    'lhs_module' => 'GBIA3_ANEXO3',
    'lhs_table' => 'gbia3_anexo3',
    'lhs_key' => 'id',
    'rhs_module' => 'GBIHI_HistorialCorreo',
    'rhs_table' => 'gbihi_historialcorreo',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbia3_anexo3_gbihi_historialcorreo_1_c',
    'join_key_lhs' => 'gbia3_anexo3_gbihi_historialcorreo_1gbia3_anexo3_ida',
    'join_key_rhs' => 'gbia3_anexo3_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
  ),
  'gbia3_anexo3_tasks_1' => 
  array (
    'name' => 'gbia3_anexo3_tasks_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'gbia3_anexo3_tasks_1' => 
      array (
        'lhs_module' => 'GBIA3_ANEXO3',
        'lhs_table' => 'gbia3_anexo3',
        'lhs_key' => 'id',
        'rhs_module' => 'Tasks',
        'rhs_table' => 'tasks',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbia3_anexo3_tasks_1_c',
        'join_key_lhs' => 'gbia3_anexo3_tasks_1gbia3_anexo3_ida',
        'join_key_rhs' => 'gbia3_anexo3_tasks_1tasks_idb',
      ),
    ),
    'table' => 'gbia3_anexo3_tasks_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbia3_anexo3_tasks_1gbia3_anexo3_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbia3_anexo3_tasks_1tasks_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbia3_anexo3_tasks_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbia3_anexo3_tasks_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbia3_anexo3_tasks_1gbia3_anexo3_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbia3_anexo3_tasks_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbia3_anexo3_tasks_1tasks_idb',
        ),
      ),
    ),
    'lhs_module' => 'GBIA3_ANEXO3',
    'lhs_table' => 'gbia3_anexo3',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbia3_anexo3_tasks_1_c',
    'join_key_lhs' => 'gbia3_anexo3_tasks_1gbia3_anexo3_ida',
    'join_key_rhs' => 'gbia3_anexo3_tasks_1tasks_idb',
  ),
  'gbia4_anexo4_calls_1' => 
  array (
    'name' => 'gbia4_anexo4_calls_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'gbia4_anexo4_calls_1' => 
      array (
        'lhs_module' => 'gbiA4_Anexo4',
        'lhs_table' => 'gbia4_anexo4',
        'lhs_key' => 'id',
        'rhs_module' => 'Calls',
        'rhs_table' => 'calls',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbia4_anexo4_calls_1_c',
        'join_key_lhs' => 'gbia4_anexo4_calls_1gbia4_anexo4_ida',
        'join_key_rhs' => 'gbia4_anexo4_calls_1calls_idb',
      ),
    ),
    'table' => 'gbia4_anexo4_calls_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbia4_anexo4_calls_1gbia4_anexo4_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbia4_anexo4_calls_1calls_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbia4_anexo4_calls_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbia4_anexo4_calls_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbia4_anexo4_calls_1gbia4_anexo4_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbia4_anexo4_calls_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbia4_anexo4_calls_1calls_idb',
        ),
      ),
    ),
    'lhs_module' => 'gbiA4_Anexo4',
    'lhs_table' => 'gbia4_anexo4',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbia4_anexo4_calls_1_c',
    'join_key_lhs' => 'gbia4_anexo4_calls_1gbia4_anexo4_ida',
    'join_key_rhs' => 'gbia4_anexo4_calls_1calls_idb',
  ),
  'gbia4_anexo4_gbia3_anexo3' => 
  array (
    'name' => 'gbia4_anexo4_gbia3_anexo3',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'gbia4_anexo4_gbia3_anexo3' => 
      array (
        'lhs_module' => 'GBIA3_ANEXO3',
        'lhs_table' => 'gbia3_anexo3',
        'lhs_key' => 'id',
        'rhs_module' => 'gbiA4_Anexo4',
        'rhs_table' => 'gbia4_anexo4',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbia4_anexo4_gbia3_anexo3_c',
        'join_key_lhs' => 'gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida',
        'join_key_rhs' => 'gbia4_anexo4_gbia3_anexo3gbia4_anexo4_idb',
      ),
    ),
    'table' => 'gbia4_anexo4_gbia3_anexo3_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbia4_anexo4_gbia3_anexo3gbia4_anexo4_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbia4_anexo4_gbia3_anexo3spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbia4_anexo4_gbia3_anexo3_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbia4_anexo4_gbia3_anexo3_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbia4_anexo4_gbia3_anexo3gbia4_anexo4_idb',
        ),
      ),
    ),
    'lhs_module' => 'GBIA3_ANEXO3',
    'lhs_table' => 'gbia3_anexo3',
    'lhs_key' => 'id',
    'rhs_module' => 'gbiA4_Anexo4',
    'rhs_table' => 'gbia4_anexo4',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbia4_anexo4_gbia3_anexo3_c',
    'join_key_lhs' => 'gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida',
    'join_key_rhs' => 'gbia4_anexo4_gbia3_anexo3gbia4_anexo4_idb',
  ),
  'gbia4_anexo4_tasks_1' => 
  array (
    'name' => 'gbia4_anexo4_tasks_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'gbia4_anexo4_tasks_1' => 
      array (
        'lhs_module' => 'gbiA4_Anexo4',
        'lhs_table' => 'gbia4_anexo4',
        'lhs_key' => 'id',
        'rhs_module' => 'Tasks',
        'rhs_table' => 'tasks',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbia4_anexo4_tasks_1_c',
        'join_key_lhs' => 'gbia4_anexo4_tasks_1gbia4_anexo4_ida',
        'join_key_rhs' => 'gbia4_anexo4_tasks_1tasks_idb',
      ),
    ),
    'table' => 'gbia4_anexo4_tasks_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbia4_anexo4_tasks_1gbia4_anexo4_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbia4_anexo4_tasks_1tasks_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbia4_anexo4_tasks_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbia4_anexo4_tasks_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbia4_anexo4_tasks_1gbia4_anexo4_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbia4_anexo4_tasks_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbia4_anexo4_tasks_1tasks_idb',
        ),
      ),
    ),
    'lhs_module' => 'gbiA4_Anexo4',
    'lhs_table' => 'gbia4_anexo4',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbia4_anexo4_tasks_1_c',
    'join_key_lhs' => 'gbia4_anexo4_tasks_1gbia4_anexo4_ida',
    'join_key_rhs' => 'gbia4_anexo4_tasks_1tasks_idb',
  ),
  'gbia4_aprobacioncups_gbia4_anexo4' => 
  array (
    'name' => 'gbia4_aprobacioncups_gbia4_anexo4',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'gbia4_aprobacioncups_gbia4_anexo4' => 
      array (
        'lhs_module' => 'gbiA4_Anexo4',
        'lhs_table' => 'gbia4_anexo4',
        'lhs_key' => 'id',
        'rhs_module' => 'gbiA4_Aprobacioncups',
        'rhs_table' => 'gbia4_aprobacioncups',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbia4_aprobacioncups_gbia4_anexo4_c',
        'join_key_lhs' => 'gbia4_aprobacioncups_gbia4_anexo4gbia4_anexo4_ida',
        'join_key_rhs' => 'gbia4_aprobacioncups_gbia4_anexo4gbia4_aprobacioncups_idb',
      ),
    ),
    'table' => 'gbia4_aprobacioncups_gbia4_anexo4_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbia4_aprobacioncups_gbia4_anexo4gbia4_anexo4_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbia4_aprobacioncups_gbia4_anexo4gbia4_aprobacioncups_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbia4_aprobacioncups_gbia4_anexo4spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbia4_aprobacioncups_gbia4_anexo4_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbia4_aprobacioncups_gbia4_anexo4gbia4_anexo4_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbia4_aprobacioncups_gbia4_anexo4_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbia4_aprobacioncups_gbia4_anexo4gbia4_aprobacioncups_idb',
        ),
      ),
    ),
    'lhs_module' => 'gbiA4_Anexo4',
    'lhs_table' => 'gbia4_anexo4',
    'lhs_key' => 'id',
    'rhs_module' => 'gbiA4_Aprobacioncups',
    'rhs_table' => 'gbia4_aprobacioncups',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbia4_aprobacioncups_gbia4_anexo4_c',
    'join_key_lhs' => 'gbia4_aprobacioncups_gbia4_anexo4gbia4_anexo4_ida',
    'join_key_rhs' => 'gbia4_aprobacioncups_gbia4_anexo4gbia4_aprobacioncups_idb',
  ),
  'gbian_anexo2_accounts' => 
  array (
    'name' => 'gbian_anexo2_accounts',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'gbian_anexo2_accounts' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'gbian_Anexo2',
        'rhs_table' => 'gbian_anexo2',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbian_anexo2_accounts_c',
        'join_key_lhs' => 'gbian_anexo2_accountsaccounts_ida',
        'join_key_rhs' => 'gbian_anexo2_accountsgbian_anexo2_idb',
      ),
    ),
    'table' => 'gbian_anexo2_accounts_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbian_anexo2_accountsaccounts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbian_anexo2_accountsgbian_anexo2_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbian_anexo2_accountsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbian_anexo2_accounts_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbian_anexo2_accountsaccounts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbian_anexo2_accounts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbian_anexo2_accountsgbian_anexo2_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'gbian_Anexo2',
    'rhs_table' => 'gbian_anexo2',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbian_anexo2_accounts_c',
    'join_key_lhs' => 'gbian_anexo2_accountsaccounts_ida',
    'join_key_rhs' => 'gbian_anexo2_accountsgbian_anexo2_idb',
  ),
  'gbian_anexo2_aut_autorizacionestelefonicas_1' => 
  array (
    'name' => 'gbian_anexo2_aut_autorizacionestelefonicas_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'gbian_anexo2_aut_autorizacionestelefonicas_1' => 
      array (
        'lhs_module' => 'gbian_Anexo2',
        'lhs_table' => 'gbian_anexo2',
        'lhs_key' => 'id',
        'rhs_module' => 'AUT_AutorizacionesTelefonicas',
        'rhs_table' => 'aut_autorizacionestelefonicas',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbian_anexo2_aut_autorizacionestelefonicas_1_c',
        'join_key_lhs' => 'gbian_anexo2_aut_autorizacionestelefonicas_1gbian_anexo2_ida',
        'join_key_rhs' => 'gbian_anex5ba6fonicas_idb',
      ),
    ),
    'table' => 'gbian_anexo2_aut_autorizacionestelefonicas_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbian_anexo2_aut_autorizacionestelefonicas_1gbian_anexo2_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbian_anex5ba6fonicas_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbian_anexo2_aut_autorizacionestelefonicas_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbian_anexo2_aut_autorizacionestelefonicas_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbian_anexo2_aut_autorizacionestelefonicas_1gbian_anexo2_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbian_anexo2_aut_autorizacionestelefonicas_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbian_anex5ba6fonicas_idb',
        ),
      ),
    ),
    'lhs_module' => 'gbian_Anexo2',
    'lhs_table' => 'gbian_anexo2',
    'lhs_key' => 'id',
    'rhs_module' => 'AUT_AutorizacionesTelefonicas',
    'rhs_table' => 'aut_autorizacionestelefonicas',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbian_anexo2_aut_autorizacionestelefonicas_1_c',
    'join_key_lhs' => 'gbian_anexo2_aut_autorizacionestelefonicas_1gbian_anexo2_ida',
    'join_key_rhs' => 'gbian_anex5ba6fonicas_idb',
  ),
  'gbian_anexo2_calls_1' => 
  array (
    'name' => 'gbian_anexo2_calls_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'gbian_anexo2_calls_1' => 
      array (
        'lhs_module' => 'gbian_Anexo2',
        'lhs_table' => 'gbian_anexo2',
        'lhs_key' => 'id',
        'rhs_module' => 'Calls',
        'rhs_table' => 'calls',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbian_anexo2_calls_1_c',
        'join_key_lhs' => 'gbian_anexo2_calls_1gbian_anexo2_ida',
        'join_key_rhs' => 'gbian_anexo2_calls_1calls_idb',
      ),
    ),
    'table' => 'gbian_anexo2_calls_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbian_anexo2_calls_1gbian_anexo2_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbian_anexo2_calls_1calls_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbian_anexo2_calls_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbian_anexo2_calls_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbian_anexo2_calls_1gbian_anexo2_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbian_anexo2_calls_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbian_anexo2_calls_1calls_idb',
        ),
      ),
    ),
    'lhs_module' => 'gbian_Anexo2',
    'lhs_table' => 'gbian_anexo2',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbian_anexo2_calls_1_c',
    'join_key_lhs' => 'gbian_anexo2_calls_1gbian_anexo2_ida',
    'join_key_rhs' => 'gbian_anexo2_calls_1calls_idb',
  ),
  'gbian_anexo2_documents_1' => 
  array (
    'name' => 'gbian_anexo2_documents_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'gbian_anexo2_documents_1' => 
      array (
        'lhs_module' => 'gbian_Anexo2',
        'lhs_table' => 'gbian_anexo2',
        'lhs_key' => 'id',
        'rhs_module' => 'Documents',
        'rhs_table' => 'documents',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbian_anexo2_documents_1_c',
        'join_key_lhs' => 'gbian_anexo2_documents_1gbian_anexo2_ida',
        'join_key_rhs' => 'gbian_anexo2_documents_1documents_idb',
      ),
    ),
    'table' => 'gbian_anexo2_documents_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbian_anexo2_documents_1gbian_anexo2_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbian_anexo2_documents_1documents_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
      5 => 
      array (
        'name' => 'document_revision_id',
        'type' => 'varchar',
        'len' => '36',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbian_anexo2_documents_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbian_anexo2_documents_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbian_anexo2_documents_1gbian_anexo2_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbian_anexo2_documents_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbian_anexo2_documents_1documents_idb',
        ),
      ),
    ),
    'lhs_module' => 'gbian_Anexo2',
    'lhs_table' => 'gbian_anexo2',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbian_anexo2_documents_1_c',
    'join_key_lhs' => 'gbian_anexo2_documents_1gbian_anexo2_ida',
    'join_key_rhs' => 'gbian_anexo2_documents_1documents_idb',
  ),
  'gbian_anexo2_gbia4_anexo4_1' => 
  array (
    'name' => 'gbian_anexo2_gbia4_anexo4_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'gbian_anexo2_gbia4_anexo4_1' => 
      array (
        'lhs_module' => 'gbian_Anexo2',
        'lhs_table' => 'gbian_anexo2',
        'lhs_key' => 'id',
        'rhs_module' => 'gbiA4_Anexo4',
        'rhs_table' => 'gbia4_anexo4',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbian_anexo2_gbia4_anexo4_1_c',
        'join_key_lhs' => 'gbian_anexo2_gbia4_anexo4_1gbian_anexo2_ida',
        'join_key_rhs' => 'gbian_anexo2_gbia4_anexo4_1gbia4_anexo4_idb',
      ),
    ),
    'table' => 'gbian_anexo2_gbia4_anexo4_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbian_anexo2_gbia4_anexo4_1gbian_anexo2_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbian_anexo2_gbia4_anexo4_1gbia4_anexo4_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbian_anexo2_gbia4_anexo4_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbian_anexo2_gbia4_anexo4_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbian_anexo2_gbia4_anexo4_1gbian_anexo2_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbian_anexo2_gbia4_anexo4_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbian_anexo2_gbia4_anexo4_1gbia4_anexo4_idb',
        ),
      ),
    ),
    'lhs_module' => 'gbian_Anexo2',
    'lhs_table' => 'gbian_anexo2',
    'lhs_key' => 'id',
    'rhs_module' => 'gbiA4_Anexo4',
    'rhs_table' => 'gbia4_anexo4',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbian_anexo2_gbia4_anexo4_1_c',
    'join_key_lhs' => 'gbian_anexo2_gbia4_anexo4_1gbian_anexo2_ida',
    'join_key_rhs' => 'gbian_anexo2_gbia4_anexo4_1gbia4_anexo4_idb',
  ),
  'gbian_anexo2_gbihi_historialcorreo_1' => 
  array (
    'name' => 'gbian_anexo2_gbihi_historialcorreo_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'gbian_anexo2_gbihi_historialcorreo_1' => 
      array (
        'lhs_module' => 'gbian_Anexo2',
        'lhs_table' => 'gbian_anexo2',
        'lhs_key' => 'id',
        'rhs_module' => 'GBIHI_HistorialCorreo',
        'rhs_table' => 'gbihi_historialcorreo',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbian_anexo2_gbihi_historialcorreo_1_c',
        'join_key_lhs' => 'gbian_anexo2_gbihi_historialcorreo_1gbian_anexo2_ida',
        'join_key_rhs' => 'gbian_anexo2_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
      ),
    ),
    'table' => 'gbian_anexo2_gbihi_historialcorreo_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbian_anexo2_gbihi_historialcorreo_1gbian_anexo2_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbian_anexo2_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbian_anexo2_gbihi_historialcorreo_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbian_anexo2_gbihi_historialcorreo_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbian_anexo2_gbihi_historialcorreo_1gbian_anexo2_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbian_anexo2_gbihi_historialcorreo_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbian_anexo2_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
        ),
      ),
    ),
    'lhs_module' => 'gbian_Anexo2',
    'lhs_table' => 'gbian_anexo2',
    'lhs_key' => 'id',
    'rhs_module' => 'GBIHI_HistorialCorreo',
    'rhs_table' => 'gbihi_historialcorreo',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbian_anexo2_gbihi_historialcorreo_1_c',
    'join_key_lhs' => 'gbian_anexo2_gbihi_historialcorreo_1gbian_anexo2_ida',
    'join_key_rhs' => 'gbian_anexo2_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
  ),
  'gbian_anexo2_tasks_1' => 
  array (
    'name' => 'gbian_anexo2_tasks_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'gbian_anexo2_tasks_1' => 
      array (
        'lhs_module' => 'gbian_Anexo2',
        'lhs_table' => 'gbian_anexo2',
        'lhs_key' => 'id',
        'rhs_module' => 'Tasks',
        'rhs_table' => 'tasks',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbian_anexo2_tasks_1_c',
        'join_key_lhs' => 'gbian_anexo2_tasks_1gbian_anexo2_ida',
        'join_key_rhs' => 'gbian_anexo2_tasks_1tasks_idb',
      ),
    ),
    'table' => 'gbian_anexo2_tasks_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbian_anexo2_tasks_1gbian_anexo2_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbian_anexo2_tasks_1tasks_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbian_anexo2_tasks_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbian_anexo2_tasks_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbian_anexo2_tasks_1gbian_anexo2_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbian_anexo2_tasks_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbian_anexo2_tasks_1tasks_idb',
        ),
      ),
    ),
    'lhs_module' => 'gbian_Anexo2',
    'lhs_table' => 'gbian_anexo2',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbian_anexo2_tasks_1_c',
    'join_key_lhs' => 'gbian_anexo2_tasks_1gbian_anexo2_ida',
    'join_key_rhs' => 'gbian_anexo2_tasks_1tasks_idb',
  ),
  'gbi_anexo3npos_calls_1' => 
  array (
    'name' => 'gbi_anexo3npos_calls_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'gbi_anexo3npos_calls_1' => 
      array (
        'lhs_module' => 'gbi_anexo3npos',
        'lhs_table' => 'gbi_anexo3npos',
        'lhs_key' => 'id',
        'rhs_module' => 'Calls',
        'rhs_table' => 'calls',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbi_anexo3npos_calls_1_c',
        'join_key_lhs' => 'gbi_anexo3npos_calls_1gbi_anexo3npos_ida',
        'join_key_rhs' => 'gbi_anexo3npos_calls_1calls_idb',
      ),
    ),
    'table' => 'gbi_anexo3npos_calls_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbi_anexo3npos_calls_1gbi_anexo3npos_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbi_anexo3npos_calls_1calls_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbi_anexo3npos_calls_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbi_anexo3npos_calls_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbi_anexo3npos_calls_1gbi_anexo3npos_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbi_anexo3npos_calls_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbi_anexo3npos_calls_1calls_idb',
        ),
      ),
    ),
    'lhs_module' => 'gbi_anexo3npos',
    'lhs_table' => 'gbi_anexo3npos',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbi_anexo3npos_calls_1_c',
    'join_key_lhs' => 'gbi_anexo3npos_calls_1gbi_anexo3npos_ida',
    'join_key_rhs' => 'gbi_anexo3npos_calls_1calls_idb',
  ),
  'gbi_anexo3npos_documents_1' => 
  array (
    'name' => 'gbi_anexo3npos_documents_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'gbi_anexo3npos_documents_1' => 
      array (
        'lhs_module' => 'gbi_anexo3npos',
        'lhs_table' => 'gbi_anexo3npos',
        'lhs_key' => 'id',
        'rhs_module' => 'Documents',
        'rhs_table' => 'documents',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbi_anexo3npos_documents_1_c',
        'join_key_lhs' => 'gbi_anexo3npos_documents_1gbi_anexo3npos_ida',
        'join_key_rhs' => 'gbi_anexo3npos_documents_1documents_idb',
      ),
    ),
    'table' => 'gbi_anexo3npos_documents_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbi_anexo3npos_documents_1gbi_anexo3npos_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbi_anexo3npos_documents_1documents_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
      5 => 
      array (
        'name' => 'document_revision_id',
        'type' => 'varchar',
        'len' => '36',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbi_anexo3npos_documents_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbi_anexo3npos_documents_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbi_anexo3npos_documents_1gbi_anexo3npos_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbi_anexo3npos_documents_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbi_anexo3npos_documents_1documents_idb',
        ),
      ),
    ),
    'lhs_module' => 'gbi_anexo3npos',
    'lhs_table' => 'gbi_anexo3npos',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbi_anexo3npos_documents_1_c',
    'join_key_lhs' => 'gbi_anexo3npos_documents_1gbi_anexo3npos_ida',
    'join_key_rhs' => 'gbi_anexo3npos_documents_1documents_idb',
  ),
  'gbi_anexo3npos_gbihi_historialcorreo_1' => 
  array (
    'name' => 'gbi_anexo3npos_gbihi_historialcorreo_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'gbi_anexo3npos_gbihi_historialcorreo_1' => 
      array (
        'lhs_module' => 'gbi_anexo3npos',
        'lhs_table' => 'gbi_anexo3npos',
        'lhs_key' => 'id',
        'rhs_module' => 'GBIHI_HistorialCorreo',
        'rhs_table' => 'gbihi_historialcorreo',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbi_anexo3npos_gbihi_historialcorreo_1_c',
        'join_key_lhs' => 'gbi_anexo3npos_gbihi_historialcorreo_1gbi_anexo3npos_ida',
        'join_key_rhs' => 'gbi_anexo3npos_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
      ),
    ),
    'table' => 'gbi_anexo3npos_gbihi_historialcorreo_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbi_anexo3npos_gbihi_historialcorreo_1gbi_anexo3npos_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbi_anexo3npos_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbi_anexo3npos_gbihi_historialcorreo_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbi_anexo3npos_gbihi_historialcorreo_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbi_anexo3npos_gbihi_historialcorreo_1gbi_anexo3npos_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbi_anexo3npos_gbihi_historialcorreo_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbi_anexo3npos_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
        ),
      ),
    ),
    'lhs_module' => 'gbi_anexo3npos',
    'lhs_table' => 'gbi_anexo3npos',
    'lhs_key' => 'id',
    'rhs_module' => 'GBIHI_HistorialCorreo',
    'rhs_table' => 'gbihi_historialcorreo',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbi_anexo3npos_gbihi_historialcorreo_1_c',
    'join_key_lhs' => 'gbi_anexo3npos_gbihi_historialcorreo_1gbi_anexo3npos_ida',
    'join_key_rhs' => 'gbi_anexo3npos_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
  ),
  'gbi_anexo3npos_minpo_manejo_integra_1' => 
  array (
    'name' => 'gbi_anexo3npos_minpo_manejo_integra_1',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'gbi_anexo3npos_minpo_manejo_integra_1' => 
      array (
        'lhs_module' => 'gbi_anexo3npos',
        'lhs_table' => 'gbi_anexo3npos',
        'lhs_key' => 'id',
        'rhs_module' => 'minpo_Manejo_integra',
        'rhs_table' => 'minpo_manejo_integra',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbi_anexo3npos_minpo_manejo_integra_1_c',
        'join_key_lhs' => 'gbi_anexo3npos_minpo_manejo_integra_1gbi_anexo3npos_ida',
        'join_key_rhs' => 'gbi_anexo3npos_minpo_manejo_integra_1minpo_manejo_integra_idb',
      ),
    ),
    'table' => 'gbi_anexo3npos_minpo_manejo_integra_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbi_anexo3npos_minpo_manejo_integra_1gbi_anexo3npos_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbi_anexo3npos_minpo_manejo_integra_1minpo_manejo_integra_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbi_anexo3npos_minpo_manejo_integra_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbi_anexo3npos_minpo_manejo_integra_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbi_anexo3npos_minpo_manejo_integra_1gbi_anexo3npos_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbi_anexo3npos_minpo_manejo_integra_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbi_anexo3npos_minpo_manejo_integra_1minpo_manejo_integra_idb',
        ),
      ),
    ),
    'lhs_module' => 'gbi_anexo3npos',
    'lhs_table' => 'gbi_anexo3npos',
    'lhs_key' => 'id',
    'rhs_module' => 'minpo_Manejo_integra',
    'rhs_table' => 'minpo_manejo_integra',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbi_anexo3npos_minpo_manejo_integra_1_c',
    'join_key_lhs' => 'gbi_anexo3npos_minpo_manejo_integra_1gbi_anexo3npos_ida',
    'join_key_rhs' => 'gbi_anexo3npos_minpo_manejo_integra_1minpo_manejo_integra_idb',
  ),
  'gbi_anexo3npos_tasks_1' => 
  array (
    'name' => 'gbi_anexo3npos_tasks_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'gbi_anexo3npos_tasks_1' => 
      array (
        'lhs_module' => 'gbi_anexo3npos',
        'lhs_table' => 'gbi_anexo3npos',
        'lhs_key' => 'id',
        'rhs_module' => 'Tasks',
        'rhs_table' => 'tasks',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbi_anexo3npos_tasks_1_c',
        'join_key_lhs' => 'gbi_anexo3npos_tasks_1gbi_anexo3npos_ida',
        'join_key_rhs' => 'gbi_anexo3npos_tasks_1tasks_idb',
      ),
    ),
    'table' => 'gbi_anexo3npos_tasks_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbi_anexo3npos_tasks_1gbi_anexo3npos_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbi_anexo3npos_tasks_1tasks_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbi_anexo3npos_tasks_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbi_anexo3npos_tasks_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbi_anexo3npos_tasks_1gbi_anexo3npos_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbi_anexo3npos_tasks_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbi_anexo3npos_tasks_1tasks_idb',
        ),
      ),
    ),
    'lhs_module' => 'gbi_anexo3npos',
    'lhs_table' => 'gbi_anexo3npos',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbi_anexo3npos_tasks_1_c',
    'join_key_lhs' => 'gbi_anexo3npos_tasks_1gbi_anexo3npos_ida',
    'join_key_rhs' => 'gbi_anexo3npos_tasks_1tasks_idb',
  ),
  'gbi_anexo9_calls_1' => 
  array (
    'name' => 'gbi_anexo9_calls_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'gbi_anexo9_calls_1' => 
      array (
        'lhs_module' => 'gbi_Anexo9',
        'lhs_table' => 'gbi_anexo9',
        'lhs_key' => 'id',
        'rhs_module' => 'Calls',
        'rhs_table' => 'calls',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbi_anexo9_calls_1_c',
        'join_key_lhs' => 'gbi_anexo9_calls_1gbi_anexo9_ida',
        'join_key_rhs' => 'gbi_anexo9_calls_1calls_idb',
      ),
    ),
    'table' => 'gbi_anexo9_calls_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbi_anexo9_calls_1gbi_anexo9_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbi_anexo9_calls_1calls_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbi_anexo9_calls_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbi_anexo9_calls_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbi_anexo9_calls_1gbi_anexo9_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbi_anexo9_calls_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbi_anexo9_calls_1calls_idb',
        ),
      ),
    ),
    'lhs_module' => 'gbi_Anexo9',
    'lhs_table' => 'gbi_anexo9',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbi_anexo9_calls_1_c',
    'join_key_lhs' => 'gbi_anexo9_calls_1gbi_anexo9_ida',
    'join_key_rhs' => 'gbi_anexo9_calls_1calls_idb',
  ),
  'gbi_anexo9_documents_1' => 
  array (
    'name' => 'gbi_anexo9_documents_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'gbi_anexo9_documents_1' => 
      array (
        'lhs_module' => 'gbi_Anexo9',
        'lhs_table' => 'gbi_anexo9',
        'lhs_key' => 'id',
        'rhs_module' => 'Documents',
        'rhs_table' => 'documents',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbi_anexo9_documents_1_c',
        'join_key_lhs' => 'gbi_anexo9_documents_1gbi_anexo9_ida',
        'join_key_rhs' => 'gbi_anexo9_documents_1documents_idb',
      ),
    ),
    'table' => 'gbi_anexo9_documents_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbi_anexo9_documents_1gbi_anexo9_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbi_anexo9_documents_1documents_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
      5 => 
      array (
        'name' => 'document_revision_id',
        'type' => 'varchar',
        'len' => '36',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbi_anexo9_documents_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbi_anexo9_documents_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbi_anexo9_documents_1gbi_anexo9_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbi_anexo9_documents_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbi_anexo9_documents_1documents_idb',
        ),
      ),
    ),
    'lhs_module' => 'gbi_Anexo9',
    'lhs_table' => 'gbi_anexo9',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbi_anexo9_documents_1_c',
    'join_key_lhs' => 'gbi_anexo9_documents_1gbi_anexo9_ida',
    'join_key_rhs' => 'gbi_anexo9_documents_1documents_idb',
  ),
  'gbi_anexo9_gbihi_historialcorreo_1' => 
  array (
    'name' => 'gbi_anexo9_gbihi_historialcorreo_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'gbi_anexo9_gbihi_historialcorreo_1' => 
      array (
        'lhs_module' => 'gbi_Anexo9',
        'lhs_table' => 'gbi_anexo9',
        'lhs_key' => 'id',
        'rhs_module' => 'GBIHI_HistorialCorreo',
        'rhs_table' => 'gbihi_historialcorreo',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbi_anexo9_gbihi_historialcorreo_1_c',
        'join_key_lhs' => 'gbi_anexo9_gbihi_historialcorreo_1gbi_anexo9_ida',
        'join_key_rhs' => 'gbi_anexo9_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
      ),
    ),
    'table' => 'gbi_anexo9_gbihi_historialcorreo_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbi_anexo9_gbihi_historialcorreo_1gbi_anexo9_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbi_anexo9_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbi_anexo9_gbihi_historialcorreo_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbi_anexo9_gbihi_historialcorreo_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbi_anexo9_gbihi_historialcorreo_1gbi_anexo9_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbi_anexo9_gbihi_historialcorreo_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbi_anexo9_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
        ),
      ),
    ),
    'lhs_module' => 'gbi_Anexo9',
    'lhs_table' => 'gbi_anexo9',
    'lhs_key' => 'id',
    'rhs_module' => 'GBIHI_HistorialCorreo',
    'rhs_table' => 'gbihi_historialcorreo',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbi_anexo9_gbihi_historialcorreo_1_c',
    'join_key_lhs' => 'gbi_anexo9_gbihi_historialcorreo_1gbi_anexo9_ida',
    'join_key_rhs' => 'gbi_anexo9_gbihi_historialcorreo_1gbihi_historialcorreo_idb',
  ),
  'gbi_anexo9_gbi_egreso_centro_regulador_1' => 
  array (
    'name' => 'gbi_anexo9_gbi_egreso_centro_regulador_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'gbi_anexo9_gbi_egreso_centro_regulador_1' => 
      array (
        'lhs_module' => 'gbi_Anexo9',
        'lhs_table' => 'gbi_anexo9',
        'lhs_key' => 'id',
        'rhs_module' => 'gbi_egreso_centro_regulador',
        'rhs_table' => 'gbi_egreso_centro_regulador',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbi_anexo9_gbi_egreso_centro_regulador_1_c',
        'join_key_lhs' => 'gbi_anexo9_gbi_egreso_centro_regulador_1gbi_anexo9_ida',
        'join_key_rhs' => 'gbi_anexo95cdegulador_idb',
      ),
    ),
    'table' => 'gbi_anexo9_gbi_egreso_centro_regulador_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbi_anexo9_gbi_egreso_centro_regulador_1gbi_anexo9_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbi_anexo95cdegulador_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbi_anexo9_gbi_egreso_centro_regulador_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbi_anexo9_gbi_egreso_centro_regulador_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbi_anexo9_gbi_egreso_centro_regulador_1gbi_anexo9_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbi_anexo9_gbi_egreso_centro_regulador_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbi_anexo95cdegulador_idb',
        ),
      ),
    ),
    'lhs_module' => 'gbi_Anexo9',
    'lhs_table' => 'gbi_anexo9',
    'lhs_key' => 'id',
    'rhs_module' => 'gbi_egreso_centro_regulador',
    'rhs_table' => 'gbi_egreso_centro_regulador',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbi_anexo9_gbi_egreso_centro_regulador_1_c',
    'join_key_lhs' => 'gbi_anexo9_gbi_egreso_centro_regulador_1gbi_anexo9_ida',
    'join_key_rhs' => 'gbi_anexo95cdegulador_idb',
  ),
  'gbi_anexo9_tasks_1' => 
  array (
    'name' => 'gbi_anexo9_tasks_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'gbi_anexo9_tasks_1' => 
      array (
        'lhs_module' => 'gbi_Anexo9',
        'lhs_table' => 'gbi_anexo9',
        'lhs_key' => 'id',
        'rhs_module' => 'Tasks',
        'rhs_table' => 'tasks',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'gbi_anexo9_tasks_1_c',
        'join_key_lhs' => 'gbi_anexo9_tasks_1gbi_anexo9_ida',
        'join_key_rhs' => 'gbi_anexo9_tasks_1tasks_idb',
      ),
    ),
    'table' => 'gbi_anexo9_tasks_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'gbi_anexo9_tasks_1gbi_anexo9_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'gbi_anexo9_tasks_1tasks_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'gbi_anexo9_tasks_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'gbi_anexo9_tasks_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'gbi_anexo9_tasks_1gbi_anexo9_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'gbi_anexo9_tasks_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'gbi_anexo9_tasks_1tasks_idb',
        ),
      ),
    ),
    'lhs_module' => 'gbi_Anexo9',
    'lhs_table' => 'gbi_anexo9',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'gbi_anexo9_tasks_1_c',
    'join_key_lhs' => 'gbi_anexo9_tasks_1gbi_anexo9_ida',
    'join_key_rhs' => 'gbi_anexo9_tasks_1tasks_idb',
  ),
  'tms_habeasdata_documents_1' => 
  array (
    'name' => 'tms_habeasdata_documents_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'tms_habeasdata_documents_1' => 
      array (
        'lhs_module' => 'tms_habeasdata',
        'lhs_table' => 'tms_habeasdata',
        'lhs_key' => 'id',
        'rhs_module' => 'Documents',
        'rhs_table' => 'documents',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'tms_habeasdata_documents_1_c',
        'join_key_lhs' => 'tms_habeasdata_documents_1tms_habeasdata_ida',
        'join_key_rhs' => 'tms_habeasdata_documents_1documents_idb',
      ),
    ),
    'table' => 'tms_habeasdata_documents_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'tms_habeasdata_documents_1tms_habeasdata_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'tms_habeasdata_documents_1documents_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
      5 => 
      array (
        'name' => 'document_revision_id',
        'type' => 'varchar',
        'len' => '36',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'tms_habeasdata_documents_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'tms_habeasdata_documents_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'tms_habeasdata_documents_1tms_habeasdata_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'tms_habeasdata_documents_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'tms_habeasdata_documents_1documents_idb',
        ),
      ),
    ),
    'lhs_module' => 'tms_habeasdata',
    'lhs_table' => 'tms_habeasdata',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tms_habeasdata_documents_1_c',
    'join_key_lhs' => 'tms_habeasdata_documents_1tms_habeasdata_ida',
    'join_key_rhs' => 'tms_habeasdata_documents_1documents_idb',
  ),
  'tms_habeasdata_tms_habeasdata_1' => 
  array (
    'name' => 'tms_habeasdata_tms_habeasdata_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'tms_habeasdata_tms_habeasdata_1' => 
      array (
        'lhs_module' => 'tms_habeasdata',
        'lhs_table' => 'tms_habeasdata',
        'lhs_key' => 'id',
        'rhs_module' => 'tms_habeasdata',
        'rhs_table' => 'tms_habeasdata',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'tms_habeasdata_tms_habeasdata_1_c',
        'join_key_lhs' => 'tms_habeasdata_tms_habeasdata_1tms_habeasdata_ida',
        'join_key_rhs' => 'tms_habeasdata_tms_habeasdata_1tms_habeasdata_idb',
      ),
    ),
    'table' => 'tms_habeasdata_tms_habeasdata_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'tms_habeasdata_tms_habeasdata_1tms_habeasdata_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'tms_habeasdata_tms_habeasdata_1tms_habeasdata_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'tms_habeasdata_tms_habeasdata_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'tms_habeasdata_tms_habeasdata_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'tms_habeasdata_tms_habeasdata_1tms_habeasdata_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'tms_habeasdata_tms_habeasdata_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'tms_habeasdata_tms_habeasdata_1tms_habeasdata_idb',
        ),
      ),
    ),
    'lhs_module' => 'tms_habeasdata',
    'lhs_table' => 'tms_habeasdata',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_habeasdata',
    'rhs_table' => 'tms_habeasdata',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tms_habeasdata_tms_habeasdata_1_c',
    'join_key_lhs' => 'tms_habeasdata_tms_habeasdata_1tms_habeasdata_ida',
    'join_key_rhs' => 'tms_habeasdata_tms_habeasdata_1tms_habeasdata_idb',
  ),
  'vd_validacion_derechos_accounts' => 
  array (
    'name' => 'vd_validacion_derechos_accounts',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'vd_validacion_derechos_accounts' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'vd_validacion_derechos',
        'rhs_table' => 'vd_validacion_derechos',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'vd_validacion_derechos_accounts_c',
        'join_key_lhs' => 'vd_validacion_derechos_accountsaccounts_ida',
        'join_key_rhs' => 'vd_validacion_derechos_accountsvd_validacion_derechos_idb',
      ),
    ),
    'table' => 'vd_validacion_derechos_accounts_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'vd_validacion_derechos_accountsaccounts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'vd_validacion_derechos_accountsvd_validacion_derechos_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'vd_validacion_derechos_accountsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'vd_validacion_derechos_accounts_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'vd_validacion_derechos_accountsaccounts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'vd_validacion_derechos_accounts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'vd_validacion_derechos_accountsvd_validacion_derechos_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'vd_validacion_derechos',
    'rhs_table' => 'vd_validacion_derechos',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'vd_validacion_derechos_accounts_c',
    'join_key_lhs' => 'vd_validacion_derechos_accountsaccounts_ida',
    'join_key_rhs' => 'vd_validacion_derechos_accountsvd_validacion_derechos_idb',
  ),
  'user_direct_reports' => 
  array (
    'name' => 'user_direct_reports',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'reports_to_id',
    'relationship_type' => 'one-to-many',
  ),
  'users_users_signatures' => 
  array (
    'name' => 'users_users_signatures',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'UserSignature',
    'rhs_table' => 'users_signatures',
    'rhs_key' => 'user_id',
    'relationship_type' => 'one-to-many',
  ),
  'users_email_addresses' => 
  array (
    'name' => 'users_email_addresses',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'users_email_addresses_primary' => 
  array (
    'name' => 'users_email_addresses_primary',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'leads_modified_user' => 
  array (
    'name' => 'leads_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'leads_created_by' => 
  array (
    'name' => 'leads_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'leads_assigned_user' => 
  array (
    'name' => 'leads_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'leads_email_addresses' => 
  array (
    'name' => 'leads_email_addresses',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'leads_email_addresses_primary' => 
  array (
    'name' => 'leads_email_addresses_primary',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'lead_direct_reports' => 
  array (
    'name' => 'lead_direct_reports',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'reports_to_id',
    'relationship_type' => 'one-to-many',
  ),
  'lead_tasks' => 
  array (
    'name' => 'lead_tasks',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_notes' => 
  array (
    'name' => 'lead_notes',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_meetings' => 
  array (
    'name' => 'lead_meetings',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_calls' => 
  array (
    'name' => 'lead_calls',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_emails' => 
  array (
    'name' => 'lead_emails',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_campaign_log' => 
  array (
    'name' => 'lead_campaign_log',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'target_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'target_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'cases_modified_user' => 
  array (
    'name' => 'cases_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'cases_created_by' => 
  array (
    'name' => 'cases_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'cases_assigned_user' => 
  array (
    'name' => 'cases_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'case_calls' => 
  array (
    'name' => 'case_calls',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'case_tasks' => 
  array (
    'name' => 'case_tasks',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'case_notes' => 
  array (
    'name' => 'case_notes',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'case_meetings' => 
  array (
    'name' => 'case_meetings',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'case_emails' => 
  array (
    'name' => 'case_emails',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'bugs_modified_user' => 
  array (
    'name' => 'bugs_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_created_by' => 
  array (
    'name' => 'bugs_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_assigned_user' => 
  array (
    'name' => 'bugs_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bug_tasks' => 
  array (
    'name' => 'bug_tasks',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bug_meetings' => 
  array (
    'name' => 'bug_meetings',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bug_calls' => 
  array (
    'name' => 'bug_calls',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bug_emails' => 
  array (
    'name' => 'bug_emails',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bug_notes' => 
  array (
    'name' => 'bug_notes',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bugs_release' => 
  array (
    'name' => 'bugs_release',
    'lhs_module' => 'Releases',
    'lhs_table' => 'releases',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'found_in_release',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_fixed_in_release' => 
  array (
    'name' => 'bugs_fixed_in_release',
    'lhs_module' => 'Releases',
    'lhs_table' => 'releases',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'fixed_in_release',
    'relationship_type' => 'one-to-many',
  ),
  'prospectlists_assigned_user' => 
  array (
    'name' => 'prospectlists_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'prospectlists',
    'rhs_table' => 'prospect_lists',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_modified_user' => 
  array (
    'name' => 'prospects_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_created_by' => 
  array (
    'name' => 'prospects_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_assigned_user' => 
  array (
    'name' => 'prospects_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_email_addresses' => 
  array (
    'name' => 'prospects_email_addresses',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Prospects',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'prospects_email_addresses_primary' => 
  array (
    'name' => 'prospects_email_addresses_primary',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'prospect_tasks' => 
  array (
    'name' => 'prospect_tasks',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_notes' => 
  array (
    'name' => 'prospect_notes',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_meetings' => 
  array (
    'name' => 'prospect_meetings',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_calls' => 
  array (
    'name' => 'prospect_calls',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_emails' => 
  array (
    'name' => 'prospect_emails',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_campaign_log' => 
  array (
    'name' => 'prospect_campaign_log',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'target_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'target_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'projects_notes' => 
  array (
    'name' => 'projects_notes',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_tasks' => 
  array (
    'name' => 'projects_tasks',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_meetings' => 
  array (
    'name' => 'projects_meetings',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_calls' => 
  array (
    'name' => 'projects_calls',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_emails' => 
  array (
    'name' => 'projects_emails',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_project_tasks' => 
  array (
    'name' => 'projects_project_tasks',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'project_id',
    'relationship_type' => 'one-to-many',
  ),
  'projects_assigned_user' => 
  array (
    'name' => 'projects_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'projects_modified_user' => 
  array (
    'name' => 'projects_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'projects_created_by' => 
  array (
    'name' => 'projects_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'project_tasks_notes' => 
  array (
    'name' => 'project_tasks_notes',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_tasks' => 
  array (
    'name' => 'project_tasks_tasks',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_meetings' => 
  array (
    'name' => 'project_tasks_meetings',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_calls' => 
  array (
    'name' => 'project_tasks_calls',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_emails' => 
  array (
    'name' => 'project_tasks_emails',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_assigned_user' => 
  array (
    'name' => 'project_tasks_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'project_tasks_modified_user' => 
  array (
    'name' => 'project_tasks_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'project_tasks_created_by' => 
  array (
    'name' => 'project_tasks_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'campaigns_modified_user' => 
  array (
    'name' => 'campaigns_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaigns_created_by' => 
  array (
    'name' => 'campaigns_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'campaigns_assigned_user' => 
  array (
    'name' => 'campaigns_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_accounts' => 
  array (
    'name' => 'campaign_accounts',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_contacts' => 
  array (
    'name' => 'campaign_contacts',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_leads' => 
  array (
    'name' => 'campaign_leads',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_prospects' => 
  array (
    'name' => 'campaign_prospects',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_opportunities' => 
  array (
    'name' => 'campaign_opportunities',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_email_marketing' => 
  array (
    'name' => 'campaign_email_marketing',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailMarketing',
    'rhs_table' => 'email_marketing',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_emailman' => 
  array (
    'name' => 'campaign_emailman',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailMan',
    'rhs_table' => 'emailman',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_campaignlog' => 
  array (
    'name' => 'campaign_campaignlog',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_assigned_user' => 
  array (
    'name' => 'campaign_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_modified_user' => 
  array (
    'name' => 'campaign_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'email_template_email_marketings' => 
  array (
    'name' => 'email_template_email_marketings',
    'lhs_module' => 'EmailTemplates',
    'lhs_table' => 'email_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailMarketing',
    'rhs_table' => 'email_marketing',
    'rhs_key' => 'template_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_contact' => 
  array (
    'name' => 'campaignlog_contact',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'related_id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_lead' => 
  array (
    'name' => 'campaignlog_lead',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'related_id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_created_opportunities' => 
  array (
    'name' => 'campaignlog_created_opportunities',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'related_id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_targeted_users' => 
  array (
    'name' => 'campaignlog_targeted_users',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'target_id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_sent_emails' => 
  array (
    'name' => 'campaignlog_sent_emails',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'related_id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_campaigntrakers' => 
  array (
    'name' => 'campaign_campaigntrakers',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignTrackers',
    'rhs_table' => 'campaign_trkrs',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'schedulers_created_by_rel' => 
  array (
    'name' => 'schedulers_created_by_rel',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Schedulers',
    'rhs_table' => 'schedulers',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-one',
  ),
  'schedulers_modified_user_id_rel' => 
  array (
    'name' => 'schedulers_modified_user_id_rel',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Schedulers',
    'rhs_table' => 'schedulers',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'schedulers_jobs_rel' => 
  array (
    'name' => 'schedulers_jobs_rel',
    'lhs_module' => 'Schedulers',
    'lhs_table' => 'schedulers',
    'lhs_key' => 'id',
    'rhs_module' => 'SchedulersJobs',
    'rhs_table' => 'job_queue',
    'rhs_key' => 'scheduler_id',
    'relationship_type' => 'one-to-many',
  ),
  'schedulersjobs_assigned_user' => 
  array (
    'name' => 'schedulersjobs_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SchedulersJobs',
    'rhs_table' => 'schedulersjobs',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_modified_user' => 
  array (
    'name' => 'contacts_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_created_by' => 
  array (
    'name' => 'contacts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_assigned_user' => 
  array (
    'name' => 'contacts_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_email_addresses' => 
  array (
    'name' => 'contacts_email_addresses',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'contacts_email_addresses_primary' => 
  array (
    'name' => 'contacts_email_addresses_primary',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'contact_direct_reports' => 
  array (
    'name' => 'contact_direct_reports',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'reports_to_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_leads' => 
  array (
    'name' => 'contact_leads',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_notes' => 
  array (
    'name' => 'contact_notes',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_tasks' => 
  array (
    'name' => 'contact_tasks',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_tasks_parent' => 
  array (
    'name' => 'contact_tasks_parent',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contacts',
  ),
  'contact_notes_parent' => 
  array (
    'name' => 'contact_notes_parent',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contacts',
  ),
  'contact_campaign_log' => 
  array (
    'name' => 'contact_campaign_log',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'target_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'target_type',
    'relationship_role_column_value' => 'Contacts',
  ),
  'accounts_modified_user' => 
  array (
    'name' => 'accounts_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_created_by' => 
  array (
    'name' => 'accounts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_assigned_user' => 
  array (
    'name' => 'accounts_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_email_addresses' => 
  array (
    'name' => 'accounts_email_addresses',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'accounts_email_addresses_primary' => 
  array (
    'name' => 'accounts_email_addresses_primary',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'member_accounts' => 
  array (
    'name' => 'member_accounts',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'account_cases' => 
  array (
    'name' => 'account_cases',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
  ),
  'account_tasks' => 
  array (
    'name' => 'account_tasks',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_notes' => 
  array (
    'name' => 'account_notes',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_meetings' => 
  array (
    'name' => 'account_meetings',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_calls' => 
  array (
    'name' => 'account_calls',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_emails' => 
  array (
    'name' => 'account_emails',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_leads' => 
  array (
    'name' => 'account_leads',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
  ),
  'account_campaign_log' => 
  array (
    'name' => 'account_campaign_log',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'target_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'target_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'opportunities_modified_user' => 
  array (
    'name' => 'opportunities_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunities_created_by' => 
  array (
    'name' => 'opportunities_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'opportunities_assigned_user' => 
  array (
    'name' => 'opportunities_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunity_calls' => 
  array (
    'name' => 'opportunity_calls',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_meetings' => 
  array (
    'name' => 'opportunity_meetings',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_tasks' => 
  array (
    'name' => 'opportunity_tasks',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_notes' => 
  array (
    'name' => 'opportunity_notes',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_emails' => 
  array (
    'name' => 'opportunity_emails',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_leads' => 
  array (
    'name' => 'opportunity_leads',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'opportunity_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunity_currencies' => 
  array (
    'name' => 'opportunity_currencies',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'currency_id',
    'rhs_module' => 'Currencies',
    'rhs_table' => 'currencies',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunities_campaign' => 
  array (
    'name' => 'opportunities_campaign',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'emailtemplates_assigned_user' => 
  array (
    'name' => 'emailtemplates_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailTemplates',
    'rhs_table' => 'email_templates',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'notes_assigned_user' => 
  array (
    'name' => 'notes_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'notes_modified_user' => 
  array (
    'name' => 'notes_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'notes_created_by' => 
  array (
    'name' => 'notes_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'calls_modified_user' => 
  array (
    'name' => 'calls_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'calls_created_by' => 
  array (
    'name' => 'calls_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'calls_assigned_user' => 
  array (
    'name' => 'calls_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'calls_notes' => 
  array (
    'name' => 'calls_notes',
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Calls',
  ),
  'emails_assigned_user' => 
  array (
    'name' => 'emails_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_modified_user' => 
  array (
    'name' => 'emails_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_created_by' => 
  array (
    'name' => 'emails_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'emails_notes_rel' => 
  array (
    'name' => 'emails_notes_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_meetings_rel' => 
  array (
    'name' => 'emails_meetings_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_modified_user' => 
  array (
    'name' => 'meetings_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_created_by' => 
  array (
    'name' => 'meetings_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_assigned_user' => 
  array (
    'name' => 'meetings_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_notes' => 
  array (
    'name' => 'meetings_notes',
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Meetings',
  ),
  'tasks_modified_user' => 
  array (
    'name' => 'tasks_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tasks_created_by' => 
  array (
    'name' => 'tasks_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'tasks_assigned_user' => 
  array (
    'name' => 'tasks_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tasks_notes' => 
  array (
    'name' => 'tasks_notes',
    'lhs_module' => 'Tasks',
    'lhs_table' => 'tasks',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'tracker_monitor_id' => 
  array (
    'name' => 'tracker_monitor_id',
    'lhs_module' => 'TrackerPerfs',
    'lhs_table' => 'tracker_perf',
    'lhs_key' => 'monitor_id',
    'rhs_module' => 'Trackers',
    'rhs_table' => 'tracker',
    'rhs_key' => 'monitor_id',
    'relationship_type' => 'one-to-one',
  ),
  'documents_modified_user' => 
  array (
    'name' => 'documents_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'documents_created_by' => 
  array (
    'name' => 'documents_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'documents_assigned_user' => 
  array (
    'name' => 'documents_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'document_revisions' => 
  array (
    'name' => 'document_revisions',
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'DocumentRevisions',
    'rhs_table' => 'document_revisions',
    'rhs_key' => 'document_id',
    'relationship_type' => 'one-to-many',
  ),
  'revisions_created_by' => 
  array (
    'name' => 'revisions_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DocumentRevisions',
    'rhs_table' => 'document_revisions',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'inbound_email_created_by' => 
  array (
    'name' => 'inbound_email_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'InboundEmail',
    'rhs_table' => 'inbound_email',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-one',
  ),
  'inbound_email_modified_user_id' => 
  array (
    'name' => 'inbound_email_modified_user_id',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'InboundEmail',
    'rhs_table' => 'inbound_email',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-one',
  ),
  'saved_search_assigned_user' => 
  array (
    'name' => 'saved_search_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SavedSearch',
    'rhs_table' => 'saved_search',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'sugarfeed_modified_user' => 
  array (
    'name' => 'sugarfeed_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFeed',
    'rhs_table' => 'sugarfeed',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'sugarfeed_created_by' => 
  array (
    'name' => 'sugarfeed_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFeed',
    'rhs_table' => 'sugarfeed',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'sugarfeed_assigned_user' => 
  array (
    'name' => 'sugarfeed_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFeed',
    'rhs_table' => 'sugarfeed',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eapm_modified_user' => 
  array (
    'name' => 'eapm_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EAPM',
    'rhs_table' => 'eapm',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eapm_created_by' => 
  array (
    'name' => 'eapm_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EAPM',
    'rhs_table' => 'eapm',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'eapm_assigned_user' => 
  array (
    'name' => 'eapm_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EAPM',
    'rhs_table' => 'eapm',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'oauthkeys_modified_user' => 
  array (
    'name' => 'oauthkeys_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthKeys',
    'rhs_table' => 'oauthkeys',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'oauthkeys_created_by' => 
  array (
    'name' => 'oauthkeys_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthKeys',
    'rhs_table' => 'oauthkeys',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'oauthkeys_assigned_user' => 
  array (
    'name' => 'oauthkeys_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthKeys',
    'rhs_table' => 'oauthkeys',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'consumer_tokens' => 
  array (
    'name' => 'consumer_tokens',
    'lhs_module' => 'OAuthKeys',
    'lhs_table' => 'oauth_consumer',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthTokens',
    'rhs_table' => 'oauth_tokens',
    'rhs_key' => 'consumer',
    'relationship_type' => 'one-to-many',
  ),
  'oauthtokens_assigned_user' => 
  array (
    'name' => 'oauthtokens_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthTokens',
    'rhs_table' => 'oauth_tokens',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbi_exports_modified_user' => 
  array (
    'name' => 'gbi_exports_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'GBI_Exports',
    'rhs_table' => 'gbi_exports',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbi_exports_created_by' => 
  array (
    'name' => 'gbi_exports_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'GBI_Exports',
    'rhs_table' => 'gbi_exports',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'gbi_exports_assigned_user' => 
  array (
    'name' => 'gbi_exports_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'GBI_Exports',
    'rhs_table' => 'gbi_exports',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'basa1_anexo1_modified_user' => 
  array (
    'name' => 'basa1_anexo1_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'basa1_ANEXO1',
    'rhs_table' => 'basa1_anexo1',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'basa1_anexo1_created_by' => 
  array (
    'name' => 'basa1_anexo1_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'basa1_ANEXO1',
    'rhs_table' => 'basa1_anexo1',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'basa1_anexo1_assigned_user' => 
  array (
    'name' => 'basa1_anexo1_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'basa1_ANEXO1',
    'rhs_table' => 'basa1_anexo1',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbian_anexo2_modified_user' => 
  array (
    'name' => 'gbian_anexo2_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbian_Anexo2',
    'rhs_table' => 'gbian_anexo2',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbian_anexo2_created_by' => 
  array (
    'name' => 'gbian_anexo2_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbian_Anexo2',
    'rhs_table' => 'gbian_anexo2',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'gbian_anexo2_assigned_user' => 
  array (
    'name' => 'gbian_anexo2_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbian_Anexo2',
    'rhs_table' => 'gbian_anexo2',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbia3_anexo3_modified_user' => 
  array (
    'name' => 'gbia3_anexo3_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'GBIA3_ANEXO3',
    'rhs_table' => 'gbia3_anexo3',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbia3_anexo3_created_by' => 
  array (
    'name' => 'gbia3_anexo3_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'GBIA3_ANEXO3',
    'rhs_table' => 'gbia3_anexo3',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'gbia3_anexo3_assigned_user' => 
  array (
    'name' => 'gbia3_anexo3_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'GBIA3_ANEXO3',
    'rhs_table' => 'gbia3_anexo3',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbia3_manejointegral_modified_user' => 
  array (
    'name' => 'gbia3_manejointegral_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'GBIA3_ManejoIntegral',
    'rhs_table' => 'gbia3_manejointegral',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbia3_manejointegral_created_by' => 
  array (
    'name' => 'gbia3_manejointegral_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'GBIA3_ManejoIntegral',
    'rhs_table' => 'gbia3_manejointegral',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'gbia3_manejointegral_assigned_user' => 
  array (
    'name' => 'gbia3_manejointegral_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'GBIA3_ManejoIntegral',
    'rhs_table' => 'gbia3_manejointegral',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbi_anexo3npos_modified_user' => 
  array (
    'name' => 'gbi_anexo3npos_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbi_anexo3npos',
    'rhs_table' => 'gbi_anexo3npos',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbi_anexo3npos_created_by' => 
  array (
    'name' => 'gbi_anexo3npos_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbi_anexo3npos',
    'rhs_table' => 'gbi_anexo3npos',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'gbi_anexo3npos_assigned_user' => 
  array (
    'name' => 'gbi_anexo3npos_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbi_anexo3npos',
    'rhs_table' => 'gbi_anexo3npos',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbia4_anexo4_modified_user' => 
  array (
    'name' => 'gbia4_anexo4_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbiA4_Anexo4',
    'rhs_table' => 'gbia4_anexo4',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbia4_anexo4_created_by' => 
  array (
    'name' => 'gbia4_anexo4_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbiA4_Anexo4',
    'rhs_table' => 'gbia4_anexo4',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'gbia4_anexo4_assigned_user' => 
  array (
    'name' => 'gbia4_anexo4_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbiA4_Anexo4',
    'rhs_table' => 'gbia4_anexo4',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbia4_aprobacioncups_modified_user' => 
  array (
    'name' => 'gbia4_aprobacioncups_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbiA4_Aprobacioncups',
    'rhs_table' => 'gbia4_aprobacioncups',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbia4_aprobacioncups_created_by' => 
  array (
    'name' => 'gbia4_aprobacioncups_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbiA4_Aprobacioncups',
    'rhs_table' => 'gbia4_aprobacioncups',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'gbia4_aprobacioncups_assigned_user' => 
  array (
    'name' => 'gbia4_aprobacioncups_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbiA4_Aprobacioncups',
    'rhs_table' => 'gbia4_aprobacioncups',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbi_anexo9_modified_user' => 
  array (
    'name' => 'gbi_anexo9_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbi_Anexo9',
    'rhs_table' => 'gbi_anexo9',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbi_anexo9_created_by' => 
  array (
    'name' => 'gbi_anexo9_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbi_Anexo9',
    'rhs_table' => 'gbi_anexo9',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'gbi_anexo9_assigned_user' => 
  array (
    'name' => 'gbi_anexo9_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbi_Anexo9',
    'rhs_table' => 'gbi_anexo9',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aut_autorizacionestelefonicas_modified_user' => 
  array (
    'name' => 'aut_autorizacionestelefonicas_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AUT_AutorizacionesTelefonicas',
    'rhs_table' => 'aut_autorizacionestelefonicas',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aut_autorizacionestelefonicas_created_by' => 
  array (
    'name' => 'aut_autorizacionestelefonicas_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AUT_AutorizacionesTelefonicas',
    'rhs_table' => 'aut_autorizacionestelefonicas',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aut_autorizacionestelefonicas_assigned_user' => 
  array (
    'name' => 'aut_autorizacionestelefonicas_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AUT_AutorizacionesTelefonicas',
    'rhs_table' => 'aut_autorizacionestelefonicas',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bar_barrio_modified_user' => 
  array (
    'name' => 'bar_barrio_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'BAR_Barrio',
    'rhs_table' => 'bar_barrio',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bar_barrio_created_by' => 
  array (
    'name' => 'bar_barrio_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'BAR_Barrio',
    'rhs_table' => 'bar_barrio',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bar_barrio_assigned_user' => 
  array (
    'name' => 'bar_barrio_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'BAR_Barrio',
    'rhs_table' => 'bar_barrio',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'cie_cie10_modified_user' => 
  array (
    'name' => 'cie_cie10_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'CIE_CIE10',
    'rhs_table' => 'cie_cie10',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'cie_cie10_created_by' => 
  array (
    'name' => 'cie_cie10_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'CIE_CIE10',
    'rhs_table' => 'cie_cie10',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'cie_cie10_assigned_user' => 
  array (
    'name' => 'cie_cie10_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'CIE_CIE10',
    'rhs_table' => 'cie_cie10',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'com_comunas_modified_user' => 
  array (
    'name' => 'com_comunas_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'COM_Comunas',
    'rhs_table' => 'com_comunas',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'com_comunas_created_by' => 
  array (
    'name' => 'com_comunas_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'COM_Comunas',
    'rhs_table' => 'com_comunas',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'com_comunas_assigned_user' => 
  array (
    'name' => 'com_comunas_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'COM_Comunas',
    'rhs_table' => 'com_comunas',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbicu_cups_modified_user' => 
  array (
    'name' => 'gbicu_cups_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'GBICU_CUPS',
    'rhs_table' => 'gbicu_cups',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbicu_cups_created_by' => 
  array (
    'name' => 'gbicu_cups_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'GBICU_CUPS',
    'rhs_table' => 'gbicu_cups',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'gbicu_cups_assigned_user' => 
  array (
    'name' => 'gbicu_cups_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'GBICU_CUPS',
    'rhs_table' => 'gbicu_cups',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'dep_departamentos_modified_user' => 
  array (
    'name' => 'dep_departamentos_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DEP_Departamentos',
    'rhs_table' => 'dep_departamentos',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'dep_departamentos_created_by' => 
  array (
    'name' => 'dep_departamentos_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DEP_Departamentos',
    'rhs_table' => 'dep_departamentos',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'dep_departamentos_assigned_user' => 
  array (
    'name' => 'dep_departamentos_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DEP_Departamentos',
    'rhs_table' => 'dep_departamentos',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbi_egreso_centro_regulador_modified_user' => 
  array (
    'name' => 'gbi_egreso_centro_regulador_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbi_egreso_centro_regulador',
    'rhs_table' => 'gbi_egreso_centro_regulador',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbi_egreso_centro_regulador_created_by' => 
  array (
    'name' => 'gbi_egreso_centro_regulador_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbi_egreso_centro_regulador',
    'rhs_table' => 'gbi_egreso_centro_regulador',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'gbi_egreso_centro_regulador_assigned_user' => 
  array (
    'name' => 'gbi_egreso_centro_regulador_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbi_egreso_centro_regulador',
    'rhs_table' => 'gbi_egreso_centro_regulador',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eps_eps_modified_user' => 
  array (
    'name' => 'eps_eps_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EPS_EPS',
    'rhs_table' => 'eps_eps',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eps_eps_created_by' => 
  array (
    'name' => 'eps_eps_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EPS_EPS',
    'rhs_table' => 'eps_eps',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'eps_eps_assigned_user' => 
  array (
    'name' => 'eps_eps_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EPS_EPS',
    'rhs_table' => 'eps_eps',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'esp_especialista_modified_user' => 
  array (
    'name' => 'esp_especialista_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ESP_Especialista',
    'rhs_table' => 'esp_especialista',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'esp_especialista_created_by' => 
  array (
    'name' => 'esp_especialista_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ESP_Especialista',
    'rhs_table' => 'esp_especialista',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'esp_especialista_assigned_user' => 
  array (
    'name' => 'esp_especialista_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ESP_Especialista',
    'rhs_table' => 'esp_especialista',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gui_guias_modified_user' => 
  array (
    'name' => 'gui_guias_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'GUI_Guias',
    'rhs_table' => 'gui_guias',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gui_guias_created_by' => 
  array (
    'name' => 'gui_guias_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'GUI_Guias',
    'rhs_table' => 'gui_guias',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'gui_guias_assigned_user' => 
  array (
    'name' => 'gui_guias_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'GUI_Guias',
    'rhs_table' => 'gui_guias',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tms_habeasdata_modified_user' => 
  array (
    'name' => 'tms_habeasdata_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_habeasdata',
    'rhs_table' => 'tms_habeasdata',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tms_habeasdata_created_by' => 
  array (
    'name' => 'tms_habeasdata_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_habeasdata',
    'rhs_table' => 'tms_habeasdata',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'tms_habeasdata_assigned_user' => 
  array (
    'name' => 'tms_habeasdata_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_habeasdata',
    'rhs_table' => 'tms_habeasdata',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbihi_historialcorreo_modified_user' => 
  array (
    'name' => 'gbihi_historialcorreo_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'GBIHI_HistorialCorreo',
    'rhs_table' => 'gbihi_historialcorreo',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbihi_historialcorreo_created_by' => 
  array (
    'name' => 'gbihi_historialcorreo_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'GBIHI_HistorialCorreo',
    'rhs_table' => 'gbihi_historialcorreo',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'gbihi_historialcorreo_assigned_user' => 
  array (
    'name' => 'gbihi_historialcorreo_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'GBIHI_HistorialCorreo',
    'rhs_table' => 'gbihi_historialcorreo',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ips_ips_modified_user' => 
  array (
    'name' => 'ips_ips_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'IPS_IPS',
    'rhs_table' => 'ips_ips',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ips_ips_created_by' => 
  array (
    'name' => 'ips_ips_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'IPS_IPS',
    'rhs_table' => 'ips_ips',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ips_ips_assigned_user' => 
  array (
    'name' => 'ips_ips_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'IPS_IPS',
    'rhs_table' => 'ips_ips',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'iss_iss_modified_user' => 
  array (
    'name' => 'iss_iss_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ISS_ISS',
    'rhs_table' => 'iss_iss',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'iss_iss_created_by' => 
  array (
    'name' => 'iss_iss_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ISS_ISS',
    'rhs_table' => 'iss_iss',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'iss_iss_assigned_user' => 
  array (
    'name' => 'iss_iss_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ISS_ISS',
    'rhs_table' => 'iss_iss',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'minpo_manejo_integra_modified_user' => 
  array (
    'name' => 'minpo_manejo_integra_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'minpo_Manejo_integra',
    'rhs_table' => 'minpo_manejo_integra',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'minpo_manejo_integra_created_by' => 
  array (
    'name' => 'minpo_manejo_integra_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'minpo_Manejo_integra',
    'rhs_table' => 'minpo_manejo_integra',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'minpo_manejo_integra_assigned_user' => 
  array (
    'name' => 'minpo_manejo_integra_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'minpo_Manejo_integra',
    'rhs_table' => 'minpo_manejo_integra',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'mun_municipio_modified_user' => 
  array (
    'name' => 'mun_municipio_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'MUN_Municipio',
    'rhs_table' => 'mun_municipio',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'mun_municipio_created_by' => 
  array (
    'name' => 'mun_municipio_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'MUN_Municipio',
    'rhs_table' => 'mun_municipio',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'mun_municipio_assigned_user' => 
  array (
    'name' => 'mun_municipio_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'MUN_Municipio',
    'rhs_table' => 'mun_municipio',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tms_paises_modified_user' => 
  array (
    'name' => 'tms_paises_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_paises',
    'rhs_table' => 'tms_paises',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tms_paises_created_by' => 
  array (
    'name' => 'tms_paises_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_paises',
    'rhs_table' => 'tms_paises',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'tms_paises_assigned_user' => 
  array (
    'name' => 'tms_paises_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_paises',
    'rhs_table' => 'tms_paises',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbire_rebotesemail_modified_user' => 
  array (
    'name' => 'gbire_rebotesemail_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbiRE_RebotesEmail',
    'rhs_table' => 'gbire_rebotesemail',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbire_rebotesemail_created_by' => 
  array (
    'name' => 'gbire_rebotesemail_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbiRE_RebotesEmail',
    'rhs_table' => 'gbire_rebotesemail',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'gbire_rebotesemail_assigned_user' => 
  array (
    'name' => 'gbire_rebotesemail_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbiRE_RebotesEmail',
    'rhs_table' => 'gbire_rebotesemail',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbir_reports_modified_user' => 
  array (
    'name' => 'gbir_reports_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbir_Reports',
    'rhs_table' => 'gbir_reports',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbir_reports_created_by' => 
  array (
    'name' => 'gbir_reports_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbir_Reports',
    'rhs_table' => 'gbir_reports',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'gbir_reports_assigned_user' => 
  array (
    'name' => 'gbir_reports_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gbir_Reports',
    'rhs_table' => 'gbir_reports',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'vd_validacion_derechos_modified_user' => 
  array (
    'name' => 'vd_validacion_derechos_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'vd_validacion_derechos',
    'rhs_table' => 'vd_validacion_derechos',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'vd_validacion_derechos_created_by' => 
  array (
    'name' => 'vd_validacion_derechos_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'vd_validacion_derechos',
    'rhs_table' => 'vd_validacion_derechos',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'vd_validacion_derechos_assigned_user' => 
  array (
    'name' => 'vd_validacion_derechos_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'vd_validacion_derechos',
    'rhs_table' => 'vd_validacion_derechos',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbiso_soat_modified_user' => 
  array (
    'name' => 'gbiso_soat_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'GBISO_SOAT',
    'rhs_table' => 'gbiso_soat',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gbiso_soat_created_by' => 
  array (
    'name' => 'gbiso_soat_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'GBISO_SOAT',
    'rhs_table' => 'gbiso_soat',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'gbiso_soat_assigned_user' => 
  array (
    'name' => 'gbiso_soat_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'GBISO_SOAT',
    'rhs_table' => 'gbiso_soat',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'solci_solicitudcitas_modified_user' => 
  array (
    'name' => 'solci_solicitudcitas_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'solci_SolicitudCitas',
    'rhs_table' => 'solci_solicitudcitas',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'solci_solicitudcitas_created_by' => 
  array (
    'name' => 'solci_solicitudcitas_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'solci_SolicitudCitas',
    'rhs_table' => 'solci_solicitudcitas',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'solci_solicitudcitas_assigned_user' => 
  array (
    'name' => 'solci_solicitudcitas_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'solci_SolicitudCitas',
    'rhs_table' => 'solci_solicitudcitas',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tms_tms_autorizaciones_modified_user' => 
  array (
    'name' => 'tms_tms_autorizaciones_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_TMS_Autorizaciones',
    'rhs_table' => 'tms_tms_autorizaciones',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tms_tms_autorizaciones_created_by' => 
  array (
    'name' => 'tms_tms_autorizaciones_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_TMS_Autorizaciones',
    'rhs_table' => 'tms_tms_autorizaciones',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'tms_tms_autorizaciones_assigned_user' => 
  array (
    'name' => 'tms_tms_autorizaciones_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_TMS_Autorizaciones',
    'rhs_table' => 'tms_tms_autorizaciones',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tms_tms_catllamadas_modified_user' => 
  array (
    'name' => 'tms_tms_catllamadas_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_TMS_CATllamadas',
    'rhs_table' => 'tms_tms_catllamadas',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tms_tms_catllamadas_created_by' => 
  array (
    'name' => 'tms_tms_catllamadas_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_TMS_CATllamadas',
    'rhs_table' => 'tms_tms_catllamadas',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'tms_tms_catllamadas_assigned_user' => 
  array (
    'name' => 'tms_tms_catllamadas_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_TMS_CATllamadas',
    'rhs_table' => 'tms_tms_catllamadas',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tms_tms_centralautorizaciones_modified_user' => 
  array (
    'name' => 'tms_tms_centralautorizaciones_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_TMS_CentralAutorizaciones',
    'rhs_table' => 'tms_tms_centralautorizaciones',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tms_tms_centralautorizaciones_created_by' => 
  array (
    'name' => 'tms_tms_centralautorizaciones_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_TMS_CentralAutorizaciones',
    'rhs_table' => 'tms_tms_centralautorizaciones',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'tms_tms_centralautorizaciones_assigned_user' => 
  array (
    'name' => 'tms_tms_centralautorizaciones_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'tms_TMS_CentralAutorizaciones',
    'rhs_table' => 'tms_tms_centralautorizaciones',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
);