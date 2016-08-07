/**
	* AJAX long-polling
	*
	* 1. sends a request to the server (without a timestamp parameter)
	* 2. waits for an answer from server.php (which can take forever)
	* 3. if server.php responds (whenever), put data_from_file into #response
	* 4. and call the function again
	*
	* @param timestamp
*/
//var count = 0;
var name="";
//var color=randColor();
function getContent(timestamp)
{
    var queryString = {'timestamp' : timestamp};
	
    $.ajax(
	{
		type: 'GET',
		url: 'serverCode/server.php',
		async : true,
		data: queryString,
		success: function(data){
			// put result data into "obj"
			var obj = jQuery.parseJSON(data);
			// put the data_from_file into #response
			$('#table').html(obj.data_from_file);
			// call the function again, this time with the timestamp we just got from server.php
			//count ++;
			//$('#shit').html(count + ' ' + obj.timestamp);
			
			getContent(obj.timestamp);
			updateScroll();
		}
	}
    );
}
function insertMessage()
{
	var newMessage=$("#newMessage").val();
	
	var room=1;
	if(newMessage!="" && name!="")
	{
		$.post("serverCode/insert.php",
		{
			newMessage:newMessage,
			name:name,
			room:room,
		},
		function(response)
		{
			$("#newMessage").val('');
		});
		
	}else
	{
		alert("Please enter the correct information");
	}
}

function updateScroll(){
    var element = document.getElementById("table");
    element.scrollTop = element.scrollHeight;
}




/* function randColor(){
  // change the 9 to the number of colors you want
var colorPicker = Math.floor(Math.random()*9);
  var color;
  if( colorPicker === 9){ color = "#95f293";}
  if( colorPicker === 8){ color = "#850293";}
  if( colorPicker === 7){ color = "#757293";}
  if( colorPicker === 6){ color = "#65f293";}
  if( colorPicker === 5){ color = "#550293";}
  if( colorPicker === 4){ color = "#457293";}
  if( colorPicker === 3){ color = "#35f293";}
  if( colorPicker === 2){ color = "#250293";}
  if( colorPicker === 1){ color = "#157293";}
  return color;
} */ 



















// initialize jQuery
$(function() {
    getContent();
	
	name=$("#userName").val();//name=prompt("Name?")//
	$('#newMessage').bind("enterKey",function(e){
		//do stuff here
		insertMessage();
	});
	
	$('#newMessage').keyup(function(e){
		if(e.keyCode == 13)
		{
			$(this).trigger("enterKey");
		}
	});
	
	$('#newMessage').click(function()
	{
		//alert($("#table").scrollTop());
		updateScroll();
	});
	
	
	
	
	
	$(".convoName").click(function() {
		//$(".messageAreaWrapper").slideToggle();
		if($(".chatbox").parent().hasClass("col-md-3"))
		{
			$(".chatbox").parent().removeClass("col-md-3");
			$(".chatbox").parent().addClass("col-md-12");
			
			$("video").parent().removeClass("col-md-9");
			$("video").parent().addClass("col-md-12");
			
		}
		else
		{
			$(".chatbox").parent().removeClass("col-md-12");
			$(".chatbox").parent().addClass("col-md-3");
			
			$("video").parent().removeClass("col-md-12");
			$("video").parent().addClass("col-md-9");
		}
	});
	
	$(".btnOff").click(function() {
		if($(".chatnav").hasClass("darker"))
		{
			$(".chatnav").removeClass("darker");
		}
		else
		{
			$(".chatnav").addClass("darker");
		}
	});
	
	$(".btnClose").click(function() {
		$(".messageAreaWrapper").slideToggle();
	});
	
	
});
