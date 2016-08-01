<?php
require "connect.php";


$newMessage=$_POST["newMessage"];
$name=$_POST["name"];
$room=$_POST["room"];
$sql="INSERT INTO MESSAGES VALUES(NULL,'$newMessage','$name',NOW(),$room);";
$result=$mysqli->query($sql);
if($mysqli->affected_rows>0)
{
	echo "SUCCESS";
}
else
{
	echo "Show not successfully added";
}


			
?>