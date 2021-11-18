<?php
// Include config file
require_once "../config/config.php";

// Define variables and initialize with empty values
$title = $description = $img = "";
$title_err = $description_err = $img_err = "";

// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate title
    $input_title = trim($_POST["title"]);
    if(empty($input_title)){
        $title_err = "Veuillez indiquer un Titre.";
    } else{
        $title = $input_title;
    }
    
    // Validate Description
    $input_description = trim($_POST["description"]);
    if(empty($input_description)){
        $description_err = "Veuillez indiquer une Description.";     
    } else{
        $description = $input_description;
    }
    
    // Validate IMG
    $input_img = trim($_POST["img"]);
    if(empty($input_img)){
        $img_err = "Veuillez entrer l'image.";
    } else{
        $img = $input_img;
    }
    
    // Check input errors before inserting in database
    if(empty($title_err) && empty($description_err) && empty($img_err)){
        // Prepare an update statement
        $sql = "UPDATE movies SET title=?, description=?, img=? WHERE id=?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_title, $param_description, $param_img, $param_id);
            
            // Set parameters
            $param_title = $title;
            $param_description = $description;
            $param_img = $img;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
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
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM movies WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
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
                    // URL doesn't contain valid id. Redirect to error page
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
    }  else{
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
    <title>Mettre à jour la fiche</title>
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
  <?php include("../includes/navbar-update-admin.php"); ?>

</body>
</html>