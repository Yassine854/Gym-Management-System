 <html>
<style>
    #pie1{
        position: relative;
        bottom: 230px;
    }
</style>
<head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        // Load the Visualization API and the piechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

      // Create the data table.
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Topping');
      data.addColumn('number', 'Slices');
      data.addRows([
          <?php echo $chartData ?? 0; ?>
      ]);

// Set chart options
      var options = {'title':'Percentage of Subscriptions per sport',
                     'width':500,
                     'height':400,
                     is3D: true,

                     chartArea:{
                        left:50,
                        right:10, // !!! works !!!
                        bottom:20,  // !!! works !!!
                        top:20,
                     }
                    };
      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.PieChart(document.getElementById('pie1'));
      chart.draw(data, options);
    }


    </script>
</head>

<body>
    <!--Div that will hold the pie chart-->
    <div id="pie1" style="width:500px; height:200px"></div>
</body>

</html>

