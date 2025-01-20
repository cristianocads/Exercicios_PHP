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
            <a class="menu" href="/desafio10/preco.php">Ajuste de Preço</a>
        </nav>
    </header>
    <?php 
            $numero = $_GET['numero'] ?? 0;
        ?>
    <main>
        <h1>Médias Aritiméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num1">1º Valor</label>
            <input type="number" name="num1" id="num1">
            <label for="peso1">1º Peso</label>
            <input type="number" name="peso1" id="peso1">
            <label for="num2">2º Valor</label>
            <input type="number" name="num2" id="num2">
            <label for="peso2">2º Peso</label>
            <input type="number" name="peso2" id="peso2">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            $num1 = $_GET['num1'] ?? 0;
            $num2 = $_GET['num2'] ?? 0;

            $peso1 = $_GET['peso1'] ?? 1;
            $peso2 = $_GET['peso2'] ?? 1;

            $simples = ($num1 + $num2)/2;
            $pond = ($num1*$peso1 + $num2*$peso2)/($peso1 + $peso2);
        ?>

        <p>Analisando os valores <?=$num1?> e <?=$num2?>:</p>
        <br>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> é: <?=number_format($simples, 2, ',', '.')?></li>
            <li>A <strong>Média Aritmética Ponderada</strong> é: <?=number_format($pond, 2, ',', '.')?></li>
        </ul>
            
    </section>
    <footer></footer>
    
</body>
</html>