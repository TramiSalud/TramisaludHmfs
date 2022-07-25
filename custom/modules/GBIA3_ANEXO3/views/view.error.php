<?php


class GBIA3_ANEXO3ViewError extends SugarView {
	
	public function __construct(){
		parent::SugarView();
	}
	
	public function preDisplay(){
		$this->dv->tpl = 'custom/modules/GBIA3_ANEXO3/tpl/error.tpl';
	}
	
	function display(){
		$smarty = new Sugar_Smarty();
		
		$smarty->assign('message', $this->view_object_map['message']);
		parent::display();
		
		$smarty->display($this->dv->tpl);
		
		//echo "<h2><font color=red>Error al intentar enviar el correo, este no posee CUPS</font></h2>";
	}
}