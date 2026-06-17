function funcCadastrar(){
    let nome = document.getElementById('nome').value;
    let cpf = document.getElementById('cpf').value;
    let contato = document.getElementById('contato').value;
    let senha = document.getElementById('senha').value;

    document.querySelector('p').innerHTML = nome;

    fetch('https://localhost/SistemaDeAgendamentos/PHP/modeloPessoa.php',{
        method: "POST",
        headers:{
            'Content-Type': 'application/json',
        },
        body:JSON.stringify({
            Nome : nome,
            cpf : cpf,
            contato : contato,
            senha : senha
        }),
    })
    .then(response => response.json())
    .then(data =>{JSON.stringify({
        Logado : true,
        Nome : data.nome
    })} )

}