<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
if (isset($_REQUEST['account_id']) && (!empty($_REQUEST['account_id']))) {
  $account_id = $_REQUEST['account_id']; 
  $GLOBALS['log']->fatal('Verify SLA: Account ID='. $account_id ); 
  require_once("modules/Accounts/Account.php") ;
  $acct = new Account();
  //$acct->id = $account_id;
  //$acct->retrieve();
  $acct->retrieve_by_string_fields(array('name'=> $account_id)); 
  //$nm = $acct->names;
  $result = false; 
  if(!is_null($acct->name)) {
    $result =true;
  }
  /***** Put logic here for real verification *
   *
   */
  //$msg = '<font color="green"> SLA Verified for Account: ' . $nm . '</font>'; $tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y"));
  //$SLA_Date = date("m/d/Y",$tomorrow);
}
else {
    //$msg = '<b><font color="red"> No SLA Found for Account</font></b>'; $SLA_Date = '';
    $GLOBALS['log']->fatal('Verify SLA: Account ID is Null' );
}
echo json_encode($result);  
//"<msg>$msg</msg><SLA_Date>$SLA_Date</SLA_Date>";