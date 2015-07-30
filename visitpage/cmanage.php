<?php require_once("../contains/database_connect.php"); ?>
<?php require_once("../contains/functions.php"); ?>

<?php
    //2. Database query
    $query  = "SELECT * ";
    $query .= "FROM subjects ";
    $query .= "ORDER BY position ASC";

    $test = mysqli_query($connect, $query);
    
    check_query($test);
?>

<?php include("../contains/layout/header.php"); ?>

    <div id="main">
      <div id="navigation">
        <ul class="subjects">   
        <?php
            //3. Fetch the data from database
            while($category = mysqli_fetch_assoc($test)){
        ?>  

            <li><?php echo $category["menu_name"] . " (" . $category["id"] . ")"; ?></li>
            
        <?php
            }
        ?>
        </ul>
      </div>
      <div id="page">
        <h2>Manage Content</h2>
        <p>This is the admin area.</p>
          
      </div>
    </div>
        <?php
            //4. Release the fetched data
            mysqli_free_result($test);
        ?>

<?php include("../contains/layout/header.php"); ?>
