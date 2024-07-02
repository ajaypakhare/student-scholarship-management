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
                            <li class="nav-item  mr-3">
                                <a class="nav-link" href="shome.php">Home
                                    
                                </a>
                            </li>
                            <li class="nav-item active mr-3">
                                <a class="nav-link" href="scholarships.php">Scholarships<span class="sr-only">(current)</span></a>
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
    <div style="padding-top: 50px;padding-left: 50px">
   <h3 >Available Scholarships</h3><br><br>
<table>
    <form action="" method="POST">
    <tr ><th>National MCM</th>
        <td><input type="submit" name="nmcma" value="Apply" class="btn btn-primary"></td>
        <td><input type="submit" name="nmcmc" value="Cancel" class="btn btn-danger"></td></tr>
    <tr><th>TKM MCM</th>
        <td><input type="submit" name="tmcma" value="Apply" class="btn btn-primary"></td>
        <td><input type="submit" name="tmcmc" value="Cancel" class="btn btn-danger"></td></tr>
</form>
</table>
</div>
</body>
</html>
<?php
include('connection.php');
$k=$_SESSION['id'];
if(isset($_POST['nmcma'])){

    $u="DELETE FROM `nmcm` WHERE uid='$k'";
    $x=mysqli_query($con,$u);
    $q="INSERT INTO `nmcm`( `uid`, `status`) VALUES ('$k','1')";
    //echo ($q);
    $d=mysqli_query($con,$q);
    if($d)
    {
        echo "<script>alert('National Scholarship applied')</script>";
    }
    else
    {
       echo "<script>alert('National Scholarship application failed')</script>"; 
    }

}
if(isset($_POST['nmcmc'])){

    $q="UPDATE `nmcm` SET `status`='0' WHERE uid='$k'";
   // echo ($q);
    $d=mysqli_query($con,$q);
    if($d)
    {
        echo "<script>alert('National Scholarship application cancelled')</script>";
    }
    else
    {
       echo "<script>alert('National Scholarship application cancellation failed')</script>"; 
    }

}
if(isset($_POST['tmcma'])){
    $u="DELETE FROM `tmcm` WHERE uid='$k'";
    $x=mysqli_query($con,$u);
    $q="INSERT INTO `tmcm`( `uid`, `status`) VALUES ('$k','1')";
    $d=mysqli_query($con,$q);
    if($d)
    {
        echo "<script>alert('TKM Scholarship applied')</script>";
    }
    else
    {
       echo "<script>alert('TKM Scholarship application failed')</script>"; 
    }

}
if(isset($_POST['tmcmc'])){

    $q="UPDATE `tmcm` SET `status`='0' WHERE uid='$k'";
   // echo ($q);
    $d=mysqli_query($con,$q);
    if($d)
    {
        echo "<script>alert('TKM Scholarship application cancelled')</script>";
    }
    else
    {
       echo "<script>alert('TKM Scholarship application cancellation failed')</script>"; 
    }

}








?>