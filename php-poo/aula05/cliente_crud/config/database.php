<?php 
class Database{
    private static $conn;

    public static function conectar(){
        if(!self::$conn){
            self::$conn = new PDO(
                "pgsql:host=192.168.10.68;port=5432;db=cliente_crud",
                "cliente_crud",
                "1234",
                [PDO::ATTR_ERRMODE => PDO::ATTR_ERRMODE]
            );
        }
        return self::$conn;
    }
}
?>