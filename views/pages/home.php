<?php
include '../controllers/connect.php';
include '../views/partials/header.php';
include '../controllers/requests.php';
include '../controllers/errors.php'; 
?>
<?php 
    if (isset($_SESSION["noMoreAnimation"]))
    {
        echo('<div class="noMoreAnimation"></div>');
    }
    else {
        echo('    
        <div class="lottieAnimation">
            <div class="lottieJson"></div>
        </div>
    ');
    }
?>
<div class="rotationDisclaimer">
<p>Oulah, ça tourne ! Repassez en Portrait, la vue est plus belle ;)</p>
</div>
<div class="card">
    <div class="name"></div>
    <div class="address"></div>
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
<script src="assets/map.js"></script>

<?php include '../views/partials/footer.php' ?>
<?php $_SESSION["noMoreAnimation"] = "yes" ?>
