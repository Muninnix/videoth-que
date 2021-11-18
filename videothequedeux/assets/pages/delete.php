<?php
// Process delete operation after confirmation
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Include config file
    require_once "../config/config.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM movies WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: dashboard.php");
            exit();
        } else{
            echo "Oups ! Un problème est survenu. Veuillez réessayer plus tard.";
        }
    }
    
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter
    if(empty(trim($_GET["id"]))){
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Supprime le film</title>
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

  <!-- CONTENT DASHBOARD ADMIN -->
  <?php include("../includes/navbar-delete-admin.php"); ?>

</body>
</html>