<?php

require_once ('include/MVC/Controller/SugarController.php');

class tms_TMS_CentralAutorizacionesController extends SugarController{

	public function action_save()
	{
		$bean = $this->bean;
		$result = $bean->db->query("select count(*) as consecutivo from tms_tms_centralautorizaciones");
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

		parent::action_save();
	}

}
?>