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
                            
                            
                            <li class="nav-item  active mr-3">
                                <a class="nav-link" href="ahome.php">National MCM Applications<span class="sr-only">(current)</span></a>
                            </li>
							 <li class="nav-item  mr-3">
                                <a class="nav-link" href="ahome2.php">TKM MCM Applications</a>
                            </li>

                            <li class="nav-item mr-3">
                                <a class="nav-link" href="accepted.php">Accepted Applications</a>
                            </li>
                            <li class="nav-item  mr-3">
                                <a class="nav-link" href="rejected.php">Rejected Applications</a>
                            </li>

                            
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </nav>
        </header>
        
        <!-- //header -->
        <h3>Hello Admin</h3>
    </div>

</section>
<div style="padding-left: 150px;padding-top: 50px">
    <h3>Applications</h3>
<table ><tr><th width="100px">Name</th><th width="100px">Income</th><th width="100px">CGPA</th></tr>
<?php
include('connection.php');
$q1="SELECT `uid`FROM `nmcm` WHERE `status`='1'";
$e1=mysqli_query($con,$q1);
foreach ($e1 as $x) {
    $q2="SELECT  `id`,`name`, `department`, `mobile`, `income`, `cgpa` FROM `student` WHERE `id`='$x[uid]'";
    $e2=mysqli_query($con,$q2);
    
        foreach ($e2 as $x2) {
            {   $t=$x2['id'];
                echo "<tr><td>$x2[name]</td><td>$x2[income]</td><td>$x2[cgpa]</td>
                   <td ><button  class='btn btn-primary'><a href='acceptscholarship.php?m=$t' style='color:white;'>Accept</a></button></td>
                   <td ><button  class='btn btn-danger'><a href='rejectscholarship.php?n=$t' style='color:white;'>Reject</a></button></td>
                   </tr>";}
        
    }
}





?>
</table>
</div>
</body>
</html>