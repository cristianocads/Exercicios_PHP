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
            <a class="menu" href="/desafio1/sucessor.html">Sucessor</a>
            <a class="menu" href="/desafio2/sorteador.html">Sorteador</a>
            <a class="menu" href="#exercicio1">Prática 3</a>
            <a class="menu" href="#exercicio1">Prática 4</a>
        </nav>
    </header>
    <main>
        <section class="container">
        <h1>Resultado</h1>
        <p>
            <?php 
                $min = $_REQUEST["min"];
                $max = $_REQUEST["max"];
                $num = mt_rand("$min", "$max");

                echo "<br>Gerando um número aleatório entre $min e $max";
                echo "<br><p>O número gerado foi: <strong>$num</strong></p>";

            ?>
            <button onclick="javascript:document.location.reload()">&#x1F504 Gerar novamente</button>
            <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
            <!--<p><a href="javascript:history.go(-1)">Voltar</a></p>-->
        </p>
        </section>
    </main>
    <footer></footer>
    
</body>
</html>