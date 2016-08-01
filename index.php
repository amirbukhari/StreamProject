<?php
$table= require "serverCode/table.php";
$doc="<!DOCTYPE html>
<html>

	<head>
		
		<meta charset='utf-8'>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'>
		<script src='clientCode/jquery-1.11.2.min.js'></script>
	
		<script type='text/javascript' src='clientCode/client.js'></script>
	</head>
	
	<body>
		
		<div id='container'>
			
			<div id='table' style='height: 200px; width: 500px; font-size: 12px; overflow: auto;'>
			</div>
			<input id='newMessage' name='newMessage' type='textbox'>
		</div>
	</body>
</html>";
echo $doc;
?>