<html>

<body>

<?php

$db = pg_connect('host= postgre.cpg1qdf0dedm.us-west-2.rds.amazonaws.com port=5432 dbname=gavaakshiDB user=Administrator password=90007a7v4l.');

$query = "SELECT * FROM max";

$result = pg_query($query);


?>


<table>
<tr>
  <th>username</th>
  <th>phonenumber</th>
  <th>dob</th>
  <th>status</th>
</tr>  
<?php
 while($myrow = pg_fetch_assoc($result))
{
	echo "<tr><form action=update.php method=post>";
	echo "<td><input type=text name=uname value='".$myrow['username']."'></td>";
    echo "<td><input type=text name=pname value='".$myrow['phonenumber']."'></td>";
    echo "<td><input type=text name=birth value='".$myrow['dob']."'></td>";
	echo "<td><input type=text name=status value='".$myrow['status']."'></td>";
    echo "<td><input type=hidden name=id value='".$myrow['ID']."'></td>";
    echo "<td><input type=submit value='update'>";
    echo "</form></tr>";

}
?>
  
  
</body>

</html>