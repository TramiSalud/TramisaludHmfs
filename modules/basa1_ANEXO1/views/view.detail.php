<?php
//https://gist.github.com/betobaz/4128589
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 
require_once('include/MVC/View/views/view.detail.php'); 
class basa1_ANEXO1ViewDetail extends ViewDetail { 
    var $ev; 
    //var $type ='detail'; 
    var $useForSubpanel = false;  //boolean variable to determine whether view can be used for subpanel creates 
    var $useModuleQuickCreateTemplate = false; //boolean variable to determine whether or not SubpanelQuickCreate has a separate display function 
    var $showTitle = true; 
 
     function basa1_ANEXO1ViewDetail(){ 
         parent::ViewDetail(); 
        $this->useForSubpanel = TRUE;  
     } 
     function preDisplay() {
		
        parent:: preDisplay();
    }
	
    function display(){ 
		if (isset($_REQUEST['record']))
		{
			$anexo1 = new basa1_ANEXO1();
			$anexo1->retrieve($_REQUEST['record']);
			if($anexo1->correo_enviado_c == 1)
			{
				echo "<h2><font color=green>ANEXO ENVIADO</font></h2>";
					?><script language="JavaScript" type="text/javascript">
						$(document).ready(function() { 
							document.getElementById("edit_button").style.display="none";
						});
					</script><?php
			} else{
				echo "<h2><font color=red>ANEXO NO ENVIADO</font></h2>";
			}
		}	
		parent::display();
    } 
}  


?>
