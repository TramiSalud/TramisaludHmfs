<?php
if(!defined('sugarEntry') ||!sugarEntry) die('Not A Valid Entry Point');

class Autorizacion{

	static $running = false;

	function actualizar(& $bean, $event, $arguments){
	
		if(self::$running == true)
            return ;

        self::$running = true;
		
		$result = $bean->db->query("SELECT count(*) AS consecutivo FROM aut_autorizacionestelefonicas");
		$row = $bean->db->fetchByAssoc($result);
		
		if(empty($bean->name))
		{
			$bean->name = $row["consecutivo"];
		}
		
		$anexo2 = $bean->get_linked_beans('gbian_anexo2_aut_autorizacionestelefonicas_1', 'gbian_Anexo2');
		
		$anexo = null;
		
		foreach ($anexo2 as $item)
		{
			$anexo = $item;
			break;
		}
		
		if (!empty($anexo))//es porque es del anexo 2
		{		
			$bean->quienautoriza_c = $anexo->nombre_informador." ".$anexo->apellidos_informador_c;
			$bean->fechaingreso = substr($anexo->fecha_ingreso_c, 0 , 10);
//file_put_contents('\\\192.168.0.15\\htdocs\\tramisalud_dev_gbi\\custom\\modules\\AUT_AutorizacionesTelefonicas\\log.txt', var_export('aaaaaaaaaaa', true), FILE_APPEND);		
			
			
			$pacientes = $anexo->get_linked_beans('gbian_anexo2_accounts', 'Accounts');
			
			if (!empty($pacientes)){
				$paciente = null;
				foreach ($pacientes as $item){
					$paciente = $item;
					break;		
				}       
			}

		}else
		{//es porque es el anexo 3
			
			$anexo3 = $bean->get_linked_beans('gbia3_anexo3_aut_autorizacionestelefonicas_1', 'GBIA3_ANEXO3');
			
			foreach ($anexo3 as $item)
			{
				$anexo = $item;
				break;
			}
			
			if (!empty($anexo))
			{
				$especialista = BeanFactory::getBean("ESP_Especialista", $anexo->esp_especialista_id_c);
				
				$bean->fechaingreso = substr($anexo->date_entered, 0 , 10);

				if (!empty($especialista))
				{
					$bean->quienautoriza_c = $especialista->nombres." ".$especialista->apellidos;
				}
				
				$pacientes = $anexo->get_linked_beans('accounts_gbia3_anexo3_1', 'Accounts');
			
				if (!empty($pacientes)){
				$paciente = null;
				foreach ($pacientes as $item){
					$paciente = $item;
					break;		
				}       
				}	
			}
		}
		if (!empty($anexo))
		{
			$eps = BeanFactory::getBean("EPS_EPS", $anexo->eps_eps_id_c);
			
			$bean->autorizacionnro = $anexo->name;
			
			if (!empty($eps))
			{
				$bean->eps = $eps->name;
				$bean->eps_eps_id_c = $eps->id;
			}
			
			//$paciente = BeanFactory::getBean("Accounts", $anexo->account_id_c);
			
			if (!empty($paciente))
			{
				$bean->paciente = $paciente->name;
				$bean->account_id_c = $paciente->id;
				$bean->nrodoc = $paciente->name;
				$bean->tipodoc = $paciente->tipo_documento_c;
				
			}
		}
		$bean->save();
		
	}

}

?>