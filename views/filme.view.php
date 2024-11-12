
<?=$filme->titulo?>

<?php require 'partials/_filme.php'; ?>

<h2>Avaliações</h2>
<div class="grid grid-cols-4 gap-4">
    <div class="col-span-3 gap-4 grid">

    <?php foreach($avaliacoes as $avaliacao): ?>
        <div class="border border-yellow-700 rounded p-2">
            <?=$avaliacao->avaliacao?>

            <?php $nota = str_repeat('⭐', $avaliacao->nota); ?>

            <?=$nota?>

        </div>

    <?php endforeach; ?>

    </div>
    <div>

    <?php if(auth()): ?>

    <div class="border border-yellow-700 rounded">
        <h1 class="border-b border-yellow-700 text-yellow-400 font-bold px-4 py-2">Me conte o que achou!</h1>
        <form class="p-4 space-y-4" method="POST" action="/avaliacao-criar">

        <?php if($validacoes = flash()->get('validacoes')): ?>
                <div class="border-red-800 bg-red-900 text-white-400 px-4 py-1 rounded-md border-2 text-sm">
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
        <input type="hidden" name="filme_id" value="<?=$filme->id?>" />    
            <label class="text-yellow-400 mb-1">Avaliação</label>
        <textarea type="text" name="avaliacao" class="border-yellow-800 border-2 rounded-md bg-yellow-900 text-sm focus:outline-none px-2 py-1"></textarea>
        </div>

        <div class="flex flex-col">
            <label class="text-yellow-400 mb-1">Nota</label>
        <select name="nota" 
            class="border-yellow-800 border-2 rounded-md bg-yellow-900 text-sm focus:outline-none px-2 py-1">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            </select>
        </div>

        <button type="submit" 
        class="border-yellow-800 bg-yellow-900 text-yellow-400 px-4 py-1 rounded-md border-2 hover:bg-yellow-700">
            Salvar
        </button>
        </form>
    </div>
    <?php endif; ?>
    </div>

</div>