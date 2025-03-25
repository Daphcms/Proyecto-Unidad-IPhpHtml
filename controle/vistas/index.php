<?php
include_once ("../router/Enrutador.php");



?>

<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Control E</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        
        </li> 


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Estudiante
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?cargar=EstudianteAdd">Registrar Estudiante</a></li>
            <li><a class="dropdown-item" href="?cargar=EstudianteListar">Listar Estudiante</a></li>
            <li><a class="dropdown-item" href="?cargar=EstatusClaseView">Registrar estatusclase</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profesor
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?cargar=RegistrarProfe">Registrar Profesor</a></li>
            <li><a class="dropdown-item" href="?cargar=ListarProfe">Listar Profesor</a></li>
            <li><a class="dropdown-item" href="?cargar=MateriaImp">Materias Impartidas</a></li>
            <li><a class="dropdown-item" href="?cargar=ModEliProfe">Modificar/Eliminar Profesor</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Materia
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?cargar=InsertarMateria">Insertar Materia</a></li>
            <li><a class="dropdown-item" href="?cargar=ListarMaterias">Listar Materias</a></li>
            <li><a class="dropdown-item" href="?cargar=MateriasPorCarrera">Materias Por Carrera</a></li>
            <li><a class="dropdown-item" href="?cargar=BuscarMateria">Buscar Materia</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Carrera
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?cargar=CarreraAddView">Registrar carrera</a></li>
            <li><a class="dropdown-item" href="?cargar=ListarCarrera">Listar carreras</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Administracion
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?cargar=ConfiguracionDelSistema">Configuracion Del Sistema</a></li>
            <li><a class="dropdown-item" href="?cargar=GestionDeClases">Gestion De Clases</a></li>
            <li><a class="dropdown-item" href="?cargar=GestionDeMaterias">Gestion De Materias</a></li>
            <li><a class="dropdown-item" href="?cargar=GestionDeHorarios">Gestion De Horarios </a></li>
            <li><a class="dropdown-item" href="?cargar=GestionDeUsuarios">Gestion De Usuarios</a></li>
            <li><a class="dropdown-item" href="?cargar=ControlFinanciero">Control Financiero </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<section>
    <?php
    $enrutador = new Enrutador();
    if(isset($_GET['cargar']))
        if($enrutador->validarGET($_GET['cargar'])){
            $enrutador->cargarVista($_GET['cargar']);
        }
    
    ?>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>

</html>
