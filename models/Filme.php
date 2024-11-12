<?php

class Filme 
{
    public $id;
    public $titulo;
    public $diretor;
    public $descricao;
    public $ano_de_lancamento;
    public $duracao;
    public $usuario_id;
    public $imagem;
    public $nota_avaliacao;
    public $count_avaliacoes;

    public function query($where, $params)
    {
        $database = new Database(config('database'));

        return $database->query("

    select

        l.id, l.titulo, l.diretor, l.descricao, l.ano_de_lancamento, l.duracao, l.imagem 
        , ifnull(round(sum(a.nota) / 5.0), 0) as nota_avaliacao
        , ifnull(count(a.id), 0) as count_avaliacoes

    from

    filmes l

    left join avaliacoes a on a.filme_id = l.id

    where $where

    group by l.id, l.titulo, l.diretor, l.descricao, l.ano_de_lancamento, l.duracao, l.imagem
    
    ", self::class, $params);

    }

    public static function get($id)
    {
        return (new self)->query('l.id = :id',['id' => $id])->fetch();
    }

    public static function all($filtro = '')
    {
        return (new self)->query('titulo like :filtro', ['filtro' => "%$filtro%"])->fetchAll();
    }

    public static function meus($usuario_id)
    {
        return (new self)->query('l.usuario_id = :usuario_id', ['usuario_id' => $usuario_id])->fetchAll();

    }
}