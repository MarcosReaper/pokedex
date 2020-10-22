<?php
session_start();
require_once("repositories/SearchPokemonDatabaseRepository.php");
require_once("views/grid_pokemon.php");
?>
<!DOCTYPE html>
<html>
<title>Pokedex</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<meta charset="UTF-8">
<body class="w3-dark-gray w3-mobile">

<?php include("views/header.php"); ?>
<div class="w3-padding-16"></div>
<section class="w3-mobile">
    <form class="w3-container w3-card-4 w3-light-grey w3-margin-top w3-mobile"
          action="entrypoints/SearchPokemonController.php"
          method="post">
        <div class="w3-row-padding w3-margin-top w3-mobile" style="height:5em;">
            <div class="w3-col w3-section" style="width:10%">
                <b><label class="w3-section w3-center" for="nombreABuscar">Pokemon</label></b>
            </div>
            <div class="w3-col" style="width:80%"><input class="w3-input w3-center w3-section" type="text"
                                                         name="nombreABuscar" id="nombreABuscar"></div>
            <div class="w3-col" style="width:10%">
                <button class="w3-button w3-section w3-red w3-ripple w3-hover-deep-purple"> Buscar</button>
            </div>
        </div>
    </form>
</section>
<div class="w3-padding-32"></div>
<!-- First Photo Grid-->
<section class="w3-row l12 w3-container">
    <?php
    grilla($_SESSION["grid"], $_SESSION["rol"]);

    unset($_SESSION["grid"]);

    ?>
</section>
</body>
</html>