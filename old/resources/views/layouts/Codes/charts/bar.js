 // Load the Visualization API and the line package.
      google.charts.load('current', {'packages':['bar']});
      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);
  var path = 'http://127.0.0.1/SYRINGE/index.php';
    function drawChart() {
  
        $.ajax({
        type: 'POST',
        url: path+"/Dashboard/getbardataOrderProgress", 
          
        success: function (data1) {
        // Create our data table out of JSON data loaded from server.
        var data = new google.visualization.DataTable();
       
      data.addColumn('string', 'Order Status');
      data.addColumn('string', 'Product Name');
	  data.addColumn('number', 'Quantity');
      
        
      var jsonData = $.parseJSON(data1);
      
      for (var i = 0; i < jsonData.length; i++) {
            data.addRow([jsonData[i].OrderStatus, jsonData[i].ProductName, 
			parseFloat(jsonData[i].Quantity)]);
      }
      var options = {
        chart: {
          /*title: 'Sales Progress',
          subtitle: 'Showing Daily Sales Progress'*/
        },
        width: 500,
        height: 280,
        axes: {
          x: {
            0: {side: 'down'}
          }
        }
         
      };
      var chart = new google.charts.Bar(document.getElementById('bar_chart'));
      chart.draw(data, options);
       }
     });
    }