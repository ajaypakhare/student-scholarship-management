<?php
include('connection.php');
$j=$_GET['n'];
$q="UPDATE `tmcm` SET `status`='-1' WHERE `uid`='$j'";
$e=mysqli_query($con,$q);
//echo ($j);
if($e)
{
	header('Location:ahome2.php');
}










?>