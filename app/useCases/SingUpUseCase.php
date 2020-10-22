<?php
require_once('../repositories/SingUpDatabaseRepository.php');

session_start();
$email = $_SESSION["email"];
$pass = $_SESSION["pass"];
$pass2 = $_SESSION["pass2"];
$firstname = $_SESSION["firstname"];
$lastname = $_SESSION["lastname"];
unset($_SESSION["pass2"]);
if ($email != null && $pass != null && $pass2 != null && $firstname != null && $lastname != null && $pass == $pass2) {
    singup($email, $pass, $firstname, $lastname);
    header("Location: LoginUseCase.php");
} else{
    header("Location: ../useCases/ErrorUseCase.php");
}

