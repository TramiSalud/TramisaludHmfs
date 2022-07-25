<?php
if (!defined('sugarEntry') || !sugarEntry) die ('Not A Valid Entry Point');

    $hook_version = 1;
    $hook_array = array();
  
	
	$hook_array['after_save'] = array();
    $hook_array['after_save'][] = array(
    		
    		 1, 'guardar',
    		'custom/modules/GBIA3_ANEXO3/fecha_cierreanexo3_logic_hook.php',
    		'fechas','guardar'
    );

	

?>