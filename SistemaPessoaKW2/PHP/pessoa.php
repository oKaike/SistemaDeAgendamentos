<?php
class Pessoa{
    private $nome;
    private $cpf;
    private $contato;
    private $senha;

    public function getNome(){
        return $nome;
    }
    public function getCpf(){
        return $cpf;
    }
    public function getContato(){
        return $contato;
    }
    public function getSenha(){
        return $senha;
    }
//----------------------------
    public function setNome($nome){
        $nome = $this->nome;
    }
    public function setCpf($cpf){
        $cpf = $this->cpf;
    }
    public function setContato($contato){
        $contato = $this->contato;
    }
    public function setSenha($senha){
        $senha = $this->senha;
    }
}
?>