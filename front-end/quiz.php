<?php 
    $page = "quiz";
    include(URL_PAGE."header.php");
?>

    <div class="search">
        <div>
            <h1> Teste d'habtitude par matiere sur <b>OrienTech</b> </h1>
            <form action="" method="post">
                <div>
                    <label for="">Choisir la matiere a tester</label><br>
                    <select name="typeRech">
                        <option value="nom"> chimie</option>
                        <option value="serie"> SVT </option>
                    </select>
                </div>
                    <input type="submit" name="submit" value="Rechercher">
            </form>
        </div>
    </div>
    <main>
        <article class="livres">

            <div class="card">
                <div class="row">
                    <h4>Quiz de teste</h4>
                    <P>32 Questions</P>
                </div>
                <div class="table ">
                  
                    
                        <?php
                                echo "<form methode='post' >";
                                for ($i=0; $i < 52; $i++) { 
                                    echo "<div class='ligne'>";
                                    echo "<label for=''>Quel est le role du CPU dans l'unite central ?</label>";
                                    echo "<select>";
                                    echo "<option value=''>apres </option>";
                                    echo "<option value=''>apres </option>";
                                    echo "<option value=''>apres </option>";
                                    echo "<option value=''>apres </option>";
                                    echo "</select>";
                                    echo "</div>";
                                }
                            echo "<input class='submit' name='submit' type='submit' value='envoyer'> ";
                            echo "</form>";
                            
                        ?> 
                </div>

                <div class="table_footer">
                    <button class="previous" id="previous">Previous</button>
                    <div id="pagination"></div>
                    <button class="next" id="next">Next</button>
                </div>
            </div>
        </article>
        <!-- <aside class="section-commentaires">
            <h1>Tchat de reference</h1>
            <div class="commentaires">

             

            </div>
            <div class="message">
                <input type="text" name="" id="">
                <button type="submit" name="submit" >send</button>
            </div>
        </aside> -->
        <!-- <aside class="services">
            <div>
                <h1>LIVRAISON</h1>
                <div>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. A perspiciatis maxime quam. Ex vero,
                    bla
                    <br><br><a href="#">READ MORE</a>
                </div>
                <div>
                    <img src="<?=URL_IMG?>illustrations/rocket-dark.png" alt="">
                </div>
            </div>
    
        </aside> -->
    </main>
    <div id="nombre-quiz"></div>
    <?php include(URL_PAGE."footer.php") ?>