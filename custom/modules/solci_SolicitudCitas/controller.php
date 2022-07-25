<?php

require_once ('include/MVC/Controller/SugarController.php');

class solci_SolicitudCitasController extends SugarController{


	public function action_save()
	{
		$bean = $this->bean;
		$result = $bean->db->query("select count(*) consecutivo from solci_solicitudcitas");
	    $row = $bean->db->fetchByAssoc($result);

	    $anio = date("Y");
		
		if(empty($bean->name))
	   {
		 if(isset($row["consecutivo"]))
		 {
			$row["consecutivo"]=$row["consecutivo"]+1;

			$row["consecutivo"] = $anio."000".$row["consecutivo"];		
			
			$this->bean->name = $row["consecutivo"];
		 }
	  }

	setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
	$fecha_nac = $bean->fechanac; 
	$fecha_uno = str_replace('/','-', $fecha_nac);					
	$fecha = time() - strtotime($fecha_uno);
	/*$edad = floor((($fecha / 3600) / 24) / 360);
	
	$bean->edad = $edad;*/
	  
		parent::action_save();
	}	
}

?>