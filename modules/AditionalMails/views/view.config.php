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

/*********************************************************************************

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/MVC/View/SugarView.php');
require_once('modules/AditionalMails/Forms.php');
require_once('include/OutboundEmail/OutboundEmail.php');
require_once('include/OutboundEmail/OutboundEmailExt.php');

class ViewConfig extends SugarView
{
    /**
	 * @see SugarView::_getModuleTitleParams()
	 */
	protected function _getModuleTitleParams($browserTitle = false)
	{
	    global $mod_strings;

    	return array(
    	   "<a href='index.php?module=Administration&action=index'>".translate('LBL_MODULE_NAME','Administration')."</a>",
    	   translate('LBL_MASS_EMAIL_CONFIG_TITLE','Administration'),
    	   );
    }

    /**
	 * @see SugarView::preDisplay()
	 */
	public function preDisplay()
 	{
 	    global $current_user;

 	    if ( !is_admin($current_user)
 	            && !is_admin_for_module($GLOBALS['current_user'],'Emails')
 	            && !is_admin_for_module($GLOBALS['current_user'],'Campaigns') )
 	        sugar_die("Unauthorized access to administration.");
    }

    /**
	 * @see SugarView::display()
	 */
	public function display()
	{
        global $mod_strings;
        global $app_list_strings;
        global $app_strings;
        global $current_user;
        global $sugar_config;

        echo $this->getModuleTitle(false);
        global $currentModule;

               
        $GLOBALS['log']->info("Mass Emailer(EmailMan) ConfigureSettings view");
		if(!empty($_REQUEST['reg'])){
			$oe = new OutboundEmailExt();
			$oe->retrieve($_REQUEST['reg']);
			
			$this->ss->assign("MOD", $mod_strings);
	        $this->ss->assign("APP", $app_strings);
	
	        $this->ss->assign("RETURN_MODULE", "AditionalMails");
	        $this->ss->assign("RETURN_ACTION", "emails");
	
	        $this->ss->assign("MODULE", $currentModule);
	        $this->ss->assign("PRINT_URL", "index.php?".$GLOBALS['request_string']);
	        $this->ss->assign("HEADER", get_module_title("AditionalMails", "{MOD.LBL_CONFIGURE_SETTINGS}", true));
           
	        $this->ss->assign("id", $oe->id);
	        $this->ss->assign("notify_fromaddress", $oe->notify_fromaddress);
	        $this->ss->assign("notify_fromname", $oe->notify_fromname);
	        	        
	        $this->ss->assign("mail_smtptype", $oe->mail_smtptype);
	        $this->ss->assign("mail_smtpserver", $oe->mail_smtpserver);
	        $this->ss->assign("mail_smtpport", $oe->mail_smtpport);
	        $this->ss->assign("mail_smtpuser", $oe->mail_smtpuser);
	        $this->ss->assign("mail_smtpauth_req", ($oe->mail_smtpauth_req) ? "checked='checked'" : "");
	        $this->ss->assign("mail_haspass", empty($oe->mail_smtppass)?0:1);
	        $this->ss->assign("MAIL_SSL_OPTIONS", get_select_options_with_id($app_list_strings['email_settings_for_ssl'], $oe->mail_smtpssl));
	        $this->ss->assign("MAIL_TYPES", get_select_options_with_id($app_list_strings['email_type_list'], $oe->type));
	        //Assign the current users email for the test send dialogue.
	        $this->ss->assign("CURRENT_USER_EMAIL", $current_user->email1);
	
	        $showSendMail = FALSE;
	        $outboundSendTypeCSSClass = "yui-hidden";
	        if(isset($sugar_config['allow_sendmail_outbound']) && $sugar_config['allow_sendmail_outbound'])
	        {
	            $showSendMail = TRUE;
	            $app_list_strings['notifymail_sendtype']['sendmail'] = 'sendmail';
	            $outboundSendTypeCSSClass = "";
	        }
	
	        $this->ss->assign("OUTBOUND_TYPE_CLASS", $outboundSendTypeCSSClass);
	        $this->ss->assign("mail_sendtype_options", get_select_options_with_id($app_list_strings['notifymail_sendtype'], $focus->settings['mail_sendtype']));
		
		}else {
			$this->ss->assign("MOD", $mod_strings);
			$this->ss->assign("APP", $app_strings);
			
			$this->ss->assign("RETURN_MODULE", "AditionalMails");
			$this->ss->assign("RETURN_ACTION", "emails");
			
			$this->ss->assign("MODULE", $currentModule);
			$this->ss->assign("PRINT_URL", "index.php?".$GLOBALS['request_string']);
			$this->ss->assign("HEADER", get_module_title("AditionalMails", "{MOD.LBL_CONFIGURE_SETTINGS}", true));
			$this->ss->assign("MAIL_SSL_OPTIONS", get_select_options_with_id($app_list_strings['email_settings_for_ssl'], 0));
			$this->ss->assign("MAIL_TYPES", get_select_options_with_id($app_list_strings['email_type_list'],0));
			//Assign the current users email for the test send dialogue.
			$this->ss->assign("mail_sendtype_options", get_select_options_with_id($app_list_strings['notifymail_sendtype'], 0));
			
			$this->ss->assign("CURRENT_USER_EMAIL", $current_user->email1);
			
			$showSendMail = FALSE;
			$outboundSendTypeCSSClass = "yui-hidden";
			if(isset($sugar_config['allow_sendmail_outbound']) && $sugar_config['allow_sendmail_outbound'])
			{
				$showSendMail = TRUE;
				$app_list_strings['notifymail_sendtype']['sendmail'] = 'sendmail';
				$outboundSendTypeCSSClass = "";
			}
			
			$this->ss->assign("OUTBOUND_TYPE_CLASS", $outboundSendTypeCSSClass);
			$this->ss->assign("mail_sendtype_options", get_select_options_with_id($app_list_strings['notifymail_sendtype'], $focus->settings['mail_sendtype']));
			
		}
        require_once('modules/Emails/Email.php');
        $email = new Email();
        $this->ss->assign('ROLLOVER', $email->rolloverStyle);
        $this->ss->assign('THEME', $GLOBALS['theme']);

        $this->ss->assign("JAVASCRIPT",get_validate_record_js());
        $this->ss->display('modules/AditionalMails/tpls/config.tpl');
    }
}
