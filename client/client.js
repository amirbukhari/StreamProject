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
            }
        }
    );
}

// initialize jQuery
$(function() {
    getContent();
	
});
