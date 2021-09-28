<?php 
session_start();
require_once '../models/Usuario/Usuario.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$password = $_POST['password'];

$pass = password_hash($password, PASSWORD_BCRYPT);
try{
    Usuario::register($nombre, $apellido, $email, $pass);
    $_SESSION['registro'] = "Se ha registrado correctamente el usuario $nombre $apellido";
}catch(PDOExecption $e){
    echo $e;
}

header("Location: ../registrar.php");