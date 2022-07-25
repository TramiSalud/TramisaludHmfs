<?php

set_include_path(realpath('include/') . PATH_SEPARATOR . get_include_path());

class envio_de_correos_anexo3_each4h{

    function envio_de_correos_anexo3_each4h(){

		$result = $GLOBALS['db']->query("SELECT a3.id AS ID_A3, a3.name as NO_A3, a3_cstm.numero_reintentos_c AS NO_REIN_A3C,
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
											AND  a3_cstm.numero_reintentos_c < 3
                      AND a3_cstm.fecha_envio_correo_c IS NOT NULL  and  a3_cstm.fecha_envio_correo_c between '2021-07-01' and '2050-04-09' order by a3_cstm.fecha_envio_correo_c desc ");

		require_once("include/SugarPHPMailerExt.php");

		$now = date("Y-m-d H:i:s", (strtotime ("+5 Hours")));
		$nowg = date("Y-m-d H:i:s");
		while ($row = $GLOBALS['db']->fetchByAssoc($result)){

			$db = DBManagerFactory::getInstance();

			$anexo3 = new GBIA3_ANEXO3();
			$anexo3->retrieve($row['ID_A3']);

			$eps = new EPS_EPS();
			$eps->retrieve($anexo3->eps_eps_id_c);

			$usuario = new Account();
			$usuario->retrieve($anexo3->accounts_gbia3_anexo3_1accounts_ida);

			$historial = new GBIHI_HistorialCorreo();
			$anexo3->load_relationship('gbia3_anexo3_gbihi_historialcorreo_1');

			$emailObj = new Email(true);
			$defaults = $emailObj->getSystemDefaultEmail();
			$mail = new SugarPHPMailerExt();
			if($anexo3->tiposerviciosolicitado == 2){
				$mail->setMailerAlternative('hospitalizacion');
			} else {
				$mail->setMailerAlternative('electivo');
				//$mail->setMailerForSystem();
				//$mail->From = $defaults['email'];
				//$mail->FromName = $defaults['name'];
			}
			$mail->Subject = $usuario->primernombre_c.' '.$usuario->segundonombre_c.' '.$usuario->primerapellido_c.' '.$usuario->segundoapellido_c.' '.$usuario->tipo_documento_c.' '.$usuario->name.' - ANEXO TECNICO NO 3 # '.$anexo3->name;
			$mail->Body = "Cordial Saludo:\n\nTramisalud envía adjunto solicitud de servicio en el presente Anexo Técnico dando cumplimiento a la Resolución 3047 de 2008\n'Por medio de la cual se definen los formatos, mecanismos de envío, procedimientos y términos a ser implementados en las relaciones entre prestadores de servicios de salud y entidades responsables del pago de servicios de salud, definidos en el Decreto 4747 de 2007'.\nSe recuerda que\n'Las entidades responsables del pago deben dar respuesta a la solicitud de autorización de servicios, dentro de los siguientes términos: La respuesta positiva o negativa a la solicitud de autorización de servicios electivos deberá ser comunicada al usuario y enviada al prestador por la entidad responsable del pago, dentro de los cinco (5) días hábiles siguientes al recibo de la solicitud en el Formato Único de Autorización. En el caso de que el servicio requerido sea de carácter prioritario, la respuesta a la solicitud deberá ser comunicada al usuario y enviada al prestador por parte de la entidad responsable del pago dentro de los dos (2) días hábiles siguientes al recibo de la solicitud'.\nResolución 4331 de 2012, articulo 7.";
			$mail->AddAttachment("upload\PDF_Anexo3\A3-".$anexo3->name.".pdf", "ANEXO TECNICO NO 3 - Numero de Solicitud ".$anexo3->name.".pdf");
			$mail->prepForOutbound();

			if($anexo3->numero_reintentos_c == 1 || $anexo3->numero_reintentos_c == 2 )
			{
				$mail->AddAddress($eps->emailanexo3);
				$fecha_uno = str_replace('/','-', $anexo3->fecha_envio_correo_c);
				#$total_seconds = strtotime($now) - strtotime($fecha_uno);
			
				//$fecha1 = new DateTime($fecha_uno);
				//$fecha2 = new DateTime($nowg);

				$minutos = (strtotime($fecha_uno. "-5 Hours")-strtotime($nowg))/60;
				$minutos = abs($minutos); 
				$minutos = floor($minutos);

        		#$intervalo = $fecha1->diff($fecha2);
        		//$minutes = ( ( $total_seconds / 60 ) % 60 );
        		#$hours = $intervalo->format('%H');
				#$time = str_pad( $hours, 2, "0", STR_PAD_LEFT );
				
				if($minutos >= 30)
				{
					if($mail->Send())
					{
						$anexo3->numero_reintentos_c = $anexo3->numero_reintentos_c + 1;
						$anexo3->fecha_envio_correo_c = $nowg;
						$anexo3->correo_enviado_c = 1;
						$anexo3->marcado_enviar_c = 1;
						$anexo3->save();

						$resultcons = $db->query("select count(*) as consecutivo from gbihi_historialcorreo");
						$rowcons = $db->fetchByAssoc($resultcons);
						$rowcons["consecutivo"]=$rowcons["consecutivo"]+1;

						$historial->name= "AT3 - ".$rowcons["consecutivo"];
						$historial->enviado_de_c = $mail->From;
						$historial->correo_envio = $eps->emailanexo3;
						$historial->fecha_envio_correo = $nowg;
						$historial->numero_reintento = $anexo3->numero_reintentos_c;
						$historial->correo_enviado = 1;
						$historial->assigned_user_id = 1;
						$historial->enviado_de_c = $mail->From;
						$historial->save();

						$anexo3->gbia3_anexo3_gbihi_historialcorreo_1->add($historial);
						$anexo3->save();
					} else {
						echo "Anexo3 Id: ". $anexo3->id. " Name: ". $anexo3->id ."Fecha 1: ". $fecha_uno . " Fecha 2:". $nowg. " - Minutos " . $minutos. " ". $mail->From. "\n";
					}
				}
			}
			else
			{
				/*
				if($anexo3->numero_reintentos_c == 3)
				{
					$mail->AddAddress($eps->correo);

          			$fecha_uno = str_replace('/','-', $anexo3->fecha_envio_correo_c);
					$total_seconds = strtotime($now) - strtotime($fecha_uno);
					
					$fecha1 = new DateTime($fecha_uno);
					$fecha2 = new DateTime($now);

	        		$intervalo = $fecha1->diff($fecha2);
	        		//$minutes = ( ( $total_seconds / 60 ) % 60 );
	        		$hours = $intervalo->format('%H');
					$time = str_pad( $hours, 2, "0", STR_PAD_LEFT );


					if($time >= 4)
					{
						if($mail->Send())
						{
							$anexo3->numero_reintentos_c = $anexo3->numero_reintentos_c + 1;
							$anexo3->fecha_envio_correo_c = $now;
							$anexo3->correo_enviado_c = 1;
							$anexo3->marcado_enviar_c = 1;
							$anexo3->save();

							$resultcons = $db->query("select count(*) as consecutivo from gbihi_historialcorreo");
							$rowcons = $db->fetchByAssoc($resultcons);
							$rowcons["consecutivo"]=$rowcons["consecutivo"]+1;

							$historial->name= "AT3 - ".$rowcons["consecutivo"];
							$historial->correo_envio = $eps->correo;
							$historial->fecha_envio_correo = $now;
							$historial->numero_reintento = $anexo3->numero_reintentos_c;
							$historial->correo_enviado = 1;
							$historial->assigned_user_id = 1;
							$historial->save();

							$anexo3->gbia3_anexo3_gbihi_historialcorreo_1->add($historial);
							$anexo3->save();
						}
					}
				}
				*/
			}
		}
	}
}

?>
