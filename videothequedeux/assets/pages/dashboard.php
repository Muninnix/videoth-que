<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- IMPORT FAVICON -->
    <link rel="icon" href="../logo/favicon.png" type="image/x-icon"/>

    <!-- IMPORT CSS -->
    <link rel="stylesheet" type="text/css" href="../css/navbar-dashboard-admin.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <style>
    .wrapper{
        width: 600px;
        margin: 0 auto;
        overflow: overlay;
    }
    table tr td:last-child{
        width: 120px;
    }
</style>

<!-- IMPORT JS -->
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
</script>

</head>

<body>

    <!-- NAVBAR DASHBOARD ADMIN -->
    <?php include("../includes/navbar-dashboard-admin.php"); ?>

</body>
</html>