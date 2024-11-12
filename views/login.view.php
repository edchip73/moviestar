<div class="mt-6 grid grid-cols-2 gap-2">
    <div class="border border-yellow-700 rounded">
        <h1 class="border-b border-yellow-700 text-yellow-400 font-bold px-4 py-2">Login</h1>
        <form class="p-4 space-y-4" method="POST">

        <?php if($validacoes = flash()->get('validacoes_login')): ?>
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
            <label class="text-yellow-400 mb-1">Email</label>
        <input 
            type="text" 
            name="email" 
            class="border-yellow-800 border-2 rounded-md bg-yellow-900 text-sm focus:outline-none px-2 py-1"
            placeholder="Digite seu email"
            />
        </div>

        <div class="flex flex-col">
            <label class="text-yellow-400 mb-1">Senha</label>
        <input 
            type="password" 
            name="senha" 
            class="border-yellow-800 border-2 rounded-md bg-yellow-900 text-sm focus:outline-none px-2 py-1"
            placeholder="Digite sua senha"
            />
        </div>

        <button type="submit" 
        class="border-yellow-800 bg-yellow-900 text-yellow-400 px-4 py-1 rounded-md border-2 hover:bg-yellow-700">
            Logar
        </button>
        </form>
    </div>

    <div class="border border-yellow-700 rounded">
        <h1 class="border-b border-yellow-700 text-yellow-400 font-bold px-4 py-2">Registro</h1>
        <form class="p-4 space-y-4" method="POST" action="/registrar">

     

            <?php if($validacoes = flash()->get('validacoes_registrar')): ?>
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
            <label class="text-yellow-400 mb-1">Nome</label>
        <input 
            type="text" 
            name="nome" 
            class="border-yellow-800 border-2 rounded-md bg-yellow-900 text-sm focus:outline-none px-2 py-1"
            placeholder="Digite seu nome"
            />
        </div>

        <div class="flex flex-col">
            <label class="text-yellow-400 mb-1">Email</label>
        <input 
            type="text" 
            name="email" 
            class="border-yellow-800 border-2 rounded-md bg-yellow-900 text-sm focus:outline-none px-2 py-1"
            placeholder="Digite seu email"
            />
        </div>

        <div class="flex flex-col">
            <label class="text-yellow-400 mb-1">Confirme seu Email</label>
        <input 
            type="text" 
            name="email_confirmacao" 
            class="border-yellow-800 border-2 rounded-md bg-yellow-900 text-sm focus:outline-none px-2 py-1"
            placeholder="Confirme seu email"
            />
        </div>

        <div class="flex flex-col">
            <label class="text-yellow-400 mb-1">Senha</label>
        <input 
            type="password" 
            name="senha" 
            class="border-yellow-800 border-2 rounded-md bg-yellow-900 text-sm focus:outline-none px-2 py-1"
            placeholder="Digite sua senha"
            />
        </div>
        <button type="reset" 
        class="border-yellow-800 bg-yellow-900 text-yellow-400 px-4 py-1 rounded-md border-2
               hover:bg-yellow-700">
            Cancelar
        </button>
        <button type="submit" 
        class="border-yellow-800 bg-yellow-900 text-yellow-400 px-4 py-1 rounded-md border-2
               hover:bg-yellow-700">
            Registrar
        </button>
  
        </form>
    </div>
    </div>
