<?php
require_once('include/Sugarpdf/Sugarpdf.php');
 
class basa1_ANEXO1SugarpdfPdf extends Sugarpdf {
    function preDisplay(){
        // set document information
		
        parent::preDisplay();
    }
 
    function display(){
	
		global $app_list_strings;
		//error_reporting(E_ALL);
        set_time_limit(1800);
 
        // Page 1. Basic Info
        $this->AddPage();
        $this->SetFont(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN);
        $this->fileName = "pdfAnexo1.pdf";
        $this->Ln1();
		
		$smarty = new Sugar_Smarty();
		
		if (!empty($this->bean->ips_ips_id_c))
		{		
			$prestador = new IPS_IPS();
			$prestador->retrieve($this->bean->ips_ips_id_c);
			$smarty->assign("prestador", $prestador);
		}	
		
		if (!empty($this->bean->eps_eps_id_c))
		{		
			$eps = new EPS_EPS();
			$eps->retrieve($this->bean->eps_eps_id_c);
			$smarty->assign("eps", $eps);
		}
		
		if (!empty($this->bean->basa1_anexo1_accountsaccounts_ida))
		{		
			$paciente = new Account();
			$paciente->retrieve($this->bean->basa1_anexo1_accountsaccounts_ida);
			$smarty->assign("paciente", $paciente);
		}
		
		if(!empty($this->bean->created_by))
		{
			$user = new User();
			$user->retrieve($this->bean->created_by);
			$smarty->assign("user", $user);
		}
		
		$this->dv->tpl = 'modules/basa1_ANEXO1/tpls/solci.tpl';
		
		
		$smarty->assign("bean", $this->bean);
		$smarty->assign("tipdoc", $app_list_strings['tipo_documento_acc'][$this->bean->tipodocumentolist]);
		
		
        if (!empty($_REQUEST['record'])) {
            $db = DBManagerFactory::getInstance();
            $record = $GLOBALS['db']->quote(strtoupper(trim($_REQUEST['record'])));

            $data = $smarty->fetch($this->dv->tpl, null,null,false);
            ob_clean();
            
            $this->writeHTML( $data , true, false, true, false, '');
        }
        //ob_clean();  
        $this->Output("upload".DIRECTORY_SEPARATOR."PDF_Anexo1".DIRECTORY_SEPARATOR."A1-".$this->bean->name.".pdf",'F');
        //$this->Output("upload".DIRECTORY_SEPARATOR."PDF_Anexo1".DIRECTORY_SEPARATOR."A1-".$this->bean->name.".pdf",'D');
    }
}
?>
