<?php 
    $page = "comparaison";
    include(URL_PAGE."header.php");
    ?>

<div class="search">
    <div>
        <h1> Bienvenu sur <b>OrienTech</b> </h1>
        <form action="" method="post">
            <div>
                <label for="">Filiere 1 :</label><br>
                <select name="filiere1">
                    <?php 
                        if($filieres !== null){
                            foreach ($filieres as $filiere) {
                                echo "<option value='".$filiere->getNomFiliere()."'> ".$filiere->getNomFiliere()."</option>";
                            }
                        }else{
                            echo "<option value='null' > Aucune filiere </option>";
                        }
                    ?>
                </select>
            </div>
            <div>
                <label for="">Filiere 2 :</label><br>
                <select name="filiere2">
                <?php 
                        if($filieres !== null){
                            foreach ($filieres as $filiere) {
                                echo "<option value='".$filiere->getNomFiliere()."'> ".$filiere->getNomFiliere()."</option>";
                            }
                        }else{
                            echo "<option value='null' > Aucune filiere </option>";
                        }
                    ?>
                </select>
            </div>
            <br>
            <input type="submit" name="submit" value="Rechercher">
        </form>
    </div>
</div>
<main>
    <?php if($filiere1 !== null) { ?>
     
    <article class="livres">

        <div class="card">
            <div class="row">
                <h4>Comaparaison de filieres</h4>
            </div>
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th>Elements</th>
                        <th>Filier 1</th>
                        <th>Filiere 2</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
 
                    foreach($filiere1 as $key => $value) { 
                        if(!in_array($key,["code_filiere"])){
                            if(in_array($key,["serie","debauche","matiere_secondaire"])){
                                $value = implode(" -- ",explode(";;",$value));
                                $filiere2[$key] = implode(" -- ",explode(";;",$filiere2[$key]));
                            }
                            echo "<tr class='ligne' >";
                            echo "<td> $key</td>";
                            echo "<td> $value </td>";
                            echo "<td> ".$filiere2[$key]." </td>";
                            echo "</tr>";
                        }
                    }      
                ?>
                </tbody>
            </table>

            <div class="table_footer">
                <button class="previous" id="previous">Previous</button>
                <div id="pagination"></div>
                <button class="next" id="next">Next</button>
            </div>
        </div>
    </article>
    <?php } ?>
  
</main>

<div id="nombre-comparaison"></div>
<?php include(URL_PAGE."footer.php") ?>