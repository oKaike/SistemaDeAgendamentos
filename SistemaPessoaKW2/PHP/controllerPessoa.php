<?php
require_once "session.php";
require_once "conexao.php";
require_once "modeloPessoa.php";
require_once "pessoa.php";
class controllerPessoa{
    public function inserir(){
        $conn = new conexao;
        $smt = $conn::bd();
        
        $pessoa = new Pessoa; 
        echo $pessoa->getCpf();

        $sql3 = "select cpf from pessoa where cpf=?";
        $selecionarCPF = $smt->prepare($sql3);
        $selecionarCPF->bindValue(1,$_POST['cpf']);
        $selecionarCPF->execute();
        $valCpfExiste = $selecionarCPF->fetchAll(PDO::FETCH_ASSOC) < 1;

        if($valCpfExiste){
        $sql = "insert into pessoa(cpf, nome, contato, senha) value(?, ?, ?, ?)";

        $insert = $smt->prepare($sql);

        $insert->bindValue(1,$_POST['cpf']);
        $insert->bindValue(2,$_POST['nome']);
        $insert->bindValue(3,$_POST['contato']);
        $insert->bindValue(4,$_POST['senha']);

        if($insert->execute()){
            $sql2 = "select id from pessoa where nome = ?";
            
            $PegarID = $smt->prepare($sql2);
            $PegarID ->bindValue(1,$_POST["cpf"]);
            $PegarID->execute();
            $dados = $PegarID->fetchAll(PDO::FETCH_ASSOC);

            var_dump($dados);
            echo $dados[0]["id"];
            header("Location: http://localhost/SistemaDeAgendamentos/SistemaPessoaKW2/HTML/agenda.html");
        }
        else{
            echo "Houve um erro e não conseguimos pegar o valor do ID";
        }
        }
        else{
            echo "CPF já cadastro";
        }
    }

    public function atualizar(){

    }
    public function delete(){

    }
    public function pegar(){
        $conn = new conexao;
        $smt = $conn::bd();
        $sql = "select * pessoa where cpf=? and senha=?";

        $pegarDados = $smt->prepare($sql);
        $pegarDados->bindValue(1, $_GET['cpf']);
        $pegarDados->bindValue(2, $_GET['senha']);
        
        if($pegarDados->execute()){
        $InformacoesDoUsuarioExistem = $pegarDados->fetch_column() > 1;
        $Dados = $pegarDados->fetchAll(PDO::FETCH_ASSOC);
        
        if($InformacoesDoUsuarioExistem){

        $_SESSION['nome'] = $Dados[0]['nome'];
        $_SESSION['cpf'] = $Dados[0]['cpf'];
        $_SESSION['senha'] = $Dados[0]['senha'];
        $_SESSION['contato'] = $Dados[0]['contato'];
        echo "Conectado com sucesso, seja bem vindo!!!";

            }
        else{
            echo "CPF ou Senha invalidos, cheque se algum de ambos foi escrito incorretamente";
            }
        }
        else{
            echo "Erro validar dados";
        }
    } 
}