<?php
require_once "conexao.php";
require_once "modeloPessoa.php";
require_once "pessoa.php";
class controllerPessoa{
    public function inserir(){
        $conn = new conexao;
        $smt = $conn::bd();
        
        $pessoa = new Pessoa; 
        echo $pessoa->getCpf();

        $sql = "insert into pessoa(cpf, nome, contato, senha) value(?, ?, ?, ?)";
        var_dump($_POST);
        $insert = $smt->prepare($sql);

        $insert->bindValue(1,$_POST['cpf']);
        $insert->bindValue(2,$_POST['nome']);
        $insert->bindValue(3,$_POST['contato']);
        $insert->bindValue(4,$_POST['senha']);

        if($insert->execute()){
            $sql2 = "select id from pessoa where nome = ?";
            
            $PegarID = $smt->prepare($sql2);
            $PegarID ->bindValue(1,$_POST["nome"]);
            $PegarID->execute();
            $dados = $PegarID->fetchAll(PDO::FETCH_ASSOC);

            var_dump($dados);
            echo $dados[0]["id"];

        }
    }

    public function atualizar(){

    }
    public function delete(){

    }
    public function pegar(){

    } 
}