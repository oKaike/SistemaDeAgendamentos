<?php
// include "pessoa.php";
include "controllerPessoa.php";

class modeloPessoa{
//  public $dados = file_get_contents('../JS/script.');
// echo $dados;
 public function RequestMetodos(){
    $dados = file_get_contents('php://input');
    // $_SERVER['REQUEST_METHOD'] = "POST";

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        // Criar Usuario
        $nome = $_POST['nome'] ?? "Kaike";
        $cpf = $_POST['cpf'] ?? "12345";
        $contato = $_POST['contato'] ?? "11989196892";
        $senha = $_POST['senha'] ?? "53190";

        $pessoa = new Pessoa;
        $pessoa->setCpf($cpf);
        $pessoa->setNome($nome);
        $pessoa->setContato($contato);
        $pessoa->setSenha($senha);

        echo "Estamos usando metodo de requisição: ". $_SERVER['REQUEST_METHOD'];
    }
    else if($_SERVER['REQUEST_METHOD'] == "GET"){
        // Consulta de Usuario
        echo "Por padrão estamos usando: ". $_SERVER['REQUEST_METHOD'];
    }
    else if($_SERVER['REQUEST_METHOD'] == "PUT"){
        // Atualizar dados do usuario

    }
    else if($_SERVER['REQUEST_METHOD'] == "'DELETE'"){
        // Deletar daods do usuario
        echo "Delete selecionado";
    }}
}

$modeloPessoa = new modeloPessoa();
$modeloPessoa->RequestMetodos();
?>