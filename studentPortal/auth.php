

    <?php
    	//Start session
    	session_start();
    	//Check whether the session variable SESS_MEMBER_ID is present or not
    	if(!isset($_SESSION['mem_id']) || (trim($_SESSION['mem_id']) == '')) {
    		header("location: signin.php");
    		exit();
    	}
    ?><span></span>