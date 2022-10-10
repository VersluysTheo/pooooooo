<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="img/ppdiscord3.png">
    <title>MDRRRRR</title>
</head>

<body>

    <?php
    require 'class/Aventurier.php';
    require 'class/Enfant/Guerrier.php';
    require 'class/Enfant/Healer.php';
    require 'class/Enfant/Mage.php';
    require 'class/Enfant/Moine.php';
    require 'class/Enfant/Voleur.php';


    ?>

    <!-- Boutons -->
    <div class="container">
        <div class="row justify-content-center">
        <a href="index.php" class="btn btn-primary">Début</a>
        <a href="index.php?choisir" class="btn btn-success">Choisir</a>
        <a href="index.php?destroy" class="btn btn-danger Destroy">Destroy</a>
        </div>
    </div>

    <?php if(isset($_GET['choisir'])){
        include 'choisir.php';
    } ?>

    <!-- Choisir P1 -->

    <?php
    if (empty($_SESSION['player1']) && empty($_SESSION['player2'])){
        include 'choisir.php';
    }
    ?>
<!-- Création de Session (P1) -->
<!-- Guerrier -->

<?php if (isset($_POST['p1warrior'])){
    $guerrier = new Guerrier();
    $_SESSION['player1']=[
        'classe' => 'Guerrier',
        'attaque' => $guerrier->Getatk(),
        'vie' => $guerrier->Getvie(),
    ];
}
    ?>
<!-- Healer -->
    <?php
    if (isset($_POST['p1priest'])){
        $healer = new Healer();
        $_SESSION['player1']=[
            'classe' => 'Healer',
            'attaque' => $healer->Getatk(),
            'vie' => $healer->Getvie()
        ];
    
    }
    ?>

    <!-- Mage -->
    <?php 
    if (isset($_POST['p1mage'])){
        $mage = new Mage();
        $_SESSION['player1']=[
            'classe' => 'Mage',
            'attaque' => $mage->Getatk(),
            'vie' => $mage->Getvie()
        ];
    }
    ?>

    <!-- Moine -->
    <?php
    if (isset($_POST['p1monk'])){
        $moine = new Moine();
        $_SESSION['player1']=[
            'classe' => 'Moine',
            'attaque' => $moine->Getatk(),
            'vie' => $moine->Getvie()
        ];
    }
    ?>

    <!-- Voleur -->
    <?php
    if (isset($_POST['p1rogue'])){
        $voleur = new Voleur();
        $_SESSION['player1']=[
            'classe' => 'Voleur',
            'attaque' => $voleur->Getatk(),
            'vie' => $voleur->Getvie()
        ];
    } 
    ?>

<!-- Création de Session (P2) -->
<!-- Guerrier 2 -->

<?php if (isset($_POST['p2warrior'])){
    $guerrier = new Guerrier();
    $_SESSION['player2']=[
        'classe' => 'Guerrier',
        'attaque' => $guerrier->Getatk(),
        'vie' => $guerrier->Getvie(),
    ];
}
    ?>
<!-- Healer 2 -->
    <?php
    if (isset($_POST['p2priest'])){
        $healer = new Healer();
        $_SESSION['player2']=[
            'classe' => 'Healer',
            'attaque' => $healer->Getatk(),
            'vie' => $healer->Getvie()
        ];
    
    }
    ?>

    <!-- Mage 2 -->
    <?php 
    if (isset($_POST['p2mage'])){
        $mage = new Mage();
        $_SESSION['player2']=[
            'classe' => 'Mage',
            'attaque' => $mage->Getatk(),
            'vie' => $mage->Getvie()
        ];
    }
    ?>

    <!-- Moine 2 -->
    <?php
    if (isset($_POST['p2monk'])){
        $moine = new Moine();
        $_SESSION['player2']=[
            'classe' => 'Moine',
            'attaque' => $moine->Getatk(),
            'vie' => $moine->Getvie()
        ];
    }
    ?>

    <!-- Voleur 2 -->
    <?php
    if (isset($_POST['p2rogue'])){
        $voleur = new Voleur();
        $_SESSION['player2']=[
            'classe' => 'Voleur',
            'attaque' => $voleur->Getatk(),
            'vie' => $voleur->Getvie()
        ];
    } 
    ?>


    <!-- Session P1 et P2 crée -->

    <?php 
    if (!empty($_SESSION['player1']) && !empty($_SESSION['player2'])){
        include 'combat.php';
    }
    ?>

<!-- Session Destroy -->
    <?php
    if (isset($_GET['destroy'])){
        session_destroy();
    }
    ?>

</body>
</html>