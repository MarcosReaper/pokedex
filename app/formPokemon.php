<?php
session_start();
$result = $_SESSION["edit"];
?>
<!DOCTYPE html>
<html>
<title>Pokedex</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<body class="w3-dark-gray w3-mobile">

<?php include("views/header.php");
?>

<div class="w3-container w3-half w3-margin-top w3-display-middle">
    <h2 class="w3-hover-text-deep-purple"><?php echo ($_SESSION["edit"]!= null)?"Editar":"Agregar";?></h2>
    <form class="w3-container w3-card-4" action="entrypoints/SaveOrUpdateController.php" method="post">
        <p><input class='w3-input' type='hidden' value="<?php echo $result[0]["id"]?>" name='id'></p>
        <p><input class='w3-input' type='text' value="<?php echo $result[0]["url"]?>" name='url' required><label>Image url</label></p>
        <p><input class='w3-input' type='text' value="<?php echo $result[0]["nombre"]?>" name='nombre' required><label>nombre</label></p>
        <select class='w3-select' name='tipo' required>
            <option>Elija uno</option >
            <option value = '1' <?php echo ($result[0]["tipo"]== 1)?"selected":" ";?>>Fuego</option >
            <option value = '2' <?php echo ($result[0]["tipo"]== 2)?"selected":" ";?>>Agua</option>
            <option value = '3' <?php echo ($result[0]["tipo"]== 3)?"selected":" ";?>>Planta</option >
            <option value = '4' <?php echo ($result[0]["tipo"]== 4)?"selected":" ";?>>Electricidad</option>
        </select>
        <p><textarea class='w3-input' rows="5" cols="50" name='desc' required><?php echo $result[0]["descripcion"]; ?></textarea>
            <label>descripcion</label></p>
        <p><button class="w3-button w3-section w3-red w3-ripple w3-hover-deep-purple">Confirmar</button></p>
    </form>
</div>
</body>
</html>

<?php unset($_SESSION["edit"]);?>