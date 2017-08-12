

    <?php
    	//Start session
    	session_start();
     
    	//Include database connection details
    	require_once('connection_login.php');
     
    	//Array to store validation errors
    	$errmsg_arr = array();
     
    	//Validation error flag
    	$errflag = false;
     
    	//Function to sanitize values received from the form. Prevents SQL injection
    	function clean($str) {
    		$str = @trim($str);
    		if(get_magic_quotes_gpc()) {
    			$str = stripslashes($str);
    		}
    		return mysql_real_escape_string($str);
    	}
     
    	//Sanitize the POST values
    	$username = clean($_POST['username']);
    	$password = clean($_POST['password']);
     
    	//Input Validations
    	if($username == '') {
    		$errmsg_arr[] = 'Username missing';
    		$errflag = true;
    	}
    	if($password == '') {
    		$errmsg_arr[] = 'Password missing';
    		$errflag = true;
    	}
     
    	//If there are input validations, redirect back to the login form
    	if($errflag) {
    		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    		session_write_close();
    		header("location: signin.php");
    		exit();
    	}
     
    	//Create query
    	$qry="SELECT * FROM signup WHERE collegeid='$username' AND password='$password'";
    	$result=mysql_query($qry);
     
    	//Check whether the query was successful or not
    	if($result) {
    		if(mysql_num_rows($result) > 0) {
    			//Login Successful
    			session_regenerate_id();
    			$member = mysql_fetch_assoc($result);
    			$_SESSION['mem_id'] = $member['mem_id'];
    			$_SESSION['cid'] = $member['collegeid'];
    			$_SESSION['passwd'] = $member['password'];
                $_SESSION['dep']=$member['department'];
                $_SESSION['fname']=$member['fname'];
                $_SESSION['lname']=$member['lname'];
                $_SESSION['clsdep']=$member['clsdep'];
                $_SESSION['clsbatch']=$member['clsbatch'];
                $_SESSION['clsdiv']=$member['clsdiv'];
    			session_write_close();
    			header("location: teachersportal.php");
    			exit();
    		}else {
    			//Login failed
    			$errmsg_arr[] = 'user name and password not found';
    			$errflag = true;
    			if($errflag) {
    				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    				session_write_close();
    				header("location: signin.php");
    				exit();
    			}
    		}
    	}else {
    		die("Query failed");
    	}
    ?>