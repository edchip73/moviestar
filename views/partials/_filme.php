<div class="p-2 rounded border-yellow-800 border-2 bg-yellow-900">
    <div class="flex gap-2">
        <div class="w-1/3">
        <img src="<?=$filme->imagem?>" class="w-60 rounded">
        </div>
            <div class="flex flex-col gap-1">
                    <a href="/filme?id=<?=$filme->id?>" class="font-semibold hover:underline"><?=$filme->titulo?></a>
                    <div class="text-xs italic">Diretor: <?=$filme->diretor?></div>
                    <div class="text-xs">Ano de Lançamento: <?=$filme->ano_de_lancamento?></div>
                    <div class="text-xs">Duração: <?=$filme->duracao?></div>    
                    
        <div class="text-xs italic "><?=str_repeat('⭐',$filme->nota_avaliacao)?>(<?=$filme->count_avaliacoes?> Avaliações)</div>
        </div>
    </div>
        <div class="text-sm mt-2">
                <?=$filme->descricao?>
        </div>
</div>