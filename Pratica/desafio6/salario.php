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
            $salario = $_GET['salario'] ?? 0;
        ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$ 1.518,00</strong></p>
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        
        <h2>Resultado da Analise</h2>
        <p>
            <?php 
                $min = 10.10;
                $quociente = floor($salario / $min);
                $resto = $salario - ($quociente * $min);

                echo "Quem recebe um salário de <strong>R$ " . number_format($salario, 2, ',', '.') . "</strong><br> ganha <strong>$quociente salários mínimos</strong> + R$ " .number_format($resto, 2, ',', '.');
            ?>
        </p>
    </section>
    <footer></footer>
    
</body>
</html>