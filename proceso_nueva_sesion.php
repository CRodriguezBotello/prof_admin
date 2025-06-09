<?php
    session_start();
    
    require_once('controlador/cAdmin.php');
    $objAdmin= new CAdmin();
    $usuario= $objAdmin->iniciar_sesion();

    if($_SESSION['perfil']==='A'){
        include('vista/v_menuAdmin.php');
    }
    if($_SESSION['perfil']==='P'){
        include('vista/v_menuProf.php');
    }
    if($_SESSION['perfil']==='L'){
        include('vista/v_menuAlum.php');
        $_SESSION["mensaje"]="Los alumnos no pueden acceder aqui";
    }
    
?>