
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=URL_IMG ?>logo-ud.jpeg">
    <link rel="icon" sizes="64x64" type="image/png" href="<?=URL_IMG ?>logo_ud.jpeg">
    <title>Librairie - catalogue</title>
    <link href="<?=URL_CSS2?>acceuil.css" rel="stylesheet" type="text/css" />
    <link href="<?=URL_CSS2?>quiz.css" rel="stylesheet" type="text/css" />
    <link href="<?=URL_CSS2?>forum.css" rel="stylesheet" type="text/css" />
    <link href="<?=URL_CSS2?>comparaison.css" rel="stylesheet" type="text/css" />
    <link href="<?=URL_CSS2?>header.css" rel="stylesheet" type="text/css" />
    <link href="<?=URL_CSS2?>footer.css" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="<?=URL_CSS2?>fontawesome-free-6.5.1-web/css/all.css"> -->
    <link rel="stylesheet" href="<?=URL_CSS2?>fontawesome5/css/all.css">
</head>

<body>

    <div id="container-<?=$page?>" class="container">
        <header>
            <div class="header-lang-tools">
                <div class="lang">
                    <a href="#">ENIT </a><span>FR | EN</span>
                </div>
                <div class="header-tools">
                    <div class="tools">
                        <img src="<?=URL_IMAGES?>face.png" alt="" class="facebook-icon">
                        <img src="<?=URL_IMAGES?>twitter.png" alt="" class="twitter-icon">
                        <img src="<?=URL_IMAGES?>youtube.png" alt="" class="youtube-icon">
                        <img src="<?=URL_IMAGES?>insta.png" alt="" class="instagram-icon">
                        <img src="<?=URL_IMAGES?>in.png" alt="" class="in-icon">
                        <img src="" alt="">
                        <img src="" alt="">
                        <img src="" alt="">

                    </div>
                </div>
            </div>

            <div class="nav-fixed">
                <div class="logo-part">
                    <img src="<?=URL_IMG ?>logo_ud.jpeg" alt="logo" class="logo">
                    <img src="<?=URL_IMG ?>logo_fs.jpeg" alt="logo" class="logo">
                </div>
                <nav class="menu">
                    <div class="menu-icon">
                        <img id="" src="<?=URL_IMAGES?>menu-white.png" alt="">
                    </div>
                    <ul class="menu-ul">
                        <?php
                            menuLi('acceuil',$page);
                            menuLi('comparaison',$page);
                            menuLi('forum',$page);
                            menuLi('sign_in',$page);
                            menuLi('sign_up',$page);
                            menuLi('log_out',$page,"icon/contacts.png");
                        ?>
                        <div class="user" id="user">
                            <p><?= $_SESSION['nameUser'] ?></p>
                            <p><?= $_SESSION['emailUser']?></p>
                            <a href="<?=URL_CONTROLLER2."log_outController.php" ?>">log out</a>
                        </div>
                    </ul>
                </nav>
            </div>
        </header>