<?php
if (!defined('sugarEntry') || !sugarEntry) die ('Not A Valid Entry Point');

    $hook_version = 1;
    $hook_array = array();
  
	
	$hook_array['after_save'] = array();
    $hook_array['after_save'][] = array(
    		
    		 1, 'guardar',
    		'custom/modules/gbi_anexo3npos/fecha_cierreanexo3_logic_hook.php',
    		'fechas','guardar'
    );

	

?>