<?php
include '../controllers/profil.php'

?>

<div class="profilePage">
    <img class="closeButton" src="assets/images/cancel.svg" alt="profile_placeholder">
    <img class="signupImage" src="assets/images/profilepic.png" alt="profile_placeholder">
    <div class="profileData">
        <p class="profileName"> <?= $data->username ?></p>
        <div class="profileScore">
            <span><?= $data->score ?></span>
            <img class="birzProfile" src="assets/images/beer.svg" alt="profile_placeholder">
            <span>(Rang <?= $resultat->rang ?>)</span>
        </div>
        <form method="post" action="index.php">
            <button class="disconnectButton" type="submit" name="logout">Me déconnecter</button>
        </form >
        <p class="deleteAccountButton">Supprimer mon compte</p>
    </div>
</div>
<div class="downBarInfos">
    <img class="closeButton" src="assets/images/cancel.svg" alt="profile_placeholder">
        <div class="leaderboardData datas">
            <h1 class="leaderTitle">Top 5</h1>
            <div class="leader">
                <img class="friendImage" src="assets/images/profilepic.png" alt="profile_placeholder">
                <div class="friendScore">
                    <p class="friendName"> <?= $data->username ?></p>
                    <div class="friendScoreDisplay">                    
                        <span><?= $data->score ?></span>
                        <img class="birzFriend" src="assets/images/beer.svg" alt="profile_placeholder">
                    </div>
                </div>
            </div>
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
