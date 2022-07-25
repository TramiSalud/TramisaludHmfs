<?php

set_include_path(realpath('include/') . PATH_SEPARATOR . get_include_path());

class envio_de_anexos{
   
    function envio_de_anexos(){

		$result2 = $GLOBALS['db']->query("SELECT a2.id AS ID_A2, a2.name as NO_A2, a2_cstm.numero_reintentos_c AS NO_REIN_A2C, 
											a2_cstm.fecha_envio_correo_c AS FECHA_ENVIO_A2C, a2_cstm.correo_enviado_c AS ENVIADO_A2C, a2_cstm.marcado_enviar_c AS MARCADO_A2C, 
											pac.id AS ID_PAC,
											CONCAT(pac_cstm.primernombre_c, ' ',pac_cstm.segundonombre_c, ' ',pac_cstm.primerapellido_c, ' ',pac_cstm.segundoapellido_c) AS PACIENTE,
											pac.name AS DOCUMENTO, 
											eps.id AS ID_EPS, eps.emailanexo3 AS EMAIl_EPS, eps.correo AS EMAIL_SUPERSALUD
										 FROM
											gbian_anexo2 a2
											INNER JOIN gbian_anexo2_cstm a2_cstm ON a2.id = a2_cstm.id_c
											LEFT JOIN gbian_anexo2_accounts_c rel_a2_pac ON a2.id = rel_a2_pac.gbian_anexo2_accountsgbian_anexo2_idb
											LEFT JOIN accounts pac ON pac.id = rel_a2_pac.gbian_anexo2_accountsaccounts_ida
											LEFT JOIN accounts_cstm pac_cstm ON pac_cstm.id_c = pac.id
											LEFT JOIN eps_eps eps ON eps.id = a2.eps_eps_id_c
										 WHERE
											a2.deleted = 0
											AND (rel_a2_pac.deleted = 0 OR rel_a2_pac.deleted IS NULL)
											AND (pac.deleted = 0 OR pac.deleted IS NULL)
											AND a2_cstm.correo_enviado_c = 1
											AND a2_cstm.marcado_enviar_c = 1
											AND a2_cstm.rebotado_c = 1
											AND a2_cstm.fecha_envio_correo_c IS NOT NULL
											AND a2_cstm.numero_reintentos_c < 4 ");
		
		require_once("include/SugarPHPMailer.php");
		
		$now = date("Y-m-d H:i:s", (strtotime ("+5 Hours")));
		
		$db = DBManagerFactory::getInstance(); 
		
		while ($row2 = $GLOBALS['db']->fetchByAssoc($result2)){			
			
			$anexo2 = new gbian_Anexo2();
			$anexo2->retrieve($row2['ID_A2']);
			$numero_envio2 = $anexo2->numero_reintentos_c + 1;
			
			$eps2 = new EPS_EPS();
			$eps2->retrieve($anexo2->eps_eps_id_c);
			
			$usuario2 = new Account();
			$usuario2->retrieve($anexo2->gbian_anexo2_accountsaccounts_ida);
			
			$historial2 = new GBIHI_HistorialCorreo();
			$anexo2->load_relationship('gbian_anexo2_gbihi_historialcorreo_1');
			
			$emailObj2 = new Email(true);
			$defaults2 = $emailObj2->getSystemDefaultEmail();
			$mail2 = new SugarPHPMailer();
			$mail2->setMailerForSystem();
			$mail2->From = $defaults2['email'];
			$mail2->FromName = $defaults2['name'];
			$mail2->Subject = $usuario2->primernombre_c.' '.$usuario2->segundonombre_c.' '.$usuario2->primerapellido_c.' '.$usuario2->segundoapellido_c.' '.$usuario2->tipo_documento_c.' '.$usuario2->name.' - ANEXO TECNICO NO 2 # '.$anexo2->name;
			$mail2->Body = "Cordial Saludo:\n\nTramisalud envía adjunto solicitud de servicio en el presente Anexo Técnico dando cumplimiento a la Resolución 3047 de 2008\n'Por medio de la cual se definen los formatos, mecanismos de envío, procedimientos y términos a ser implementados en las relaciones entre prestadores de servicios de salud y entidades responsables del pago de servicios de salud, definidos en el Decreto 4747 de 2007'.\nSe recuerda que\n'Las entidades responsables del pago deben dar respuesta a la solicitud de autorización de servicios, dentro de los siguientes términos: La respuesta positiva o negativa a la solicitud de autorización de servicios electivos deberá ser comunicada al usuario y enviada al prestador por la entidad responsable del pago, dentro de los cinco (5) días hábiles siguientes al recibo de la solicitud en el Formato Único de Autorización. En el caso de que el servicio requerido sea de carácter prioritario, la respuesta a la solicitud deberá ser comunicada al usuario y enviada al prestador por parte de la entidad responsable del pago dentro de los dos (2) días hábiles siguientes al recibo de la solicitud'.\nResolución 4331 de 2012, articulo 7.";
			$mail2->AddCustomHeader('X-Anexo: '.'AT2P');
			$mail2->AddCustomHeader('X-Numero: '.$numero_envio2);
			$mail2->AddCustomHeader('X-AnexoID: '.$row2['ID_A2']);
			$mail2->AddAttachment("upload\PDF_Anexo2\A2-".$anexo2->name.".pdf", "ANEXO TECNICO NO 2 - Numero de Solicitud ".$anexo2->name.".pdf");
			
			$resultdoc2 = $GLOBALS['db']->query("SELECT
												A2.id AS anexo,
												DOC_REV.id AS documento_recuperar,
												DOC.document_name AS nombre_documento
											FROM
												gbian_anexo2 A2
											INNER JOIN gbian_anexo2_cstm A2CSTM ON A2CSTM.id_c = A2.id
											INNER JOIN gbian_anexo2_documents_1_c REL_A2_DOC ON REL_A2_DOC.gbian_anexo2_documents_1gbian_anexo2_ida = A2.id
											INNER JOIN documents DOC ON DOC.id = REL_A2_DOC.gbian_anexo2_documents_1documents_idb
											INNER JOIN document_revisions DOC_REV ON DOC_REV.document_id = DOC.id 
											WHERE DOC.status_id = 'Active'
											AND A2.deleted = 0
											AND REL_A2_DOC.deleted = 0
											AND DOC.deleted = 0
											AND DOC_REV.deleted = 0
											AND A2.id = '".$row2['ID_A2']."'");

			while ($rowdoc2 = $GLOBALS['db']->fetchByAssoc($resultdoc2)){	

				$doc2 = $rowdoc2['documento_recuperar'];
				$doc2 = "upload\\".$doc2;

				$doc_name2 = $rowdoc2['nombre_documento'];
			
				$mail2->AddAttachment($doc2, $doc_name2);
			}
			
			$mail2->prepForOutbound();
			
			if($anexo2->numero_reintentos_c == 1 || $anexo2->numero_reintentos_c == 2)
			{	
				$mail2->AddAddress($eps2->emailanexo2);
				//$mail2->AddAddress("yovafiguebui@gmail.com");
				//$mail2->AddAddress("direccion.general@tramisalud.com");
				//$mail2->AddAddress("mailer@coomeva.com");
				
				$fecha_uno = str_replace('/','-', $anexo2->fecha_envio_correo_c);	
				$total_seconds2 = strtotime($now) - strtotime($fecha_uno); 
				$minutes2 = ( ( $total_seconds2 / 60 ) % 60 );
				$time2 = str_pad( $minutes2, 2, "0", STR_PAD_LEFT );

				file_put_contents('C:\\xampp\\htdocs\\tramisalud_dev_gbi\\log_envio_A2.txt',var_export($row2['NO_A2'].' '.$time2.' '.$now.' |A2|EPS|',true),FILE_APPEND);

				if($time2 >= 30)
				{						
					if($mail2->Send())
					{	
						$anexo2->numero_reintentos_c = $anexo2->numero_reintentos_c + 1;				
						$anexo2->fecha_envio_correo_c = $now;
						$anexo2->correo_enviado_c = 1;	
						$anexo2->marcado_enviar_c = 1;	
						$anexo2->rebotado_c = 0;
						$anexo2->save();
						
						$resultcons2 = $db->query("select count(*) as consecutivo from gbihi_historialcorreo");
						$rowcons2 = $db->fetchByAssoc($resultcons2);		
						$rowcons2["consecutivo"]=$rowcons2["consecutivo"]+1;
						
						$historial2->name= "AT2 - ".$rowcons2["consecutivo"];
						$historial2->correo_envio = $eps2->emailanexo2;
						//$historial2->correo_envio = "yovafiguebui@gmail.com";
						$historial2->fecha_envio_correo = $now;
						$historial2->numero_reintento = $anexo2->numero_reintentos_c;
						$historial2->correo_enviado = 1;
						$historial2->assigned_user_id = 1;
						$historial2->save();

						$anexo2->gbian_anexo2_gbihi_historialcorreo_1->add($historial2);
						$anexo2->save();
					}
				}
			}
			else
			{
				if($anexo2->numero_reintentos_c == 3)
				{	
					$mail2->AddAddress($eps2->correo);
					//$mail2->AddAddress("elparcero_13@hotmail.com");
					//$mail2->AddAddress("direccion.general@tramisalud.com");
					
					$fecha_uno = str_replace('/','-', $anexo2->fecha_envio_correo_c);	
					$total_seconds2 = strtotime($now) - strtotime($fecha_uno); 
					$minutes2 = ( ( $total_seconds2 / 60 ) % 60 );
					$time2 = str_pad( $minutes2, 2, "0", STR_PAD_LEFT );
					
					file_put_contents('C:\\xampp\\htdocs\\tramisalud_dev_gbi\\log_envio_A2.txt',var_export($row2['NO_A2'].' '.$time2.' '.$now.' |A2|SuperSalud|',true),FILE_APPEND);

					if($time2 >= 30)
					{						
						if($mail2->Send())
						{	
							$anexo2->numero_reintentos_c = $anexo2->numero_reintentos_c + 1;				
							$anexo2->fecha_envio_correo_c = $now;
							$anexo2->correo_enviado_c = 1;	
							$anexo2->marcado_enviar_c = 1;	
							$anexo2->rebotado_c = 0;
							$anexo2->save();
							
							$resultcons2 = $db->query("select count(*) as consecutivo from gbihi_historialcorreo");
							$rowcons2 = $db->fetchByAssoc($resultcons2);		
							$rowcons2["consecutivo"]=$rowcons2["consecutivo"]+1;
							
							$historial2->name= "AT2 - ".$rowcons2["consecutivo"];
							$historial2->correo_envio = $eps2->correo;
							//$historial2->correo_envio = "elparcero_13@hotmail.com";
							$historial2->fecha_envio_correo = $now;
							$historial2->numero_reintento = $anexo2->numero_reintentos_c;
							$historial2->correo_enviado = 1;
							$historial2->assigned_user_id = 1;
							$historial2->save();

							$anexo2->gbian_anexo2_gbihi_historialcorreo_1->add($historial2);
							$anexo2->save();
						}
					}
				}
			}
		}

		//Empieza el otro A3
		
		$result3 = $GLOBALS['db']->query("SELECT a3.id AS ID_A3, a3.name as NO_A3, a3_cstm.numero_reintentos_c AS NO_REIN_A3C, 
											a3_cstm.fecha_envio_correo_c AS FECHA_ENVIO_A3C, a3_cstm.correo_enviado_c AS ENVIADO_A3C, a3_cstm.marcado_enviar_c AS MARCADO_A3C, 
											pac.id AS ID_PAC,
											CONCAT(pac_cstm.primernombre_c, ' ',pac_cstm.segundonombre_c, ' ',pac_cstm.primerapellido_c, ' ',pac_cstm.segundoapellido_c) AS PACIENTE,
											pac.name AS DOCUMENTO, 
											eps.id AS ID_EPS, eps.emailanexo3 AS EMAIl_EPS, eps.correo AS EMAIL_SUPERSALUD
										 FROM
											gbia3_anexo3 a3
											INNER JOIN gbia3_anexo3_cstm a3_cstm ON a3.id = a3_cstm.id_c
											LEFT JOIN accounts_gbia3_anexo3_1_c rel_a3_pac ON a3.id = rel_a3_pac.accounts_gbia3_anexo3_1gbia3_anexo3_idb
											LEFT JOIN accounts pac ON pac.id = rel_a3_pac.accounts_gbia3_anexo3_1accounts_ida
											LEFT JOIN accounts_cstm pac_cstm ON pac_cstm.id_c = pac.id
											LEFT JOIN eps_eps eps ON eps.id = a3.eps_eps_id_c
										 WHERE
											a3.deleted = 0
											AND (rel_a3_pac.deleted = 0 OR rel_a3_pac.deleted IS NULL)
											AND (pac.deleted = 0 OR pac.deleted IS NULL)
											AND a3_cstm.correo_enviado_c = 1
											AND a3_cstm.marcado_enviar_c = 1
											AND a3_cstm.rebotado_c = 1
											AND a3_cstm.fecha_envio_correo_c IS NOT NULL
											AND a3_cstm.numero_reintentos_c < 4 ");
		
		while ($row3 = $GLOBALS['db']->fetchByAssoc($result3)){
			
			$anexo3 = new GBIA3_ANEXO3();
			$anexo3->retrieve($row3['ID_A3']);
			$numero_envio3 = $anexo3->numero_reintentos_c + 1;
			
			$eps3 = new EPS_EPS();
			$eps3->retrieve($anexo3->eps_eps_id_c);
			
			$usuario3 = new Account();
			$usuario3->retrieve($anexo3->accounts_gbia3_anexo3_1accounts_ida);
			
			$historial3 = new GBIHI_HistorialCorreo();
			$anexo3->load_relationship('gbia3_anexo3_gbihi_historialcorreo_1');
			
			$emailObj3 = new Email(true);
			$defaults3 = $emailObj3->getSystemDefaultEmail();
			$mail3 = new SugarPHPMailer();
			$mail3->setMailerForSystem();
			$mail3->From = $defaults3['email'];
			$mail3->FromName = $defaults3['name'];
			$mail3->Subject = $usuario3->primernombre_c.' '.$usuario3->segundonombre_c.' '.$usuario3->primerapellido_c.' '.$usuario3->segundoapellido_c.' '.$usuario3->tipo_documento_c.' '.$usuario3->name.' - ANEXO TECNICO NO 3 # '.$anexo3->name;
			$mail3->Body = "Cordial Saludo:\n\nTramisalud envía adjunto solicitud de servicio en el presente Anexo Técnico dando cumplimiento a la Resolución 3047 de 2008\n'Por medio de la cual se definen los formatos, mecanismos de envío, procedimientos y términos a ser implementados en las relaciones entre prestadores de servicios de salud y entidades responsables del pago de servicios de salud, definidos en el Decreto 4747 de 2007'.\nSe recuerda que\n'Las entidades responsables del pago deben dar respuesta a la solicitud de autorización de servicios, dentro de los siguientes términos: La respuesta positiva o negativa a la solicitud de autorización de servicios electivos deberá ser comunicada al usuario y enviada al prestador por la entidad responsable del pago, dentro de los cinco (5) días hábiles siguientes al recibo de la solicitud en el Formato Único de Autorización. En el caso de que el servicio requerido sea de carácter prioritario, la respuesta a la solicitud deberá ser comunicada al usuario y enviada al prestador por parte de la entidad responsable del pago dentro de los dos (2) días hábiles siguientes al recibo de la solicitud'.\nResolución 4331 de 2012, articulo 7.";
			$mail3->AddCustomHeader('X-Anexo: '.'AT3P');
			$mail3->AddCustomHeader('X-Numero: '.$numero_envio3);
			$mail3->AddCustomHeader('X-AnexoID: '.$row3['ID_A3']);
			$mail3->AddAttachment("upload\PDF_Anexo3\A3-".$anexo3->name.".pdf", "ANEXO TECNICO NO 3 - Numero de Solicitud ".$anexo3->name.".pdf");
			
			$resultdoc3 = $GLOBALS['db']->query("SELECT
												A3.id AS anexo,
												DOC_REV.id AS documento_recuperar,
												DOC.document_name AS nombre_documento
											FROM
												gbia3_anexo3 A3
											INNER JOIN gbia3_anexo3_cstm A3CSTM ON A3CSTM.id_c = A3.id
											INNER JOIN gbia3_anexo3_documents_1_c REL_A3_DOC ON REL_A3_DOC.gbia3_anexo3_documents_1gbia3_anexo3_ida = A3.id
											INNER JOIN documents DOC ON DOC.id = REL_A3_DOC.gbia3_anexo3_documents_1documents_idb
											INNER JOIN document_revisions DOC_REV ON DOC_REV.document_id = DOC.id
											WHERE
												DOC.status_id = 'Active'
											AND A3.deleted = 0
											AND REL_A3_DOC.deleted = 0
											AND DOC.deleted = 0
											AND DOC_REV.deleted = 0
											AND A3.id = '".$row3['ID_A3']."'");

			while ($rowdoc3 = $GLOBALS['db']->fetchByAssoc($resultdoc3)){	

				$doc3 = $rowdoc3['documento_recuperar'];
				$doc3 = "upload\\".$doc3;

				$doc_name3 = $rowdoc3['nombre_documento'];
			
				$mail3->AddAttachment($doc3, $doc_name3);
			}
			
			$mail3->prepForOutbound();
			
			if($anexo3->numero_reintentos_c == 1 || $anexo3->numero_reintentos_c == 2)
			{	
				$mail3->AddAddress($eps3->emailanexo3);
				//$mail3->AddAddress("yovafiguebui@gmail.com");
				//$mail3->AddAddress("direccion.general@tramisalud.com");
				//$mail3->AddAddress("mailer@coomeva.com");
				
				$fecha_uno = str_replace('/','-', $anexo3->fecha_envio_correo_c);	
				$total_seconds3 = strtotime($now) - strtotime($fecha_uno); 
				$minutes3 = ( ( $total_seconds3  / 60 ) % 60 );
				$time3 = str_pad( $minutes3, 2, "0", STR_PAD_LEFT );

				file_put_contents('C:\\xampp\\htdocs\\tramisalud_dev_gbi\\log_envio_A3.txt',var_export($row3['NO_A3'].' '.$time3.' '.$now.' |A3|EPS|',true),FILE_APPEND);

				if($time3 >= 30)
				{						
					if($mail3->Send())
					{	
						$anexo3->numero_reintentos_c = $anexo3->numero_reintentos_c + 1;				
						$anexo3->fecha_envio_correo_c = $now;
						$anexo3->correo_enviado_c = 1;	
						$anexo3->marcado_enviar_c = 1;											
						$anexo3->rebotado_c = 0;											
						$anexo3->save();
						
						$resultcons3 = $db->query("select count(*) as consecutivo from gbihi_historialcorreo");
						$rowcons3 = $db->fetchByAssoc($resultcons3);		
						$rowcons3["consecutivo"]=$rowcons3["consecutivo"]+1;
						
						$historial3->name= "AT3 - ".$rowcons3["consecutivo"];
						$historial3->correo_envio = $eps3->emailanexo3;
						//$historial3->correo_envio = "yovafiguebui@gmail.com";
						$historial3->fecha_envio_correo = $now;
						$historial3->numero_reintento = $anexo3->numero_reintentos_c;
						$historial3->correo_enviado = 1;
						$historial3->assigned_user_id = 1;
						$historial3->save();

						$anexo3->gbia3_anexo3_gbihi_historialcorreo_1->add($historial3);
						$anexo3->save();
					}
				}
			}
			else
			{
				if($anexo3->numero_reintentos_c == 3)
				{	
					$mail3->AddAddress($eps3->correo);
					//$mail3->AddAddress("elparcero_13@hotmail.com");
					//$mail3->AddAddress("direccion.general@tramisalud.com");
					
					$fecha_uno = str_replace('/','-', $anexo3->fecha_envio_correo_c);	
					$total_seconds3 = strtotime($now) - strtotime($fecha_uno); 
					$minutes3 = ( ( $total_seconds3 / 60 ) % 60 );
					$time3 = str_pad( $minutes3, 2, "0", STR_PAD_LEFT );

					file_put_contents('C:\\xampp\\htdocs\\tramisalud_dev_gbi\\log_envio_A3.txt',var_export($row3['NO_A3'].' '.$time3.' '.$now.' |A3|SuperSalud|',true),FILE_APPEND);

					if($time3 >= 30)
					{						
						if($mail3->Send())
						{	
							$anexo3->numero_reintentos_c = $anexo3->numero_reintentos_c + 1;				
							$anexo3->fecha_envio_correo_c = $now;
							$anexo3->correo_enviado_c = 1;	
							$anexo3->marcado_enviar_c = 1;	
							$anexo3->rebotado_c = 0;		
							$anexo3->save();
							
							$resultcons3 = $db->query("select count(*) as consecutivo from gbihi_historialcorreo");
							$rowcons3 = $db->fetchByAssoc($resultcons3);		
							$rowcons3["consecutivo"]=$rowcons3["consecutivo"]+1;
							
							$historial3->name= "AT3 - ".$rowcons3["consecutivo"];
							$historial3->correo_envio = $eps3->correo;
							//$historial3->correo_envio = "elparcero_13@hotmail.com";
							$historial3->fecha_envio_correo = $now;
							$historial3->numero_reintento = $anexo3->numero_reintentos_c;
							$historial3->correo_enviado = 1;
							$historial3->assigned_user_id = 1;
							$historial3->save();

							$anexo3->gbia3_anexo3_gbihi_historialcorreo_1->add($historial3);
							$anexo3->save();
						}
					}
				}
			}
		}
		
		//Empieza el otro A3NP
		
		$result3np = $GLOBALS['db']->query("SELECT a3np.id AS ID_A3, a3np.name as NO_A3, a3np_cstm.numero_reintentos_c AS NO_REIN_A3C, 
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
											AND a3np_cstm.rebotado_c = 1
											AND a3np_cstm.correo_enviado_c = 1
											AND a3np_cstm.marcado_enviar_c = 1
											AND a3np_cstm.fecha_envio_correo_c IS NOT NULL");
				
		while ($row3np = $GLOBALS['db']->fetchByAssoc($result3np)){
						
			$anexo3np = new gbi_anexo3npos();
			$anexo3np->retrieve($row3np['ID_A3']);
			$numero_envio3np = $anexo3np->numero_reintentos_c + 1;
			
			$eps3np = new EPS_EPS();
			$eps3np->retrieve($anexo3np->eps_eps_id_c);
			
			$usuario3np = new Account();
			$usuario3np->retrieve($anexo3np->accounts_gbi_anexo3npos_1accounts_ida);
			
			$historial3np = new GBIHI_HistorialCorreo();
			$anexo3np->load_relationship('gbi_anexo3npos_gbihi_historialcorreo_1');
			
			$emailObj3np = new Email(true);
			$defaults3np= $emailObj3np->getSystemDefaultEmail();
			$mail3np = new SugarPHPMailer();
			$mail3np->setMailerForSystem();
			$mail3np->From = $defaults3np['email'];
			$mail3np->FromName = $defaults3np['name'];
			$mail3np->Subject = $usuario3np->primernombre_c.' '.$usuario3np->segundonombre_c.' '.$usuario3np->primerapellido_c.' '.$usuario3np->segundoapellido_c.' '.$usuario3np->tipo_documento_c.' '.$usuario3np->name.' - ANEXO TECNICO NO 3 NO POS # '.$anexo3np->name;
			$mail3np->Body = "Cordial Saludo:\n\nTramisalud envía adjunto solicitud de servicio en el presente Anexo Técnico dando cumplimiento a la Resolución 3047 de 2008\n'Por medio de la cual se definen los formatos, mecanismos de envío, procedimientos y términos a ser implementados en las relaciones entre prestadores de servicios de salud y entidades responsables del pago de servicios de salud, definidos en el Decreto 4747 de 2007'.\nSe recuerda que\n'Las entidades responsables del pago deben dar respuesta a la solicitud de autorización de servicios, dentro de los siguientes términos: La respuesta positiva o negativa a la solicitud de autorización de servicios electivos deberá ser comunicada al usuario y enviada al prestador por la entidad responsable del pago, dentro de los cinco (5) días hábiles siguientes al recibo de la solicitud en el Formato Único de Autorización. En el caso de que el servicio requerido sea de carácter prioritario, la respuesta a la solicitud deberá ser comunicada al usuario y enviada al prestador por parte de la entidad responsable del pago dentro de los dos (2) días hábiles siguientes al recibo de la solicitud'.\nResolución 4331 de 2012, articulo 7.";
			$mail3np->AddCustomHeader('X-Anexo: '.'AT3N');
			$mail3np->AddCustomHeader('X-Numero: '.$numero_envio3np);
			$mail3np->AddCustomHeader('X-AnexoID: '.$row3np['ID_A3']);
			$mail3np->AddAttachment("upload\PDF_Anexo3NoPos\A3NOPOS-".$anexo3np->name.".pdf", "ANEXO TECNICO NO 3 NO POS - Numero de Solicitud ".$anexo3np->name.".pdf");
			
			$resultdoc3np = $GLOBALS['db']->query("SELECT
												A3.id AS anexo,
												DOC_REV.id AS documento_recuperar,
												DOC.document_name AS nombre_documento
											FROM
												gbi_anexo3npos A3
											INNER JOIN gbi_anexo3npos_cstm A3CSTM ON A3CSTM.id_c = A3.id
											INNER JOIN gbi_anexo3npos_documents_1_c REL_A3_DOC ON REL_A3_DOC.gbi_anexo3npos_documents_1gbi_anexo3npos_ida = A3.id
											INNER JOIN documents DOC ON DOC.id = REL_A3_DOC.gbi_anexo3npos_documents_1documents_idb
											INNER JOIN document_revisions DOC_REV ON DOC_REV.document_id = DOC.id
											WHERE
												DOC.status_id = 'Active'
											AND A3.deleted = 0
											AND REL_A3_DOC.deleted = 0
											AND DOC.deleted = 0
											AND DOC_REV.deleted = 0
											AND A3.id = '".$row3np['ID_A3']."'");

			while ($rowdoc3np = $GLOBALS['db']->fetchByAssoc($resultdoc3np)){	

				$doc3np = $rowdoc3np['documento_recuperar'];
				$doc3np = "upload\\".$doc3np;

				$doc_name3np = $rowdoc3np['nombre_documento'];
			
				$mail3np->AddAttachment($doc3np, $doc_name3np);
			}
			
			$mail3np->prepForOutbound();
			
			if($anexo3np->numero_reintentos_c == 1 || $anexo3np->numero_reintentos_c == 2)
			{	
				$mail3np->AddAddress($eps3np->emailanexo3);
				//$mail3np->AddAddress("yovafiguebui@gmail.com");
				//$mail3np->AddAddress("direccion.general@tramisalud.com");
				//$mail3np->AddAddress("mailer@coomeva.com");
				
				$fecha_uno = str_replace('/','-', $anexo3np->fecha_envio_correo_c);				
				$total_seconds3np = strtotime($now) - strtotime($fecha_uno); 
				$minutes3np = ( ( $total_seconds3np / 60 ) % 60 );
				$time3np = str_pad( $minutes3np, 2, "0", STR_PAD_LEFT );

				file_put_contents('C:\\xampp\\htdocs\\tramisalud_dev_gbi\\log_envio_A3NOPOS.txt',var_export($row3np['NO_A3'].' '.$time3np.' '.$now.' |A3NOPOS|EPS|',true),FILE_APPEND);

				if($time3np >= 30)
				{						
					if($mail3np->Send())
					{	
						$anexo3np->numero_reintentos_c = $anexo3np->numero_reintentos_c + 1;				
						$anexo3np->fecha_envio_correo_c = $now;
						$anexo3np->correo_enviado_c = 1;	
						$anexo3np->marcado_enviar_c = 1;	
						$anexo3np->rebotado_c = 0;																	
						$anexo3np->save();
						
						$resultcons3np = $db->query("select count(*) as consecutivo from gbihi_historialcorreo");
						$rowcons3np = $db->fetchByAssoc($resultcons3np);		
						$rowcons3np["consecutivo"]=$rowcons3np["consecutivo"]+1;
						
						$historial3np->name= "AT3NP - ".$rowcons3np["consecutivo"];
						$historial3np->correo_envio = $eps3np->emailanexo3;
						//$historial3np->correo_envio = "yovafiguebui@gmail.com";
						$historial3np->fecha_envio_correo = $now;
						$historial3np->numero_reintento = $anexo3np->numero_reintentos_c;
						$historial3np->correo_enviado = 1;
						$historial3np->assigned_user_id = 1;
						$historial3np->save();

						$anexo3np->gbi_anexo3npos_gbihi_historialcorreo_1->add($historial3np);
						$anexo3np->save();
					}
				}
			}
			else
			{
				if($anexo3np->numero_reintentos_c == 3)
				{	
					$mail3np->AddAddress($eps3np->correo);
					//$mail3np->AddAddress("elparcero_13@hotmail.com");
					//$mail3np->AddAddress("direccion.general@tramisalud.com");
					
					$fecha_uno = str_replace('/','-', $anexo3np->fecha_envio_correo_c);				
					$total_seconds3np = strtotime($now) - strtotime($fecha_uno); 
					$minutes3np = ( ( $total_seconds3np / 60 ) % 60 );
					$time3np = str_pad( $minutes3np, 2, "0", STR_PAD_LEFT );

					file_put_contents('C:\\xampp\\htdocs\\tramisalud_dev_gbi\\log_envio_A3NOPOS.txt',var_export($row3np['NO_A3'].' '.$time3np.' '.$now.' |A3NOPOS|SuperSalud|',true),FILE_APPEND);

					if($time3np >= 30)
					{						
						if($mail3np->Send())
						{	
							$anexo3np->numero_reintentos_c = $anexo3np->numero_reintentos_c + 1;				
							$anexo3np->fecha_envio_correo_c = $now;
							$anexo3np->correo_enviado_c = 1;	
							$anexo3np->marcado_enviar_c = 1;
							$anexo3np->rebotado_c = 0;									
							$anexo3np->save();
							
							$resultcons3np = $db->query("select count(*) as consecutivo from gbihi_historialcorreo");
							$rowcons3np = $db->fetchByAssoc($resultcons3np);		
							$rowcons3np["consecutivo"]=$rowcons3np["consecutivo"]+1;
							
							$historial3np->name= "AT3NP - ".$rowcons3np["consecutivo"];
							$historial3np->correo_envio = $eps3np->correo;
							//$historial3np->correo_envio = "elparcero_13@hotmail.com";
							$historial3np->fecha_envio_correo = $now;
							$historial3np->numero_reintento = $anexo3np->numero_reintentos_c;
							$historial3np->correo_enviado = 1;
							$historial3np->assigned_user_id = 1;
							$historial3np->save();

							$anexo3np->gbi_anexo3npos_gbihi_historialcorreo_1->add($historial3np);
							$anexo3np->save();
						}
					}
				}
			}
		}
		
		//Empieza el otro A9
		
		$result9 = $GLOBALS['db']->query("SELECT a9.id AS ID_A9, a9.name as NO_A9, a9_cstm.numero_reintentos_c AS NO_REIN_A9C, 
											a9_cstm.fecha_envio_correo_c AS FECHA_ENVIO_A9C, a9_cstm.correo_enviado_c AS ENVIADO_A9C, a9_cstm.marcado_enviar_c AS MARCADO_A9C, 
											pac.id AS ID_PAC,
											CONCAT(pac_cstm.primernombre_c, ' ',pac_cstm.segundonombre_c, ' ',pac_cstm.primerapellido_c, ' ',pac_cstm.segundoapellido_c) AS PACIENTE,
											pac.name AS DOCUMENTO, 
											eps.id AS ID_EPS, eps.emailanexo3 AS EMAIl_EPS, eps.correo AS EMAIL_SUPERSALUD
										 FROM
											gbi_anexo9 a9
											INNER JOIN gbi_anexo9_cstm a9_cstm ON a9.id = a9_cstm.id_c
											LEFT JOIN accounts_gbi_anexo9_1_c rel_a9_pac ON a9.id = rel_a9_pac.accounts_gbi_anexo9_1gbi_anexo9_idb
											LEFT JOIN accounts pac ON pac.id = rel_a9_pac.accounts_gbi_anexo9_1accounts_ida
											LEFT JOIN accounts_cstm pac_cstm ON pac_cstm.id_c = pac.id
											LEFT JOIN eps_eps eps ON eps.id = a9.eps_eps_id_c
										 WHERE
											a9.deleted = 0
											AND (rel_a9_pac.deleted = 0 OR rel_a9_pac.deleted IS NULL)
											AND (pac.deleted = 0 OR pac.deleted IS NULL)
											AND a9_cstm.rebotado_c = 1
											AND a9_cstm.correo_enviado_c = 1
											AND a9_cstm.marcado_enviar_c = 1
											AND a9_cstm.fecha_envio_correo_c IS NOT NULL");
				
		while ($row9 = $GLOBALS['db']->fetchByAssoc($result9)){
						
			$anexo9 = new gbi_Anexo9();
			$anexo9->retrieve($row9['ID_A9']);
			$numero_envio9 = $anexo9->numero_reintentos_c + 1;
			
			$eps9 = new EPS_EPS();
			$eps9->retrieve($anexo9->eps_eps_id_c);
			
			$usuario9 = new Account();
			$usuario9->retrieve($anexo9->accounts_gbi_anexo9_1accounts_ida);
			
			$historial9 = new GBIHI_HistorialCorreo();
			$anexo9->load_relationship('gbi_anexo9_gbihi_historialcorreo_1');
			
			$emailObj9 = new Email(true);
			$defaults9= $emailObj9->getSystemDefaultEmail();
			$mail9 = new SugarPHPMailer();
			$mail9->setMailerForSystem();
			$mail9->From = $defaults9['email'];
			$mail9->FromName = $defaults9['name'];
			$mail9->Subject = $usuario9->primernombre_c.' '.$usuario9->segundonombre_c.' '.$usuario9->primerapellido_c.' '.$usuario9->segundoapellido_c.' '.$usuario9->tipo_documento_c.' '.$usuario9->name.' - ANEXO TECNICO NO 9 NO POS # '.$anexo9->name;
			$mail9->Body = "Cordial Saludo:\n\nTramisalud envía adjunto solicitud de servicio en el presente Anexo Técnico dando cumplimiento a la Resolución 3047 de 2008\n'Por medio de la cual se definen los formatos, mecanismos de envío, procedimientos y términos a ser implementados en las relaciones entre prestadores de servicios de salud y entidades responsables del pago de servicios de salud, definidos en el Decreto 4747 de 2007'.\nSe recuerda que\n'Las entidades responsables del pago deben dar respuesta a la solicitud de autorización de servicios, dentro de los siguientes términos: La respuesta positiva o negativa a la solicitud de autorización de servicios electivos deberá ser comunicada al usuario y enviada al prestador por la entidad responsable del pago, dentro de los cinco (5) días hábiles siguientes al recibo de la solicitud en el Formato Único de Autorización. En el caso de que el servicio requerido sea de carácter prioritario, la respuesta a la solicitud deberá ser comunicada al usuario y enviada al prestador por parte de la entidad responsable del pago dentro de los dos (2) días hábiles siguientes al recibo de la solicitud'.\nResolución 4331 de 2012, articulo 7.";
			$mail9->AddCustomHeader('X-Anexo: '.'AT9P');
			$mail9->AddCustomHeader('X-Numero: '.$numero_envio9);
			$mail9->AddCustomHeader('X-AnexoID: '.$row9['ID_A9']);
			$mail9->AddAttachment("upload\PDF_Anexo9\A9-".$anexo9->name.".pdf", "ANEXO TECNICO NO 9 NO POS - Numero de Solicitud ".$anexo9->name.".pdf");
			
			$resultdoc9 = $GLOBALS['db']->query("SELECT
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
											AND A9.id = '".$row9['ID_A9']."'");

			while ($rowdoc9 = $GLOBALS['db']->fetchByAssoc($resultdoc9)){	

				$doc9 = $rowdoc9['documento_recuperar'];
				$doc9 = "upload\\".$doc9;

				$doc_name9 = $rowdoc9['nombre_documento'];
			
				$mail9->AddAttachment($doc9, $doc_name9);
			}		
			
			$mail9->prepForOutbound();
			
			if($anexo9->numero_reintentos_c == 1 || $anexo9->numero_reintentos_c == 2)
			{	
				$mail9->AddAddress($eps9->emailanexo3);
				//$mail9->AddAddress("yovafiguebui@gmail.com");
				//$mail9->AddAddress("direccion.general@tramisalud.com");
				//$mail9->AddAddress("mailer@coomeva.com");
				
				$fecha_uno = str_replace('/','-', $anexo9->fecha_envio_correo_c);				
				$total_seconds9 = strtotime($now) - strtotime($fecha_uno); 
				$minutes9 = ( ( $total_seconds9 / 60 ) % 60 );
				$time9 = str_pad( $minutes9, 2, "0", STR_PAD_LEFT );

				file_put_contents('C:\\xampp\\htdocs\\tramisalud_dev_gbi\\log_envio_A9.txt',var_export($row9['NO_A9'].' '.$time9.' '.$now.' |A9|EPS|',true),FILE_APPEND);

				if($time9 >= 30)
				{						
					if($mail9->Send())
					{	
						$anexo9->numero_reintentos_c = $anexo9->numero_reintentos_c + 1;				
						$anexo9->fecha_envio_correo_c = $now;
						$anexo9->correo_enviado_c = 1;	
						$anexo9->marcado_enviar_c = 1;	
						$anexo9->rebotado_c = 0;																	
						$anexo9->save();
						
						$resultcons9 = $db->query("select count(*) as consecutivo from gbihi_historialcorreo");
						$rowcons9 = $db->fetchByAssoc($resultcons9);		
						$rowcons9["consecutivo"]=$rowcons9["consecutivo"]+1;
						
						$historial9->name= "AT9 - ".$rowcons9["consecutivo"];
						$historial9->correo_envio = $eps9->emailanexo3;
						//$historial9->correo_envio = "yovafiguebui@gmail.com";
						$historial9->fecha_envio_correo = $now;
						$historial9->numero_reintento = $anexo9->numero_reintentos_c;
						$historial9->correo_enviado = 1;
						$historial9->assigned_user_id = 1;
						$historial9->save();

						$anexo9->gbi_anexo9_gbihi_historialcorreo_1->add($historial9);
						$anexo9->save();
					}
				}
			}
			else
			{
				if($anexo9->numero_reintentos_c == 3)
				{	
					$mail9->AddAddress($eps9->correo);
					//$mail9->AddAddress("elparcero_13@hotmail.com");
					//$mail9->AddAddress("direccion.general@tramisalud.com");
					
					$fecha_uno = str_replace('/','-', $anexo9->fecha_envio_correo_c);				
					$total_seconds9 = strtotime($now) - strtotime($fecha_uno); 
					$minutes9 = ( ( $total_seconds9 / 60 ) % 60 );
					$time9 = str_pad( $minutes9, 2, "0", STR_PAD_LEFT );

					file_put_contents('C:\\xampp\\htdocs\\tramisalud_dev_gbi\\log_envio_A9.txt',var_export($row9['NO_A9'].' '.$time9.' '.$now.' |A9|SuperSalud|',true),FILE_APPEND);

					if($time9 >= 30)
					{						
						if($mail9->Send())
						{	
							$anexo9->numero_reintentos_c = $anexo9->numero_reintentos_c + 1;				
							$anexo9->fecha_envio_correo_c = $now;
							$anexo9->correo_enviado_c = 1;	
							$anexo9->marcado_enviar_c = 1;
							$anexo9->rebotado_c = 0;									
							$anexo9->save();
							
							$resultcons9 = $db->query("select count(*) as consecutivo from gbihi_historialcorreo");
							$rowcons9 = $db->fetchByAssoc($resultcons9);		
							$rowcons9["consecutivo"]=$rowcons9["consecutivo"]+1;
							
							$historial9->name= "AT3NP - ".$rowcons9["consecutivo"];
							$historial9->correo_envio = $eps9->correo;
							//$historial9->correo_envio = "elparcero_13@hotmail.com";
							$historial9->fecha_envio_correo = $now;
							$historial9->numero_reintento = $anexo9->numero_reintentos_c;
							$historial9->correo_enviado = 1;
							$historial9->assigned_user_id = 1;
							$historial9->save();

							$anexo9->gbi_anexo9_gbihi_historialcorreo_1->add($historial9);
							$anexo9->save();
						}
					}
				}
			}
		}
	}
}
	
?>