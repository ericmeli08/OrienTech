   
        <footer>
            <div class="foot-head">
                <div class="location">
                    <img src="<?=URL_IMG?>icon/location-32.png" alt="">
                    <div class="text">
                        <span>ADRESSE</span>
                        <span>3139 route du Houga,40800 Aire sur l'Adour</span>
                    </div>
                </div>
                <div class="phone">
                    <img src="<?=URL_IMG?>icon/phone-2-32.png" alt="">
                    <div class="text">
                        <span>TELEPHONE</span>
                        <span>6 81 96 09 30</span>
                    </div>
                </div>
                <div class="email">
                    <img src="<?=URL_IMG?>icon/new-post-32.png" alt="" >
                    <div class="text">
                        <span>E-MAIL</span>
                        <span>fouegangmeli@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="foot-body">
                <div class="logo">
                    <img src="<?=URL_IMG?>logo_ud.jpeg" alt="">
                    <img src="<?=URL_IMG?>logo_fs.jpeg" alt="">
                </div>
                <div class="nav">
                    <h3>NAVIGATION</h3>
                    <ul>
                        <li class="nav-item"><a href="<?= URL_CONTROLLER2 ?>boutiqueController.php" >Acceuil</a></li>
                        <li class="nav-item"><a href="#" >About Us</a></li>
                        <li class="nav-item"><a href="<?= URL_CONTROLLER2 ?>sign_upController.php" >Sign Up</a></li>
                        <li class="nav-item"><a href="<?= URL_CONTROLLER2 ?>sign_inController.php" >Sign In</a></li>
                    </ul>
                </div>
                <div class="qualif">
                    <H3>QUALIFICATION</H3>
                    <div>
                        <img src="<?=URL_IMG?>icon/logo.png" alt="">
                        <img src="<?=URL_IMG?>icon/logo1.png" alt="">
                        <img src="<?=URL_IMG?>icon/children.png" alt="">
                    </div>
                </div>
                <div class="cmt">
                    <form action="<?=URL_CONTROLLER2?>temoignageController.php" method="post">
                        <label for="cmt">Temoignage : </label>
                        <textarea name="temoignage" id="cmt" cols="30" rows="6" placeholder="temoigange ........." ></textarea>
                        <input type="hidden" name="id"  value="<?= isset( $_SESSION['idUser']) ? $_SESSION['idUser'].'' : '' ?>"  >
                        <input type="hidden" name="email" value="<?= isset( $_SESSION['emailUser']) ? $_SESSION['emailUser'] : '' ?>" >
                        <input type="hidden" name="date_create">
                        <button type="submit">envoyer</button>
                    </form>

                </div>
            </div>
            <div class="foot-foot">
                <span>Copyright &copy; 2024 - 2025 - Tous les droit reserves. </span>
                <span>Mention legales</span>
            </div>
        </footer>
        
    </div>
    <script src="<?=URL_JS2?>acceuil.js"></script>
    <script src="<?=URL_JS2?>pagination.js"></script>
<script src="<?=URL_JS2?>script.js"></script>

</body>

</html>