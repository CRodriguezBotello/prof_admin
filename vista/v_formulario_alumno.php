<!DOCTYPE html>
<html>
    <head>
        <title>Alta de Alumnos</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h3>Dar de alta un alumno</h3>
        <form action="proceso_nuevo_alumno.php" method="post">
            <label for="nombre">Nombre del alumno: </label>
            <input type="text" name="nombre">
            <br/>
            <label for="correo">Correo del alumno: </label>
            <input type="text" name="correo">
            <br/>
            <label for="pw">Contraseña del alumno: </label>
            <input type="password" name="pw">
            <br/>
            <input type="submit" value="ENVIAR">
            <input type="reset" value="REINICIAR">
        </form>
    </body>
</html>