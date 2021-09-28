<?php 
session_start();
require_once '../models/Personas/Personas.php';

$id = $_GET['id'];

try{
    Personas::delete($id);
    $_SESSION['delete'] = "Se ha eliminar correctamente el usuario";
}catch(PDOExecption $e){
    echo $e;
}

header("Location: ../index.php");