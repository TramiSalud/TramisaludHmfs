<?php
require_once('include/Sugarpdf/Sugarpdf.php');
 
class solci_SolicitudCitasSugarpdfPdf extends Sugarpdf {
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
        $this->fileName = "Solicitud_Cita.pdf";
        $this->Ln1();
		
		$smarty = new Sugar_Smarty();
		
		if (!empty($this->bean->user_id_c))
		{		
			$enfermera = new User();
			$enfermera->retrieve($this->bean->user_id_c);
			$smarty->assign("enfermera", $enfermera);
		}	
		
		if (!empty($this->bean->user_id1_c))
		{		
			$centro_reg = new User();
			$centro_reg->retrieve($this->bean->user_id1_c);
			$smarty->assign("centro_reg", $centro_reg);
		}
		
		$this->dv->tpl = 'custom/modules/solci_SolicitudCitas/tpls/solci.tpl';
		
		$smarty->assign("bean", $this->bean);
		$smarty->assign("sexo", $app_list_strings['genero_acc'][$this->bean->l_sexo_c]);
		$smarty->assign("espec", $app_list_strings['cargactirela_c_anexo3'][$this->bean->especilidadmedico_c]);
		
		$list = explode(",", str_replace("^", "", $this->bean->enfinfectocontagio) );
		$concat = "";
		foreach ($list as $item)
		{
			$concat .= $app_list_strings['enfinfectocontagio_list'][$item].", ";
		}
		$concat = substr($concat, 0, strlen($concat) - 2);
		$concat .= ". ";
		$smarty->assign("listcontagio", $concat);
		
		$list = explode(",", str_replace("^", "", $this->bean->selectpacientetienecateter) );
		$concat = "";
		foreach ($list as $item)
		{
			$concat .= $app_list_strings['pacientetienecateter_list'][$item].", ";
		}
		$concat = substr($concat, 0, strlen($concat) - 2);
		$concat .= ". ";
		$smarty->assign("listcatet", $concat);
		$smarty->assign("ambulanc", $app_list_strings['tipo_am_list'][$this->bean->ambulancia]);
//file_put_contents('\\\192.168.0.15\\htdocs\\tramisalud_dev_gbi\\custom\\modules\\solci_SolicitudCitas\\log.txt', var_export($concat, true), FILE_APPEND);
		
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