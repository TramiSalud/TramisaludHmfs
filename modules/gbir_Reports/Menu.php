<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 

global $mod_strings, $app_strings, $sugar_config;

if (ACLController::checkAccess('gbir_Reports', 'list', true)) $module_menu[]=Array("index.php?module=gbir_Reports&action=index", 'Ver Reportes', 'gbir_Reports', 'gbir_Reports');

?>
