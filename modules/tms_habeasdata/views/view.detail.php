<?php
//https://gist.github.com/betobaz/4128589
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 
require_once('include/MVC/View/views/view.detail.php'); 
class tms_habeasdataViewDetail extends ViewDetail {
    var $ev; 
    //var $type ='detail'; 
    var $useForSubpanel = false;  //boolean variable to determine whether view can be used for subpanel creates 
    var $useModuleQuickCreateTemplate = false; //boolean variable to determine whether or not SubpanelQuickCreate has a separate display function 
    var $showTitle = true; 
 
     function tms_habeasdataViewDetail(){
         parent::ViewDetail(); 
        $this->useForSubpanel = TRUE;  
     } 
     function preDisplay() {
		
        parent:: preDisplay();
    }
	
    function display(){ 
		if (isset($_REQUEST['record']))
		{
			$habeas = new tms_habeasdata();
			$habeas->retrieve($_REQUEST['record']);
			if($habeas->estado == "en_proceso")
			{
				echo "<h2><font color=green>información en discusión judicial</font></h2>";
			}

		}	
		parent::display();
    } 
}  


?>
