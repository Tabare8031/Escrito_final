<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página para Subir Alumno</title>
    <link rel="icon" href="icono.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="formulario" action="controlador/SubirAlumno.php" method="post">

        <div>
            <label for="nombre_alumno">Ingresar Nombre y Apellido</label>
            <input class="campo" type="text" id="nombre_alumno" name="nombre_alumno" maxlength="45">
        </div>

        <div>
            <label for="edad">*Ingresar Edad</label>
            <input class="campo" type="number" id="edad" name="edad" maxlength="3">
        </div>

        <div>
            <label for="centro">Ingresar Centro Educativo</label>
            <input class="campo" type="text" id="centro" name="centro" maxlength="65">
        </div>

        <div>
            <label for="curso">Ingresar Curso</label>
            <input class="campo" type="text" id="curso" name="curso" maxlength="65">
        </div>

        <div>
            <label for="telefono">Ingresar Teléfono</label>
            <input class="campo" type="text" id="telefono" name="telefono" maxlength="9">
        </div>

        <div>
            <label for="email">Ingresar e-mail</label>
            <input class="campo" type="text" id="email" name="email" maxlength="65">
        </div>

        <input class="boton" type="submit" value="Enviar">

        <a class="boton" href="index.php">Volver</a>
    </form>
</body>
</html>