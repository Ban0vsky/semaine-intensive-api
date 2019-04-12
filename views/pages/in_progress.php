<?php include '../controllers/connect.php';?>
<?php include '../views/partials/header.php';?>
<?php include '../controllers/requests.php';?>
<div class="rotationDisclaimer">
    <p>Oulah, ça tourne ! Repassez en Portrait, la vue est plus belle ;)</p>
</div>
<div class="card">
    <div class="name"></div>
    <div class="address"></div>
    <div class="validate">Valider</div>
</div>
<div class="map"></div>
<div class="launcher visibleImportant">
    <div class="launch">
        <p>Lancer le barathon</p>    
    </div>
    <a href="../public/">
        <div class="canceller">
            <p>Annuler</p>    
        </div>
    </a>    
</div>
<div class="currentAdress">Cuite en cours...</div>
<div class="progressBar">
    <div class="progressBarInside">
        <img class="stopButton" src="assets/images/stopButton.png" alt="profile_placeholder">
        <div class="timer infos">00:00:00</div>
        <div class="score infos">
            <span class="ongoingBirzNumber">0</span>
            <img class="birzProgress" src="assets/images/beer.svg" alt="profile_placeholder">
        </div>
    </div>
</div>
<div class="endScreen">
    <div class="endScreenData">
        <div class="recapTotal">
            <span class="finalScore"></span>
            <img class="birzProgress" src="assets/images/beer.svg" alt="profile_placeholder">
        </div>
        <div class="recapInfos">
            <div class="recapBirz"></div>
            <div class="recapTime"></div>
            <div class="recapBars"></div>
        </div>
        <form class="applyFinishBarathon" action="../public" method="get">
            <input type="hidden" name="xfpp" value="" class="transfertScore">
            <input class="endedBarathonValidateText" type="submit" value="Et z'est rebartit !">
        </form>
    </div>
</div>
<?php include '../views/partials/annex_datas.php' ?>

<!-- PHP to JS variables transfert -->
<input type="hidden" value="<?=$latitude?>" class="transfert_latitude">
<input type="hidden" value="<?=$longitude?>" class="transfert_longitude">
<input type="hidden" value="<?=$placeholder?>" class="transfert_placeholder">

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk-OSdp7TIS3sVlIQxMC-taE1x_5ZbKjw&libraries=places,visualization"></script>
<script src="../public/assets/map.js"></script>

<?php include '../views/partials/footer_progress.php' ?>