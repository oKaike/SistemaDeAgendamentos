<?php
class Pessoa{
    private $nome;
    private $cpf;
    private $contato;
    private $senha;

    public function getNome(){
        return $this->nome;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function getContato(){
        return $this->contato;
    }
    public function getSenha(){
        return $this->senha;
    }
//----------------------------
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    public function setContato($contato){
        $this->contato = $contato;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }
}
?>