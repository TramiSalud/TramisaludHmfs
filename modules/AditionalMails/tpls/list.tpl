<!--
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
 * Description:
 * Created On: Sep 28, 2005
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): Chris Nojima
 ********************************************************************************/
-->

<!-- BEGIN: main -->
<table cellpadding="0" cellspacing="0" width="100%" border="0"
	class="list view">
	<!-- BEGIN: list_nav_row -->
	<!-- END: list_nav_row -->
	<tr height="20">
		<td scope="col" width="5%"><slot>&nbsp;</slot></td>
		<td scope="col" width="50%"><slot>
			<a href="name" class="listViewThLinkS1">
				{$MOD.LBL_LIST_FROM_EMAIL}</a></slot></td>
		<td scope="col" width="11%"><slot>
			<a href="is_personal" class="listViewThLinkS1">
				{$MOD.LBL_LIST_FROM_NAME}</a></slot></td>
		<td scope="col" width="11%"><slot>
			<a href="mailbox_type" class="listViewThLinkS1">
				{$MOD.LBL_MAIL_TYPE}</a></slot></td>
		<td scope="col" width="11%"><slot>
			<a href="server_url" class="listViewThLinkS1">
				{$MOD.LBL_MAIL_SENDTYPE}</a></slot></td>
		<td scope="col" width="11%"><slot>
			<a href="status" class="listViewThLinkS1">
				{$MOD.LBL_MAIL_SMTPSERVER}</a></slot></td>
	</tr>

	<!-- BEGIN: row -->
	<br /> {foreach from=$emails item=currentEmail}
	<tr height="20" class="S1">
		<td valign=TOP><a class="listViewTdToolsS1"
			href="index.php?action=config&module=AditionalMails&reg={$currentEmail->id}">Edit</a>
		<a class="listViewTdToolsS1"
            href="index.php?action=rem&module=AditionalMails&reg={$currentEmail->id}">Eliminar</a>	
		</td>
		<td valign=TOP><slot></slot>{$currentEmail->notify_fromaddress}</td>
		<td valign=TOP><slot>{$currentEmail->notify_fromname}</slot></td>
		<td valign=TOP><slot>{$currentEmail->type}</slot></td>
		<td valign=TOP><slot>{$currentEmail->mail_sendtype}</slot></td>
		<td valign=TOP><slot>{$currentEmail->mail_smtpserver}</slot></td>
	</tr>
	{/foreach}
	<!-- END: row -->
</table>
<!-- END: main -->
