

<?php session_start();
if(!isset($_SESSION['usuario'])){
    header('Location:../index.php');
}

 ?>
<!doctype html>
<html lang="en">

<head>
  <title>CRUD PHP</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
     <nav class="navbar navbar-expand navbar-light bg-light">
        <ul class="nav navbar-nav">
            <a class="nav-link active" href="index.php" aria-current="page">Inicio <span class="visually-hidden">Inicio</span></a>
            <a class="nav-link" href="vista_alumnos.php" aria-current="page">Alumnos <span class="visually-hidden">Alumnos</span></a>
            <a class="nav-link" href="vista_cursos.php" aria-current="page">Cursos <span class="visually-hidden">Cursos</span></a>
            <a class="nav-link" href="cerrar.php" aria-current="page">Cerrar sesión <span class="visually-hidden">Cerrar sesión</span></a>         
        </ul>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12">
               <div  class="row">
                

              
