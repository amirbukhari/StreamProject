<?php
require "connect.php";
$sql="SELECT * FROM MESSAGES WHERE roomID = 1";
$result=$mysqli->query($sql);



$table="
			<table>";
			


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
	
	$table.=" <tr>
				<td>
					<h6>$messageBy</h6>
				</td>
				<td
					<p>$message</p>
				</td>
			 </tr>";
}


/*$test=count($messages)."";
for($i=0;$i<count($messages);++$i)
{
	$details = $messages[$i];
	$test.=$details[0].' '.$details[1].' '.'<br>';
	
}*/


$table.="</table>";



return  $table;
?>