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
            <a class="menu" href="/desafio5/divisao.html">Divisão</a>
            <a class="menu" href="#">#</a>
            <a class="menu" href="#">#</a>
            <a class="menu" href="#">#</a>
            <a class="menu" href="#">#</a>
        </nav>
    </header>
    <main>
        <section class="container">
        <h1>Resultado</h1>
        <p>
            <?php 
                $dividendo = $_GET["Dendo"];
                $divisor = $_GET["Dsor"];
                $quociente = intdiv($dividendo, $divisor);
                $resto = $dividendo % $divisor;

                echo "<br><p>Dividendo: <strong>$dividendo</strong></p>";
                echo "<br><p>Divisor: <strong>$divisor</strong></p>";
                echo "<br><p>Quociente: <strong>$quociente</strong></p>";
                echo "<br><p>Resto: <strong>$resto</strong></p>";

            ?>
            <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
            <!--<p><a href="javascript:history.go(-1)">Voltar</a></p>-->
        </p>
        </section>
    </main>
    <footer></footer>
    
</body>
</html>