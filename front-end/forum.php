<?php 
    $page = "forum";
    include(URL_PAGE."header.php");
?>

    <h1>Forum de discution</h1>
    <main>
        <article class="livres">

            <div class="card">
                <div class="row">
                    <h4>Forum de discution</h4>
                </div>
                <div class="table ">
                    <?php
                        foreach($forums as $forum) { 
                            $emailUser = GestionEleve::getEleveById($forum['code_for'])['email'];
                            echo "<div class='question'>";
                            echo "<h3>$emailUser</h3>";
                            echo "<p>".$forum['question_for']." </p>";
                            echo "<p>".$forum['date_difusion']."</p>";
                            echo "<a class='repondre' href='".$_SERVER['PHP_SELF']."?id=".$forum['code_for']."'> Voir reponses</a>";
                            echo "</div>";
                        }
                    ?>
                </div>

            </div>
            <form methode="post">
                <div>
                    <input type="text">
                    <span><input style="background:transparent;border:none;width:100%;cursor:pointer" type="submit" name="submit_search_forum" value="search"> </span>
                </div>
            </form>
        </article>
        <aside class="section-commentaires">
            <?php $forumid = GestionForum::getForumById($id);
                $emailid = GestionEleve::getEleveById($forumid['code_for'])['email'];
                
            ?>
            <h1><?= $emailid ?></h1>
            <h2><?= $forumid['question_for'] ?></h2>
            <p><?= $forumid['date_difusion'] ?></p>
            <div class="commentaires">
                <?php
                        foreach ($reponse_forum as $reponse) { 
                            $emailreponse = GestionEleve::getEleveById($reponse['id_user'])['email'];

                            echo "<div class='reponse'>";
                            echo "<h3>$emailreponse</h3>";
                            echo "<p>".$reponse['reponse']." </p>";
                            echo "<p>".$reponse['date_create']."</p>";
                            echo "</div>";
                        }
                ?>
            </div>
            <form action="" methode="get" >
                <div>
                    <input name="reponseforum" type="text">
                    <input type="hidden" name="id_reponse" value="<?= $id ?>">
                    <input type="hidden" name="id_user" value="<?= $_SESSION['idUser'] ?>">
                    <span><input id="submit_reponse_forum" type="submit" name="submit_reponse_forum" value="repondre"></span>
                </div>
            </form>
        </aside>
    </main>
    <?php include(URL_PAGE."footer.php") ?> 



 
