<?php
require_once "pessoa.php";
require_once "controllerPessoa.php";

class modeloPessoa{
//  public $dados = file_get_contents('../JS/script.');
// echo $dados;
 public function RequestMetodos(){
    $dados = json_decode(file_get_contents('php://input'), true);
    
    $controle = new controllerPessoa;
    // $_SERVER['REQUEST_METHOD'] = "POST";

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        // Criar Usuario
        $nome = $_POST['nome'] = $dados['Nome'];
        $cpf = $_POST['cpf'] = $dados['Cpf'] ;
        $contato = $_POST['contato'] = $dados['Contato'];
        $senha = $_POST['senha'] = $dados['Senha'];
        
        echo $cpf. "<br>";

        $pessoa = new Pessoa;
        $pessoa->setCpf($cpf);
        $pessoa->setNome($nome);
        $pessoa->setContato($contato);
        $pessoa->setSenha($senha);

        echo "Estamos usando metodo de requisição: ". $_SERVER['REQUEST_METHOD'];
        $controle->inserir();
    }
    else if($_SERVER['REQUEST_METHOD'] == "GET"){
        // Consulta de Usuario
        $cpf = $_GET['cpf'];
        $senha = $_GET['senha'];

        $pessoa = new Pessoa;
        $pessoa->setCpf($cpf);
        $pessoa->setSenha($senha);

        echo "Por padrão estamos usando: ". $_SERVER['REQUEST_METHOD'];
        $controle->pegar();
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