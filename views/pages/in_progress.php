<?php include '../views/partials/header.php';?>
<?php include '../controllers/requests.php';?>

    <div class="card">
        <div class="name">NAME</div>
        <div class="address">ADDRESS</div>
        <div class="validate">Valider</div>
    </div>
    <div class="map"></div>
    <div class="login">
    </div>
    <div class="launcher visible">
        <div class="launch">
            <p>Lancer le barathon</p>    
        </div>
        <div class="canceller">
            <p>Annuler</p>    
        </div>    </div>
    <div class="progressBar">
        <div class="progressBarInside">
            <img class="stopButton" src="assets/images/stopButton.png" alt="profile_placeholder">
            <div class="timer infos">00:00:00</div>
            <div class="score infos">
                <span>12</span>
                <img class="birzProgress" src="assets/images/beer.svg" alt="profile_placeholder">
            </div>
        </div>
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
    <input type="hidden" value="<?=$placeholder?>" class="transfert_placeholder">
    
    <script src="../public/assets/map.js"></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk-OSdp7TIS3sVlIQxMC-taE1x_5ZbKjw&callback=initMap&libraries=places,visualization"></script>

<?php include '../views/partials/footer_progress.php' ?>