<?php
include "conexao.php";
include "pessoa.php";

$conn = new conexao;
$conn->bd();

class controllerPessoa{
    public function inserir(){
        $pessoa = new Pessoa; 
        $sql = "insert into pessoa(cpf, nome, contato, senha) value(?, ?, ?, ?)";
        
        $insert = $conn->prepare($sql);

        $insert->bindValue(1,$pessoa->geCpf());
        $insert->bindValue(2,$pessoa->getNome());
        $insert->bindValue(3,$pessoa->getContato());
        $insert->bindValue(4,$pessoa->getSenha());
    }

    public function atualizar(){

    }
    public function delete(){

    }
    public function pegar(){

    } 
}