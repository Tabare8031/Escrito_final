<?php

if(!empty($_POST["boton_buscar_alumno"])){

    $alumno = $_POST["buscar_alumno"];

    require_once("modelo/Alumno.php");

    $alumnos = new Alumno();

    $matrizAlumno = $alumnos->buscar_alumno($alumno);

    require_once("vista/ListadoAlumnos.php");
}

?>