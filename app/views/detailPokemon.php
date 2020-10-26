<?php session_start();

require_once("../repositories/SearchPokemonDatabaseRepository.php");
$result = search(null, $_GET["id"], null);
?>
<!DOCTYPE html>
<html>
<title>Pokedex</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<body class="w3-dark-gray w3-mobile">

<?php include("header.php"); ?>
<div class="w3-padding-16"></div>
<div class="w3-padding-16 w3-display-container w3-mobile">
    <div class="w3-threequarter w3-border w3-margin-top w3-center w3-gray w3-display-topmiddle">
        <div class="w3-quarter w3-border-red">
            <input type='image' src="<?php echo $result[0]['url']; ?>" alt="<?php echo $result[0]['nombre']; ?>"
                   class='w3-hover-opacity w3-block'>
        </div>
        <div class="w3-threequarter w3-display-container">
            <div class="w3-panel w3-red">
                <h2 class="w3-hover-text-deep-purple">Detalles</h2>
            </div>
            <p><?php echo $result[0]['descripcion']; ?></p>
            <div class="w3-padding-16 w3-margin-bottom"></div>
            <a class="" href="../busquedaPokemon.php">volver</a>
        </div>
    </div>

</div>
</body>
</html>
