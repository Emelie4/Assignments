<?php
include("functions.php");
?>

<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Welcome to Chiemelie Chinweuba's homepage</title>
	<link href="assets/css/main.css" rel="stylesheet"/>
	<link href="assets/css/bootstrap.css" rel="stylesheet"/>
	<link href="assets/css/ionicons.min.css" rel="stylesheet">
	<link href="assets/css/pace.css" rel="stylesheet">
	<link href="assets/css/custom.css" rel="stylesheet">
	</head>
<body>
		<div class="container">	
			<header id="site-header">
				<div class="row">
					<div class="col-md-4 col-sm-5 col-xs-8">
						<div class="logo">
							<h1><a href="index.php"><b><i>The Reel View</i></b></a></h1>
						</div>
					</div><!-- col-md-4 -->
					<div class="col-md-8 col-sm-7 col-xs-4">
						
						<?php
						include("navigation.php");
						?>
						
						<div id="header-search-box">
							<a id="search-menu" href="#"><span id="search-icon" class="ion-ios-search-strong"></span></a>
							<div id="search-form" class="search-form">
								<form role="search" method="get" id="searchform" action="#">
									<input type="search" placeholder="Search" required>
									<button type="submit"><span class="ion-ios-search-strong"></span></button>
								</form>				
							</div>
						</div>
					</div><!-- col-md-8 -->
				</div>
			</header>
			
		</div>
	
	<?php
	if(!isset($_GET['page'])) {
		$page = "home";
	} 
	else {
		$page = $_GET['page'];
		switch($page){
			case "single":
					include("single.php");
					break;
			case "school":
					include("school.php");
					break;
			case "movies":
					include("movies.php");
					break;
			case "contact":
					include("contact.php");
					break;	
			case "results":
					include("results.php");
					break;
			case "register":
					include("register.php");
					break;
			case "login":
					include("login.php");
					break;
			default:
				include("home.php");
				break;
				
		};
	}
	
	?>	
		<footer id="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="copyright">&copy; 2014 ThemeWagon.com</p>
					</div>
				</div>
			</div>
		</footer>

	</body>
</html>
<script src="assets/js/add-content.js"></script>
