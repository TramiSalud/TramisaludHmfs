<?php

class ViewPaciente_Referencia extends SugarView {
                 
	function ViewPaciente_Referencia() {
 		parent::SugarView();
	}

	function display() {
        global $db;
        global $app_strings;
        global $app_list_strings;
        global $mod_strings;
        global $theme;
        global $currentModule;
        global $current_language;
        global $gridline;
        global $current_user;
        global $sugar_flavor;

        $theme_path = "themes/".$theme."/";
        $image_path = $theme_path."images/";
        $image_path_default = "themes/default/images/";

        require_once($theme_path.'layout_utils.php');
        
        $eps = new EPS_EPS();
        $epss = $eps->get_full_list();
        
        $smarty = new Sugar_Smarty();
        $smarty->assign('epss', $epss);
        
        if($_POST['report_trigger']){
            $smarty->assign('viewreferencia', "0");
            $smarty->assign( 'report_trigger', $_POST['report_trigger'] );
            $where = "";
            if( isset($_POST['start_date']) && isset($_POST['end_date']) && $_POST['start_date'] != '' ){
                $where = " gbi_anexo9.date_entered >= '". $_POST['start_date']. "' and gbi_anexo9.date_entered <= '". $_POST['end_date']. "' ";
                $smarty->assign('start_date', $_POST['start_date']);
                $smarty->assign('end_date', $_POST['end_date']);
            }
             
            if( isset($_POST['eps']) &&  $_POST['eps'] != ""   ){
                if(strlen($where) > 0)
                    $where .= " and gbi_anexo9.eps_eps_id_c = '". $_POST['eps']. "'";
                else
                    $where .= " gbi_anexo9.eps_eps_id_c = '". $_POST['eps']. "'";
            }
            
			$ingresos = array();
			if(isset($_POST['documento']) && $_POST['documento'] != ""){
				$accounts = new Account();
				$beans_accounts = $accounts->get_full_list('name', " accounts.name = '". $_POST['documento']. "' ");
				
				foreach($beans_accounts as $account){
					if($where != "")
						$ingresos = $account->get_linked_beans('accounts_gbi_anexo9_1', 'gbi_Anexo9', array(), 0, -1, 0, $where);
					else
						$ingresos = $account->get_linked_beans('accounts_gbi_anexo9_1', 'gbi_Anexo9');
					
				}
				$smarty->assign('numdoc', $_POST['documento']);
			} else {
				$anexo9 = new gbi_Anexo9();
				$ingresos = $anexo9->get_full_list('date_entered', $where);
			}
			
            $smarty->assign('ingresos', $ingresos);
            
        }
        
        if( $_GET['numsol'] != ""  ){
            $smarty->assign('start_date', $_GET['start_date']);
            $smarty->assign('end_date', $_GET['end_date']);

            $anexo9 = new gbi_Anexo9();
            
            
            $ingreso = $anexo9->retrieve($_GET['numsol']);
			$account = new Account();
			$account->retrieve($ingreso->accounts_gbi_anexo9_1accounts_ida);
			
            //var_dump($anexo9);
            $tramites = $anexo9->get_linked_beans('gbi_anexo9_calls_1', 'Calls');
            $egreso = $anexo9->get_linked_beans('gbi_anexo9_gbi_egreso_centro_regulador_1', 'gbi_egreso_centro_regulador');
            $smarty->assign('viewreferencia', "1");
            $smarty->assign('account', $account);
			$smarty->assign('ingreso', $ingreso);
            $smarty->assign('tramites', $tramites);
            $smarty->assign('egreso', $egreso);
        }
		        
        $smarty->display('modules/gbir_Reports/tpls/paciente_referencia.tpl');      
        
    } // end of display
} // end of class

?>