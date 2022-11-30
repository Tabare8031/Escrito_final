<?php

require_once("modelo/Alumno.php");

$id_alumno = $_GET['id_alumno'];

$alumno = new Alumno();

$edicionAlumno = $alumno->get_datos($id_alumno);

require_once("vista/EdicionAlumno.php");

?>