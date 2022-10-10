<div class="container">
    <div class="row justify-content-start">
    <div class="card" style="width: 10rem;">
                <img src="img/<?php echo $_SESSION['player1']['classe']; ?>.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title <?php echo $_SESSION['player1']['classe']; ?>"><?php echo $_SESSION['player1']['classe']; ?></h5>
                    <p class="card-text">Atk : <?php echo $_SESSION['player1']['attaque']; ?></p>
                    <p class="card-text"><?php echo $_SESSION['player1']['vie']; ?> HP</p>
                </div>
            </div>
    </div>
    <div class="row justify-content-end">
    <div class="card" style="width: 10rem;">
                <img src="img/<?php echo $_SESSION['player2']['classe']; ?>.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title <?php echo $_SESSION['player2']['classe']; ?>"><?php echo $_SESSION['player2']['classe']; ?></h5>
                    <p class="card-text">Atk : <?php echo $_SESSION['player2']['attaque']; ?></p>
                    <p class="card-text"><?php echo $_SESSION['player2']['vie']; ?> HP</p>
                </div>
            </div>
    </div>
</div>