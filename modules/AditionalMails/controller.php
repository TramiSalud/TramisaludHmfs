<?php
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

require_once('include/OutboundEmail/OutboundEmailExt.php');
require_once('modules/Configurator/Configurator.php');

class AditionalMailsController extends SugarController
{
	function action_Save(){

        $configurator = new Configurator();
        global $sugar_config;
        global $current_user;
        if ( !is_admin($current_user)
                && !is_admin_for_module($GLOBALS['current_user'],'Emails')
                && !is_admin_for_module($GLOBALS['current_user'],'Campaigns') ){
        sugar_die("Unauthorized access to administration.");
        }

        //Do not allow users to spoof for sendmail if the config flag is not set.
        if( !isset($sugar_config['allow_sendmail_outbound']) || !$sugar_config['allow_sendmail_outbound'])
            $_REQUEST['mail_sendtype'] = "SMTP";

        // save Outbound settings  #Bug 20033 Ensure data for Outbound email exists before trying to update the system mailer.
        if(isset($_REQUEST['mail_sendtype']) && empty($_REQUEST['campaignConfig'])) {
            $oe = new OutboundEmailExt();
            $oe->populateFromPost();
            $oe->save();
        }
    }
    
    function  action_rem(){
    	$oe = new OutboundEmailExt();
    	$oe->id = htmlentities($_GET['reg']);
    	$oe->delete();
    	SugarApplication::redirect('index.php?module=AditionalMails&action=emails' );
    }

}
?>