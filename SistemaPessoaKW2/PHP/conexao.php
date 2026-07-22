<?php
class conexao{
    public const DATABASE = "cadastroAgendas";
    public const HOST = "localhost";
    public const USER = "root";
    public const PASS = "";

    public static $conn;

    public static function bd(){
        try{
        self::$conn = new PDO("mysql:host=". self::HOST. ";dbname=". self::DATABASE, self::USER, self::PASS);
        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conectado com sucesso <br>";
        }
        catch(PDOException $e){
            echo "Houve um erro na conexão com o banco: ". $e ->getMessage();
        }
        return self::$conn;
    }
}
?>