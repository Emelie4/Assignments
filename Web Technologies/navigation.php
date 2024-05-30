<?php
	echo '<nav class="main-nav" role="navigation">';
	echo '<div class="navbar-header">';
  	echo '<button type="button" id="trigger-overlay" class="navbar-toggle">';
    echo '<span class="ion-navicon"></span>';
	echo '</button>';
	echo '</div>';
	echo '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">';
	echo '<ul class="nav navbar-nav navbar-right">';
		if(!isset($_GET['page'])) {
			$page = "home";
		} 
		else {
			$page = $_GET['page'];	
		}
		if($page == "home")
			echo '<li class="cl-effect-11 active"><a href="index.php?page=home" data-hover="Home">Home</a></li>';
		else 
			echo '<li class="cl-effect-11"><a href="index.php?page=home" data-hover="Home">Home</a></li>';
		
		if($page == "movies")	
			echo '<li class="cl-effect-11 active"><a href="index.php?page=movies" data-hover="Movies">Movies</a></li>';
		else
			echo '<li class="cl-effect-11"><a href="index.php?page=movies" data-hover="Movies">Movies</a></li>';
		if($page == "school")
			echo '<li class="cl-effect-11 active"><a href="index.php?page=school" data-hover="School">School</a></li>';
		else
			echo '<li class="cl-effect-11"><a href="index.php?page=school" data-hover="School">School</a></li>';
		if($page == "contact")
			echo '<li class="cl-effect-11 active"><a href="index.php?page=contact" data-hover="Contact">Contact</a></li>';
		else
			echo '<li class="cl-effect-11"><a href="index.php?page=contact" data-hover="Contact">Contact</a></li>';
		if($page=="results")
			echo '<li class="cl-effect-11 active"><a href="index.php?page=login" data-hover="Login">Login</a></li>';
		else
			echo '<li class="cl-effect-11 "><a href="index.php?page=login" data-hover="Login">Login</a></li>';
			
	echo '</ul>';
	echo '</div>';
	echo '</nav>';

?>
