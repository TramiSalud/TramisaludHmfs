<?php

set_include_path(realpath('include/') . PATH_SEPARATOR . get_include_path());

class envio_de_correos_anexo_3_no_pos{
   
    function envio_de_correos_anexo_3_no_pos(){
	
		$result = $GLOBALS['db']->query("SELECT a3np.id AS ID_A3, a3np.name as NO_A3, a3np_cstm.numero_reintentos_c AS NO_REIN_A3C, 
											a3np_cstm.fecha_envio_correo_c AS FECHA_ENVIO_A3C, a3np_cstm.correo_enviado_c AS ENVIADO_A3C, a3np_cstm.marcado_enviar_c AS MARCADO_A3C, 
											pac.id AS ID_PAC,
											CONCAT(pac_cstm.primernombre_c, ' ',pac_cstm.segundonombre_c, ' ',pac_cstm.primerapellido_c, ' ',pac_cstm.segundoapellido_c) AS PACIENTE,
											pac.name AS DOCUMENTO, 
											eps.id AS ID_EPS, eps.emailanexo3 AS EMAIl_EPS, eps.correo AS EMAIL_SUPERSALUD
										 FROM
											gbi_anexo3npos a3np
											INNER JOIN gbi_anexo3npos_cstm a3np_cstm ON a3np.id = a3np_cstm.id_c
											LEFT JOIN accounts_gbi_anexo3npos_1_c rel_a3np_pac ON a3np.id = rel_a3np_pac.accounts_gbi_anexo3npos_1gbi_anexo3npos_idb
											LEFT JOIN accounts pac ON pac.id = rel_a3np_pac.accounts_gbi_anexo3npos_1accounts_ida
											LEFT JOIN accounts_cstm pac_cstm ON pac_cstm.id_c = pac.id
											LEFT JOIN eps_eps eps ON eps.id = a3np.eps_eps_id_c
										 WHERE
											a3np.deleted = 0
											AND (rel_a3np_pac.deleted = 0 OR rel_a3np_pac.deleted IS NULL)
											AND (pac.deleted = 0 OR pac.deleted IS NULL)
											AND a3np_cstm.correo_enviado_c = 0
											AND a3np_cstm.marcado_enviar_c = 1
											AND a3np_cstm.fecha_envio_correo_c IS NOT NULL");
		
		require_once("include/SugarPHPMailerExt.php");
		
		$now = date("Y-m-d H:i:s", (strtotime ("+5 Hours")));
		
		while ($row = $GLOBALS['db']->fetchByAssoc($result)){
			
			$db = DBManagerFactory::getInstance(); 
			
			$anexo3np = new gbi_anexo3npos();
			$anexo3np->retrieve($row['ID_A3']);
			
			$eps = new EPS_EPS();
			$eps->retrieve($anexo3np->eps_eps_id_c);
			
			$usuario = new Account();
			$usuario->retrieve($anexo3np->accounts_gbi_anexo3npos_1accounts_ida);
			
			$historial = new GBIHI_HistorialCorreo();
			$anexo3np->load_relationship('gbi_anexo3npos_gbihi_historialcorreo_1');
			
			$emailObj = new Email(true);
			$defaults = $emailObj->getSystemDefaultEmail();
			$mail = new SugarPHPMailerExt();
			if($anexo3np->tiposerviciosolicitado == 2){
				$mail->setMailerAlternative('hospitalizacion');
			} else {
				$mail->setMailerForSystem();
				$mail->From = $defaults['email'];
				$mail->FromName = $defaults['name'];
			}
			$mail->Subject = $usuario->primernombre_c.' '.$usuario->segundonombre_c.' '.$usuario->primerapellido_c.' '.$usuario->segundoapellido_c.' '.$usuario->tipo_documento_c.' '.$usuario->name.' - ANEXO TECNICO NO 3 NO POS # '.$anexo3np->name;
			$mail->Body = "Cordial Saludo:\n\nTramisalud envía adjunto solicitud de servicio en el presente Anexo Técnico dando cumplimiento a la Resolución 3047 de 2008\n'Por medio de la cual se definen los formatos, mecanismos de envío, procedimientos y términos a ser implementados en las relaciones entre prestadores de servicios de salud y entidades responsables del pago de servicios de salud, definidos en el Decreto 4747 de 2007'.\nSe recuerda que\n'Las entidades responsables del pago deben dar respuesta a la solicitud de autorización de servicios, dentro de los siguientes términos: La respuesta positiva o negativa a la solicitud de autorización de servicios electivos deberá ser comunicada al usuario y enviada al prestador por la entidad responsable del pago, dentro de los cinco (5) días hábiles siguientes al recibo de la solicitud en el Formato Único de Autorización. En el caso de que el servicio requerido sea de carácter prioritario, la respuesta a la solicitud deberá ser comunicada al usuario y enviada al prestador por parte de la entidad responsable del pago dentro de los dos (2) días hábiles siguientes al recibo de la solicitud'.\nResolución 4331 de 2012, articulo 7.";
			$mail->AddAttachment("upload\PDF_Anexo3NoPos\A3NOPOS-".$anexo3np->name.".pdf", "ANEXO TECNICO NO 3 NO POS - Numero de Solicitud ".$anexo3np->name.".pdf");
			$mail->prepForOutbound();
			
			if($anexo3np->numero_reintentos_c == 1 || $anexo3np->numero_reintentos_c == 2)
			{	
				$mail->AddAddress($eps->emailanexo3);

				$fecha_uno = str_replace('/','-', $anexo3np->fecha_envio_correo_c);	
				$total_seconds = strtotime($now) - strtotime($fecha_uno); 
				$minutes = ( ( $total_seconds / 60 ) % 60 );
				$time = str_pad( $minutes, 2, "0", STR_PAD_LEFT );
				
				file_put_contents('C:\\xampp\\htdocs\\tramisalud_dev_gbi\\log_envio_A3NOPOS.txt',var_export($row['NO_A3'].' '.$time.' '.$now.' |A3NOPOS|EPS|',true),FILE_APPEND);

				if($time >= 10)
				{						
					if($mail->Send())
					{	
						$anexo3np->numero_reintentos_c = $anexo3np->numero_reintentos_c + 1;				
						$anexo3np->fecha_envio_correo_c = $now;
						$anexo3np->correo_enviado_c = 1;	
						$anexo3np->marcado_enviar_c = 1;											
						$anexo3np->save();
						
						$resultcons = $db->query("select count(*) as consecutivo from gbihi_historialcorreo");
						$rowcons = $db->fetchByAssoc($resultcons);		
						$rowcons["consecutivo"]=$rowcons["consecutivo"]+1;
						
						$historial->name= "AT3NP - ".$rowcons["consecutivo"];
						$historial->correo_envio = $eps->emailanexo3;
						//$historial->correo_envio = "yovafiguebui@gmail.com";
						$historial->fecha_envio_correo = $now;
						$historial->numero_reintento = $anexo3np->numero_reintentos_c;
						$historial->correo_enviado = 1;
						$historial->assigned_user_id = 1;
						$historial->save();

						$anexo3np->gbi_anexo3npos_gbihi_historialcorreo_1->add($historial);
						$anexo3np->save();
					}
				}
			}
			else
			{
				if($anexo3np->numero_reintentos_c == 3)
				{	
					$mail->AddAddress($eps->correo);
					//$mail->AddAddress("elparcero_13@hotmail.com");
					
					$fecha_uno = str_replace('/','-', $anexo3->fecha_envio_correo_c);	
					$total_seconds = strtotime($now) - strtotime($fecha_uno); 
					$minutes = ( ( $total_seconds / 60 ) % 60 );
					$time = str_pad( $minutes, 2, "0", STR_PAD_LEFT );

					file_put_contents('C:\\xampp\\htdocs\\tramisalud_dev_gbi\\log_envio_A3NOPOS.txt',var_export($row['NO_A3'].' '.$time.' '.$now.' |A3NOPOS|SuperSalud|',true),FILE_APPEND);

					if($time >= 10)
					{						
						if($mail->Send())
						{	
							$anexo3np->numero_reintentos_c = $anexo3np->numero_reintentos_c + 1;				
							$anexo3np->fecha_envio_correo_c = $now;
							$anexo3np->correo_enviado_c = 1;	
							$anexo3np->marcado_enviar_c = 1;											
							$anexo3np->save();
							
							$resultcons = $db->query("select count(*) as consecutivo from gbihi_historialcorreo");
							$rowcons = $db->fetchByAssoc($resultcons);		
							$rowcons["consecutivo"]=$rowcons["consecutivo"]+1;
							
							$historial->name= "AT3NP - ".$rowcons["consecutivo"];
							$historial->correo_envio = $eps->correo;
							//$historial->correo_envio = "elparcero_13@hotmail.com";
							$historial->fecha_envio_correo = $now;
							$historial->numero_reintento = $anexo3np->numero_reintentos_c;
							$historial->correo_enviado = 1;
							$historial->assigned_user_id = 1;
							$historial->save();

							$anexo3np->gbi_anexo3npos_gbihi_historialcorreo_1->add($historial);
							$anexo3np->save();
						}
					}
				}
			}
		}
	}
}
	
?>