<meta charset="utf8" />
<?php
//header('Content-type:text/html; charset=utf8);
$con=mysqli_connect("localhost","root","raspberry","raspberryDB");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM temp");

echo "<table border='1'>
<tr>
<th>現在時間</th>
<th>溫度</th>
<th>濕度 </>
</tr>";
while($row = mysqli_fetch_array($result))  {
  echo "<tr>";
  echo "<td>" . $row['datetime'] . "</td>";
  echo "<td>" . $row['temp'] .' 度C'. "</td>";
  echo "<td>" . $row['humidity'] .' %'. "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

