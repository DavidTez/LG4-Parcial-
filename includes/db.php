<?php 

class DB {

    //Datos de conexión
    static $host = "localhost";
    static $user = "root";
    static $password = "";
    static $db = "crud";   

    public static function init(){
        echo "Iniciando base de datos";
    }

    public static function query($sql){
        //Crear la conexión
        $con = new mysqli(self::$host, self::$user, self::$password, self::$db);
        $result = $con->query($sql);
        $con->close();

        return $result;

    }
}

?>