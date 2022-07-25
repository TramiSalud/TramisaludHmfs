<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 

global $mod_strings, $app_strings, $sugar_config;

if (ACLController::checkAccess('GBI_Exports', 'list', true)) $module_menu[]=Array("index.php?module=GBI_Exports&action=index", $mod_strings['LNK_LIST'], 'GBI_Exports', 'GBI_Exports');

?>
