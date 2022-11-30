<?php foreach($edicionAlumno as $alumno): ?>

    <form class="formulario" action="controlador/EditarEsteAlumno.php" method="POST">
        
        <div>
            <label for="id_alumno">ID de Alumno</label>
            <input class="campo" type="text" id="id_alumno" name="id_alumno" value="<?php echo $alumno['id_alumno']; ?>" readonly>
        </div>

        <div>
            <label for="nombre_alumno">Nombre y Apellido</label>
            <input class="campo" type="text" id="nombre_alumno" name="nombre_alumno" maxlength="45" value="<?php echo $alumno['nombre_alumno']; ?>">
        </div>

        <div>
            <label for="edad">*Edad</label>
            <input class="campo" type="number" id="edad" name="edad" maxlength="3" value="<?php echo $alumno['edad']; ?>">
        </div>

        <div>
            <label for="centro">Centro Educativo</label>
            <input class="campo" type="text" id="centro" name="centro" maxlength="65" value="<?php echo $alumno['centro']; ?>">
        </div>

        <div>
            <label for="curso">Curso</label>
            <input class="campo" type="text" id="curso" name="curso" maxlength="65" value="<?php echo $alumno['curso']; ?>">
        </div>

        <div>
            <label for="telefono">Teléfono</label>
            <input class="campo" type="text" id="telefono" name="telefono" maxlength="9" value="<?php echo $alumno['telefono']; ?>">
        </div>

        <div>
            <label for="email">e-mail</label>
            <input class="campo" type="text" id="email" name="email" maxlength="65" value="<?php echo $alumno['email']; ?>">
        </div>

        <input class="boton" type="submit" value="Editar">

        <a class="boton" href="index.php">Volver</a>
    </form>

<?php endforeach; ?>