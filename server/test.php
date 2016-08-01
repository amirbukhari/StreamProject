<?php
$date1="2015-10-25 19:38:16";
$date2="2015-10-25 19:40:33";
$date1=strtotime($date1);
$date2=strtotime($date2);
echo "Created date is " . date("Y-m-d h:i:sa", $date1) ."<br>";
if($date1>$date2)
{
	echo"correct";
	
}
else
{
	echo"false";
}
?>