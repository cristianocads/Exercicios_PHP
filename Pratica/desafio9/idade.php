<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prática</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <header>
        <nav >
            <a class="menu" href="/index.html">Início</a>
            <a class="menu" href="/desafio5/divisao.php">Divisão</a>
            <a class="menu" href="/desafio6/salario.php">Salário</a>
            <a class="menu" href="/desafio7/raiz.php">Raiz</a>
            <a class="menu" href="/desafio8/medias.php">Médias</a>
            <a class="menu" href="/desafio9/idade.php">Cálculo da Idade</a>
        </nav>
    </header>
   
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" min="1900">
            <label for="final">Quer saber sua idade em qual ano?</label>
            <input type="number" name="final" id="final" min="1900">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $nasc = $_GET['nasc'] ?? 0;
            $final = $_GET['final'] ?? 0;

            $hoje = date('Y');

            $idade = ($final - $nasc);
            $atual = ($hoje - $nasc);
            
        ?>

        <p>Quem nasceu em <?=$nasc?> tem <strong><?=$idade?> anos</strong> em <?=$final?>.</p>
        <br>
        <p>Esse ano, a sua idade é <?=$atual?>.</p>
            
    </section>
    <footer></footer>
    
</body>
</html>