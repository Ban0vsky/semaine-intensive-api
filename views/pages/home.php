<?php
include '../views/partials/header.php';
include '../controllers/requests.php';
include '../controllers/connect.php';
include '../controllers/errors.php'; 
if (isset($_SESSION['user'])) {
    $_SESSION['success'] = "You are now logged in";
    echo ($_SESSION['success']." as ".$_SESSION['user']);
}
?>

    <div class="lottieAnimation"></div>
    <div class="card">
        <div class="name">NAME</div>
        <div class="address">ADDRESS</div>
        <div class="validate">Valider</div>
    </div>
    <div class="map"></div>
    <div class="login visible">
        <img class="signupImage" src="assets/images/profilepic.png" alt="profile_placeholder">
        <p class="welcomeText logs visible">Première cuite ?</p>
         <h1 class="signupButton logs visible">S'inscrire</h1>
         <h1 class="loginButton logs visible">Se connecter</h1>
             <div class="loginAction logForms">
                    <p class="connexionText">Connexion</p>
                     <form  action="#" method="post">
                             <div>
                                <p class="connexionFormText">Pseudo</p>
                                 <input class="input" type="text" name="username" placeholder="">
                                 <p class="connexionFormText">Mot de passe</p>
                                 <input class="input" type="password" name="password" placeholder="">
                                 <input class="submitter" type="submit" name="login_user">
                             </div>
                     </form>

                     <form method="post" action="#">
                        <button type="submit" name="logout">Se deconnecter</button>
                    </form >

             </div>
             <div class="signupAction logForms">
                    <p class="connexionText">Inscription</p>            
                    <form  action="#" method="post">
                    
                    <div>
                                <p class="connexionFormText">Pseudo</p>
                                 <input type="text" class="input" name="username" placeholder="">
                                 <p class="connexionFormText">Mot de passe</p>
                                 <input type="password" class="input" name="password_1" placeholder="">
                                 <p class="connexionFormText">Confirmer mot de passe</p>
                                 <input type="password" class="input" name="password_2" placeholder="">
                                 <input class="submitter" type="submit" name="reg_user">
                             </div>
                    </form>
             </div>
    </div>


    <div class="searchBottomPanel">
        <div class="formBlock">
            <form class="searchBar" action="#" method="GET">
                <input class="searchInput" required name="address" cols="50" rows="5" placeholder="Soif de quelle rue?"></textarea>
                <input class="start" type="submit">
            </form>
        </div>
        <a href="?geolocalisation=yes"><img class="geolocIcon" src="assets/images/geoloc.png" alt="profile_placeholder"></a>
    </div>
    <div class="downBarInfos">
    <img class="closeButton" src="assets/images/cancel.svg" alt="profile_placeholder">
        <div class="leaderboardData datas">
            <h1 class="leaderTitle">Top 5</h1>
            <p class="leader1">françois cacher</p>
            <p class="leader2">gerard chattus</p>
            <p class="leader3">herbert poireau</p>
            <p class="leader4">Thomas de Saucissonux</p>
        </div>
        <div class="historyData datas">
            <h1 class="historyTitle">Palmarès</h1>
            <p class="history1">françois cacher</p>
            <p class="history2">gerard chattus</p>
            <p class="history3">herbert poireau</p>
            <p class="history4">Thomas de Saucissonux</p>
        </div>
        <div class="friendListData datas">
            <h1 class="friendsTitle">Mes amis</h1>
            <p class="friends1">françois cacher</p>
            <p class="friends2">gerard chattus</p>
            <p class="friends3">herbert poireau</p>
            <p class="friends4">Thomas de Saucissonux</p>
        </div>
    </div>

    <!-- PHP to JS variables transfert -->
    <input type="hidden" value="<?=$latitude?>" class="transfert_latitude">
    <input type="hidden" value="<?=$longitude?>" class="transfert_longitude">
    
    <script src="../public/assets/map.js"></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk-OSdp7TIS3sVlIQxMC-taE1x_5ZbKjw&libraries=places,visualization"></script>

<?php include '../views/partials/footer.php' ?>