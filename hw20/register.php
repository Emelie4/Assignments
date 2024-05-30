<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);



	echo '<section id="home">';
	if(!isset($_POST['submit'])){
		echo '<h2>Please fill out the following to create an account</h2>';
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
		
		$check_user = "Select * from `accounts` where `username`='$username'";
    	$result = $dblink->query($check_user);
    	if ($result->num_rows > 0) {
			die("Username already exists. Please choose a different username.");
    	}
		
		$password=hash('sha256',$salt.$passText.$username);
		$sql="Insert into `accounts` (`username`,`auth_hash`) values ('$username','$password')";
		$dblink->query($sql) or 
			die("Something went wrong wih $sql<br>".$dblink->error);
		redirect("index.php?page=login&success=1");
	}
	
	echo '</section>';
?>