<?php
include('connection.php');
$j=$_GET['m'];
$q="UPDATE `tmcm` SET `status`='2' WHERE `uid`='$j'";
$e=mysqli_query($con,$q);
if($e)
{
	header('Location:ahome2.php');
}










?>