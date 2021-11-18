<!DOCTYPE html>
<html>

<head>
    <title>YeS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link href="assets/css/index.css" rel="stylesheet" />
    <script src="assets/js/index.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Sidebar -->
    <nav class="navbar">
        <ul class="navbar-menu">
            <li class="navbar-item logo">
                <a href="#" class="navbar-link">
                    <span class="navbar-title">FILM</span>
                    <img class="fas navbar-icon" src="assets/images/right-chevron.png" alt="">
                </a>
            </li>
            <li class="navbar-item">
                <a href="#" class="navbar-link">
                    <img class="fas navbar-icon" src="assets/images/search.png" alt="">
                    <span class="navbar-title"><input type="text" class="form-control  search-menu" placeholder="Search movies..."></span>
                </a>
            </li>
            <li class="navbar-item">
                <a href="#" class="navbar-link">
                    <img class="fas navbar-icon" src="assets/images/clapperboard (1).png" alt="">
                    <span class="navbar-title">MOVIES</span>
                </a>
            </li>
            <li class="navbar-item">
                <a href="#" class="navbar-link">
                    <img class="fas navbar-icon" src="assets/images/television (1).png" alt="">
                    <span class="navbar-title">TV SHOWS</span>
                </a>
            </li>
            <li class="navbar-item">
                <a href="#" class="navbar-link">
                    <img class="fas navbar-icon" src="assets/images/musical-note (2).png" alt="">
                    <span class="navbar-title">MUSIC</span>
                </a>
            </li>
            <li class="navbar-item">
                <a href="#" class="navbar-link">
                    <img class="fas navbar-icon" src="assets/images/radio (1).png" alt="">
                    <span class="navbar-title">RADIO</span>
                </a>
            </li>
            <li class="navbar-item">
                <a href="#" class="navbar-link">
                    <img class="fas navbar-icon" src="assets/images/login.png" alt="">
                    <span class="navbar-title">Se deconnecter</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Main -->
    <div class="container-fluid">
        <main>
            <!-- Afficher l'heure -->
            <div class="text-end mt-3 fs-4 mr-5" id="heure_exacte"></div><br>

            <p class="title_categories fs-6">Catégories</p>
            <!-- boites permettant l'affichage de catégorie -->
            <div class="les_boites text-center">

                <div class="box"><img src="assets/images/people.png" width="48px" alt="">
                    <p class="title-box">Action</p>
                </div>
                <div class="box"><img src="assets/images/happiness.png" width="48px" alt="">
                    <p class="title-box">Comedy</p>
                </div>
                <div class="box"><img src="assets/images/wedding.png" width="48px" alt="">
                    <p class="title-box">Romance</p>
                </div>
                <div class="box"><img src="assets/images/role-model.png" width="48px" alt="">
                    <p class="title-box">Fantastique</p>
                </div>
                <div class="box"><img src="assets/images/plus.png" width="48px" alt="">
                    <p class="title-box"></p>
                </div>
            </div>

            <p class="fs-6 mt-4">Recently Added movies</p>



            <!-- slide recently added movies -->
            <div class="wrapper">


                <section id="section1">
                    <a href="#section3" class="arrow__btn">‹</a>
                    <div class="item">
                        <img
                            src="https://occ-0-1567-1123.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABRvngexxF8H1-OzRWFSj6ddD-aB93tTBP9kMNz3cIVfuIfLEP1E_0saiNAwOtrM6xSOXvoiSCMsihWSkW0dq808-R7_lBnr6WHbjkKBX6I3sD0uCcS8kSPbRjEDdG8CeeVXEAEV6spQ.webp">
                    </div>
                    <div class="item">
                        <img
                            src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABZEK-7pZ1H5FD4cTyUb9qB_KeyJGz5p-kfPhCFv4GU_3mbdm8Xfsy4IBchlG9PFNdGff8cBNPaeMra72VFnot41nt0y3e8RLgaVwwh3UvyM2H2_MkmadWbQUeGuf811K7-cxJJh7gA.jpg">
                    </div>
                    <div class="item">
                        <img
                            src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABQCoK53qihwVPLRxPEDX98nyYpGbxgi5cc0ZOM4iHQu7KQvtgNyaNM5PsgI0vy5g3rLPZdjGCFr1EggrCPXpL77p2H08jV0tNEmIfs_e8KUfvBJ6Ay5nM4UM1dl-58xA6t1swmautOM.webp">
                    </div>
                    <div class="item">
                        <img
                            src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABdYtAqj8CyaJTWq5taD8Ro_UgwH3nne9QpFGVps-2J3IG-leqrfqXFii4jzZn48nPYTkrlwKQEV0R7_cEKlYBPRzdKqNODc-Oz26IL3LlLgFboXibIWXwxzeYxzuqn0I9TpARjeByw.jpg">
                    </div>
                    <div class="item">
                        <img
                            src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABbcCX42tsqGbBvO2y9CQv5-7QvYbCfoHtXsuc6NPCtZaKa4l4fBX3XWvUwG9F2A3CTsNpHVmulxBbdXKwK8Q6xGjejd9FoadGkZ7CnGrSl601TOQjzSHJ23NuIPC8j0QMGORL4uRIA.jpg">
                    </div>
                    <a href="#section2" class="arrow__btn">›</a>
                </section>


                <section id="section2">
                    <a href="#section1" class="arrow__btn">‹</a>
                    <div class="item">
                        <img
                            src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABVopDZ5Fy9_fk_HO5WxHTXKKjKhtWFupbSjuvPwfLK_vytzon4EwRUdGgYJ34JwPxOTK_NkV3aXfkULMB0Dcct-FyfqzH-X44VXuRMp4QeBHlvKwWeZFpZlGdItPzmmg4scmwhG7SQ.jpg">
                    </div>
                    <div class="item">
                        <img
                            src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABTOj1-116yVcgKWMU2dI3GFR4x0fSkiGsqtLLeLUxRR7STaksjAqBTrYlTfrB8nIGnGvXksi0ewXAhVGg6-pLxpFOIfcpjK-pf8D5xehFZo5a6vJbo4L0AGbrzglbyUoq255QBJgRQ.jpg">
                    </div>
                    <div class="item">
                        <img
                            src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/a76057bcfd003711a76fb3985b1f2cf74beee3b8/AAAABd3IBDpxbRcHXvRMFCZeKa2aHLU1P4SJtrACMS9om3yhLjqPlvNlmR_fypPxjtbsbnKaC4JZhPSpDG4r_kdxSHHAltWguMcCB-1Y1OShr2zWfUv7Whf_39fNH5ZJ3_0gxQrs0akmQjQz44_LT7jXH5LMZ7iMBAzac5IEj4m7Fn_5OWEGYnVsDsKG-QTommDooULMDF9bEw.jpg">
                    </div>
                    <div class="item">
                        <img
                            src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/a76057bcfd003711a76fb3985b1f2cf74beee3b8/AAAABXSd7bhDddcwkq9XpksoQFCHVx29Sxl_h4hb2n3F2GIt32a4XWcOnctQfgnT5qdolv8UML6_xNB5CJ89h56wueb13mYmEBr0sx5e9iLPdtVcOQAOmKXKWHHXwFvJuCUwuNnL3s8eAQwqLXPVMHMEsujM684rUGrZNF2btN2GRy5-RyEslsxZO93V2Q_H2bWs8A8oayt1h5M.webp">
                    </div>
                    <div class="item">
                        <img
                            src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/a76057bcfd003711a76fb3985b1f2cf74beee3b8/AAAABbXWODpAWqVXcmmjMA7K-2mPkQpvwCLfSdeyhVXzR8A3MSpdSEnnjf4HEJJTYC-TnktU6njTUGAxmzWEYCaJbk4v_ZeL-7QGzmkvYBjg_N-evr2XmcX-Fanoyvu_nimFP4iigPe4O3Vr_WcgplhwkDrJwPUJa84wRLrNAx3TufN5V7cWRP4indqu5HQahvgFEqfL9zjp4g.jpg">
                    </div>
                    <a href="#section3" class="arrow__btn">›</a>
                </section>


                <section id="section3">
                    <a href="#section2" class="arrow__btn">‹</a>
                    <div class="item">
                        <img
                            src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABRr4YxdaABuAuH_3FmSQZn7BCvLp-UUPsXE9MiYpvFP3CSUHV2zOew5oVqKqqdaOd3tbFVS0Uf67uIs7_eZydlCghg4nK0nMatRpPImABwTOhnNzCLCxdKrua7pPIcPCZqBYTeAO5g.jpg">
                    </div>
                    <div class="item">
                        <img
                            src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABTyWK1MKaw8GcObtz47R2Tj7wkLJ7qQu9tk6TVpcoyxpzD4B-zZ569bQ5vGrREBL-MWFkGilXUwy7tCDaj2XOGkUB4RsbbFAmp9NgSr6lygMpUGNHSlyfrFbUORsRkrxSIoh_ggOvg.jpg">
                    </div>
                    <div class="item">
                        <img
                            src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/a76057bcfd003711a76fb3985b1f2cf74beee3b8/AAAABY7NwkWEJIfXsn6t3Li4bGSCQ1nEErPisI5ZZtXlC-_VRBZOUrhWK5X3vt3t6SR_cpgVhCwxgQqFFDJhk62Kk8hawOnYGZMr0LKeLczMFV2zalCFjkcdLksvT4HB2LEi6LFyruyk3Uu0LmNGsHfC2A8Bly60smr_3sDbz4RruXcklPOG1qYq9wUVu3zfaiwNvqmG4b8aFA.jpg">
                    </div>
                    <div class="item">
                        <img
                            src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/a76057bcfd003711a76fb3985b1f2cf74beee3b8/AAAABemXHOga9feFnOux6I2YyACBD94wvM7N3vcTGIfMpQ_BcaXeoeM9XyzdVdamKtxt0SHXZfvsl6czcp3E48tXMLtHBxuQsh1BjHtPGgJDZ81je_FjItINiqzLtir0A30s_e4KR8G3d7AYAPDjZVOY97bNpzNqtkcHcGp7fGnJByVCps1uLfG9U9tK3Ma1A_3JbRt0NiT2_Q.jpg">
                    </div>
                    <div class="item">
                        <img
                            src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/a76057bcfd003711a76fb3985b1f2cf74beee3b8/AAAABVxuRB932hvre-XP0gh6ar5ztoR3Oe3QjKHkyvcDnRak2MKXOrx5H7mFQSvggefMFOppwEs7ZCCpiqrJ_CYGvtvYB9NpU4SWUtNO6uV2u-DTID267AcHjHcGvGBQJ1ufddDkxcGOZyi5MlOQ5QUmBun4652FbYUnib3zMYQDgcna_Pvz8y_HO5fbokxezrRR1JZAAiqFSQ.jpg">
                    </div>
                    <a href="#section1" class="arrow__btn">›</a>
                </section>
            </div>

            <!-- Tout les films -->

            <p class="fs-6 mt-4">All movies</p>
        <div class="col mt-4">
        <div class="row movies_card">

<?php
                $link = mysqli_connect("localhost", "root", "", "videothequedeux");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM movies";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo "        <div class=\"card border-0 card-color bg-transparent text-white\" style=\"width: 10rem;\">\n";
            echo "            <img id='' src=\"".$row['img']."\" width=\"238\" class=\"card-img-top img-card\" alt=\"\">\n";
            echo "            <div class=\"card-body bg-transparent\">\n";
            echo "                <a href=\"details.php?id=".$row['id']."\" class=\"card-title text-decoration-none text-muted align-center\">".$row['title']."</a>\n";
            echo "            </div>\n";
            echo "        </div>\n";
            echo "\n";          
            }
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>

<footer id="footer">

<hr>
  <div class="footer-copyright text-muted text-center py-3">© 2020 Copyright:
    <a class="text-decoration-none text-muted" href="https://filmrsma.com/"> RSMAfilm.com</a>
  </div>

</footer>

</div>
</div>


</body>

</html>