<?php
include '../controllers/profil.php';
include '../controllers/leaderboard.php';
include '../controllers/friends.php';
include '../controllers/action.php';

?>

<div class="profilePage">
    <img class="closeButton" src="assets/images/cancel.svg" alt="profile_placeholder">
    <img class="signupImage" src="assets/images/profilepic.png" alt="profile_placeholder">
    <div class="profileData">
        <p class="profileName"> <?= $profil_data->username ?></p>
        <div class="profileScore">
            <span><?= $profil_data->score ?></span>
            <img class="birzProfile" src="assets/images/beer.svg" alt="profile_placeholder">
            <span>(Rang <?= $user_score_result->rang ?>)</span>
        </div>
        <form method="post" action="index.php">
            <button class="disconnectButton" type="submit" name="logout">Me déconnecter</button>
        </form >
        <p class="deleteAccountButton">Supprimer mon compte</p>
        <div class="killAccount">
           <div class="killAccountData datas">
           <img class="closeButton" src="assets/images/cancel.svg" alt="profile_placeholder">                <h1 class="historyTitle">Palmarès</h1>
                <p class="history1">françois cacher</p>
                <p class="history2">gerard chattus</p>
                <p class="history3">herbert poireau</p>
                <p class="history4">Thomas de Saucissonux</p>
            </div>
        </div>
    </div>
</div>
<div class="downBarInfos">
    <img class="closeButton" src="assets/images/cancel.svg" alt="profile_placeholder">
        <div class="leaderboardData datas">
            <h1 class="leaderTitle">Top 5</h1>
            <?php foreach ($score_data as $data): ?>
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
            <?php endforeach;?>
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
            <div class="friendContent">
            <?php
                for ($i=0; $i < sizeof($friends_data); $i++) 
                { 
                    if ($friends_data[$i]->username_1 == $_SESSION['user']) 
                    {
                        echo($friends_data[$i]->username_2);
                        $user_check[] = $friends_data[$i]->username_2;

                        if ($friends_data[$i]->is_pending == TRUE) 
                        {
                            echo ("en attente d'acceptation de la part de ".$friends_data[$i]->username_2." 
                            <form action='#' method='post'>
                                <input type='hidden' name='id' value='".$friends_data[$i]->id."' />
                                <input type='submit' name='delete' value='delete'>
                            </form> ");
                        }
                        else 
                        {
                            // echo  "<a href='action.php?action=delete&id=".$friends_data[$i]->id."'>Supprimer de mes amis</a>";
                            echo (" 
                            <form action='#' method='post'>
                                <input type='hidden' name='id' value='".$friends_data[$i]->id."' />
                                <input type='submit' name='delete' value='delete'>
                            </form> ");
                        }
                        
                        $test = $db->prepare('SELECT * FROM users WHERE username=:username');
                        $test->execute(
                            [
                            "username" => $friends_data[$i]->username_2,
                            ]
                        );
                        $result = $test->fetch();
                        echo ('<p>score : '.$result->score.'</p>');

                        $query = $db->prepare("SELECT COUNT(*) as rang FROM users WHERE score >= (SELECT score  FROM users WHERE username =:username ORDER BY score)"); 
                        $query->execute(
                            [
                            "username" => $friends_data[$i]->username_2,
                            ]
                        );
                        $resultat= $query->fetch();
                        echo ('<p>rang : '.$resultat->rang.'</p>');

                    }
                    else 
                    {
                        if ($friends_data[$i]->is_pending == FALSE) 
                        {
                            echo ($friends_data[$i]->username_1." 
                            <form action='#' method='post'>
                                <input type='hidden' name='id' value='".$friends_data[$i]->id."' />
                                <input type='submit' name='delete' value='delete'>
                            </form> ");
                            $user_check[] = $friends_data[$i]->username_1;

                            $query = $db->prepare('SELECT * FROM users WHERE username=:username');
                            $query->execute(
                                [
                                "username" => $friends_data[$i]->username_1,
                                ]
                            );
                            $friend_score = $query->fetch();
                            echo ('<p>score : '.$friend_score->score.'</p>');
                            
                            $query = $db->prepare("SELECT COUNT(*) as rang FROM users WHERE score >= (SELECT score  FROM users WHERE username =:username ORDER BY score)"); 
                            $query->execute(
                                [
                                "username" => $friends_data[$i]->username_1,
                                ]
                            );
                            $friend_rank= $query->fetch();
                            
                            echo ('<p>rang : '.$friend_rank->rang.'</p>');
                        }
                    }
                    echo '</br>';
                }
            ?>
            </div>
            <span class="addFriendButton">Valider</span>
            <div class="notificationImgBlock">
            <img class="notificationImg" src="assets/images/notification.png" alt="profile_placeholder">
            <div class="notificationNumber">1</div>
            </div>
            
        </div>
    </div>
