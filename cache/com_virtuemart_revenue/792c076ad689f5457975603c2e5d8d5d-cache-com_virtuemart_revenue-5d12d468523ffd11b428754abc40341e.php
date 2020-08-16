<?php die("Access Denied"); ?>#x#a:2:{s:6:"result";a:2:{s:6:"report";a:0:{}s:2:"js";s:1415:"
  google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Day', 'Orders', 'Total Items sold', 'Revenue net'], ['2020-07-17', 0,0,0], ['2020-07-18', 0,0,0], ['2020-07-19', 0,0,0], ['2020-07-20', 0,0,0], ['2020-07-21', 0,0,0], ['2020-07-22', 0,0,0], ['2020-07-23', 0,0,0], ['2020-07-24', 0,0,0], ['2020-07-25', 0,0,0], ['2020-07-26', 0,0,0], ['2020-07-27', 0,0,0], ['2020-07-28', 0,0,0], ['2020-07-29', 0,0,0], ['2020-07-30', 0,0,0], ['2020-07-31', 0,0,0], ['2020-08-01', 0,0,0], ['2020-08-02', 0,0,0], ['2020-08-03', 0,0,0], ['2020-08-04', 0,0,0], ['2020-08-05', 0,0,0], ['2020-08-06', 0,0,0], ['2020-08-07', 0,0,0], ['2020-08-08', 0,0,0], ['2020-08-09', 0,0,0], ['2020-08-10', 0,0,0], ['2020-08-11', 0,0,0], ['2020-08-12', 0,0,0], ['2020-08-13', 0,0,0], ['2020-08-14', 0,0,0]  ]);
        var options = {
          title: 'Report for the period from Friday, 17 July 2020 to Saturday, 15 August 2020',
            series: {0: {targetAxisIndex:0},
                   1:{targetAxisIndex:0},
                   2:{targetAxisIndex:1},
                  },
                  colors: ["#00A1DF", "#A4CA37","#E66A0A"],
        };

        var chart = new google.visualization.LineChart(document.getElementById('vm_stats_chart'));

        chart.draw(data, options);
      }
";}s:6:"output";s:0:"";}