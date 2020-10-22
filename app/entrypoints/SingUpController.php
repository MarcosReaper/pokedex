<?php
if ($_POST["email"] != null && $_POST["email"] != ""
    && $_POST["pass"] != null && $_POST["pass"] != ""
    & $_POST["pass2"] != null && $_POST["pass2"] != ""
    & $_POST["firstname"] != null && $_POST["firstname"] != ""
    & $_POST["lastname"] != null && $_POST["lastname"] != "") {
        session_start();
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["pass"] = $_POST["pass"];
        $_SESSION["pass2"] = $_POST["pass2"];
        $_SESSION["firstname"] = $_POST["firstname"];
        $_SESSION["lastname"] = $_POST["lastname"];
        header("Location: ../useCases/SingUpUseCase.php");
} else {
        header("Location: ../useCases/ErrorUseCase.php");
}
?>