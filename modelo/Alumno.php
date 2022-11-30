<?php

class Alumno{

    private $con;
    private $alumno;

    public function __construct(){

        require_once("Conexion.php");
        $this->con = Conexion::conectar();
        $this->alumno = array();
    }

    public function set_alumno($nombre_alumno, $telefono, $email, $edad, $centro, $curso){

        $sql = "INSERT INTO alumno (nombre_alumno, telefono, email, edad, centro, curso) VALUES ('$nombre_alumno', '$telefono', '$email', '$edad', '$centro', '$curso')";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function get_alumno($nombre_alumno, $telefono, $email, $edad, $centro, $curso){

        $sql = "SELECT * FROM alumno WHERE nombre_alumno = '$nombre_alumno' AND telefono = '$telefono' AND email = '$email' AND edad = '$edad' AND centro = '$centro' AND curso '$curso'";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function get_datos($id_alumno){

        $sql = "SELECT * FROM alumno WHERE id_alumno = $id_alumno";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function buscar_alumno($nombre_alumno){

        $sql = "SELECT * FROM alumno WHERE nombre_alumno LIKE '%$nombre_alumno%'";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function borrar_alumno($id_alumno){

        $sql = "DELETE FROM alumno WHERE id_alumno = $id_alumno";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function actualizar_alumno($id_alumno, $nombre_alumno, $telefono, $email, $edad, $centro, $curso){
        $sql = "UPDATE alumno SET nombre_alumno = '$nombre_alumno', telefono = '$telefono', email = '$email', edad = '$edad', centro = '$centro', curso = '$curso' WHERE id_alumno = '$id_alumno'";
        $query = mysqli_query($this->con, $sql);
        return $query;
    }

    public function listar_alumno_id_asc(){
        
        $sql = "SELECT * FROM alumno ORDER BY id_alumno ASC";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)){
            $this->alumno[] = $filas;
        }
        return $this->alumno;
    }

    public function listar_alumno_id_desc(){
        
        $sql = "SELECT * FROM alumno ORDER BY id_alumno DESC";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)){
            $this->alumno[] = $filas;
        }
        return $this->alumno;
    }

    public function listar_alumno_nombre_asc(){
        
        $sql = "SELECT * FROM alumno ORDER BY nombre_alumno ASC";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)){
            $this->alumno[] = $filas;
        }
        return $this->alumno;
    }

    public function listar_alumno_nombre_desc(){
        
        $sql = "SELECT * FROM alumno ORDER BY nombre_alumno DESC";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)){
            $this->alumno[] = $filas;
        }
        return $this->alumno;
    }

    public function listar_alumno_fecha_asc(){
        
        $sql = "SELECT * FROM alumno ORDER BY fecha ASC";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)){
            $this->alumno[] = $filas;
        }
        return $this->alumno;
    }

    public function listar_alumno_fecha_desc(){
        
        $sql = "SELECT * FROM alumno ORDER BY fecha DESC";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)){
            $this->alumno[] = $filas;
        }
        return $this->alumno;
    }

    public function listar_alumno_centro_asc(){
        
        $sql = "SELECT * FROM alumno ORDER BY centro ASC";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)){
            $this->alumno[] = $filas;
        }
        return $this->alumno;
    }

    public function listar_alumno_centro_desc(){
        
        $sql = "SELECT * FROM alumno ORDER BY centro DESC";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)){
            $this->alumno[] = $filas;
        }
        return $this->alumno;
    }

    public function listar_alumno_curso_asc(){
        
        $sql = "SELECT * FROM alumno ORDER BY curso ASC";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)){
            $this->alumno[] = $filas;
        }
        return $this->alumno;
    }

    public function listar_alumno_curso_desc(){
        
        $sql = "SELECT * FROM alumno ORDER BY curso DESC";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)){
            $this->alumno[] = $filas;
        }
        return $this->alumno;
    }

    public function listar_alumno_edad_asc(){
        
        $sql = "SELECT * FROM alumno ORDER BY edad ASC";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)){
            $this->alumno[] = $filas;
        }
        return $this->alumno;
    }

    public function listar_alumno_edad_desc(){
        
        $sql = "SELECT * FROM alumno ORDER BY edad DESC";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)){
            $this->alumno[] = $filas;
        }
        return $this->alumno;
    }

    public function listar_alumno_email_asc(){
        
        $sql = "SELECT * FROM alumno ORDER BY email ASC";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)){
            $this->alumno[] = $filas;
        }
        return $this->alumno;
    }

    public function listar_alumno_email_desc(){
        
        $sql = "SELECT * FROM alumno ORDER BY email DESC";
        $query = mysqli_query($this->con, $sql);

        while ($filas = mysqli_fetch_array($query)){
            $this->alumno[] = $filas;
        }
        return $this->alumno;
    }
}

?>