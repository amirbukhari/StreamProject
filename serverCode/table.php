<?php
require "connect.php";
$sql="(SELECT * FROM MESSAGES WHERE roomID = 1 ORDER BY messageID DESC LIMIT 10) ORDER BY messageID ASC";
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


/*$test=count($messages)."";
for($i=0;$i<count($messages);++$i)
{
	$details = $messages[$i];
	$test.=$details[0].' '.$details[1].' '.'<br>';
	
}*/


$table.="</div>";



return  $table;
?>