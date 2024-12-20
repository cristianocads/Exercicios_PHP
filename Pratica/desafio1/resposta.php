<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <header>
        <nav >
            <a class="menu" href="/index.html">Início</a>
            <a class="menu" href="/desafio1/sucessor.html">Sucessor</a>
            <a class="menu" href="/desafio2/sorteador.html">Sorteador</a>
            <a class="menu" href="#exercicio1">Prática 3</a>
            <a class="menu" href="#exercicio1">Prática 4</a>
        </nav>
    </header>
    <main>
        <h1>Resultado</h1>
        <p>
            <?php 
                $n = $_REQUEST["num"] ?? 0;
                $a = $n - 1;
                $s = $n + 1;
                echo "<br>O número escolhido foi: <strong>$n</strong>";
                echo "<br>O número <em>antecessor</em> é: <strong>$a</strong>";
                echo "<br>O número <em>sucessor</em> é: <strong>$s</strong></br></br>";

            ?>
            <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
            <!--<p><a href="javascript:history.go(-1)">Voltar</a></p>-->
        </p>
    </main>
    
</body>

</html>