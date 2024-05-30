<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	echo '<section id="home">';
	if(!isset($_POST['submit'])){
		
		if(isset($_GET['success']) && $_GET['success'] == 1) {
		echo "<p style='color: green;'>Registration successful.</p>";
		}
		echo '<h2>Please enter your login credentials</h2>';
		echo '<form action="" method="post" class="contact-form">';
		echo '<div class="form-group" id="ucheck">';
		echo '<div id="uFeedback"></div>';
		echo '<input type="text" name="username" class="form-control" placeholder="Username" id="username">';
		echo '</div>';
		
		echo '<form action="" method="post" class="contact-form">';
		echo '<div class="form-group" id="pcheck">';
		echo '<div id="pFeedback"></div>';
		echo '<input type="password" name="password" class="form-control" placeholder="Password" id="password">';
		echo '</div>';
		

		echo '<button name="submit" class="btn-send btn-5 btn-5b ion-ios-paperplane"><span>Submit</span>';
		echo '</button>';
		echo '</div>';
    	echo '</div>';
		
		echo '</form>';
	}
if(isset($_POST['submit'])){
	
		
		$username=addslashes($_POST['username']);
		$passText=$_POST['password'];
		$salt="202420SparklingWater";
		$dblink=db_connect("user_Data");
		$password=hash('sha256',$salt.$passText.$username);
		$sql="Select `auto_id` from `accounts` where `auth_hash`='$password'";
		$result=$dblink->query($sql) or 
			die("Something went wrong wih $sql".$dblink->error);
		if($result->num_rows>0){
			$salt=microtime();
			$sid=hash('sha256',$salt.$password);
			$sql="Update `accounts` set `session_id`= '$sid' where `auth_hash`='$password'";
			$dblink->query($sql) or 
				die("Something went wrong wih $sql".$dblink->error);
			redirect("index.php?page=results&sid=$sid");
		}
		else{
			 echo "<p style='color: red;'>Username or password is incorrect or does not exist. Please try again.</p>";
		}
}
?>
