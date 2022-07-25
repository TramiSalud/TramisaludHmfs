<?php

set_include_path(realpath('include/') . PATH_SEPARATOR . get_include_path());

class envio_de_correos_anexo2_each4h{

    function envio_de_correos_anexo2_each4h(){

		$result = $GLOBALS['db']->query("SELECT a2.id AS ID_A2, a2.name as NO_A2, a2_cstm.numero_reintentos_c AS NO_REIN_A2C,
											a2_cstm.fecha_envio_correo_c AS FECHA_ENVIO_A2C, a2_cstm.correo_enviado_c AS ENVIADO_A2C, a2_cstm.marcado_enviar_c AS MARCADO_A2C,
											pac.id AS ID_PAC,
											CONCAT(pac_cstm.primernombre_c, ' ',pac_cstm.segundonombre_c, ' ',pac_cstm.primerapellido_c, ' ',pac_cstm.segundoapellido_c) AS PACIENTE,
											pac.name AS DOCUMENTO,
											eps.id AS ID_EPS, eps.emailanexo3 AS EMAIl_EPS, eps.correo AS EMAIL_SUPERSALUD
										 FROM
											gbian_anexo2 a2
											LEFT JOIN gbian_anexo2_cstm a2_cstm ON a2.id = a2_cstm.id_c
											LEFT JOIN gbian_anexo2_accounts_c rel_a2_pac ON a2.id = rel_a2_pac.gbian_anexo2_accountsgbian_anexo2_idb
											LEFT JOIN accounts pac ON pac.id = rel_a2_pac.gbian_anexo2_accountsaccounts_ida
											LEFT JOIN accounts_cstm pac_cstm ON pac_cstm.id_c = pac.id
											LEFT JOIN eps_eps eps ON eps.id = a2.eps_eps_id_c
										 WHERE
											a2.deleted = 0
											AND (rel_a2_pac.deleted = 0 OR rel_a2_pac.deleted IS NULL)
											AND (pac.deleted = 0 OR pac.deleted IS NULL)
											AND a2_cstm.numero_reintentos_c <= 3
											AND a2_cstm.fecha_envio_correo_c IS NOT NULL  and  a2_cstm.fecha_envio_correo_c between '2019-07-15' and '2050-04-09' 
											order by  a2_cstm.fecha_envio_correo_c DESC");

		require_once("include/SugarPHPMailerExt.php");

		$now = date("Y-m-d H:i:s", (strtotime ("+5 Hours")));
		$nowg = date("Y-m-d H:i:s");

		while ($row = $GLOBALS['db']->fetchByAssoc($result)){

			$db = DBManagerFactory::getInstance();

			$anexo2 = new gbian_Anexo2();
			$anexo2->retrieve($row['ID_A2']);

			$eps = new EPS_EPS();
			$eps->retrieve($anexo2->eps_eps_id_c);

			$usuario = new Account();
			$usuario->retrieve($anexo2->gbian_anexo2_accountsaccounts_ida);

			$historial = new GBIHI_HistorialCorreo();
			$anexo2->load_relationship('gbian_anexo2_gbihi_historialcorreo_1');

			$emailObj = new Email(true);
			$defaults = $emailObj->getSystemDefaultEmail();
			$mail = new SugarPHPMailerExt();

			$mail->setMailerAlternative('hospitalizacion');
			$mail->Subject = $usuario->primernombre_c.' '.$usuario->segundonombre_c.' '.$usuario->primerapellido_c.' '.$usuario->segundoapellido_c.' '.$usuario->tipo_documento_c.' '.$usuario->name.' - ANEXO TECNICO NO 2 # '.$anexo2->name;
			$mail->Body = "Cordial Saludo:\n\nTramisalud envía adjunto solicitud de servicio en el presente Anexo Técnico dando cumplimiento a la Resolución 3047 de 2008\n'Por medio de la cual se definen los formatos, mecanismos de envío, procedimientos y términos a ser implementados en las relaciones entre prestadores de servicios de salud y entidades responsables del pago de servicios de salud, definidos en el Decreto 4747 de 2007'.\nSe recuerda que\n'Las entidades responsables del pago deben dar respuesta a la solicitud de autorización de servicios, dentro de los siguientes términos: La respuesta positiva o negativa a la solicitud de autorización de servicios electivos deberá ser comunicada al usuario y enviada al prestador por la entidad responsable del pago, dentro de los cinco (5) días hábiles siguientes al recibo de la solicitud en el Formato Único de Autorización. En el caso de que el servicio requerido sea de carácter prioritario, la respuesta a la solicitud deberá ser comunicada al usuario y enviada al prestador por parte de la entidad responsable del pago dentro de los dos (2) días hábiles siguientes al recibo de la solicitud'.\nResolución 4331 de 2012, articulo 7.";
			$mail->AddAttachment("upload\PDF_Anexo2\A2-".$anexo2->name.".pdf", "ANEXO TECNICO NO 2 - Numero de Solicitud ".$anexo2->name.".pdf");
			$mail->prepForOutbound();

			if($anexo2->numero_reintentos_c == 1 || $anexo2->numero_reintentos_c == 2)
			{
				$mail->AddAddress($eps->emailanexo2);

				$fecha_uno = str_replace('/','-', $anexo2->fecha_envio_correo_c);
				#$fecha_uno = date('Y-m-d', strtotime($fecha_uno . " -5 Hours"));
				#$total_seconds = strtotime($now) - strtotime($fecha_uno);
				
				#$fecha1 = new DateTime($fecha_uno);
				#$fecha2 = new DateTime($now);

        		#$intervalo = $fecha1->diff($fecha2);
        		//$minutes = ( ( $total_seconds / 60 ) % 60 );
        		#$hours = $intervalo->format('%H');
				#$time = str_pad( $hours, 2, "0", STR_PAD_LEFT );

				$minutos = (strtotime($fecha_uno."-5 Hours")-strtotime($nowg))/60;
				$minutos = abs($minutos); 
				$minutos = floor($minutos);
				echo "Anexo2 Id: ". $anexo2->id. " Fecha 1: ". $fecha_uno . " Fecha 2:". $nowg. " - Minutos " . $minutos. "\n";
				if($minutos >= 30)
				{
					if($mail->Send())
					{
						$anexo2->numero_reintentos_c = $anexo2->numero_reintentos_c + 1;
						$anexo2->fecha_envio_correo_c = $nowg;
						$anexo2->correo_enviado_c = 1;
						$anexo2->marcado_enviar_c = 1;
						$anexo2->save();

						$resultcons = $db->query("select count(*) as consecutivo from gbihi_historialcorreo");
						$rowcons = $db->fetchByAssoc($resultcons);
						$rowcons["consecutivo"]=$rowcons["consecutivo"]+1;

						$historial->name= "AT2 - ".$rowcons["consecutivo"];
						$historial->correo_envio = $eps->emailanexo2;
						$historial->enviado_de_c = $mail->From;
						$historial->fecha_envio_correo = $nowg;
						$historial->numero_reintento = $anexo2->numero_reintentos_c;
						$historial->correo_enviado = 1;
						$historial->assigned_user_id = 1;
						$historial->enviado_de_c = $mail->From;
						$historial->save();

						$anexo2->gbian_anexo2_gbihi_historialcorreo_1->add($historial);
						$anexo2->save();
					}
				}
			}
			else
			{
				
				if($anexo2->numero_reintentos_c == 3)
				{
					$mail->AddAddress($eps->correo);

	          		$fecha_uno = str_replace('/','-', $anexo2->fecha_envio_correo_c);
					$total_seconds = strtotime($now) - strtotime($fecha_uno);
					
					$fecha1 = new DateTime($fecha_uno);
					$fecha2 = new DateTime($now);

	        		$intervalo = $fecha1->diff($fecha2);
	        		//$minutes = ( ( $total_seconds / 60 ) % 60 );
	        		$hours = $intervalo->format('%H');
					$time = str_pad( $hours, 2, "0", STR_PAD_LEFT );


					if($time >= 4)
					{
						/*
						if($mail->Send())
						{
							$anexo2->numero_reintentos_c = $anexo2->numero_reintentos_c + 1;
							$anexo2->fecha_envio_correo_c = $now;
							$anexo2->correo_enviado_c = 1;
							$anexo2->marcado_enviar_c = 1;
							$anexo2->save();

							$resultcons = $db->query("select count(*) as consecutivo from gbihi_historialcorreo");
							$rowcons = $db->fetchByAssoc($resultcons);
							$rowcons["consecutivo"]=$rowcons["consecutivo"]+1;

							$historial->name= "AT2 - ".$rowcons["consecutivo"];
							$historial->correo_envio = $eps->correo;
							$historial->fecha_envio_correo = $now;
							$historial->numero_reintento = $anexo2->numero_reintentos_c;
							$historial->correo_enviado = 1;
							$historial->assigned_user_id = 1;
							$historial->save();

							$anexo2->gbian_anexo2_gbihi_historialcorreo_1->add($historial);
							$anexo2->save();
						}
						*/
					}
					
				}
			}
		}
	}
}

?>
