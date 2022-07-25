<?php
//https://gist.github.com/betobaz/4128589
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 
require_once('include/MVC/View/views/view.edit.php'); 
class gbi_anexo3nposViewEdit extends ViewEdit { 
    var $ev; 
    var $type ='edit'; 
    var $useForSubpanel = false;  //boolean variable to determine whether view can be used for subpanel creates 
    var $useModuleQuickCreateTemplate = false; //boolean variable to determine whether or not SubpanelQuickCreate has a separate display function 
    var $showTitle = true; 
 
     function gbi_anexo3nposViewEdit(){ 
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
		
		echo $this->ev->display(); 
		
		if (isset($_REQUEST['return_id']))
		{
			$anexo3np = new gbi_anexo3npos();
			$anexo3np->retrieve($_REQUEST['return_id']);
			
			if($anexo3np->correo_enviado_c == 1)
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


?>