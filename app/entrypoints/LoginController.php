<?php
if ($_POST["email"] != null && $_POST["email"] != "" && $_POST["pass"] != null && $_POST["pass"] != "") {
    session_start();
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["pass"] = $_POST["pass"];
    header("Location: ../useCases/LoginUseCase.php");
} else {
    header("Location: ../useCases/ErrorUseCase.php");
}
?>