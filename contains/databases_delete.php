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
?>


<?php
    //form values in $_POST
    $id = 10;

	// 2. Perform database query
	$query  = "DELETE FROM subjects ";
    $query .= "WHERE id = {$id} ";
    $query .= "LIMIT 1";    //To protect the data from being delete accidently 



	$test = mysqli_query($connect, $query);

	if ($test && mysqli_affected_rows($connect) == 1) {
		// Success
		// redirect_to("somepage.php");
		echo "Success!";
	} else {
		// Failure
		// $message = "Category delete failed";
		die("Database query failed. " . mysqli_error($connect));
	}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Databases</title>
	</head>
	<body>
        <h1>Successfully connected to mysql database !</h1>
        
	</body>
</html>

<?php
  // 5.Database connection close
  mysqli_close($connect);
?>