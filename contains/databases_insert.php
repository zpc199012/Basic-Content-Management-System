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
    $menu_name = "Edit This";
    $position = 4;
    $visible = 1;

	// 2. Perform database query
	$query  = "INSERT INTO subjects (";
	$query .= "  menu_name, position, visible";
	$query .= ") VALUES (";
	$query .= "  '{$menu_name}', {$position}, {$visible}";
	$query .= ")";

	$test = mysqli_query($connect, $query);

	if ($test) {
		// Success
		// redirect_to("somepage.php");
		echo "Success!";
	} else {
		// Failure
		// $message = "Subject creation failed";
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