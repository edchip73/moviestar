<?php

if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    header('location: /meus-filmes');
    exit();
}

if(!auth())
{
    abort(403);
}

$usuario_id = auth()->id;
$titulo = $_POST['titulo'];
$diretor = $_POST['diretor'];
$descricao = $_POST['descricao'];
$ano_de_lancamento = $_POST['ano_de_lancamento'];
$duracao = $_POST['duracao'];

$validacao = Validacao::validar([
    'titulo' => ['required', 'min:3'],
    'diretor' => ['required'],
    'descricao' => ['required'],
    'ano_de_lancamento' => ['required'],
    'duracao' => ['required']
   
    
], $_POST);

if($validacao->naoPassou())
{
    header('location: /meus-filmes');
    exit();
}

$novoNome = md5(rand());
$extensao = pathinfo($_FILES['imagem']['name'],PATHINFO_EXTENSION);
$imagem = "img/$novoNome.$extensao";

move_uploaded_file($_FILES['imagem']['tmp_name'], __DIR__ . '/../public/' . $imagem);

$database->query("insert into filmes (titulo, diretor, descricao, ano_de_lancamento, duracao, usuario_id, imagem)
            values (:titulo, :diretor, :descricao, :ano_de_lancamento, :duracao, :usuario_id, :imagem)",
           params: compact('titulo', 'diretor', 'descricao', 'ano_de_lancamento', 'duracao', 'usuario_id', 'imagem')); 

flash()->push('mensagem', 'Livro cadastrado com sucesso!');      
header('location: /meus-filmes');
exit();     