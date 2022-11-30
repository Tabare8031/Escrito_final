<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página para Ver Todos los Alumnos</title>
    <link rel="icon" href="icono.png">
    <link rel="stylesheet" href="style.css">
    <script>
        function confirmacion(){
            var respuesta = confirm("¿Seguro que quieres borrar al alumno?");
            if(respuesta == true){
                return true;
            }else{
                return false;
            }
        }
    </script>
</head>
<body>
    <div class="solicitudes">
        <li class="solicitud1"><b>SOLICITUDES DE INFORMACIÓN</b></li>
        <li class="solicitud2"><a href="pagina_subir_alumno.php">Nueva Solicitud</a></li>
    </div>
    <?php require_once("controlador/ListarAlumnos.php"); ?>
</body>
</html>