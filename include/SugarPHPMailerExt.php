<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


require_once('include/phpmailer/class.phpmailer.php');
require_once('include/OutboundEmail/OutboundEmailExt.php');
require_once ('include/SugarPHPMailer.php');
/**
 * Sugar mailer
 * @api
 */
class SugarPHPMailerExt extends SugarPHPMailer
{
	
	function SugarPHPMailerExt() {
		parent::SugarPHPMailer();
	}


	/**
	 * Prefills outbound details
	 */
	function setMailerAlternative($type) {
		global $current_user;

		require_once("include/OutboundEmail/OutboundEmailExt.php");
		$oe = new OutboundEmailExt();
		$oe = $oe->getMailer('1', $type);

		// ssl or tcp - keeping outside isSMTP b/c a default may inadvertently set ssl://
		$this->protocol = ($oe->mail_smtpssl) ? "ssl://" : "tcp://";

		if($oe->mail_sendtype == "SMTP")
		{
    		//Set mail send type information
    		$this->Mailer = "smtp";
    		$this->From = $oe->notify_fromaddress;
    		$this->FromName = $oe->notify_fromname;
    		$this->Host = $oe->mail_smtpserver;
    		$this->Port = $oe->mail_smtpport;
    		
            if ($oe->mail_smtpssl == 1) {
            	$this->SMTPSecure = 'ssl';
            } // if
            if ($oe->mail_smtpssl == 2) {
            	$this->SMTPSecure = 'tls';
            } // if

    		if($oe->mail_smtpauth_req) {
    			$this->SMTPAuth = TRUE;
    			$this->Username = $oe->mail_smtpuser;
    			$this->Password = $oe->mail_smtppass;
    		}
		}
		else
			$this->Mailer = "sendmail";
	}
	
} // end class definition
