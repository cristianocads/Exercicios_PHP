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
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado da Analise</h2>
        <p>
            <?php 
                $quad = $numero ** (1 / 2); //sqrt($numero)
                $cubo = $numero ** (1 / 3); //pow($numero, 1 / 3)
                
                echo "Analisando o <strong>número " . $numero . "</strong>, temos: \n";

                echo "<br><ul><li>A sua raiz quadrada é <strong>" . number_format($quad, 3, ',', '.') . "</strong></li>";
                echo "<li>A sua raiz cúbica é <strong>" . number_format($cubo, 3, ',', '.') . "</strong></li></ul>";

            ?>
        </p>
    </section>
    <footer></footer>
    
</body>
</html>