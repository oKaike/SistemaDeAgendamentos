<?php
class conexao{
    public $database = "SistemaDeAgendamentos";
    public $host = "localhost";
    public $user = "root";
    public $password = "";

    public function bd(){
        try{
        $conn = new PDO("mysql:host = $this->host; dbname = $this->database", $this->user, $this->password);
        echo "Conectado com sucesso <br>";
        }
        catch(error $e){
            echo "Houve um erro na conexão com o banco: ". $e;
        }
    }
}
?>