<html>
    <style>
        #linec{
            position: relative;
            bottom: 270px;
            left: 20px;

        }
    </style>
    <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);
    
            function drawChart() {
                // Check if the line variable has been defined and is not empty
                <?php if (isset($line) && !empty($line)): ?>
                    var data = google.visualization.arrayToDataTable([
                        ['Sport', 'Profits(Dt)'],
                        <?php echo $line; ?>
                    ]);
    
                    var options = {
                        title: 'Sports Performance',
                        curveType: 'function',
                        colors: ['CornflowerBlue'],
                        legend: { position: 'bottom' }
                    };
    
                    var chart = new google.visualization.LineChart(document.getElementById('linec'));
    
                    chart.draw(data, options);
                <?php else: ?>
                    console.log("No data available to display the chart.");
                <?php endif; ?>
            }
        </script>
    </head>
    
    <body>
      <div id="linec" style="width: 450px; height: 200px"></div>
    </body>
  </html>
