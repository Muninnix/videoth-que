<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "../config/config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM movies WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $title = $row["title"];
                $description = $row["description"];
                $img = $row["img"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oups ! Un problème est survenu. Veuillez réessayer plus tard.";
        }
    }
    
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fiche du Film</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- IMPORT FAVICON -->
    <link rel="icon" href="../logo/favicon.png" type="image/x-icon"/>

    <!-- IMPORT CSS -->
    <link rel="stylesheet" type="text/css" href="../css/navbar-dashboard-admin.css">

    <style>
    .wrapper{
        width: 600px;
        margin: 0 auto;
    }
</style>
</head>
<body>

    <!-- NAVBAR DASHBOARD ADMIN -->
    <?php include("../includes/navbar-read-admin.php"); ?>

</body>
</html>