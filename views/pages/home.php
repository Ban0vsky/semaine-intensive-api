<?php
include '../controllers/connect.php';
include '../views/partials/header.php';
include '../controllers/requests.php';
include '../controllers/errors.php'; 
?>

    <div class="lottieAnimation"></div>
    <div class="card">
        <div class="name">NAME</div>
        <div class="address">ADDRESS</div>
        <div class="validate">Valider</div>
    </div>
    <div class="map"></div>
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
    <input type="hidden" value="<?=$placeholder?>" class="transfert_placeholder">
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk-OSdp7TIS3sVlIQxMC-taE1x_5ZbKjw&libraries=places,visualization"></script>
    <script src="../public/assets/map.js"></script>

<?php include '../views/partials/footer.php' ?>