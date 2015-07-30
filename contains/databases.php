<?php
  // 1. Connection to database
  $dbhost = "localhost";
  $dbuser = "SHTour_cms";
  $dbpass = "zpcshtour";
  $dbname = "SHTour";
  $connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  
  // Test the connection.
  
    if(mysqli_connect_errno()) {
        die("Failed to connect database: " . mysqli_connect_error() .  " (" . mysqli_connect_errno() . ")");
    }
//    } else {
//        echo mysqli_connect_errno(); //it will be 0   
//    }
?>

<?php
    //2. Database query
    $query  = "SELECT * ";
    $query .= "FROM subjects ";
    $query .= "ORDER BY position ASC";

    $test = mysqli_query($connect, $query);

    if(!$test) {
        die("Database query failed!");
    }

?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Databases</title>
	</head>
	<body>
        <h1>Successfully connected to mysql database !</h1>
        <ul>
        <?php
            //3. Fetch the data from database
            while($category = mysqli_fetch_assoc($test)){
        ?>  

            <li><?php echo $category["menu_name"] . " (" . $category["id"] . ")"; ?></li>
            
        <?php
            }
        ?>
        </ul>
        
        <?php
            //4. Release the fetched data
            mysqli_free_result($test);
        ?>
	</body>
</html>

<?php
  // 5.Database connection close
  mysqli_close($connect);
?>