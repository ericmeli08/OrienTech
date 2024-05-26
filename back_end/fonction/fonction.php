<?php 
    require_once URL_BD."connection.php";
/**
 * @param string $request
 * @param mixed[] $request
 */
function executeRequest(string $request,$param=null){
    $bd = bdConnection();

    try {
        if(empty($param)){
            $req = $bd->query($request);
        }else {
            $req = $bd->prepare($request);
            $req->execute($param);
        }
        $bd = null;
        if(preg_match("/\bSELECT\b/i",$request)){
            return $req->rowCount() == 1? $req->fetch() : $req->fetchAll();
        }

    } catch (PDOException $e) {
        echo "Erreur dans la requette :  ".$e->getMessage();
    }

}

/**
 * @param mixed $e
 */
function dump($e){
    echo "<pre>";
    print_r($e);
    echo "<pre>";
}

/**
 * @param mixed $requestId c'est en faite le request id
 */
function defineId($requestId){
    return !isset($requestId)? 1 : $requestId;
}

function menuLi($nom,$page,$link=null)
{
    $active = (($nom==$page)? 'active-nav':'');
    if($link){
        $titre = "<img src=".URL_IMG."".$link." alt=''>";
    }else{
        $titre = ($nom=='boutique')?'<i>Library</i> shop': str_replace('_',' ',$nom);
    }
    if($link){
        
        echo "
            <li class='menu-li'>
            <div id='log-out'  class='menu-link "  .$active
            ." '> ".$titre ."</div>
            </li>";
            return;
    }
    echo "
        <li class='menu-li'>
        <a href='".URL_CONTROLLER2."".$nom."Controller.php' class='menu-link "  .$active
        ." '> ".$titre ."</a>
        </li>";
}
if(!function_exists('F_executeRequeteSql'))
{
    function F_executeRequeteSql (string $H_requete, array $H_tableauParams=NULL)
    {
        global $dbConnect;
            if ($H_tableauParams == NULL)
            {        
                $H_requete=$dbConnect->query($H_requete);
                $resultat=$H_requete->fetchall();
            }
            else
            {
                $H_requete=$dbConnect->prepare($H_requete);
                $H_requete->execute($H_tableauParams);
                $nbre=$H_requete->rowCount();
                if ($nbre == 1)
                {
                        $resultat=$H_requete->fetch();
                }
                else
                {
                        $resultat=$H_requete->fetchall();
                }
                
            }
        return $resultat;
    }
}
