<?php include '../views/partials/header.php';?>
<?php include '../controllers/requests.php';?>
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
                                 <input class="input" required name="login_pseudo" cols="50" rows="5" placeholder="">
                                 <p class="connexionFormText">Mot de passe</p>
                                 <input class="input" required name="login_password" cols="50" rows="5" placeholder="">
                                 <input class="submitter" type="submit">
                             </div>
                     </form>
             </div>
             <div class="signupAction logForms">
                    <p class="connexionText">Inscription</p>            
                    <form  action="#" method="post">
                    <div>
                                <p class="connexionFormText">Pseudo</p>
                                 <input class="input" required name="login_pseudo" cols="50" rows="5" placeholder="">
                                 <p class="connexionFormText">Mot de passe</p>
                                 <input class="input" required name="login_password_confirmation" cols="50" rows="5" placeholder="">
                                 <p class="connexionFormText">Confirmation de mot de passe</p>
                                 <input class="input" required name="login_password" cols="50" rows="5" placeholder="">
                                 <input class="submitter" type="submit">
                             </div>
                    </form>
             </div>
    </div>

    <!-- PHP to JS variables transfert -->
    <input type="hidden" value="<?=$latitude?>" class="transfert_latitude">
    <input type="hidden" value="<?=$longitude?>" class="transfert_longitude">
    
    <script src="../public/assets/map.js"></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk-OSdp7TIS3sVlIQxMC-taE1x_5ZbKjw&libraries=places,visualization"></script>

<?php include '../views/partials/footer_login.php' ?>