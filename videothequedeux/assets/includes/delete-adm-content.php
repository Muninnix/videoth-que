    <div class="wrapper col col-md bg-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5 mb-3">Dashboard - Supprimer le Film</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p>Êtes-vous sûr de vouloir supprimer ce Film ?</p>
                            <p>
                                <input type="submit" value="Oui" class="btn btn-danger">
                                <a href="dashboard.php" class="btn btn-secondary">Non</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>