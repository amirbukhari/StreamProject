<?php
require "connect.php";
$sql="(select * from messages where roomID = 1 order by messageID desc limit 10) order by messageID asc";
$result=$mysqli->query($sql);



$table="
			<div>";
			


$count = 0;
$messageDetails=array();
$messages=array();

while($row = $result->fetch_array()) 
{
    $messageBy= $row['messageBy'];
    $message =$row['message'];
	
	$messageDetails =array($messageBy,$message);
	$messages[$count]=$messageDetails;
	$count++;
	
	$table.=" 
				
					<p class='messageBy'>$messageBy</p>
				
				
					<p class='message'>$message</p>";
}


$table.="</div>";

return  $table;
?>