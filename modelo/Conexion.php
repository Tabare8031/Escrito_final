<?php

class Conexion{

    public static function conectar(){

        try{
            $host="localhost";
            $user="root";
            $pass="";
            $db="escrito_final";

            $con=mysqli_connect($host, $user, $pass);

            mysqli_select_db($con, $db);

            return $con;
        }catch(Exception $e){
            die('Error' . $e->getMessage());
            echo "La linea del error " . $e->getLine();
        }
    }
}

?>