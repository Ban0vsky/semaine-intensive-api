<?php
   include '../controllers/profil.php';
   include '../controllers/leaderboard.php';
   include '../controllers/action.php';
   include '../controllers/search.php';
   include '../controllers/friends.php';
   include '../controllers/palmares.php';
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
   </div>
</div>
<div class="downBarInfos">
   <img class="closeButton" src="assets/images/cancel.svg" alt="profile_placeholder">
   <div class="leaderboardData datas">
      <h1 class="leaderTitle">Top 5</h1>
      <div class="leaderList">
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
    </div>
    <div class="historyData datas">
      <h1 class="historyTitle">Palmarès</h1>
      <div class="historyContainer">
          <div>
          <?php foreach ($dataPalma as $event): ?>
            <div class="historyLabel">
                <p>Date de la cuite :</p>
                <p>Nombre de Birz :</p>
            </div>
        <?php endforeach;?>
          </div>
        <div class="historyDatas">
            <div>
                <?php foreach ($dataPalma as $event): ?>
                    <div class="historyScore">
                        <div class="date"><?=$event->date?></div>
                        <div class="historyScoreBlock">
                            <div class="score"><?=$event->score?></div>
                            <img class="birzFriend" src="assets/images/beer.svg" alt="profile_placeholder">
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
      </div>
    </div>
    <div class="friendListData datas">
        <h1 class="friendsTitle">Mes amis</h1>
         <div class="friendContent">
            <div class="friends">
                 <div class="bite">
                    <?php
                        for ($i=0; $i < sizeof($friends_data); $i++) 
                        { 
                            if ($friends_data[$i]->username_1 == $_SESSION['user']) 
                            {
                                echo '<div class="oneFriendContainer"> ';
                                echo '<img src="assets/images/profilepic.png" alt="profile_placeholder">';
                                echo '<div class="friendInfos">';
                                echo("<p>".$friends_data[$i]->username_2."</p>");

                                $user_check[] = $friends_data[$i]->username_2;

                                $userQuery = $db->prepare('SELECT * FROM users WHERE username=:username');
                                $userQuery->execute(
                                    [
                                    "username" => $friends_data[$i]->username_2,
                                    ]
                                );
                                $userResult = $userQuery->fetch();
                                echo '<div class="score">';
                                if ($friends_data[$i]->is_pending) {
                                    echo("<p>(en attente)</p>");
                                }
                                echo ('<p>score : '.$userResult->score.'</p>');
                    
                                $scoreQuery = $db->prepare("SELECT COUNT(*) as rang FROM users WHERE score >= (SELECT score  FROM users WHERE username =:username ORDER BY score)"); 
                                $scoreQuery->execute(
                                    [
                                    "username" => $friends_data[$i]->username_2,
                                    ]
                                );
                                $scoreResult= $scoreQuery->fetch();
                                echo ('<p>rang : '.$scoreResult->rang.'</p>');
                                echo '</div> ';
                                echo '</div> ';

                                echo (" 
                                    <div class='form'>
                                    <form action='#' method='post'>
                                        <input type='hidden' name='id' value='".$friends_data[$i]->id."' />
                                        <input type='hidden' name='delete' value='delete'>
                                        <input type='submit' class='buttonIMG' value=''>
                                    </form> 
                                    </div>"
                                );
                                echo '</div> ';                        
                            }
                            else 
                            {
                                if ($friends_data[$i]->is_pending == FALSE) 
                                {   
                                    echo '<div class="oneFriendContainer"> ';
                                    echo '<img src="assets/images/profilepic.png" alt="profile_placeholder">';
                                    echo '<div class="friendInfos">';
                                    echo ($friends_data[$i]->username_1);
                                    $user_check[] = $friends_data[$i]->username_1;
                                    echo '<div class="score">';
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
                                    echo '</div>';
                                    echo '</div>';

                                    echo ("
                                    <div class='form'>
                                        <form action='#' method='post'>
                                            <input type='hidden' name='id' value='".$friends_data[$i]->id."' />
                                            <input type='hidden' name='delete' value='delete'>
                                            <input type='submit' class='buttonIMG' value=''>
                                        </form> 
                                    </div>
                                    ");
                                    echo '</div>';
                                }
                            }
                        }
                    ?>
                </div>
            </div>
         </div>
        <div class="friendContentFooter">
            <span class="addFriendButton">Ajouter un ami</span>
            <div class="notificationImgBlock">
                <img class="notificationButton" src="assets/images/notification.png" alt="profile_placeholder">
                <div class="notificationNumber">
                    <?php
                        $count = 0;
                        for ($i=0; $i < sizeof($friends_data); $i++)
                        {
                            if ($friends_data[$i]->is_pending == TRUE && $friends_data[$i]->username_2 == $_SESSION['user']) 
                            {
                                $count++;
                            }
                        }
                        echo $count;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="addFriendData datas">
        <h1>Ajouter des amis</h1>
        <p>Pseudo</p>
        <form action="#" method="post"> 
            <input class="input search" name="username" type="text"> 
            <button type="submit" name="search">Chercher</button>
        </form>

        <?php if(isset($_POST['search']) && $search_result): ?>
            <p><?= $search_result->username?></p>
            <?php 
                echo (" 
                    <form action='#' method='post'>
                        <input type='hidden' name='usernamefrom' value='".$_SESSION['user']."' />
                        <input type='hidden' name='usernameto' value='".$search_result->username."' />
                        <input type='submit' name='add' value='Ajouter en ami'>
                    </form> "
                );
            ?>
        <?php endif; ?>
    </div>
</div>
<div class="killAccount">
    <img class="closeButton" src="assets/images/cancel.svg" alt="profile_placeholder">                
    <div class="killAccountData datas">
        <div class="quitImg">
            <img class="signupImage" src="assets/images/sadGuy.png" alt="profile_placeholder">
        </div>
        <p class="quitText">Vous nous quittez déjà ? 
             Le petit va attraper froid...
        </p>
        <form method="post" action="index.php">
            <button class="quitValidation" type="submit" name="deleteAccount">Laissez-moi tranquille, j’ai raccroché !</button>
        </form >
    </div>
</div>
<div class="friendRequestData datas">
    <img class="closeButton" src="assets/images/cancel.svg" alt="profile_placeholder">                
        <h1 class="invitationTitle">Mes invitations</h1>
        <div class="requestResult">
            <?php
                for ($i=0; $i < sizeof($friends_data); $i++)
                {
                    if ($friends_data[$i]->is_pending == TRUE && $friends_data[$i]->username_2 == $_SESSION['user']) 
                    {
                        echo ('<p>'.$friends_data[$i]->username_1.'<p>');
                        echo (" 
                            <form action='#' method='post'>
                                <input type='hidden' name='id' value='".$friends_data[$i]->id."' />
                                <input class='input' type='submit' name='accept' value='Ajouter en ami'>
                            </form> "
                        );
                        echo (" 
                            <form action='#' method='post'>
                                <input type='hidden' name='id' value='".$friends_data[$i]->id."' />
                                <input class='input' type='submit' name='delete' value='Refuser'>
                            </form> "
                        );
                        $user_check[] = $friends_data[$i]->username_1;
                    }
                }
            ?>  
        </div>
    </div>
</div>
