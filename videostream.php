
<!DOCTYPE html>
<?php
	include('session.php');
?>
<html>
	
	<head>
		
		<meta charset='utf-8'>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'>
		
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/desktop.css" rel="stylesheet">
	</head>
	
	<body>
		
		<div class='container-fluid' style="margin-top:3em">
			<div class='row'>
				<div class ='col-md-9'>
					<video width="100%" autoplay controls>
					<?php 
						echo "<source  src='http://192.168.1.112:8080?t=".time()."'  type='video/mp4' / >";
						echo "<source  src='http://192.168.1.112:8080?t=".time()."'  type='video/webm' / >";
						echo "<source  src='http://192.168.1.112:8080?t=".time()."'  type='video/ogg' / >";?>
						
						Your browser does not support the video tag.
					</video> 
				</div>
				<input id='userName' style="display:none" value=<?php echo "'".$login_session."'"; ?> />
					<!--<embed src="stream.asx">  -->
				<div class ='col-md-3'>
					<div class="chatbox">
				<div class="chatnav">
					<div class="convoName">
						<p>Convo</p>
					</div>
					<button class="btnClose" type="button" class="btn btn-default btn-xs">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
					<button class="btnOff" type="button" class="btn btn-default btn-xs">
						<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
					</button>
				</div>
				<div class="messageAreaWrapper">
					<div class="messageArea" id="table">
					</div>
					<textarea  rows="1" id='newMessage' name='newMessage'></textarea>
				</div>
			</div>
			
				</div>
			</div>
		</div>
		
		<!--<div id="push">
			<div class="chatbox">
				<div class="chatnav">
					<div class="convoName">
						<p>Convo</p>
					</div>
					<button class="btnClose" type="button" class="btn btn-default btn-xs">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
					<button class="btnOff" type="button" class="btn btn-default btn-xs">
						<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
					</button>
				</div>
				<div class="messageAreaWrapper">
					<div class="messageArea" id="table">
					</div>
					<textarea  rows="1" id='newMessage' name='newMessage'></textarea>
				</div>
			</div>
		</div>-->
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/jquery-ui.js"></script>
		
        <script src="js/bootstrap.min.js"></script>
		
		<script type='text/javascript' src='clientCode/client.js'></script>
		
	</body>
</html>