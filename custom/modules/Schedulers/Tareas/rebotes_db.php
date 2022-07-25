<?php

# define variables
$mail_box = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX'; //imap example
$mail_user = 'ahhmfs1@tramisalud.com'; //mail username
$mail_pass = 'ahhmfs1@2015'; //mail password
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
	if (!empty($multiArray[0]['action']) ) { //&& !empty($multiArray[0]['status']) && !empty($multiArray[0]['recipient']) ) {
		if ($multiArray[0]['action']=='failed') {
			$anexo = checkForEmailIdentifier($body, 'X-Anexo: ');
			$anexoID = checkForEmailIdentifier($body, 'X-AnexoID: ');
			$numero = checkForEmailIdentifier($body, 'X-Numero: ');
			echo $anexoID."\n";
			switch($anexo){
				case "AT2P":
					if(!empty($anexoID)){
						$link =  mysql_connect('localhost', 'root','Tr4m1s4lud2017*') or die("Error Conexion");
						mysql_select_db("ts_hmfs");
						
						$query = "SELECT * FROM gbian_anexo2_cstm where id_c ='".$anexoID."'";
						$result = mysql_query($query);
						$line = mysql_fetch_array($result, MYSQL_ASSOC);
						echo "intentos:".$line['numero_reintentos_c']."\n";
						echo "numero:".$numero."\n";
						if($line['numero_reintentos_c'] == $numero)
						{	
							echo "Entro Aqui \n";				
							mysql_query("update gbian_anexo2_cstm set rebotado_c = 1 where id_c = '". $anexoID."' ");
						}
						mysql_free_result($result);
						mysql_close($link);
					}							
					break;
				case "AT3P":
					if(!empty($anexoID)){
						$link =  mysql_connect('localhost', 'root','Tr4m1s4lud2017*') or die("Error Conexion");
						mysql_select_db("ts_hmfs");
						
						$query = "SELECT * FROM gbia3_anexo3_cstm where id_c = '".$anexoID."'";
						$result = mysql_query($query);
						$line = mysql_fetch_array($result, MYSQL_ASSOC);

						if($line['numero_reintentos_c'] == $numero)
						{					
							mysql_query("update gbia3_anexo3_cstm set rebotado_c = 1 where id_c = '". $anexoID."' ");
						}
						mysql_free_result($result);
						mysql_close($link);
					}
					break;
				case "AT3N":
					if(!empty($anexoID)){
						
					}
					break;
				case "AT9P":
					if(!empty($anexoID)){
													
					}
					break;
			}
			$email_addresses[$multiArray[0]['recipient']]++; //increment number of failures
			$delete_addresses[$multiArray[0]['recipient']][] = $n; //add message to delete array
		} 
	} 
} 
imap_close($conn);


function checkForEmailIdentifier( $eml, $identifier){
	$input = preg_quote($identifier, '~'); // don't forget to quote input string!
	$message = explode("\r\n", $eml);
	$result = preg_grep('~' . $input . '~', $message);
	if( is_array($result)){
		$value = str_replace( $identifier, "" ,  array_shift($result));
	} else {
		$value = str_replace( $identifier, "" ,  $result);
	}
	return  $value;
}
