<?php

include_once '../modelo/conexion.php';

$objeto = new Conexion();
$conexion = $objeto->Conectar();


//Para recibir parametros de AXIOS

$_POST = json_decode(file_get_contents("php://input"), true);

// Recepcion de los datos enviados mediante POST desde main.js 
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$marca = (isset($_POST['marca'])) ? $_POST['marca'] : '';
$modelo = (isset($_POST['modelo'])) ? $_POST['modelo'] : '';
$stock = (isset($_POST['stock'])) ? $_POST['stock'] : '';

switch ($opcion) {
    case 1:
        $consuta = "INSERT INTO moviles (marca,modelo,stock) VALUES ('$marca','$modelo','$stock')";
        $resultado = $conexion->prepare($consuta);
        $resultado->execute();
        break;
    case 2:
        $consuta = "UPDATE moviles SET marca='$marca', modelo='$modelo',stock='$stock' WHERE id='$id'";
        $resultado = $conexion->prepare($consuta);
        $resultado->execute();
        $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:
        $consuta = "DELETE FROM moviles WHERE id='$id'";
        $resultado = $conexion->prepare($consuta);
        $resultado->execute();
        break;
    case 4:
        $consuta = "SELECT id,marca,modelo,stock FROM moviles";
        $resultado = $conexion->prepare($consuta);
        $resultado->execute();
        $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}
print json_encode($data, JSON_UNESCAPED_UNICODE);
$conexion = NULL;
