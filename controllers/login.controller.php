<?php

//dd(password_hash('1234567**', PASSWORD_BCRYPT));

//1 Receber o formulário com email e senha
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $validacao = Validacao::validar([
        'nome' => 'required',
        'email' => ['required', 'email'],
        'senha' => ['required']
    ], $_POST);

    if($validacao->naoPassou('login'))
    {
        header('location: /login');
        exit();
    }

//2 Fazer uma consulta no banco de dados com email e senha
$usuario = $database->query (
    query: "select * from usuarios where email = :email",
    class: Usuario::class,
    params: compact ('email')

)->fetch();

if($usuario)
{

if(! password_verify($_POST['senha'], $usuario->senha))
{
    flash()->push('validacoes_login', ['Usuário ou senha inválidos!']);
    header('location: /login');
    exit();
}
//3 Se existir, nós vamos adicionar na sessão que o usuário está autenticando
$_SESSION['auth'] = $usuario;
flash()->push('mensagem','Seja bem vindo ' . $usuario->nome . '!');
header('location: /');
exit();
}
}


view('login');