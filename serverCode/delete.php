<?php
require "connect.php";


$ID=$_POST["showID"];


$sql="DELETE FROM SHOWS WHERE showID =$ID;";
$result=$mysqli->query($sql);
if($mysqli->affected_rows>=1)
{
	echo "Successfully deleted a row";
}
else
{
	echo "SHOW NOT SUCCESSFULLY DELETED CONTACT AMIR $sql";
}


			
?>