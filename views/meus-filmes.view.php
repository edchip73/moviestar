<h1 class="mt-6 font-bold text-lg">Meus Filmes</h1>

<div class="grid grid-cols-4 gap-4">
    <div class="col-span-3 flex flex-col gap-4">

    <?php foreach($filmes as $filme)
    {
        require 'partials/_filme.php';
    }?>
         
    </div>
<div>

<div class="border border-yellow-700 rounded">
        <h1 class="border-b border-yellow-700 text-yellow-400 font-bold px-4 py-2">Cadastre um novo Filme</h1>
        <form class="p-4 space-y-4" method="post" action="/filme-criar" enctype="multipart/form-data">

        <?php if($validacoes = flash()->get('validacoes')): ?>
                <div class="border-red-800 bg-red-900 text-red-400 px-4 py-1 rounded-md border-2 text-sm font-bold">
                    <ul>
                        <li>Observe os erros abaixo:</li>

                        <?php foreach($validacoes as $validacao): ?>
                        
                            <li><?= $validacao ?></li>

                            <?php endforeach; ?>
                        

                    </ul>
                    <?=$mensagem?>
                </div>
            <?php endif; ?> 

            <div class="flex flex-col">
        <label class="text-yellow-400 mb-1">imagem</label>
        <input type="file" name="imagem" class="border-yellow-800 border-2 rounded-md bg-yellow-900 text-sm focus:outline-none px-2 py-1" />
        </div>

            
        <div class="flex flex-col">
        <label class="text-yellow-400 mb-1">Título</label>
        <input type="text" name="titulo" class="border-yellow-800 border-2 rounded-md bg-yellow-900 text-sm focus:outline-none px-2 py-1" />
        </div>

        <div class="flex flex-col">
        <label class="text-yellow-400 mb-1">Diretor</label>
        <input type="text" name="diretor" class="border-yellow-800 border-2 rounded-md bg-yellow-900 text-sm focus:outline-none px-2 py-1" />
        </div>

        <div class="flex flex-col">
        <label class="text-yellow-400 mb-1">Descrição</label>
        <textarea type="text" name="descricao" class="border-yellow-800 border-2 rounded-md bg-yellow-900 text-sm focus:outline-none px-2 py-1"></textarea>
        </div>

        <div class="flex flex-col">
            <label class="text-yellow-400 mb-1">Ano de Lançamento</label>
        <select name="ano_de_lancamento" 
            class="border-yellow-800 border-2 rounded-md bg-yellow-900 text-sm focus:outline-none px-2 py-1">
            
            <?php foreach(range(1800, date('Y')) as $ano):?>
            
                <option value="<?=$ano?>"><?=$ano?></option>
            
            <?php endforeach; ?>
         
            </select>
        </div>

        <div class="flex flex-col">
        <label class="text-yellow-400 mb-1">Duração</label>
        <input type="text" name="duracao" class="border-yellow-800 border-2 rounded-md bg-yellow-900 text-sm focus:outline-none px-2 py-1" />
        </div>

        <button type="submit" 
        class="border-yellow-800 bg-yellow-900 text-yellow-400 px-4 py-1 rounded-md border-2 hover:bg-yellow-700">
            Salvar
        </button>
        </form>
    </div>


</div>
    
</div>    
