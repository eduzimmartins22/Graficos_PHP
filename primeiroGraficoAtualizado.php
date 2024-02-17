  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['cidade', 'população', {role : 'annotation'}],
          <?php

          include 'conexao.php';
          $sql = "SELECT * FROM Cidades";
          $buscar = myslqi_querry($conexao,$sql);

          while ($dados = mysqli_fetch_array($buscar)) {
            $cidade = $dados['cidade'];
            $populacao = $dados['populacao'];  
          
          ?>


          [<?php echo $cidade?>, <?php echo $populacao ?>, <?php echo $populacao ?>],

        <?php } ?>
        ]);

        var options = { 
          title: 'população das cidades',
          curveType: 'function',
          legend: { position: 'right' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('graficoLinha'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 850px; height: 600px"></div>
  </body>
</html>

