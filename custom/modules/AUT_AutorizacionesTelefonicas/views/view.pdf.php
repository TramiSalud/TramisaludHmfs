<?php

require_once('include/tcpdf/tcpdf.php');

	class AUT_AutorizacionesTelefonicasViewPDF extends SugarView
	{
		 function __construct(){

		 }

	    function display()
		{
			global $app_list_strings;
			$smarty = new Sugar_Smarty();
			
			$paciente = BeanFactory::getBean('Accounts', $this->bean->account_id_c);
		
			if (!empty($paciente))
			{
				$smarty->assign("paciente", $paciente);
			}
			
			$this->dv->tpl = 'custom/modules/AUT_AutorizacionesTelefonicas/tpls/autorizacionTelefonica.tpl';
			
			$MiPDF = new TCPDF();
			$MiPDF->setPrintHeader(false);
			$MiPDF->Addpage();
			$smarty->assign("bean", $this->bean);
			$smarty->assign("tipo_docu", $app_list_strings["tipo_documento_acc"][$this->bean->tipodoc]);	
			
			$data = $smarty->fetch($this->dv->tpl, null,null,false);
            ob_clean();
            
            $MiPDF->writeHTML( $data , true, false, true, false, '');

			$MiPDF->Output('Autorización Telefónica Código '.$this->bean->name.'.pdf','I');
		

		}
	}
?>
