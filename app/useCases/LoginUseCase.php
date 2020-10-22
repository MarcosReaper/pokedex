<?php
require_once('../repositories/LoginDatabaseRepository.php');

session_start();
$email = $_SESSION["email"];
$pass = $_SESSION["pass"];
unset($_SESSION["pass"]);
if($email !=null){
    $loggeado = login($email, $pass);
    if($loggeado!=null){
        $_SESSION["rol"] = $loggeado[0]["rol_id"];
        $_SESSION["user"] = $loggeado[0]["nombre"] . " " . $loggeado[0]["apellido"];
        header("Location: ../busquedaPokemon.php");
    }else{
        header("Location: ../useCases/ErrorUseCase.php");
    }
}
