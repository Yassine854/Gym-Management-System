<html>
  <head>
      <style>
          #area{
            position: relative;
            bottom: 290px;
          }
      </style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Sport', 'Boys', 'Girls'],
          <?php echo $area ?? 0; ?>

        ]);

        var options = {
          title: 'Genders per sport',
          hAxis: {title: 'Sports',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('area'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="area" style="width: 100%; height: 480px;"></div>
  </body>
</html>
