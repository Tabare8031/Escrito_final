<form class="buscador" method="post">

   <?php require_once("controlador/BuscarAlumno.php"); ?>
    <label for="buscar_alumno">Buscar:</label>
    <input class="campo" type="text" id="buscar_alumno" name="buscar_alumno">
    <input class="boton" type="submit" id="boton_buscar_alumno" name="boton_buscar_alumno" value="Buscar">
</form>