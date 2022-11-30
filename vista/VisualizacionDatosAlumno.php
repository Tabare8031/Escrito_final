<?php foreach($verAlumno as $alumno): ?>
    <ul class="listado-datos">
        <li><h2>Datos del Alumno <?php echo $alumno['nombre_alumno'] ?>. (ID <?php echo $alumno['id_alumno'] ?>)</h2></li>
        <li>Edad del Alumno: <?php echo $alumno['edad'] ?> años.</li>
        <li>Telefono del Alumno: <?php echo $alumno['telefono'] ?></li>
        <li>e-mail del Alumno: <?php echo $alumno['email'] ?></li>
        <li>Centro Educativo al que Asiste el Alumno: <?php echo $alumno['centro'] ?></li>
        <li>Curso al que Asiste el Alumno: <?php echo $alumno['curso'] ?></li>
        <li>Los datos de este alumno fueron subidos a la página el <?php echo $alumno['fecha'] ?>.</li>
        <li class="centrado"><a class="boton" href="index.php">Volver</a></li>
    </ul>

<?php endforeach; ?>