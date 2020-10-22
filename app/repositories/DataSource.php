<?php

class DataSource
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = mysqli_connect("172.17.0.4", "root", "123456", "pokedexCervera") or die("no se puede conectar");
    }

    public function get($sql)
    {
        $query_result = mysqli_query($this->conexion, $sql);
        $result = array();
        if($query_result) {
            while ($fila = mysqli_fetch_assoc($query_result)) {
                $result[] = $fila;
            }
        }else{
            $result = $sql;
        }
        return $result;
    }

    public function save($sql)
    {
        mysqli_query( $this->conexion, $sql);
    }
}

?>