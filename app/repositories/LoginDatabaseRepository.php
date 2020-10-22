<?php
require_once("DataSource.php");

function login($email, $pass)
{
    $sql = "select * from users where email = '" . $email . "' and pass ='" . $pass . "';";
    $con = new DataSource();
    $result = $con->get($sql);
    if ($result == null) {
        header("Location: ../Error.html");
    }
    return $result;
}
