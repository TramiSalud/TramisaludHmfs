<?php
//https://gist.github.com/betobaz/4128589
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 
require_once('include/MVC/View/views/view.edit.php'); 
class solci_SolicitudCitasViewEdit extends ViewEdit { 
    var $ev; 
    var $type ='edit'; 
    var $useForSubpanel = false;  //boolean variable to determine whether view can be used for subpanel creates 
    var $useModuleQuickCreateTemplate = false; //boolean variable to determine whether or not SubpanelQuickCreate has a separate display function 
    var $showTitle = true; 
 
     function solci_SolicitudCitasViewEdit(){ 
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
						
						$this->ev->fieldDefs['edad']['value'] = $edad;					
					}				
				
					$this->ev->fieldDefs['name']['value'] = $anexo9->name;
					$this->ev->fieldDefs['account_id_c']['value'] = $paciente->id;
					$this->ev->fieldDefs['paciente']['value'] = $paciente->name;
					$this->ev->fieldDefs['nombresapellpaciente']['value'] = $paciente->primernombre_c.' '.$paciente->segundonombre_c.' '.$paciente->primerapellido_c.' '.$paciente->segundoapellido_c;
					$this->ev->fieldDefs['telpersonal']['value'] = $paciente->telefonopersonal_c;
					$this->ev->fieldDefs['teladicional']['value'] = $paciente->celular_c;
					$this->ev->fieldDefs['acompanante']['value'] = $anexo9->primer_nom.' '.$anexo9->sdo_nombre.' '.$anexo9->primer_apellido.' '.$anexo9->segundo_apellido;
					$this->ev->fieldDefs['telacompanante']['value'] = $anexo9->telefono;
					$this->ev->fieldDefs['munpac_c']['value'] = $paciente->municipio_c;
					$this->ev->fieldDefs['mun_municipio_id_c']['value'] = $paciente->mun_municipio_id1_c;
					$this->ev->fieldDefs['sexo']['value'] = $paciente->genero_c;
					$this->ev->fieldDefs['fechanac']['value'] = $paciente->fechanacimiento_c;



					$eps = BeanFactory::getBean('EPS_EPS', $anexo9->eps_eps_id_c);
					$this->ev->fieldDefs['eps']['value'] = $eps->name;
					$this->ev->fieldDefs['eps_eps_id_c']['value'] = $eps->id;
					
					
					
					$this->ev->fieldDefs['cama']['value'] = $anexo9->cama_c;
					
					
					
					$diagnostico = BeanFactory::getBean('CIE_CIE10', $anexo9->cie_cie10_id_c);
					$this->ev->fieldDefs['cie_cie10_id_c']['value'] = $diagnostico->id;
					$this->ev->fieldDefs['diagnostico']['value'] = $diagnostico->name;
					$this->ev->fieldDefs['cie10descripcion']['value'] = $diagnostico->description;
					
					$diagnostico = BeanFactory::getBean('CIE_CIE10', $anexo9->cie_cie10_id1_c);
					$this->ev->fieldDefs['cie_cie10_id1_c']['value'] = $diagnostico->id;
					$this->ev->fieldDefs['codigodediagnostico2_c']['value'] = $diagnostico->name;
					$this->ev->fieldDefs['codigodediagnostico2descripc_c']['value'] = $diagnostico->description;
					
					$diagnostico = BeanFactory::getBean('CIE_CIE10', $anexo9->cie_cie10_id2_c);
					$this->ev->fieldDefs['cie_cie10_id2_c']['value'] = $diagnostico->id;
					$this->ev->fieldDefs['codigodiagnostico3_c']['value'] = $diagnostico->name;
					$this->ev->fieldDefs['codigodiagnostico3descripcio_c']['value'] = $diagnostico->description;
					
					
					
					$cup = BeanFactory::getBean('GBICU_CUPS', $anexo9->gbicu_cups_id_c);
					$this->ev->fieldDefs['gbicu_cups_id_c']['value'] = $anexo9->gbicu_cups_id_c;
					$this->ev->fieldDefs['cup']['value'] = $cup->name;
					$this->ev->fieldDefs['cupdescripcion']['value'] = $cup->description;
					
					$cup = BeanFactory::getBean('GBICU_CUPS', $anexo9->gbicu_cups_id1_c);
					$this->ev->fieldDefs['gbicu_cups_id2_c']['value'] = $anexo9->gbicu_cups_id1_c;
					$this->ev->fieldDefs['cup2_c']['value'] = $cup->name;
					$this->ev->fieldDefs['cup2_descripcion_c']['value'] = $cup->description;
					
					$cup = BeanFactory::getBean('GBICU_CUPS', $anexo9->gbicu_cups_id2_c);
					$this->ev->fieldDefs['gbicu_cups_id1_c']['value'] = $anexo9->gbicu_cups_id2_c;
					$this->ev->fieldDefs['cup3_c']['value'] = $cup->name;
					$this->ev->fieldDefs['cup3_descripcion_c']['value'] = $cup->description;
					
					
					
					$especialista = BeanFactory::getBean('ESP_Especialista', $anexo9->esp_especialista_id_c);
					$this->ev->fieldDefs['esp_especialista_id_c']['value'] = $especialista->id;
					$this->ev->fieldDefs['especialista']['value'] = $especialista->name;
					$this->ev->fieldDefs['nombremedico']['value'] = $especialista->nombres.' '.$especialista->apellidos;
					$this->ev->fieldDefs['especilidadmedico_c']['value'] = $especialista->cargo;

				}
			}
		}
		
		echo $this->ev->display(); 
		
    } 
}  


?>