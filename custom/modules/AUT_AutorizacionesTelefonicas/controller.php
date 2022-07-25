<?php

require_once ('include/MVC/Controller/SugarController.php');

class AUT_AutorizacionesTelefonicasController extends SugarController{

	public function action_GenerarPdf(){
	
		$this->view = 'pdf';
	
	}
	

}

?>