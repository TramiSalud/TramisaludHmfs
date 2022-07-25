<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $mod_strings, $app_strings, $sugar_config;

if(ACLController::checkAccess('AditionalMails', 'edit', true))$module_menu[]=Array("index.php?module=AditionalMails&action=config&return_module=AditionalMails&return_action=emails", $mod_strings['LNK_NEW_RECORD'],"CreateAditionalMails", 'AditionalMails');
