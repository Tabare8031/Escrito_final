<?php

require_once("modelo/Alumno.php");

$id = $_GET['id_alumno'];

$alumno = new Alumno();

$verAlumno = $alumno->get_datos($id);

require_once("vista/VisualizacionDatosAlumno.php");

?>