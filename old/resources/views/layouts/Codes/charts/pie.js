google.charts.load('current', {'packages':['corechart']}); 
       
    // Set a callback to run when the Google Visualization API is loaded. 
    google.charts.setOnLoadCallback(drawChart); 
    var path = 'http://127.0.0.1/SYRINGE/index.php';
    function drawChart() { 
      var jsonData = $.ajax({ 
          url: path+"/Dashboard/getdata", 
          dataType: "json", 
          async: false 
          }).responseText; 
           
      // Create our data table out of JSON data loaded from server. 
      var data = new google.visualization.DataTable(jsonData); 
 
 	var options = {
        chart: {
          title: 'Sales Progress',
          subtitle: 'Showing Order Delivery percentage'
        },
		
        width: 350,
        height: 280,
        axes: {
          x: {
            0: {side: 'down'}
          }
		  
        }
		
	}
      // Instantiate and draw our chart, passing in some options. 
      var chart = new google.visualization.PieChart(document.getElementById('chart_div')); 
      chart.draw(data, options); 
    } 