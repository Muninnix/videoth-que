    <div class="wrapper col col-md bg-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">Dashboard - Fiche du Film</h1>
                    <hr>
                    <div class="form-group">
                        <label>Nom du Film : </label>
                        <b><?php echo $row["title"]; ?></b>
                    </div>
                    <div class="form-group">
                        <label>Description du Film : </label>
                        <b><?php echo $row["description"]; ?></b>
                    </div>
                    <div class="form-group">
                        <label>URL du Film : </label>
                        <b><?php echo $row["img"]; ?></b>
                    </div>
                    <hr>
                    <p><a href="dashboard.php" class="btn btn-primary">Revenir à la gestion</a></p>
                </div>
            </div>        
        </div>
    </div>