<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" sizes="64x64" type="image/png" href="<?=URL_IMG ?>logo_fs.jpeg">
    <title>SIGN IN</title>
    <link rel="stylesheet" href="<?= URL_CSS2?>sign_in.css">
    <link rel="stylesheet" href="<?= URL_CSS2?>fontawesome-free-6.5.1-web/css/all.css">
</head>

<body>

    <div class="container">
        <header>
            <div class="logo">
                <img src="<?=URL_IMG ?>logo_ul.jpeg" alt="">
                <img src="<?=URL_IMG ?>logo_fs.jpeg" alt="">
            </div>
            <nav>
                <ul>
                <li class="nav-item"><a href="<?=URL_CONTROLLER2 ?>acceuilController.php" >Acceuil</a></li>
				<li class="nav-item"><a href="#" >AboutUs</a></li>
				<li class="nav-item"><a href="<?= URL_CONTROLLER2?>sign_upController.php" >Sign Up</a></li>
				<li class="nav-item"><a href="<?= URL_CONTROLLER2?>sign_inController.php" >Sign In</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <section>
                <div class="sign-form">
                    <h1>Welcome back</h1>
                    <p class="text" >Enter your email and password to sign in</p>
                    <?php
                        if (isset($error)) {
                          echo $error;
                        }
                    ?>  
                    <form id="form" method="POST" action="">
                        <div>
                            <label for="email">Email :</label><br>
                            <input type="email" name="email" id="email" placeholder="Name">
                        </div>
                        <div>
                            <label for="pwd"> Password :</label><br>
                            <input type="password" name="pwd" id="pwd" placeholder="Password.....">
                        </div>

                        <div class="form-check">
                            <input type="checkbox" name="check-terms" id="check">
                            <label for="check"> Remember me</label>
                        </div>
                        <input type="hidden" name="id">
                        <input type="hidden" name="nom">
                        <input type="submit" name="submit" value="SIGN IN">

                        <div class="foot-form">
                            Don't have an account? <a href="<?= URL_CONTROLLER2 ?>sign_upController.php">Sign up</a>
                        </div>
                    </form>
                </div>

            </section>
            <aside>
                <div class="img"></div>
            </aside>
        </main>
        <ul class="foot-nav">
            <li><a href=""<?=URL_CONTROLLER2 ?>boutiqueController.php">Librairie</a></li>
            <li><a href="">A propos</a></li>
            <li><a href="">Team</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Products</a></li>
        </ul>

        <div class="foot-text">
            Copyright © 2024 Soft by Creative Tim.
        </div>
    </div>
    <script src="<?=URL_JS2?>sign_in.js"></script>
</body>

</html>