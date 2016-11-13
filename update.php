<?php

$db = pg_connect('host= postgre.cpg1qdf0dedm.us-west-2.rds.amazonaws.com port=5432 dbname=gavaakshiDB user=Administrator password=90007a7v4l.');

$query = "UPDATE max SET username='$_POST[uname]', phonenumber='$_POST[pname]', dob='$_POST[birth]' WHERE phonenumber='$_POST[pname]'";

 if(pg_query($query))
	 header("refresh:1;url=index.php");
else
	echo "NOT UPDATE";

?>
