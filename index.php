<?php include('connection/LoginController.php'); ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SCHOOL PORTAL</title>
  <title>SCHOOL PORTAL</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<link rel="stylesheet" href="css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<main>


				<div class="lrpopup">
					<div class="lrpopupinner">
						<div class="lrpopupcontent">

							<a href="javascript:void();" class="close_lrpopup"><span class="fa-solid fa-times"></span></a>

							<div class="lrblockwrap">
								
							
								<div class="loginblock lrblock">
									<h3>Login</h3>
									<p>Enter Your Login Details Below</p>
									<div class="formwrap">
										<form method="post" action="index.php?action=login">
                                            <fieldset>
												<input type="text" name="uid" placeholder="UID" autocomplete="off" required>
											</fieldset>
											<fieldset>
												<input type="email" name="email" placeholder="EMAIL" autocomplete="off" required>
											</fieldset>
											<fieldset>
												<input type="password" name="password" placeholder="PASSWORD" autocomplete="off" required>
											</fieldset>
											<a href="#" class="fp">Forgot Password?</a>
											<button name="login" style="width:100%;">
												Login <span class="fa-solid fa-angle-right"></span>
											</button>
										</form>
									</div>
								</div>
								<!--loginblock-->



								<div class="registerblock lrblock">
									<h3>Register</h3>
									<p>Enter Details Below for Sign Up</p>
									<div class="formwrap">
										<form method="post" action="#">
											<fieldset>
												<input type="text" name="name" placeholder="Name*" autocomplete="off" required>
											</fieldset>
											<fieldset>
												<input type="email" name="email" placeholder="Email Address*" autocomplete="off" required>
											</fieldset>
											<fieldset>
												<input type="text" name="username" placeholder="Username*" autocomplete="off" required>
											</fieldset>
											<fieldset>
												<input type="password" name="password" placeholder="Password" autocomplete="off" required>
											</fieldset>
											<fieldset>
												<input type="password" name="confirmpassword" placeholder="Confirm Password" autocomplete="off" required>
											</fieldset>
											<button style="width:100%;">
												Sign Up <span class="fa-solid fa-angle-right"></span>
											</button>
										</form>
									</div>
								</div>
								<!--Registerblock-->
							</div>
							<!--lrblockwrap-->



						</div>
						<!--lrblockwrap-->
					</div>
					<!--lrpopupinner-->
				</div>
				<!--lrpopup-->



				<header>
					<div class="container" style="display: flex; align-items: center; justify-content: space-between;">
						
                        <a href="#" class="logo">
							SCHOOL PORTAL
						</a> 
                       
						<div class="lrbuttons">
							<a href="javascript:void();" class="login_btn active">
								Login
							</a>
							<a href="javascript:void();" class="register_btn">
								Register
							</a>
						</div>
					</div>
				</header>
				<!--header-->




				<div class="content">
					<div class="container">
						<div class="timebox"></div>
					</div>
				</div>
				<!--content-->



			
				<footer>
					<div class="container">
						<div class="copyright">SCHOOLPORTAL COPYRIGHT &copy; <span id="year"></span> <a href="#"></a></div>
					</div>
				</footer>
				<!--footer-->


     <ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
			
		</main>
<!-- partial -->
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/bg-bubble.js"></script>
  <script  src="js/script.js"></script>

</body>
</html>
