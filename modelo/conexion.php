<?php


class Conexion
{
    public static function Conectar()
    {
        define('servidor', 'localhost');
        define('nombre_bd', 'crud');
        define('usuario', 'root');
        define('password', '');
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        try {
            $conexion = new PDO("mysql:host=" . servidor . "; dbname=" . nombre_bd, usuario, password, $opciones);
            return $conexion;
        } catch (PDOException $e) {
            die("El error al conectar es :" . $e->getMessage());
        }
    }


    /*     public function conexion()

    {

        try {
            $conexion = new PDO("{$this->driver}:host={$this->host};dbname={$this->dbName};charset={$this->charset}", $this->user, $this->pass);
            $conexion->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
            return $conexion;
            // echo "ok";
        } catch (PDOException $e) {
            echo $e->getMessage();
            // die($e->getMessage());
        }
    } */
}
