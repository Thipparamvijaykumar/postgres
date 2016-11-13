<html> 
    <body> 
        <?php 
        $db = pg_connect('host=postgre.cpg1qdf0dedm.us-west-2.rds.amazonaws.com port=5432 dbname=gavaakshiDB user=Administrator password=90007a7v4l.'); 

        $username = pg_escape_string($_POST['username']); 
        $phonenumber = pg_escape_string($_POST['phonenumber']); 
        $dob = pg_escape_string($_POST['dob']); 

        $query = "INSERT INTO max(username , phonenumber , dob) VALUES('" . $username . "', '" . $phonenumber . "', '" . $dob . "')";
        $result = pg_query($query); 
        if (!$result) { 
            $errormessage = pg_last_error(); 
            echo "Error with query: " . $errormessage; 
            exit(); 
        } 
        printf ("These values were inserted into the database - %s %s %s", $username, $phonenumber, $dob); 
		
        pg_close(); 
        ?> 
    </body> 
</html> 