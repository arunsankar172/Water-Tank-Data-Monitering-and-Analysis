<?php
 $con = mysqli_connect('localhost','test','1234','water_monetering');
?> 
 <html>
  <head>
	<meta http-equiv="refresh" content="50" />
    <script type="text/javascript" src="script/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
		
        var data = google.visualization.arrayToDataTable([
          ['Time','Level'],
<?php 
 $query = "SELECT * FROM tank ORDER BY s_no DESC LIMIT 300;";
 $exec = mysqli_query($con,$query);
 while($row = mysqli_fetch_array($exec)){
	 //$date=$row["curtime"];
	//$new = date('h:i A', strtotime($date));
	//if($row['time']>6) (
 echo "['".$row['time']."',".$row['volume_in_ltrs']."],";
 }
 ?>
        ]);
      var options = {
        chart: {
          title: 'Volume',
		  legend:{position:'bottom'}
          
        },
        width: 1000,
        height: 400
      };

      var chart = new google.charts.Line(document.getElementById('linechart_material'));

      chart.draw(data,options);
	  
    }
    </script>
  </head>
  <body>
    <br>
    <br>
    <br>
	<center><div id="linechart_material" style="width: 100%; height: 500px"></div></center>
  </body>
  
</html> 