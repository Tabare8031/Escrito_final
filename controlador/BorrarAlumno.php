<?php

require_once("../modelo/Alumno.php");

$id_alumno = $_GET['id_alumno'];

$alumno = new Alumno();

$borradoAlumno = $alumno->borrar_alumno($id_alumno);

header("Location: ../vista/BorradoAlumno.php");

?>