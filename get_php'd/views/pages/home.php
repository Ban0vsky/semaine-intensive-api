<?php include '../views/partials/header.php';?>

    <img class="background" src="assets/images/background.jpg" alt="map_placeholder">
    <div class="login">
         <h1 class="signupButton logs">S'inscrire</h1>
         <h1 class="loginButton logs">Se connecter</h1>
             <div class="loginAction logForms">
                    <h1>login</h1>
                     <form  action="#" method="post">
                             <div>
                                 <textarea class="input" required name="login_pseudo" cols="50" rows="5" placeholder="pseudo"></textarea>
                                 <textarea class="input" required name="login_password" cols="50" rows="5" placeholder="password"></textarea>
                                 <input type="submit">
                             </div>
                     </form>
             </div>
             <div class="signupAction logForms">
                    <h1>signup</h1>            
                    <form  action="#" method="post">
                            <div>
                                <textarea class="input" required name="signup_pseudo" cols="50" rows="5" placeholder="pseudo"></textarea>
                                <textarea class="input" required name="signup_password" cols="50" rows="5" placeholder="password"></textarea>
                                <input type="submit">
                            </div>
                    </form>
             </div>
    </div>
        <form class="searchBar" action="#" method="post">
                
                <textarea class="searchInput" required name="street_choice" cols="50" rows="5" placeholder="Soif de quelle rue?"></textarea>
                <input class="start" type="submit">
        </form>
    <div class="launcher">
        <div class="launch">lessdrinkbois</div>
        <div class="canceller">waitno I have childrens</div>
    </div>
    <div class="progressBar ">
        <div class="cancel infos">cancel</div>
        <div class="timer infos">00.00</div>
        <div class="score infos">999</div>
    </div>
<?php include '../views/partials/footer.php' ?>