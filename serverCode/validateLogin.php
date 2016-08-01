<?php
require "connect.php";

$username=$_POST["txtUsername"];
$password=$_POST["txtPassword"];

$sql="SELECT * FROM USERS WHERE userFirst = '$username'AND userPassword='$password'";
$result=$mysqli->query($sql);
$output="";
if($mysqli->affected_rows>0)
{
	$output= "SUCCESSFUL LOGIN";
	setcookie("loggedIn",true,time() + 1000,"/");
	header("location:../editShows.php");
	die();
}
else
{
	$output= "UNSUCCESSFUL LOGIN <a href='../login.php'>GO BACK</a>";
}
echo $output;

			
?>