<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>SMS SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>SMS SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">
					<input type="hidden" name="hide" value="h">
					<input class ="text"type="text" name="name" placeholder="Name" required=""><br>
					<input class ="text"type="text" name="department" placeholder="Department" required=""><br>
					<input class ="text"type="text" name="mobile" placeholder="Mobile number" required=""><br>
					<input class ="text"type="text" name="income" placeholder="Income" required=""><br>
					<input class ="text"type="text" name="cgpa" placeholder="CGPA" required=""><br>
					<input class="text" type="text" name="username" placeholder="Username" required=""><br>
					<input class="text" type="password" name="pass" placeholder="Password" required="">
					
					<div class="wthree-text">
						
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNUP">
				</form>
				<p>Already have an Account? <a href="login.php"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
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
	</div>
	<!-- //main -->
</body>
</html>
<?php
include('connection.php');

if(isset($_POST['hide'])and($_POST['hide'])=='h')
{
    echo("string");
    $a=$_POST['name'];
    $b=$_POST['department'];
    $c=$_POST['mobile'];
    $d=$_POST['income'];
    $e=$_POST['cgpa'];
    $f=$_POST['username'];
    $g=$_POST['pass'];
    $q="INSERT INTO `student`( `name`, `department`, `mobile`, `income`, `cgpa`) VALUES ('$a','$b','$c','$d','$e')";
    $i=mysqli_query($con,$q);
    
    $q2="INSERT INTO `login`( `username`, `password`) VALUES ('$f','$g')";
    echo($q2);
    $i2=mysqli_query($con,$q2);
    if($i&&$i2)
    {
    
        header("Location: login.php");
    }
    else
    {
        echo("NOT SUCCESSFULL");
    }
}
else
{
    echo "";
}
?>