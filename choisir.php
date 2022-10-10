<!-- Carte de Personnage 1 -->
    <div class="container">
        <div class="row justify-content-center text-light">
            <h2> Choix joueur 1 :</h2>
        </div>
            <form action="index.php" method="POST">
        <div class="row justify-content-center">            
            <div class="card" style="width: 10rem;">
                <img src="img/Guerrier.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title Guerrier">Guerrier</h5>
                    <p class="card-text">Atk : <?php if (!empty($_SESSION['player1'])){ echo $_SESSION['player1']['attaque'] ; } ?></p>
                    <p class="card-text"><?php if (!empty($_SESSION['player1'])){ echo $_SESSION['player1']['vie'] ; } ?> HP</p>
                    <input type="submit" name="p1warrior" value="Choisir"></input>
                </div>
            </div>
            <div class="card" style="width: 10rem;">
                <img src="img/Healer.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title Pretre">Healer</h5>
                    <p class="card-text">Atk <?php if (!empty($_SESSION['player1'])){ echo $_SESSION['player1']['attaque'];} ?></p>
                    <p class="card-text"><?php if (!empty($_SESSION['player1'])){ echo $_SESSION['player1']['vie'] ; } ?> HP</p>
                    <input type="submit" name="p1priest" value="Choisir"></input>
                </div>
            </div>
            <div class="card" style="width: 10rem;">
                <img src="img/Mage.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title Mage">Mage</h5>
                    <p class="card-text">Atk <?php if (!empty($_SESSION['player1'])){ echo $_SESSION['player1']['attaque'];} ?></p>
                    <p class="card-text"><?php if (!empty($_SESSION['player1'])){ echo $_SESSION['player1']['vie'] ; } ?> HP</p>
                    <input type="submit" name="p1mage" value="Choisir"></input>
                </div>
            </div>
            <div class="card" style="width: 10rem;">
                <img src="img/Moine.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title Moine">Moine</h5>
                    <p class="card-text">Atk <?php if (!empty($_SESSION['player1'])){ echo $_SESSION['player1']['attaque'];} ?></p>
                    <p class="card-text"><?php if (!empty($_SESSION['player1'])){ echo $_SESSION['player1']['vie'] ; } ?> HP</p>
                    <input type="submit" name="p1monk" value="Choisir"></input>
                </div>
            </div>
            <div class="card" style="width: 10rem;">
                <img src="img/Voleur.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title Voleur">Voleur</h5>
                    <p class="card-text">Atk <?php if (!empty($_SESSION['player1'])){ echo $_SESSION['player1']['attaque'];} ?></p>
                    <p class="card-text"><?php if (!empty($_SESSION['player1'])){ echo $_SESSION['player1']['vie'] ; } ?> HP</p>
                    <input type="submit" name="p1rogue" value="Choisir"></input>
                </div>
            </div>
            </form>
        </div>
    </div>

    <!-- Carte de Personnage 2 -->
    <div class="container">
        <div class="row justify-content-center text-light">
            <h2> Choix joueur 2 :</h2>
        </div>
            <form action="index.php" method="POST">
        <div class="row justify-content-center">            
            <div class="card" style="width: 10rem;">
                <img src="img/Guerrier.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title Guerrier">Guerrier</h5>
                    <p class="card-text">Atk : <?php if (!empty($_SESSION['player2'])){ echo $_SESSION['player1']['attaque'] ; } ?></p>
                    <p class="card-text"><?php if (!empty($_SESSION['player2'])){ echo $_SESSION['player1']['vie'] ; } ?> HP</p>
                    <input type="submit" name="p2warrior" value="Choisir"></input>
                </div>
            </div>
            <div class="card" style="width: 10rem;">
                <img src="img/Healer.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title Pretre">Healer</h5>
                    <p class="card-text">Atk <?php if (!empty($_SESSION['player2'])){ echo $_SESSION['player1']['attaque'];} ?></p>
                    <p class="card-text"><?php if (!empty($_SESSION['player2'])){ echo $_SESSION['player1']['vie'] ; } ?> HP</p>
                    <input type="submit" name="p2priest" value="Choisir"></input>
                </div>
            </div>
            <div class="card" style="width: 10rem;">
                <img src="img/Mage.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title Mage">Mage</h5>
                    <p class="card-text">Atk <?php if (!empty($_SESSION['player2'])){ echo $_SESSION['player1']['attaque'];} ?></p>
                    <p class="card-text"><?php if (!empty($_SESSION['player2'])){ echo $_SESSION['player1']['vie'] ; } ?> HP</p>
                    <input type="submit" name="p2mage" value="Choisir"></input>
                </div>
            </div>
            <div class="card" style="width: 10rem;">
                <img src="img/Moine.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title Moine">Moine</h5>
                    <p class="card-text">Atk <?php if (!empty($_SESSION['player2'])){ echo $_SESSION['player1']['attaque'];} ?></p>
                    <p class="card-text"><?php if (!empty($_SESSION['player2'])){ echo $_SESSION['player1']['vie'] ; } ?> HP</p>
                    <input type="submit" name="p2monk" value="Choisir"></input>
                </div>
            </div>
            <div class="card" style="width: 10rem;">
                <img src="img/Voleur.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title Voleur">Voleur</h5>
                    <p class="card-text">Atk <?php if (!empty($_SESSION['player2'])){ echo $_SESSION['player1']['attaque'];} ?></p>
                    <p class="card-text"><?php if (!empty($_SESSION['player2'])){ echo $_SESSION['player1']['vie'] ; } ?> HP</p>
                    <input type="submit" name="p2rogue" value="Choisir"></input>
                </div>
            </div>
            </form>
        </div>
    </div>
