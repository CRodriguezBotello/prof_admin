<!DOCTYPE html>
<html>
    <head>
        <title>Menu de Profesores</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h3>Hola, <?php echo $info['nombre']; ?></h3>
        <p><a href="proceso_alta_alumnos.php">Inscribir Alumnos</a></p>
        <p><a href="index.php?controlador=Cprofesores&metodo=obtener_datos_profesor&id=<?php echo $_SESSION['id']; ?>">Modificar sus datos</a></p>
    </body>
</html>