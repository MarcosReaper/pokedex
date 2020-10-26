<?php
define("ROL", 1);
function addPokemonView($rol)
{
    if ($rol != null) {
        echo " <div class='w3-third w3-container w3-margin-bottom w3-block'>";
        echo " <div class='w3-card w3-gray'>";
        echo "<a href='../formPokemon.php');'><img src='../images/mas.png' alt='agregar pokemon' class='w3-hover-opacity w3-image w3-block'></a>";
        echo "</div>";
        echo "</div>";
    }
}

?>

