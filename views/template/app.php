<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Star</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-yellow-950 text-yellow-200">
    <header class="bg-yellow-900">
        <nav class="mx-auto max-w-screen-lg flex justify-between py-4">
            <div class="font-bold text-xl tracking-wide">Movie Star</div>
            <ul class="flex space-x-4 font-bold">
                <li><a href="/" class="text-lime-500">Explorar</a></li>
                <?php if (auth()): ?>
                <li><a href="/meus-filmes" class="hover:underline">Meus Filmes</a></li>
                <?php endif; ?>   
            </ul>
            <ul>
                <?php if (auth()): ?>
                    <li><a href="/logout" class="hover:underline">Oi, <?=auth()->nome?></a></li>
                <?php else: ?>
                    <li><a href="/login" class="hover:underline">Fazer Login</a></li>
                <?php endif; ?>        
            </ul>
        </nav>
    </header>
   
    <main class="mx-auto max-w-screen-lg space-y-6">
    <?php if($mensagem = flash()->get('mensagem')): ?>

        <div class="border-green-800 bg-green-900 text-white-400 px-4 py-1 rounded-md border-2 text-sm">
            <?=$mensagem?>
        </div>

    <?php endif; ?>   
    <?php require "../views/{$view}.view.php";?>
    </main>
</body>
</html>