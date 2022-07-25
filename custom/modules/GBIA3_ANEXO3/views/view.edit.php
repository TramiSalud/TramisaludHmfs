<?php
//https://gist.github.com/betobaz/4128589
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 
require_once('include/MVC/View/views/view.edit.php'); 
class GBIA3_ANEXO3ViewEdit extends ViewEdit { 
    var $ev; 
    var $type ='edit'; 
    var $useForSubpanel = false;  //boolean variable to determine whether view can be used for subpanel creates 
    var $useModuleQuickCreateTemplate = false; //boolean variable to determine whether or not SubpanelQuickCreate has a separate display function 
    var $showTitle = true; 
 
     function GBIA3_ANEXO3ViewEdit(){ 
         parent::ViewEdit(); 
        $this->useForSubpanel = TRUE;  
     } 
     function preDisplay() {
		
        parent:: preDisplay();
    }
	
    function display(){ 
	
		global $current_user;

		$this->ev->process();

		$ips = BeanFactory::getBean('IPS_IPS', '15acbeb0-dabf-d4c5-0b2d-530eb89ce7c7');
		$this->ev->fieldDefs['prestador']['value'] = $ips->name;
		$this->ev->fieldDefs['ips_ips_id_c']['value'] = $ips->id;

		$pagador = BeanFactory::getBean('EPS_EPS', $this->bean->eps_eps_id_c);
		
		$this->ev->fieldDefs['correo_pagador_c']['value'] = $pagador->emailanexo3;
		
		echo $this->ev->display(); 
		
		if (isset($_REQUEST['return_id']))
		{
			$anexo3 = new GBIA3_ANEXO3();
			$anexo3->retrieve($_REQUEST['return_id']);
			
			if($anexo3->correo_enviado_c == 1)
			{			
				if($_REQUEST['isDuplicate'] == 'false')
				{
					?><script language="JavaScript" type="text/javascript">
							alert("El correo ya fue enviado. Este anexo no se puede editar.");
							document.getElementById("SAVE_HEADER").disabled = true;
							document.getElementById("SAVE_FOOTER").disabled = true;
					</script><?
			    }
		    }
		}		
    } 
}  


?>