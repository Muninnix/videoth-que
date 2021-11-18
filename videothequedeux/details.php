<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="assets/js/details.js"></script>
    <link rel="stylesheet" href="assets/css/details.css">
    <title>Details</title>
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
                    <img class="fas navbar-icon" src="assets/images/clapperboard_1.png" alt="">
                    <span class="navbar-title">MOVIES</span>
                </a>
            </li>
            <li class="navbar-item">
                <a href="#" class="navbar-link">
                    <img class="fas navbar-icon" src="assets/images/television_1.png" alt="">
                    <span class="navbar-title">TV SHOWS</span>
                </a>
            </li>
            <li class="navbar-item">
                <a href="#" class="navbar-link">
                    <img class="fas navbar-icon" src="assets/images/musical-note_2.png" alt="">
                    <span class="navbar-title">MUSIC</span>
                </a>
            </li>
            <li class="navbar-item">
                <a href="#" class="navbar-link">
                    <img class="fas navbar-icon" src="assets/images/radio_1.png" alt="">
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
            <div class="text-end mt-3 fs-4" id="heure_exacte"></div>
        </main>
    </div>

    <!-- contenu page -->
    <div class="margeglobal">
        <h5 class="mb-4">Poetic justice</h5>
        <!--partie avec image , langue , durée et date de sortie avec col-->
        <div class="row">
            <div class="col-2">
                <img class="imagefilm mb- img-fluid" width="220px" src="https://w6.streamcomplet3.tv/uploads/posts/2021-11/7130df194c3936f088d07fbe90b6dc4c_image.jpg" alt="">
            </div>
            <div class="col-4 info_movies">
                <!-- langue, durée et date-->
                <div class="cadregris">
                    <h6 class="ms-2">Langue : Francais</h6>
                </div>
                <h6 class="ms-2 mt-3">Durée : 1H35</h6>
                <div class="cadregris mt-3">
                    <h6 class="ms-2">Date de sortie : 2021-09-31</h6>
                </div>
            </div>
        </div>
        <!--partie avec resumé-->
        <h4 class="mt-5">Description</h4>
        <div class="row">
            <div class="col-8">
                <p class="mt-1 description-page">
                    Dans un proche futur, la Terre est devenue hostile pour l'homme. Les tempêtes de sable sont
                    fréquentes
                    et il
                    n'y a plus que le maïs qui peut être cultivé, en raison d'un sol trop aride. Cooper est un pilote,
                    recyclé
                    en agriculteur, qui vit avec son fils et sa fille dans la ferme familiale. Lorsqu'une force qu'il ne
                    peut
                    expliquer lui indique les coordonnées d'une division secrète de la NASA, il est alors embarqué dans
                    une
                    expédition pour sauver l'humanité.
</p>
            </div>
            <div class="col-5"></div>
        </div>
        <br><br><br><br><br>
    </div>
</body>

</html>