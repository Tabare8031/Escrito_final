<?php

require_once("../modelo/Alumno.php");

$alumno = new Alumno();

if($_POST['edad'] > 0){

    $nombre_alumno = $_POST["nombre_alumno"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $edad = $_POST["edad"];
    $centro = $_POST["centro"];
    $curso = $_POST["curso"];

    $subirAlumno = $alumno->set_alumno($nombre_alumno, $telefono, $email, $edad, $centro, $curso);

    require_once("../vista/SubidaAlumnoCorrecta.php");
    
}else if($_POST['edad'] <= 0){

    require_once("../vista/SubidaAlumnoFallida1.php");
    
}

?>