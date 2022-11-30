<?php

require_once("modelo/Alumno.php");

$alumnos = new Alumno();

$matrizAlumno = $alumnos->listar_alumno_id_asc();

require_once("vista/ListadoAlumnos.php");

?>