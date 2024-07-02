<?php
 session_start();
 if($_SESSION['id']=="")
 {
    header('Location:login.php');
 }
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>SMS:Home</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta charset="utf-8" />
	<meta name="keywords" content="Attainment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script> 
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	 <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<!--banner slider  -->
	<link href="css/JiSlider.css" rel="stylesheet">
	<!-- //banner-slider -->
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Oswald:400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

</head>

<body>
	<!-- header -->
	<section class="w3layouts-header py-2">
		<div class="container">
			  <!-- header -->
        <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
                    <h1>
                        <a class="navbar-brand" href="index.html">
                          SMS    
                        </a>
                    </h1>
                    <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-lg-auto text-center">
                            <li class="nav-item active  mr-3">
                                <a class="nav-link" href="shome.php">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item  mr-3">
                                <a class="nav-link" href="scholarships.php">Scholarships</a>
                            </li>
							 <!--<li class="nav-item  mr-3">
                                <a class="nav-link" href="services.php">Services</a>
                            </li>-->
                            
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </nav>
        </header>
        <!-- //header -->
        <?php 

        
        echo "<h1>Hello   ".($_SESSION['username'])."</h1>";?>
    </div>
    </section>
    <table><tr><th></th><th></th></tr>
    <?php
    include('connection.php');
    $a=$_SESSION['id'];
    $q="SELECT `id`, `username`, `password` FROM `login` WHERE id='$a'";
    $d=mysqli_query($con,$q);
   foreach ($d as $value) {
      // echo "<tr><td>$value[username]</td><td>$value[password]</td></tr>";
   }
echo "</table><div style='padding-top:50px;padding-left:150px;'>";
echo "<form action='' method='POST'><table>";
$k="SELECT  `name`, `department`, `mobile`, `income`, `cgpa` FROM `student` WHERE id='$a'";
$l=mysqli_query($con,$k);
foreach ($l as $x) {
   echo"<tr><th>Name</th><td><input type='text' value=$x[name] name='name' ></td></tr>"; 
   echo"<tr><th>Department</th><td><input type='text' value=$x[department] name='dept' ></td></tr>"; 
   echo"<tr><th>Mobile</th><td><input type='text' value=$x[mobile] name='mob' ></td></tr>"; 
   echo"<tr><th>Income</th><td><input type='text' value=$x[income] name='inc' ></td></tr>"; 
   echo"<tr><th>CGPA</th><td><input type='text' value=$x[cgpa] name='cgpa' ></td></tr>"; 
}

echo "<tr><th></th><td><input type='submit' value='Save Changes' name='submit' class=btn btn-primary></td></table></form></div>";

if (isset($_POST['submit'])) {
    
    $m=$_POST['name'];
    $n=$_POST['dept'];
    $o=$_POST['mob'];//echo ($o);
    $p=$_POST['inc'];
    $r=$_POST['cgpa'];
    $u="UPDATE `student` SET name='$m',cgpa='$r',department='$n',mobile='$o',income='$p' WHERE id='$a'";
    //$c="UPDATE `student` SET  WHERE id='$a'";
    //echo ($c);
    $i=mysqli_query($con,$u);
    //$j=mysqli_query($con,$u);
    if($i)
    {
       echo"<script>window.location.href = 'shome.php'</script>";
    }
    
   
}



    ?>

</table>
</body>
</html>