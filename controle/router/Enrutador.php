<?php
// class Enrutador{
//     public function cargarVista($vista){
//         switch($vista){
//             case 'CarreraAddView':
//                 include_once __DIR__ . ('/../vistas/carrera/CarreraAddView.php');
//             break;
//             case 'EstudianteAdd':
//                 include_once __DIR__ . ('/../vistas/estudiante/EstudianteAdd.php');
//             break;
//             case 'EstudianteListar':
//                 include_once __DIR__ . ('/../vistas/estudiante/EstudianteListar.php');
//             break;
class Enrutador{
    public function cargarVista($vista){
        switch($vista){
            case 'EstatusClaseView':
                include_once __DIR__ . ('/../vistas/estudiante/EstatusClaseView.php');
            break;
            case 'EstudianteAdd':
                include_once __DIR__ . ('/../vistas/estudiante/EstudianteAdd.php');
            break;
            case 'EstudianteListar':
                include_once __DIR__ . ('/../vistas/estudiante/EstudianteListar.php');
            break;
            case 'CarreraAddView':
                include_once __DIR__ . ('/../vistas/carrera/CarreraAddView.php');
            break;
            case 'ListarCarrera':
                include_once __DIR__ . ('/../vistas/carrera/ListarCarrera.php');
            break;
            case 'ListarProfe':
                include_once __DIR__ . ('/../vistas/Profesor/ListarProfe.php');
                break;
            case 'RegistrarProfe':
                include_once __DIR__ . ('/../vistas/Profesor/RegistrarProfe.php');
                break;
            case 'MateriaImp':
                include_once __DIR__ . ('/../vistas/Profesor/MateriaImp.php');
                 break;
            case 'ModEliProfe':
                include_once __DIR__ . ('/../vistas/Profesor/ModEliProfe.php');
                break;
            case 'BuscarMateria':
                include_once __DIR__ . ('/../vistas/materia/BuscarMateria.php');
                break;
            case 'InsertarMateria':
                include_once __DIR__ . ('/../vistas/materia/InsertarMateria.php');
                break;
            case 'ListarMaterias':
                include_once __DIR__ . ('/../vistas/materia/ListarMaterias.php');
                break;
            case 'MateriasPorCarrera':
                include_once __DIR__ . ('/../vistas/materia/MateriasPorCarrera.php');
                break;              
            case 'ConfiguracionDelSistema':
                include_once __DIR__ . ('/../vistas/administracion/ConfiguracionDelSistema.php');
                break;
            case 'ControlFinanciero':
                include_once __DIR__ . ('/../vistas/administracion/ControlFinanciero.php');
                break;
            case 'GestionDeClases':
                include_once __DIR__ . ('/../vistas/administracion/GestionDeClases.php');
                break;
            case 'GestionDeHorarios':
                include_once __DIR__ . ('/../vistas/administracion/GestionDeHorarios.php');
                break;
            case 'GestionDeMaterias':
                include_once __DIR__ . ('/../vistas/administracion/GestionDeMaterias.php');
                break;
            case 'GestionDeUsuarios':
                include_once __DIR__ . ('/../vistas/administracion/GestionDeUsuarios.php');
                break;
            default:
               include_once __DIR__ . ('/../vistas/error/Error404.php');
               break;
        }
    }

    public function validarGet($variable):bool{
        if(empty($variable)){
            echo "<script> window.history.back();</script>";
        } else{
            return true;
        }
    }
}

?>