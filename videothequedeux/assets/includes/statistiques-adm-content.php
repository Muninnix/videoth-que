<!-- CARD IMPORT -->
<div class="box">
    <div class="container">
        <div class="row">
            <?php
                    // Include config file
            require_once "../config/config.php";

                    // Attempt select query execution
            $sql = "SELECT * FROM movies";
            if($result = mysqli_query($link, $sql)){
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        echo "<div class=\"card-deck\">";
                        echo "<div class=\"card\">";
                        echo "<div class=\"card-body\">";
                        echo "<h5 class=\"card-title\">Logs : Nouveau employé ajouté : ".$row['id']."</h5> <br>\n";
                        echo "</div>";
                        echo "</div>";
                    }
                            // Free result set
                    mysqli_free_result($result);
                } else{
                    echo '<div class="alert alert-danger"><em>Aucun films n a été trouvé.</em></div>';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

                    // Close connection
            mysqli_close($link);
            ?>
        </div>      
    </div>
</div>

</body>