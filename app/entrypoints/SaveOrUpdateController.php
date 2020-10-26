<?php
if ($_POST["url"] != null && $_POST["url"] != ""
    && $_POST["nombre"] != null && $_POST["nombre"] != ""
    & $_POST["tipo"] != null && $_POST["tipo"] != ""
    & $_POST["desc"] != null && $_POST["desc"] != "") {
        session_start();
        $_SESSION["url"] = $_POST["url"];
        $_SESSION["nombre"] = $_POST["nombre"];
        $_SESSION["tipo"] = $_POST["tipo"];
        $_SESSION["desc"] = $_POST["desc"];
        $_SESSION["id"] = $_POST["id"];
        header("Location: ../useCases/SaveOrUpdatePokemonUseCase.php");
} else {
        header("Location: ../useCases/ErrorUseCase.php");
}
?>