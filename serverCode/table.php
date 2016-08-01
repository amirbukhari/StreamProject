<?php
require "connect.php";
$sql="SELECT * FROM MESSAGES WHERE roomID = 1";
$result=$mysqli->query($sql);



$table="<h2>Messages</h2>
			<table>
				<tr>
					<th>
						<h2>From</h2>
					</th>
					<th>
						<h2>Message</h2>
					</th>
				</tr>";
			


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
					<h3>$messageBy</h3>
				</td>
				<td
					<h4>$message</h4>
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