<?php
$x=$_POST['name'];
$y=$_POST['surname'];
$z=$_POST['phone'];
$w=$_POST['mail'];
$u=$_POST['gender'];
$a=$_POST['address'];
$s=$_POST['state'];
$c=$_POST['city'];
$t=$_POST['type'];
$ui=$_POST['uid'];
$p=$_POST['pwd'];
$cp=$_POST['cpwd'];
include 'connection.php';

$query1=("select uid from user where uid='$ui'");
$r=mysql_query($query1);
if(mysql_num_rows($r)==0)
{
$query="insert into user (name,surname,phone,email,gender,address,state,city,type,uid,pwd,cpwd) values ('$x','$y','$z','$w','$u',
'$a','$s','$c','$t','$ui','$p','$cp')";
mysql_query($query);
echo "Thank you";
}
else
{
	echo "uid already exits";
	header("location:login.html");
}
?>