<?php

set_include_path(realpath('include/') . PATH_SEPARATOR . get_include_path());

class clean_job_queue{
    function clean_job_queue(){
		$result2 = $GLOBALS['db']->query("update job_queue set status = 'done', resolution = 'success' where status ='running'");
		return true;
	}
}
	
?>