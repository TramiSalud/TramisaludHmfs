<?php
require_once('include/Sugarpdf/Sugarpdf.php');
 
class gbi_egreso_centro_reguladorSugarpdfPdf extends Sugarpdf {
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
        $this->fileName = "Egrereso_Centro_Regulador.pdf";
        //$this->Ln1();
		
		$smarty = new Sugar_Smarty();

        if (!empty($this->bean->user_id_c))
        {       
            $centro_reg = new User();
            $centro_reg->retrieve($this->bean->user_id_c);
            $smarty->assign("centro_reg", $centro_reg);
        }
		
		$this->dv->tpl = 'custom/modules/gbi_egreso_centro_regulador/tpls/egre.tpl';
		
		$paciente = new Account();
		$paciente->retrieve($this->bean->account_id_c);


		
		$smarty->assign("bean", $this->bean);
		$smarty->assign("valor", number_format($this->bean->valor,0));
		$smarty->assign("espec", $app_list_strings['cargactirela_c_anexo3'][$this->bean->especialidad_requerida_c]);
		$smarty->assign("tipo_doc", $app_list_strings['tipo_documento_acc'][$paciente->tipo_documento_c]);
        $smarty->assign("tipoamb", $app_list_strings['ambulancia_list'][$this->bean->pambulancia_c]);
		
        if (!empty($_REQUEST['record'])) {
            $db = DBManagerFactory::getInstance();
            $record = $GLOBALS['db']->quote(strtoupper(trim($_REQUEST['record'])));
           
            //error_reporting(0);

            $data = $smarty->fetch($this->dv->tpl, null,null,false);
            ob_clean();
            
			//file_put_contents('C:\\xampp_php54\\htdocs\\log.txt', $data);
            $this->writeHTML( $data , true, false, true, false, '');
        }  
    }
}
?>