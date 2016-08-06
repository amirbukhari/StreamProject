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
// initialize jQuery
$(function() {
    getContent();
	name=prompt("Name?")//$("#userName").val();
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
  $(".messageAreaWrapper").slideToggle();
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
