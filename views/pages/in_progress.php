<?php include '../views/partials/header.php';?>
<?php include '../controllers/requests.php';?>

    <div class="card">
        <div class="name">NAME</div>
        <div class="address">ADDRESS</div>
        <div class="validate">Valider</div>
    </div>
    <div class="map"></div>
    <div class="launcher visibleImportant">
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
    <?php include '../views/partials/annex_datas.php' ?>

    <!-- PHP to JS variables transfert -->
    <input type="hidden" value="<?=$latitude?>" class="transfert_latitude">
    <input type="hidden" value="<?=$longitude?>" class="transfert_longitude">
    <input type="hidden" value="<?=$placeholder?>" class="transfert_placeholder">
    
    <script src="../public/assets/map.js"></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk-OSdp7TIS3sVlIQxMC-taE1x_5ZbKjw&callback=initMap&libraries=places,visualization"></script>

<?php include '../views/partials/footer_progress.php' ?>