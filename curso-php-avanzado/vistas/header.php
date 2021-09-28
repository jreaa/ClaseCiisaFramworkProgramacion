<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>CONEXION</title>
</head>
<body>
    <div class="container">
    <!-- As a link -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Gestion de estudiantes</a>

            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="login.php">Iniciar Sesion</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="registrar.php">Registrar</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Cerrar Session</a>
                </li>

            </ul>
        </div>
    </nav>
