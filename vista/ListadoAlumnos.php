<?php require_once("vista/BuscadorAlumno.php") ?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Centro</th>
            <th>Nombre</th>
            <th>Curso</th>
            <th>Edad</th>
            <th>Contacto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($matrizAlumno as $alumno): ?>
        <tr>
            <td class="tab-num"><?php echo $alumno['id_alumno']; ?></td>
            <td><?php echo $alumno['fecha']; ?></td>
            <td><?php echo $alumno['centro']; ?></td>
            <td><?php echo $alumno['nombre_alumno']; ?></td>
            <td><?php echo $alumno['curso']; ?></td>
            <td class="tab-num"><?php echo $alumno['edad']; ?></td>
            <td>
                <ul>
                <li>Telefono: <?php echo $alumno['telefono']; ?></li>
                <li>Correo: <?php echo $alumno['email']; ?></li>
                </ul>
            </td>
            <td>
                <a class="borrar" href="controlador/BorrarAlumno.php?id_alumno=<?php echo $alumno['id_alumno']; ?>" onclick="return confirmacion()"><b>Borrar</b></a>
                <a class="ver" href="pagina_ver_datos_alumno.php?id_alumno=<?php echo $alumno['id_alumno']; ?>"><b>Ver Datos</b></a>
                <a class="editar" href="pagina_editar_alumno.php?id_alumno=<?php echo $alumno['id_alumno']; ?>"><b>Editar</b></a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>