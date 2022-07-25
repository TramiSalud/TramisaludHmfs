<?php

//prevents directly accessing this file from a web browser
if(!defined('sugarEntry') ||!sugarEntry) die('Not A Valid Entry Point');

class fechas {
static $running = false;
	
	
	function guardar($bean, $event, $arguments){

			if (self::$running == true)
			return;
			self::$running = true;
			
			
			global $db;
			$tareas= new Task();
			$usuario=new User();
			$usu=$GLOBALS['current_user']->id;
			
			
			//verificar si existe registros en la base de datos
			$queryto="select count(*) as total from tasks where deleted=0";
			$result = $db->query($queryto);
			
			while ($contar=$db->fetchByAssoc($result))
			{
				if ($contar['total']==0)
				{
						$bean->load_relationship('gbi_anexo3npos_tasks_1');
						$dt=new DateTime($bean->date_entered);
						$fecha=$dt->format('Y-m-d');
						$nuevafecha = strtotime ( '+7 DAY',strtotime ( $fecha ) ) ;
						$nuevafecha = date ('Y-m-d 23:00:00' , $nuevafecha );
						
						$tareas->name="Fecha de Cierre del Anexo 3NP - ".$bean->name;
						
						$antesfecha = strtotime ( '-1 DAY',strtotime ( $fecha ) ) ;
						$antesfecha = date ('Y-m-d 23:00:00' , $antesfecha );						
						
						$tareas->date_start=$antesfecha;
						$tareas->date_due=$nuevafecha;
						$tareas->assigned_user_id=$usu;
						$tareas->save();
						//$tareas->load_relationships();
						
						$bean->gbi_anexo3npos_tasks_1->add($tareas);	
				}
			}
			
			
			//verificar los datos de tareas
			$query="select name,assigned_user_id,date_due,date_start from tasks where deleted=0";
			$result2 = $db->query($query);
			$totaldatos=0;
			
			
			while ($tareasre=$db->fetchByAssoc($result2))
			{
			
				/*$finiciotarea= new DateTime($bean->date_entered);
				$inicio=$finiciotarea->format('Y-m-d 23:00:00');
				$nuevaf=strtotime('+7 DAY',strtotime($inicio));
				$nuevaf=date('Y-m-d 23:00:00',$nuevaf);*/
			
				if ($tareasre['name']=="Fecha de Cierre del Anexo 3NP - ".$bean->name)
				{
						
					$totaldatos=$totaldatos+1;
				}
			}
			
				
				
			if ($totaldatos==0)
			{
			    	$bean->load_relationship('gbi_anexo3npos_tasks_1');
					$dt=new DateTime($bean->date_entered);
					$fecha=$dt->format('Y-m-d');
					$nuevafecha = strtotime ( '+7 DAY',strtotime ( $fecha ) ) ;
					$nuevafecha = date ('Y-m-d 23:00:00' , $nuevafecha );
					
					$tareas->name="Fecha de Cierre del Anexo 3NP - ".$bean->name;
					
					$antesfecha = strtotime ( '-1 DAY',strtotime ( $fecha ) ) ;
					$antesfecha = date ('Y-m-d 23:00:00' , $antesfecha );		
					
					$tareas->status = "In Progress";
					$tareas->date_start=$antesfecha;
					$tareas->date_due=$nuevafecha;
					$tareas->assigned_user_id=$usu;
					$tareas->save();
					//$tareas->load_relationships();
					
					$bean->gbi_anexo3npos_tasks_1->add($tareas);
			}
		}
	}
	?>