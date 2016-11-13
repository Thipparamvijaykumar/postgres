  <?php 
        $db = pg_connect('host=postgre.cpg1qdf0dedm.us-west-2.rds.amazonaws.com port=5432 dbname=gavaakshiDB user=Administrator password=90007a7v4l.'); 
		
		if (isset($_POST['search'])) {

        $query = "SELECT * FROM max WHERE phonenumber='9966287720'"; 

        $result = pg_query($query); 
        if (!$result) { 
            echo "Problem with query " . $query . "<br/>"; 
            echo pg_last_error(); 
            exit(); 
        } 

        while($myrow = pg_fetch_assoc($result)) { 
            printf ( htmlspecialchars($myrow['username']));
			printf ( htmlspecialchars($myrow['phonenumber']));
			printf ($myrow['dob']);
        } 
		}
		pg_close();
        ?> 
		
		<html>
		 <form action="next.php" method="post"> 
		 <td><input type="text" name="username" class="textInput"></td>
		
		    <input type="submit" name="search" value="Submit"> 
          
        </form> 
		</html>