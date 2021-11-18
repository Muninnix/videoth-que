<?php
// Include config file
require_once "../config/config.php";

// Define variables and initialize with empty values
$title = $description = $img = "";
$title_err = $description_err = $img_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate title
    $input_title = trim($_POST["title"]);
    if(empty($input_title)){
        $title_err = "Veuillez indiquer un titre.";
    } else{
        $title = $input_title;
    }
    
    // Validate description
    $input_description = trim($_POST["description"]);
    if(empty($input_description)){
        $description_err = "Veuillez indiquer une description.";     
    } else{
        $description = $input_description;
    }
    
    // Validate IMG
    $input_img = trim($_POST["img"]);
    if(empty($input_img)){
        $img_err = "Veuillez entrer le lien de l'image.";
    } else{
        $img = $input_img;
    }
    
    // Check input errors before inserting in database
    if(empty($title_err) && empty($description_err) && empty($img_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO movies (title, description, img) VALUES (?, ?, ?)";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_title, $param_description, $param_img);
            
            // Set parameters
            $param_title = $title;
            $param_description = $description;
            $param_img = $img;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: dashboard.php");
                exit();
            } else{
                echo "Oups ! Un problème est survenu. Veuillez réessayer plus tard.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Nouveau Film</title>
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
    table tr td:last-child{
        width: 120px;
    }
</style>

</head>
<body>

    <!-- NAVBAR DASHBOARD ADMIN -->
    <?php include("../includes/navbar-create-admin.php"); ?>

</body>
</html>