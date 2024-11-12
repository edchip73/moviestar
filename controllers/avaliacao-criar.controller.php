<?php

if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    header('location: /');
    exit();
}

$usuario_id = auth()->id;
$filme_id = $_POST['filme_id'];
$avaliacao = $_POST['avaliacao'];
$nota = $_POST['nota'];

$validacao = Validacao::validar([
    'avaliacao' => ['required'],
    'nota' => ['required']
    
], $_POST);

if($validacao->naoPassou())
{
    header('location: /filme?id=' . $filme_id);
    exit();
}

$database->query("
    insert into avaliacoes (usuario_id, filme_id, avaliacao, nota)
    values (:usuario_id, :filme_id, :avaliacao, :nota);
    ", params: compact('usuario_id', 'filme_id', 'avaliacao', 'nota'));

flash()->push('mensagem', 'Avaliação criada com Sucesso!');

header('location: /filme?id=' . $filme_id);
exit();