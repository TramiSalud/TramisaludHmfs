<?php

if (!defined('sugarEntry') || !sugarEntry) die ('Not A Valid Entry Point');

    $hook_version = 1;
    $hook_array = array();
    
    $hook_array['after_save'] = array();
    $hook_array['after_save'][] = array(
    		1, 'actualizar',
    		'custom/modules/AUT_AutorizacionesTelefonicas/autorizacion_logic_hook.php',
    		'Autorizacion', 'actualizar'
    );
?>