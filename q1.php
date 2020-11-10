<?php
session_start();
$con =mysqli_connect("localhost","root","");
mysqli_select_db($con,"final");
if(!isset($_SESSION["n"]))
{
	echo "no session";
}	
	 $a = $_SESSION["n"];
	echo $a;

?>
