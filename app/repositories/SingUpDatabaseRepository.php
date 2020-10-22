<?php

require_once("DataSource.php");

function singup($email,$pass,$firstname,$lastname)
{
    $sql = "INSERT INTO users (nombre, apellido, rol_id, pass, email) 
                VALUES('".$firstname."','".$lastname."',2,'".$pass."', '".$email."');";
    $con = new DataSource();
    $con->save($sql);
}