<?php
  // 1. Connection to database

  define("dbServer", "localhost");
  define("dbUser", "SHTour_cms");
  define("dbPass", "zpcshtour");
  define("dbName", "SHTour");

  $connect = mysqli_connect(dbServer, dbUser, dbPass, dbName);
  
  // Test the connection.
  
    if(mysqli_connect_errno()) {
        die("Failed to connect database: " . mysqli_connect_error() .  " (" . mysqli_connect_errno() . ")");
    }
//    } else {
//        echo mysqli_connect_errno(); //it will be 0   
//    }
?>