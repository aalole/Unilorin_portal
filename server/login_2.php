<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>login form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php 
session_start();

$failureResponse =$_SESSION['failureMsg'];

// require_once('connect.php');

?>


	<div class="ug">
		<header class="top-header">
				<h1>University of Ilorin</h1>
				<img src="../images/ilorin_logo_2.jpg">
				<p>better by far</p>
				<h2>Undergraduate Portal</h2>
		</header><br>

		
		<div class="header-nav">
			<ul>
					<li style="overflow: hidde; padding-top: 0;margin-top: 0;">HOME</li>
					<li class="h1" style="overflow: hidde; padding-top: 5px;margin-top: 0; font-size: 17px;">HELP DESK</li>
					<li class="h2" style="overflow: hidde; padding-top: 5px;margin-top: 0; font-size: 17px;">REGISTRATION</li>
					<li class="h3" style="overflow: hidde; padding-top: 5px;margin-top: 0; font-size: 17px;"><a href="login_2.html">LOGOUT</a></li>
			</ul>
		</div>

				<div class="sess-aside">
						<aisde class="col-1-4">
								<a href="index.html">pre-Admission Screening instruction</a><br>
								<a href="index.html">Pre-Admission screening Registration</a><br>
								<a href="index.html">Pre-Admission Screening Login</a><br>
								<a href="index.html">Inter-University Student Registration</a><br>
								<a href="index.html">REmedial Registrationfor Post-UTME</a><br>
								<a href="../navigation_pages/course_reg_print.html">Print completed course form</a><br>
								<a href="index.html">Print payment receipt</a><br>
								<a href="index.html">General payment revalidation</a><br>
								</aisde><!--
						--><section class="col-3-4 login">							
								<div class="col-sm-4">
									<h1>For registered users only</h1><br><br>
									<form role="form" action="../server/login_action.php" method="post">
									<p style= "color: red">error!!</P>
										<?php echo $failureResponse?>
										<div class="form-group">
											<label for="email">LOGIN ID:</label>
											<input type="email" class="form-control" id="email" name="email">
										</div>
										<div class="form-group">
											<label for="pwd">PASSWORD:</label>
											<input type="password" class="form-control" id="pwd" name= "password">
										</div>
										<button type="submit" value="Login" class="btn btn-primary">Login</button>
									</form>
									<p>Note: Your Login ID is your Email address used for your JAMB Registration (if you don't have Matriculation Number yet).</p>
								</div>
									

						</section>
				</div>
				<footer class="footer" style="margin-top: 10px; background-color: #29166F; height: 40px;">
								<small>Copyright&copy; 2019. COMSIT, University of Ilorin. All rights reserved</small>
					</footer>
				
</div>
</body>
</html>