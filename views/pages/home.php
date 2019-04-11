<?php include '../views/partials/header.php';?>
<?php include '../controllers/requests.php';?>
<?php include '../controllers/connect.php';?>

    <div class="lottieAnimation"></div>
    <div class="card">
        <div class="name">NAME</div>
        <div class="address">ADDRESS</div>
        <div class="validate">Valider</div>
    </div>
    <div class="map"></div>
<<<<<<< HEAD
=======
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
                                 <input class="input" required name="login_pseudo" placeholder="">
                                 <p class="connexionFormText">Mot de passe</p>
                                 <input class="input" required name="login_password" placeholder="">
                                 <input class="submitter" type="submit">
                             </div>
                     </form>
             </div>
             <div class="signupAction logForms">
                    <p class="connexionText">Inscription</p>            
                    <form  action="#" method="post">
                    <?php include('../controllers/errors.php'); ?>
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
>>>>>>> d20254f96c8a2b0680c70c9014bbdab150a46226
    <div class="searchBottomPanel">
        <div class="formBlock">
            <form class="searchBar" action="#" method="GET">
                <input class="searchInput" required name="address" cols="50" rows="5" placeholder="Soif de quelle rue?"></textarea>
                <input class="start" type="submit">
            </form>
        </div>
        <a href="?geolocalisation=yes"><img class="geolocIcon" src="assets/images/geoloc.png" alt="profile_placeholder"></a>
    </div>

    <?php include '../views/partials/annex_datas.php' ?>
    <!-- PHP to JS variables transfert -->
    <input type="hidden" value="<?=$latitude?>" class="transfert_latitude">
    <input type="hidden" value="<?=$longitude?>" class="transfert_longitude">
    
    <script src="../public/assets/map.js"></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk-OSdp7TIS3sVlIQxMC-taE1x_5ZbKjw&libraries=places,visualization"></script>

<?php include '../views/partials/footer.php' ?>