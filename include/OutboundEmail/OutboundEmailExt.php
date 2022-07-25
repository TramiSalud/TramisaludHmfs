<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

/**
 * Outbuound email management
 * @api
 */
class OutboundEmailExt extends OutboundEmail {
	
	
	var $notify_fromaddress;
	var $notify_fromname;
	
	/**
	 * Retrieves the system's Outbound options
	 */
	function getEmails() {
		$q = "SELECT id FROM outbound_email";
		$r = $this->db->query($q);
		
		while ($a = $this->db->fetchByAssoc($r)){
			$oe = new OutboundEmailExt();
			$emails[] = $oe->retrieve($a['id']);
		}
		return $emails;
	}
	
	function getMailer($user_id, $type) {
		$q = "SELECT id FROM outbound_email where user_id='". $user_id."' and type='". $type."'";
		$GLOBALS['log']->fatal('Consulta: '. $q . "" );
        $r = $this->db->query($q);
		$a =null;
		$rows = $this->db->getAffectedRowCount();
		$use_mail = mt_rand(0,$rows-1);
		for( $i = 0; $i <= $rows; $i++){
			$a = $this->db->fetchByAssoc($r);
			if($i == $use_mail){
				break;
			}
		}
                //$GLOBALS['log']->info('Rows:'.$rows);
                //$GLOBALS['log']->info('Use_mail:'.$use_mail);
		//$GLOBALS['log']->info('Email Id:'.$a['id']);
		$oe = new OutboundEmailExt();
		if(empty($a)){
			$ret = $this->getSystemMailerSettings();
		}else{
			$ret  = $oe->retrieve($a['id']);
		}
                //$GLOBALS['log']->fatal(var_dump($ret));
		return $ret; 
	}
	
	/**
	 * Sole constructor
	 */
	function OutboundEmailExt() {
		$this->field_defs[]='notify_fromaddress';
		$this->field_defs[]='notify_fromname';
		parent::OutboundEmail();
	}
	
	function populateFromPost() {
		foreach($this->field_defs as $def) {
			if(isset($_POST[$def])) {
				$this->$def = $_POST[$def];
			} else if ($def != 'mail_smtppass') {
				$this->$def = "";
			}
		}
	}
	
	
	
}
