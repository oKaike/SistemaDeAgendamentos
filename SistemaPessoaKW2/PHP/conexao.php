<?php
class conexao{
    public $database = "SistemaDeAgendamentos";
    public $host = "localhost";
    public $user = "root";
    public $password = "";

    public function bd(){
        $conn = new PDO("mysql:host = $host; dbname = $database", $host, $user, $password);

    }
}
?>