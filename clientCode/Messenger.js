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
function getContent(timestamp)
{
    var queryString = {'timestamp' : timestamp};

    $.ajax(
        {
            type: 'GET',
            url: 'http://127.0.0.1/serverCode/server.php',
            data: queryString,
            success: function(data){
                // put result data into "obj"
                var obj = jQuery.parseJSON(data);
                // put the data_from_file into #response
                $('#response').html(obj.data_from_file);
                // call the function again, this time with the timestamp we just got from server.php
                getContent(obj.timestamp);
            }
        }
    );
}

// initialize jQuery
$(function() {
    getContent();
});





























/*

$(function()
{
	 $('#newMessage').bind("enterKey",function(e){
		alert("test");
	}); 
	$('#newMessage').keyup(function(e){
		if(e.keyCode == 13)
		{
			//$(this).trigger("enterKey");
			alert($("#newMessage").val());
		}
	});
	$("#btnDelete").click(function()
	{
		var checked = $('input[name=chkDelete]:checked');
		var output="";
		for(var i=0;i<checked.length;i++)
		{
			var ID =checked[i].value;
			
			$.post("serverCode/delete.php",
			{
				showID:ID
			},
			function(response)
			{
				output += response+"<br>";
				$("#response").html(output);
				
			});
		}
		 
	});
	
	$("#btnClear").click(function()
	{
		var checked = $('input[name=chkDelete]:checked');
		for(var i=0;i<checked.length;i++)
		{
			checked[i].checked=false;
		}
		location.reload();
	});
	
	$("#chkInsert").click(function()
	{
	
		$("#insert").toggle();
		
		
	});
	
	
	$("#btnCreateShow").click(function()
	{
		var showDate=$("#showDate").val();
		var showVenue=$("#showVenue").val();
		var showCity=$("#showCity").val();
		var showProvince=$("#showProvince").val();
		var showEventPage=$("#showEventPage").val();
		
		if(showDate!="" && showVenue!=""&& showCity!=""&& showProvince!="")
		{
			$.post("serverCode/insert.php",
			{
				showDate:showDate,
				showVenue:showVenue,
				showCity:showCity,
				showProvince:showProvince,
				showEventPage:showEventPage
			},
			function(response)
			{
				alert(response);
			});
			
		}else
		{
			alert("Please enter the correct information");
		}
	});
});*/