<?php
//https://gist.github.com/betobaz/4128589
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 
require_once('include/MVC/View/views/view.edit.php'); 
class gbi_egreso_centro_reguladorViewEdit extends ViewEdit { 
    var $ev; 
    var $type ='edit'; 
    var $useForSubpanel = false;  //boolean variable to determine whether view can be used for subpanel creates 
    var $useModuleQuickCreateTemplate = false; //boolean variable to determine whether or not SubpanelQuickCreate has a separate display function 
    var $showTitle = true; 
 
     function gbi_egreso_centro_reguladorViewEdit(){ 
         parent::ViewEdit(); 
        $this->useForSubpanel = TRUE;  
     } 
     function preDisplay() {
		
        parent:: preDisplay();
    }
	
    function display(){ 
	
		global $current_user;

		$this->ev->process();

		if ($_REQUEST['target_action'] == 'QuickCreate')
		{
			$anexo9 = BeanFactory::getBean('gbi_Anexo9', $_REQUEST['return_id']);
					
			if (!empty($anexo9))
			{
				$pacientes = $anexo9->get_linked_beans('accounts_gbi_anexo9_1', 'Accounts');
				$paciente = null;
				foreach ($pacientes as $item)
				{
					$paciente = $item;
					break;
				}
				
				if (!empty($paciente))
				{
					if (!empty($paciente->fechanacimiento_c))
					{						
						setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
						$fecha_nac = $paciente->fechanacimiento_c; 
						$fecha_uno = str_replace('/','-', $fecha_nac);					
						$fecha = time() - strtotime($fecha_uno);
						$edad = floor((($fecha / 3600) / 24) / 360);
						
						$this->ev->fieldDefs['edad_paciente']['value'] = $edad;					
					}				
				
					$this->ev->fieldDefs['account_id_c']['value'] = $paciente->id;
					$this->ev->fieldDefs['name']['value'] = $anexo9->name;
					$this->ev->fieldDefs['paciente']['value'] = $paciente->name;
					$this->ev->fieldDefs['nombres_apepaciente']['value'] = $paciente->primernombre_c;
					$this->ev->fieldDefs['segundonombre_c']['value'] = $paciente->segundonombre_c;
					$this->ev->fieldDefs['primerapellido_c']['value'] = $paciente->primerapellido_c;
					$this->ev->fieldDefs['segundoapellido_c']['value'] = $paciente->segundoapellido_c;
					
					$this->ev->fieldDefs['tele_paciente']['value'] = $paciente->telefonopersonal_c;	
					
					
					
					
					$this->ev->fieldDefs['area_servicio']['value'] = $anexo9->servicio_c;	
					$this->ev->fieldDefs['nombre_acompa']['value'] = $anexo9->primer_nom.' '.$anexo9->sdo_nombre.' '.$anexo9->primer_apellido.' '.$anexo9->segundo_apellido;
					$this->ev->fieldDefs['telefono_fijo']['value'] = $anexo9->telefono;
					
					
					
					$ips = BeanFactory::getBean('IPS_IPS', $anexo9->ips_ips_id_c);
					/*$this->ev->fieldDefs['institucion_asi_ips']['value'] = $ips->name;*/
					//$this->ev->fieldDefs['ips_ips_id_c']['value'] = $ips->id;
					/*$this->ev->fieldDefs['institucion_asign']['value'] = $ips->name;*/
					//$this->ev->fieldDefs['ips_ips_id1_c']['value'] = $ips->id;
					
					
					
					$eps = BeanFactory::getBean('EPS_EPS', $anexo9->eps_eps_id_c);
					$this->ev->fieldDefs['aseguradora_p']['value'] = $eps->name;
					$this->ev->fieldDefs['eps_eps_id_c']['value'] = $eps->id;
					$this->ev->fieldDefs['eps_a']['value'] = $eps->name;
					$this->ev->fieldDefs['eps_eps_id1_c']['value'] = $eps->id;
					$this->ev->fieldDefs['tel_2']['value'] = $eps->telpersonal;
					
					
					$diagnostico = BeanFactory::getBean('CIE_CIE10', $anexo9->cie_cie10_id_c);
					$this->ev->fieldDefs['cie_cie10_id_c']['value'] = $diagnostico->id;
					$this->ev->fieldDefs['diagnostico_clini']['value'] = $diagnostico->name;
					$this->ev->fieldDefs['descrip_dig']['value'] = $diagnostico->description;
					
					$diagnostico2 = BeanFactory::getBean('CIE_CIE10', $anexo9->cie_cie10_id1_c);
					$this->ev->fieldDefs['cie_cie10_id1_c']['value'] = $diagnostico2->id;
					$this->ev->fieldDefs['dx2_c']['value'] = $diagnostico2->name;
					$this->ev->fieldDefs['dx2_desc_c']['value'] = $diagnostico2->description;
					
					$diagnostico3 = BeanFactory::getBean('CIE_CIE10', $anexo9->cie_cie10_id2_c);
					$this->ev->fieldDefs['cie_cie10_id2_c']['value'] = $diagnostico3->id;
					$this->ev->fieldDefs['dx3_c']['value'] = $diagnostico3->name;
					$this->ev->fieldDefs['dx3_desc_c']['value'] = $diagnostico3->description;
										
					
					
					$cup = BeanFactory::getBean('GBICU_CUPS', $anexo9->gbicu_cups_id_c);
					$this->ev->fieldDefs['gbicu_cups_id_c']['value'] = $anexo9->gbicu_cups_id_c;
					$this->ev->fieldDefs['ayuda_diag_clinica']['value'] = $cup->name;
					$this->ev->fieldDefs['cups_clinica']['value'] = $cup->description;
					
					$cup2 = BeanFactory::getBean('GBICU_CUPS', $anexo9->gbicu_cups_id1_c);
					$this->ev->fieldDefs['gbicu_cups_id2_c']['value'] = $anexo9->gbicu_cups_id1_c;
					$this->ev->fieldDefs['cups2_c']['value'] = $cup2->name;
					$this->ev->fieldDefs['cup2_desc_c']['value'] = $cup2->description;
					
					$cup3 = BeanFactory::getBean('GBICU_CUPS', $anexo9->gbicu_cups_id2_c);
					$this->ev->fieldDefs['gbicu_cups_id3_c']['value'] = $anexo9->gbicu_cups_id2_c;
					$this->ev->fieldDefs['cups3_c']['value'] = $cup3->name;
					$this->ev->fieldDefs['cups3_desc_c']['value'] = $cup3->description;


					
					$this->ev->fieldDefs['description']['value'] = $anexo9->description;
				}
			}
		}
		
		echo $this->ev->display(); 
		
    } 
}  


?>
