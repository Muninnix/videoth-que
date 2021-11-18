<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="javascript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleback.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body class="black">
    <!--Création de la carte login-->
    <section id="margintop">
        <div class="container">
            <div class="row justify-content-center">
               
                <div class="col-md-6 col-lg-6 blue">
                    <div class="login-wrap p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-1 text-white text-center">Sign In</h3>
                            </div>
                        </div>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="signin-form">
                        <div class="form-group mb-3 text-white">
                            <label class="label" for="password">Email address:</label>
                            <input type="text" name="email" class="form-control lightblue text-center"
                                placeholder="Enter your email" required <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                                <span class="invalid-feedback"><?php echo $email_err; ?></span>
                            </div>
                        <div class="form-group mb-3 text-white">
                            <label class="label" for="password">Password:</label>
                            <input type="password" name="password" class="form-control lightblue text-center"
                                placeholder="Enter your password" required <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                        </div>
                        <div class="buttonform-group">
                            <button type="submit"
                                class="form-control btn btn-primary rounded btn-sign submit px-2 mt-4 midblue">Sign In</button>
                        </div>
                        <div class="text-center m-3">
                            <a class="linkreset" href="#">Forgot Password?</a>
                        </div>
                    </form>
                </div>
            </div>
    </section>
</body>

</html>