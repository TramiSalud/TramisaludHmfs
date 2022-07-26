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


// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => 'gbiA4',
  'author' => 'anexo4',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Anexo4',
  'published_date' => '2014-03-21 22:31:01',
  'type' => 'module',
  'version' => 1395441061,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Anexo4',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'gbiA4_Anexo4',
      'class' => 'gbiA4_Anexo4',
      'path' => 'modules/gbiA4_Anexo4/gbiA4_Anexo4.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'gbiA4_Aprobacioncups',
      'class' => 'gbiA4_Aprobacioncups',
      'path' => 'modules/gbiA4_Aprobacioncups/gbiA4_Aprobacioncups.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/gbia4_anexo4_gbia3_anexo3_GBIA3_ANEXO3.php',
      'to_module' => 'GBIA3_ANEXO3',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/gbia4_aprobacioncups_gbia4_anexo4_gbiA4_Anexo4.php',
      'to_module' => 'gbiA4_Anexo4',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/gbia4_anexo4_gbia3_anexo3MetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/gbia4_aprobacioncups_gbia4_anexo4MetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/gbiA4_Anexo4',
      'to' => 'modules/gbiA4_Anexo4',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/gbiA4_Aprobacioncups',
      'to' => 'modules/gbiA4_Aprobacioncups',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/gbiA4_Anexo4.php',
      'to_module' => 'gbiA4_Anexo4',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/gbiA4_Anexo4.php',
      'to_module' => 'gbiA4_Anexo4',
      'language' => 'es_es',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/GBIA3_ANEXO3.php',
      'to_module' => 'GBIA3_ANEXO3',
      'language' => 'en_us',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/GBIA3_ANEXO3.php',
      'to_module' => 'GBIA3_ANEXO3',
      'language' => 'es_es',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/gbiA4_Aprobacioncups.php',
      'to_module' => 'gbiA4_Aprobacioncups',
      'language' => 'en_us',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/gbiA4_Aprobacioncups.php',
      'to_module' => 'gbiA4_Aprobacioncups',
      'language' => 'es_es',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/gbiA4_Anexo4.php',
      'to_module' => 'gbiA4_Anexo4',
      'language' => 'en_us',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/gbiA4_Anexo4.php',
      'to_module' => 'gbiA4_Anexo4',
      'language' => 'es_es',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/es_es.lang.php',
      'to_module' => 'application',
      'language' => 'es_es',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gbia4_anexo4_gbia3_anexo3_gbiA4_Anexo4.php',
      'to_module' => 'gbiA4_Anexo4',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gbia4_anexo4_gbia3_anexo3_GBIA3_ANEXO3.php',
      'to_module' => 'GBIA3_ANEXO3',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gbia4_aprobacioncups_gbia4_anexo4_gbiA4_Aprobacioncups.php',
      'to_module' => 'gbiA4_Aprobacioncups',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/gbia4_aprobacioncups_gbia4_anexo4_gbiA4_Anexo4.php',
      'to_module' => 'gbiA4_Anexo4',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    1 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
  ),
);