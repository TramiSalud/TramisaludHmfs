<?php
class rebotes_de_correo{
	 
	function rebotes_de_correo(){
		# define variables
		$mail_box = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX'; //imap example
		$mail_user = 'ahhmfs@tramisalud.com'; //mail username
		$mail_pass = 'autohospi2014'; //mail password
		$delete = '5'; //deletes emails with at least this number of failures
		
		# connect to mailbox
		$conn = imap_open ($mail_box, $mail_user, $mail_pass) or die(imap_last_error());
		
		$emails = imap_search($conn, 'SINCE '. date('d-M-Y',strtotime("-2 day")));
		$num_msgs = count($emails);
		# start bounce class
		require_once('bounce_driver.class.php');
		$bouncehandler = new Bouncehandler();
		
		# get the failures
		$email_addresses = array();
		$delete_addresses = array();
		rsort($emails);
		
		foreach($emails as $n){
		//for ($n=$num_msgs;$n>=1;$n--) {
			$header  =imap_fetchheader($conn, $n);
			$body = imap_body($conn, $n);
			$bounce = $header. $body; //entire message
			$multiArray = $bouncehandler->get_the_facts($bounce);
			if (!empty($multiArray[0]['action']) && !empty($multiArray[0]['status']) && !empty($multiArray[0]['recipient']) ) {
				if ($multiArray[0]['action']=='failed') {
					$anexo = checkForEmailIdentifier($body, 'X-Anexo: ');
					$anexoID = checkForEmailIdentifier($body, 'X-AnexoID: ');
					$numero = checkForEmailIdentifier($body, 'X-Numero: ');
					
					switch($anexo){
						case "AT2P":
							if(!empty($anexoID)){
								$anexo2 = new gbian_Anexo2();
								$anexo2->retrieve($anexoID);
								if($anexo2->numero_reintentos_c == $numero)
								{								
									$anexo2->rebotado_c = 1;
									$anexo2->save();
								}
							}							
							break;
						case "AT3P":
							if(!empty($anexoID)){
								$anexo3 = new GBIA3_ANEXO3();
								$anexo3->retrieve($anexoID);
								if($anexo3->numero_reintentos_c == $numero)
								{								
									$anexo3->rebotado_c = 1;
									$anexo3->save();
								}
							}
							break;
						case "AT3N":
							if(!empty($anexoID)){
								$anexo3np = new gbi_anexo3npos();
								$anexo3np->retrieve($anexoID);
								if($anexo3np->numero_reintentos_c == $numero)
								{								
									$anexo3np->rebotado_c = 1;
									$anexo3np->save();
								}
							}
							break;
						case "AT9P":
							if(!empty($anexoID)){
								$anexo9 = new gbi_Anexo9();
								$anexo9->retrieve($anexoID);
								if($anexo9->numero_reintentos_c == $numero)
								{								
									$anexo9->rebotado_c = 1;
									$anexo9->save();
								}								
							}
							break;
					}
					$email_addresses[$multiArray[0]['recipient']]++; //increment number of failures
					$delete_addresses[$multiArray[0]['recipient']][] = $n; //add message to delete array
				} 
			} 
		} 
		imap_close($conn);
	}
}

function checkForEmailIdentifier( $eml, $identifier){
		$input = preg_quote($identifier, '~'); // don't forget to quote input string!
		$message = explode("\r\n", $eml);
		$result = preg_grep('~' . $input . '~', $message);
		$value = str_replace( $identifier, "" ,  $result);
		return  implode($value);
	}