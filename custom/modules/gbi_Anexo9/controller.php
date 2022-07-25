<?php

require_once ('include/MVC/Controller/SugarController.php');

class gbi_Anexo9Controller extends SugarController{

	public function action_GenerarPdf(){
	
		$this->view = 'pdf';
	
	}
	
	public function action_GenerarTraza(){
	
		$this->view = 'traza';
	
	}

	public function action_save()
	{
		$bean = $this->bean;
		$result = $bean->db->query("select count(*) as consecutivo from gbi_anexo9");
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
	
	public function action_EnviarCorreo(){
	
		include ('custom/modules/gbi_Anexo9/views/view.pdf_correo_automatico.php');
		
		require_once("include/SugarPHPMailerExt.php");
		
		global $current_user;
		$db = DBManagerFactory::getInstance(); 
		
		$eps = new EPS_EPS();
		$eps->retrieve($this->bean->eps_eps_id_c);
		
		$usuario = new Account();
		$usuario->retrieve($this->bean->accounts_gbi_anexo9_1accounts_ida);
		
		$historial = new GBIHI_HistorialCorreo();
		$this->bean->load_relationship('gbi_anexo9_gbihi_historialcorreo_1');
		
		$emailObj = new Email(true);
		$defaults = $emailObj->getSystemDefaultEmail();
		$mail = new SugarPHPMailerExt();
		$mail->setMailerAlternative('referencia');
		$mail->Subject = $usuario->primernombre_c.' '.$usuario->segundonombre_c.' '.$usuario->primerapellido_c.' '.$usuario->segundoapellido_c.' '.$usuario->tipo_documento_c.' '.$usuario->name.' - ANEXO TECNICO NO 9 # '.$this->bean->name;
		$mail->Body = "Cordial Saludo:\n\nTramisalud envía adjunto solicitud de servicio en el presente Anexo Técnico dando cumplimiento a la Resolución 3047 de 2008\n'Por medio de la cual se definen los formatos, mecanismos de envío, procedimientos y términos a ser implementados en las relaciones entre prestadores de servicios de salud y entidades responsables del pago de servicios de salud, definidos en el Decreto 4747 de 2007'.\nSe recuerda que\n'Las entidades responsables del pago deben dar respuesta a la solicitud de autorización de servicios, dentro de los siguientes términos: La respuesta positiva o negativa a la solicitud de autorización de servicios electivos deberá ser comunicada al usuario y enviada al prestador por la entidad responsable del pago, dentro de los cinco (5) días hábiles siguientes al recibo de la solicitud en el Formato Único de Autorización. En el caso de que el servicio requerido sea de carácter prioritario, la respuesta a la solicitud deberá ser comunicada al usuario y enviada al prestador por parte de la entidad responsable del pago dentro de los dos (2) días hábiles siguientes al recibo de la solicitud'.\nResolución 4331 de 2012, articulo 7.";
		$mail->AddCustomHeader('X-Anexo: '.'AT9P');
		$mail->AddCustomHeader('X-Numero: '.'1');
		$mail->AddCustomHeader('X-AnexoID: '.$this->bean->id);
		$mail->AddAttachment("upload\PDF_Anexo9\A9-".$this->bean->name.".pdf", "ANEXO TECNICO NO 9 - Numero de Solicitud ".$this->bean->name.".pdf");
		
		$resultdoc = $GLOBALS['db']->query("SELECT
												A9.id AS anexo,
												DOC_REV.id AS documento_recuperar,
												DOC.document_name AS nombre_documento
											FROM
												gbi_anexo9 A9
											INNER JOIN gbi_anexo9_cstm A9CSTM ON A9CSTM.id_c = A9.id
											INNER JOIN gbi_anexo9_documents_1_c REL_A9_DOC ON REL_A9_DOC.gbi_anexo9_documents_1gbi_anexo9_ida = A9.id
											INNER JOIN documents DOC ON DOC.id = REL_A9_DOC.gbi_anexo9_documents_1documents_idb
											INNER JOIN document_revisions DOC_REV ON DOC_REV.document_id = DOC.id
											WHERE
												DOC.status_id = 'Active'
											AND A9.deleted = 0
											AND REL_A9_DOC.deleted = 0
											AND DOC.deleted = 0
											AND DOC_REV.deleted = 0
											AND A9.id = '".$this->bean->id."'");

		while ($rowdoc = $GLOBALS['db']->fetchByAssoc($resultdoc)){	

			$doc = $rowdoc['documento_recuperar'];
			$doc = "upload\\".$doc;

			$doc_name = $rowdoc['nombre_documento'];
		
			$mail->AddAttachment($doc, $doc_name);
		}		
		
		$mail->prepForOutbound();
		$mail->AddAddress($eps->emailanexo9_c);

		$now = date("Y-m-d H:i:s", (strtotime ("+5 Hours")));
		
		if($this->bean->correo_enviado_c == 0)
		{	
			if($this->bean->numero_reintentos_c == null)
			{			
				if($mail->Send())
				{					
					$this->bean->numero_reintentos_c = $this->bean->numero_reintentos_c + 1;				
					$this->bean->fecha_envio_correo_c = $now;
					$this->bean->correo_enviado_c = 1;	
					$this->bean->marcado_enviar_c = 1;											
					$this->bean->save();
					
					$resultcons = $db->query("select count(*) as consecutivo from gbihi_historialcorreo");
					$rowcons = $db->fetchByAssoc($resultcons);		
					$rowcons["consecutivo"]=$rowcons["consecutivo"]+1;
					
					$historial->name= "AT9 - ".$rowcons["consecutivo"];
					$historial->correo_envio = $eps->emailanexo9_c;
					$historial->fecha_envio_correo = $now;
					$historial->numero_reintento = $this->bean->numero_reintentos_c;
					$historial->correo_enviado = 1;
					$historial->assigned_user_id = $current_user->id;
					$historial->save();

					$this->bean->gbi_anexo9_gbihi_historialcorreo_1->add($historial);
					$this->bean->save();
					
					?>
						<script language="JavaScript" type="text/javascript">
							alert("El correo fue enviado satisfactoriamente");
							window.location.href = window.location.protocol + "//" + window.location.host+'/tramisaludhmfs/index.php?module=gbi_Anexo9&action=DetailView&record=<?php echo $this->bean->id; ?>';				
						</script>
					<?php
				}
				else
				{
					?>
						<script language="JavaScript" type="text/javascript">
							alert("El envío de correo falló. Si se vuelve a presentar el problema Comuníquese con el Administrador del Sistema.");
							window.location.href = window.location.protocol + "//" + window.location.host+'/tramisaludhmfs/index.php?module=gbi_Anexo9&action=DetailView&record=<?php echo $this->bean->id; ?>';				
						</script>
					<?php
				}
			}
			else
			{
				?>
					<script language="JavaScript" type="text/javascript">
						alert("El correo ya esta en la lista de envío automatico");
						window.location.href = window.location.protocol + "//" + window.location.host+'/tramisaludhmfs/index.php?module=gbi_Anexo9&action=DetailView&record=<?php echo $this->bean->id; ?>';				
					</script>
				<?php
			}
		}
		else
		{
			?>
				<script language="JavaScript" type="text/javascript">
					alert("El correo ya fue enviado");
					window.location.href = window.location.protocol + "//" + window.location.host+'/tramisaludhmfs/index.php?module=gbi_Anexo9&action=DetailView&record=<?php echo $this->bean->id; ?>';				
				</script>
			<?php
		}		
	}
	
}

?>
