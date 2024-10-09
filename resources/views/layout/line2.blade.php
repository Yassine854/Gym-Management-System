<html>
    <style>
        #line2{
            position: relative;
            bottom: 140px;
            left: 20px;

        }
    </style>
    <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);
    
            function drawChart() {
                // Check if the line2 variable has been defined and is not empty
                <?php if (isset($line2) && !empty($line2)): ?>
                    var data = google.visualization.arrayToDataTable([
                        ['Product', 'Profits(Dt)'],
                        <?php echo $line2; ?>
                    ]);
    
                    var options = {
                        title: 'Products Performance',
                        colors: ['Crimson'],
                        curveType: 'function',
                        legend: { position: 'bottom' }
                    };
    
                    var chart = new google.visualization.LineChart(document.getElementById('line2'));
    
                    chart.draw(data, options);
                <?php else: ?>
                    console.log("No data available to display the products chart.");
                <?php endif; ?>
            }
        </script>
    </head>
    
    <body>
      <div id="line2" style="width: 450px; height: 200px;"></div>
    </body>
  </html>
