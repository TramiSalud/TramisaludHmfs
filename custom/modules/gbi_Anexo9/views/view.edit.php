<?php
//https://gist.github.com/betobaz/4128589
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 
require_once('include/MVC/View/views/view.edit.php'); 
class gbi_Anexo9ViewEdit extends ViewEdit { 
    var $ev; 
    var $type ='edit'; 
    var $useForSubpanel = false;  //boolean variable to determine whether view can be used for subpanel creates 
    var $useModuleQuickCreateTemplate = false; //boolean variable to determine whether or not SubpanelQuickCreate has a separate display function 
    var $showTitle = true; 
 
     function gbi_Anexo9ViewEdit(){ 
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
		
		if ($this->ev->view == 'QuickCreate'){
			$account = BeanFactory::getBean('Accounts', $_POST['account_id']);
			$this->ev->fieldDefs['primernombre']['value'] = $account->primernombre_c;
			$this->ev->fieldDefs['segundonombre']['value'] = $account->segundonombre_c;
			$this->ev->fieldDefs['primerapellido']['value'] = $account->primerapellido_c;
			$this->ev->fieldDefs['segundoapellido']['value'] = $account->segundoapellido_c;
			
			$eps = BeanFactory::getBean('EPS_EPS', $account->eps_eps_id_c);
			$this->ev->fieldDefs['eps']['value'] = $eps->name;
			$this->ev->fieldDefs['eps_eps_id_c']['value'] = $eps->id;
			
		} 

		
		echo $this->ev->display(); 
		
		if (isset($_REQUEST['return_id']))
		{
			$anexo9 = new gbi_Anexo9();
			$anexo9->retrieve($_REQUEST['return_id']);
			
			if($anexo9->correo_enviado_c == 1)
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