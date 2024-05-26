<?php 
    $page = "acceuil";
    include(URL_PAGE."header.php");
?>
<div id="acceuil">

    <div class="search">
        <div>
            <h1> Bienvenu sur <b>OrienTech</b> </h1>
            <form action="" method="post">
                <div>
                    <label for="">Choisir le champ de recherche :</label><br>
                    <select name="typeRech">
                        <option value="nom"> Nom</option>
                        <option value="serie"> Serie </option>
                    </select>
                </div>
                <div>
                    <label for="">Entrer le terme de recherche :</label><br>
                    <input name="termeRech" type="text">
                </div>
                <br>
                <input type="submit" name="submit" value="Rechercher">
            </form>
        </div>
    </div>
    <main>
        <article class="livres">

            <div class="card">
                <div class="row">
                    <h4>Listes filieres</h4>
                    <P><?= $filieres !== null? count($filieres): '0'?> Filiere(s)</P>
                </div>
                <div class="table">
                        <?php
                            if($filieres !== null){
                                foreach ($filieres as $filiere) {
                                    echo "<a href='".URL_CONTROLLER2."quizController.php' style='text-decoration:none' class='ligne'>";
                                    echo "<h2>".$filiere->getNomFiliere()."</h2>";
                                    echo "<p>Series : ".$filiere->getSerie()."</p>";
                                    echo "<p>Niveaux de choix <br> <span class='progress'> ".$filiere->getNiveauChoix()." <span><span class='progress-bar' ></span></span></span></p>";
                                    echo "</a >";
                                }
                            }else{
                                echo "Aucune filiere";
                            }
                        ?>
                    
                </div>

                <div class="table_footer">
                    <button class="previous" id="previous">Previous</button>
                    <div id="pagination"></div>
                    <button class="next" id="next">Next</button>
                </div>
            </div>
        </article>
        <aside class="section-commentaires">
            <h1>temoignages des eleves</h1>
            <div class="commentaires">

                <?php          
                    if($temoignages !== null){
                        $i = 0;
                        foreach ($temoignages as $temoignage) {
                            echo "<div class='commentaire'>";
                            echo "    <img src='".URL_IMG."icon/contacts.png' alt=''>";
                            echo "    <div class='cmt'>";
                            echo "        <h5>".$emails[$i]."</h5>";
                            echo "        <span>".$temoignage->getTemoignage()."</span>";
                            echo "        <span>".$temoignage->getDate()."</span>";
                            echo "    </div>";
                            echo "</div>";
                            $i++;
                        } 
                    }else{
                        echo "Aucun temoignage";
                    }
                        
                ?>

            </div>
        </aside>

    </main>

    <?php include(URL_PAGE."footer.php") ?>
</div>