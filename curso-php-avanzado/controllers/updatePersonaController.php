<?php 
session_start();
require_once '../models/Personas/Personas.php';

var_dump($_POST);

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$dni = $_POST['dni'];
$id = $_POST['id'];

try{
    Personas::update($nombre,$apellido, $edad, $dni, $id);
    $_SESSION['actualizado'] = "Se ha actualizado correctamente el usuario $nombre $apellido";
}catch(PDOExecption $e){
    echo $e;
}

header("Location: ../editPersona.php?id=$id");