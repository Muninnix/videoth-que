    <div class="wrapper col col-md bg-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Dashboard - Gestion des Films</h2>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Ajouter un Film</a>
                    </div>
                    <?php
                        // Include config file
                        require_once "../config/config.php";

                        // Attempt select query execution
                        $sql = "SELECT * FROM movies";
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                echo '<table class="table table-bordered table-striped">';
                                    echo "<thead>";
                                        echo "<tr>";
                                            echo "<th>Id [#]</th>";
                                            echo "<th>Titre</th>";
                                            echo "<th>Description</th>";
                                            echo "<th>Image</th>";
                                            echo "<th>Action</th>";
                                        echo "</tr>";
                                    echo "</thead>";
                                    echo "<tbody>";
                                        while($row = mysqli_fetch_array($result)){
                                            $short = substr($row['description'], 0,50);
                                            $short2 = substr($row['img'], 0,50);
                                            echo "<tr>";
                                                echo "<td>" . $row['id'] . "</td>";
                                                echo "<td>" . $row['title'] . "</td>";
                                                echo "<td>" . $short . "</td>";
                                                echo "<td>" . $short2 . "</td>";
                                                echo "<td>";
                                                    echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="Afficher le dossier" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                                    echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Mise à jour du dossier" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                                    echo '<a href="delete.php?id='. $row['id'] .'" title="Supprimer le Film" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                                echo "</td>";
                                            echo "</tr>";
                                        }
                                    echo "</tbody>";                            
                                echo "</table>";
                                // Free result set
                                mysqli_free_result($result);
                            } else{
                                echo '<div class="alert alert-danger"><em>Aucun films n a été trouvé.</em></div>';
                            }
                        } else{
                            echo "Oups ! Un problème est survenu. Veuillez réessayer plus tard.";
                        }

                        // Close connection
                        mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>