<?php
require "connect.php";
$sql="SELECT * FROM SHOWS";
$result=$mysqli->query($sql);


$table="<h2>SHOWS</h2>
			<table id='show'>
				<tr>
					<th>
						<h2>Date</h2>
					</th>
					<th>
						<h2>Info</h2>
					</th>
					<th>
						<h2>Delete</h2>
					</th>
				</tr>";
			




while($row = $result->fetch_array()) 
{
	$showID = $row['showID'];
    $showDate= $row['showDate'];
    $showVenue =$row['showVenue'];
    $showLocation =$row['showLocation'];
    $showEventPage= $row['showEventPage'];
	
	
	
	
	$table.=" <tr>
				<td>
					<h3>$showDate</h3>
				</td>
				<td>
					<h3>Inhalants @ $showVenue</h3>
					<h4>$showLocation</h4>
					<a href='$showEventPage'><h4>EVENT PAGE</h4></a>
				</td>
				<td>
				<input type='checkbox' name='chkDelete' value=$showID>
				</td>
			 </tr>";
}



$table.="<tr>
			<td>
				
			</td>
			<td>
				
			</td>
			<td>
			<input type='button' id='btnClear' value='CLEAR'>
			<input type='button' id='btnDelete' value='DELETE'>
			</td>
		 </tr>
		 </table>";
return $table;
?>