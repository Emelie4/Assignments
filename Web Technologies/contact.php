
		<div class="content-body">
			<div class="container">
				<div class="row">
					<main class="col-md-12">
						<h1 class="page-title">Contact</h1>
						<article class="post">
							<div class="entry-content clearfix">
								
							<?php
								
								session_start();
								//error checking 
								error_reporting(E_ALL);
								ini_set('display_errors', 1);
								if(!isset($_POST['submit']))
								{
									echo '<form action="" method="post" class="contact-form">';
									echo '<div class="row">';
									echo '<div class="col-md-6 col-md-offset-3" id="main">';
									
									//beginning of first name
									if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"firstNameNull")){
										echo '<div class="form-group" id="fcheck">';
										echo '<div id="fFeedback">First name cannot be left blank</div>';
										echo '<input type="text" name="firstname" class="form-control" placeholder="First Name" id="firstname">';
										echo '</div>';	
									}
									elseif (isset($_GET['errMsg']) && strstr($_GET['errMsg'], "firstNameInvalidChar")) {
										echo '<div class="form-group" id="fcheck">';
    									echo '<div id="fFeedback">First name has invalid format</div>';
    									echo '<input type="text" name="firstname" class="form-control" placeholder="First Name" id="firstname">';
    									echo '</div>';
									}
									else{
										if(isset($_SESSION['firstname']) && $_SESSION['firstname']!=""){
											echo '<div class="form-group has-success" id="fcheck">';
											echo '<div id="fFeedback"></div>';
											echo '<input type="text" name="firstname" class="form-control" placeholder="First Name" id="firstname" value="'.$_SESSION['firstname'].'">';
											echo '</div>';
										}
											
										else{
											echo '<div class="form-group" id="fcheck">';
											echo '<div id="fFeedback"></div>';
											echo '<input type="text" name="firstname" class="form-control" placeholder="First Name" id="firstname">';
											echo '</div>';
										}
									}
									//end of first name
									// beginning of last name
									
									if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"lastNameNull"))
										{
											echo '<div class="form-group" id="lcheck">';
											echo '<div id="lFeedback">Last name cannot be left blank</div>';
											echo '<input type="text" name="lastname" class="form-control" placeholder="Last Name" id="lastname" >';
											echo '</div>';

										}
										elseif (isset($_GET['errMsg']) && strstr($_GET['errMsg'], "lastNameInvalidChar")) {
											echo '<div class="form-group" id="lcheck">';
											echo '<div id="lFeedback">Last name has invalid format</div>';
											echo '<input type="text" name="lastname" class="form-control" placeholder="Last Name" id="lastname">';
											echo '</div>';
										}
										else {
											if (isset($_SESSION['lastname']) && $_SESSION['lastname'] != "") {
												echo '<div class="form-group has-success" id="lcheck">';
												echo '<div id="lFeedback"></div>';
												echo '<input type="text" name="lastname" class="form-control" placeholder="Last Name" id="lastname" value="'. $_SESSION['lastname'].'">';
												echo '</div>';
											} else {
												echo '<div class="form-group" id="lcheck">';
												echo '<div id="lFeedback"></div>';
												echo '<input type="text" name="lastname" class="form-control" placeholder="Last Name" id="lastname">';
												echo '</div>';
											}
										}
									//end of last name
									//beginning of email
									
									if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"emailNull")){
										echo '<div class="form-group" id="echeck">';
										echo '<div id="eFeedback">Email cannont be left blank</div>';
										echo '<input type="email" name="email" class="form-control" placeholder="Email" id="email" >';
										echo '</div>';
									}
									elseif (isset($_GET['errMsg']) && strstr($_GET['errMsg'], "emailInvalidChar")) {
										echo '<div class="form-group" id="echeck">';
    									echo '<div id="eFeedback">Email has invalid format</div>';
    									echo '<input type="email" name="email" class="form-control" placeholder="Email" id="email">';
    									echo '</div>';
									}
									else{
										if(isset($_SESSION['email']) && $_SESSION['email']!=""){
											echo '<div class="form-group has-success" id="echeck">';
											echo '<div id="eFeedback"></div>';
											echo '<input type="email" name="email" class="form-control" placeholder="Email" id="email" value="'.$_SESSION['email'].'">';
											echo '</div>';
										}
											
										else{
											echo '<div class="form-group" id="echeck">';
											echo '<div id="eFeedback"></div>';
											echo '<input type="email" name="email" class="form-control" placeholder="Email" id="email">';
											echo '</div>';
										}
									}
									
								//end of email
									
								//beginning of phone	
									
									if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"phoneNull")){
										echo '<div class="form-group" id="pcheck">';
										echo '<div id="pnFeedback">Phone cannot be left blank</div>';
										echo '<input type="text" name="phone" class="form-control" placeholder="Phone Number" id="phone" >';
										echo '</div>';
									}
									elseif (isset($_GET['errMsg']) && strstr($_GET['errMsg'], "phoneInvalidChar")) {
										echo '<div class="form-group" id="pcheck">';
    									echo '<div id="pFeedback">Phone has invalid format</div>';
    									echo '<input type="text" name="phone" class="form-control" placeholder="Phone Number" id="phone">';
    									echo '</div>';
									}
									else{
										if(isset($_SESSION['phone']) && $_SESSION['phone']!=""){
											echo '<div class="form-group has-success" id="pcheck">';
											echo '<div id="pFeedback"></div>';
											echo '<input type="text" name="phone" class="form-control" placeholder="Phone number" id="phone" value="'.$_SESSION['phone'].'">';
											echo '</div>';
										}
											
										else{
											echo '<div class="form-group" id="pcheck">';
											echo '<div id="pFeedback"></div>';
											echo '<input type="text" name="phone" class="form-control" placeholder="Phone Number" id="phone">';
											echo '</div>';
										}
									}
									
									//end of phone
									//beginning of username	
									
									if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"usernameNull")){
										echo '<div class="form-group" id="usercheck">';
										echo '<div id= "uFeedback">Username cannot be left blank</div>';
										echo '<input type="text" name="username" class="form-control" placeholder="Username" id="username" >';
										echo '</div>';
									}
									elseif (isset($_GET['errMsg']) && strstr($_GET['errMsg'], "userNameInvalidChar")) {
										echo '<div class="form-group" id="ucheck">';
    									echo '<div id="uFeedback">Username has invalid format</div>';
    									echo '<input type="text" name="username" class="form-control" placeholder="Username" id="username">';
    									echo '</div>';
									}
									else{
										if(isset($_SESSION['username']) && $_SESSION['username']!=""){
											echo '<div class="form-group has-success" id="ucheck">';
											echo '<div id="uFeedback"></div>';
											echo '<input type="text" name="username" class="form-control" placeholder="First Name" id="username" value="'.$_SESSION['username'].'">';
											echo '</div>';
										}
											
										else{
											echo '<div class="form-group" id="ucheck">';
											echo '<div id="uFeedback"></div>';
											echo '<input type="text" name="username" class="form-control" placeholder="Username" id="username">';
											echo '</div>';
										}
									}
									
									//end of username
									
									
									if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"passwordNull")){
										echo '<div class="form-group" id= "passcheck">';
										echo '<div id= "pFeedback" >Password cannot be left null</div>';
										echo '<input type="text" name="password" class="form-control" placeholder="Password" id="password">';
										echo '</div>';
									}
										elseif (isset($_GET['errMsg']) && strstr($_GET['errMsg'], "passwordInvalidChar")) {
										echo '<div class="form-group" id="pcheck">';
    									echo '<div id="pFeedback">Password has invalid format</div>';
    									echo '<input type="text" name="password" class="form-control" placeholder="Password" id="password">';
    									echo '</div>';
									}
									else{
										if(isset($_SESSION['username']) && $_SESSION['username']!=""){
											echo '<div class="form-group has-success" id="pcheck">';
											echo '<div id="pFeedback"></div>';
											echo '<input type="text" name="password" class="form-control" placeholder="Password" id="password" value="'.$_SESSION['password'].'">';
											echo '</div>';
										}
											
										else{
											echo '<div class="form-group" id="pcheck">';
											echo '<div id="pFeedback"></div>';
											echo '<input type="text" name="password" class="form-control" placeholder="Password" id="password">';
											echo '</div>';
										}
									}
									
							//end of password
									
									if(isset($_GET['errMsg']) && strstr($_GET['errMsg'],"commentNull")){
										echo '<div class="form-group" id="ccheck">';
										echo '<div id = "cFeedback">Comment cannot be left balnk</div>';
										echo '<textarea name="comment" rows="7" class="form-control" placeholder="Your Message" id="comment" ></textarea>';
										echo '</div>';
									}
									else{
										if(isset($_SESSION['comment']) && $_SESSION['comment']!=""){
											echo '<div class="form-group has-success" id="ccheck">';
											echo '<div id="cFeedback"></div>';
											echo '<textarea name="comment" rows="7" class="form-control" placeholder="Your Message" id="comment" ></textarea>';
											echo '</div>';
										}
											
										else{
											echo '<div class="form-group" id="ccheck">';
											echo '<div id="cFeedback"></div>';
											echo '<textarea name="comment" rows="7" class="form-control" placeholder="Your Message" id="comment" ></textarea>';
											echo '</div>';
										}
									}
									
			
										
									
										echo '<button name="submit" class="btn-send btn-5 btn-5b ion-ios-paperplane"><span>Send Me a Message</span>';
										echo '</button>';
										echo '</div>';
										echo '</div>	<!-- row -->';
							echo '</form>';
					
				}
				else{	
					$errors="";
					$_SESSION['firstname']="";
					$_SESSION['lastname']="";
					$_SESSION['email']="";
					$_SESSION['phone']="";
					$_SESSION['username']="";
					$_SESSION['password']="";
					$_SESSION['comment']="";
					
					$firstname=$_POST['firstname'];
					$lastname=$_POST['lastname'];
					$email=$_POST['email'];
					$phone=$_POST['phone'];
					$username=$_POST['username'];
					$password=$_POST['password'];
					$comment=addslashes($_POST['comment']);
					
					if($firstname==NULL)
						$errors.="firstNameNull";
					elseif (!preg_match("/^[a-z '-]+$/i", $firstname))
						$errors.="firstNameInvalidChar";
					else
						$_SESSION['firstname']=$firstname;
					
					if ($lastname==NULL)
						$errors.="lastNameNull";
					elseif (!preg_match("/^[a-z '-]+$/i", $lastname))
						$errors.="lastNameInvalidChar";
					else
						$_SESSION['lastname']=$lastname;
					
					if($email==NULL)
						$errors.="emailNull";
					elseif (filter_var($email,FILTER_VALIDATE_EMAIL)){
						$_SESSION['email']=$email;
					}
					else
						$errors.="emailInvalidChar";
					
					
					if($phone==NULL)
						$errors.="phoneNull";
					elseif(!preg_match("/^\d{10}$/",$phone))
						$errors.="phoneInvalidChar";
					else
						$_SESSION['phone']=$phone;
					
																	  
					if($username==NULL)
						$errors.="usernameNull";
					elseif(!preg_match("/.{6,}/", $username))
						$errors.="userNameInvalidChar";
					else
						$_SESSION['username']=$username;
								
					if($password==NULL)
						$errors.="passwordNull";
					elseif(!preg_match("/.{6,}/",$password))
						$errors.="passwordInvalidChar";
					else
						$_SESSION['password']=$password;
					
					if($comment==NULL)
						$errors.="commentNull";
					else
						$_SESSION['comment']=$comment;
						
					
					if($errors!=NULL)
						redirect("contact.php?errMsg=$errors");
					else{
						//no errors begin database connection
						
						$dblink= db_connect("contact_data");
						$sql="Insert into 
						`contact_info` (`first_name`,`last_name`,`email`,`phone`,`username`,`password`,`comment`) 
						values ('$firstname','$lastname','$email','$phone','$username','$password','$comment') ";
						$dblink->query($sql) or
							die("<h2>Something went wrong with: $sql<br>".$dblink->error.'</h2>');
						echo '<h2>Your data has been saved sucessfully</h2>';
					}
						
				}
				
			?>
							</div>
						</article>
					</main>
				</div>
			</div>
		</div>
<script src="assets/js/event-listener.js"></script>
		