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
        $preco = $_GET['preco'] ?? 0;
        $ajuste = $_GET['ajuste'] ?? 0;
   
   ?>
    <main>
        <h1>Reajutador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01">
            <label for="ajuste">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="ajuste" id="ajuste" min="0" step="0.01" oninput="mudaValor()">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            $final = $preco + ($preco * ($ajuste / 100));
        ?>
        
        <p>O produto que custava R$ <?=number_format($preco, 2, ',', '.')?>, com <strong><?=$ajuste?>% de aumento</strong> vai passar a custar <strong>R$ <?=number_format($final, 2, ',', '.')?></strong> a partir de agora.</p>

    </section>
    <script>
        mudaValor();

        function mudaValor() {
            p.innerText = ajuste.value;
        }
    </script>
    <footer></footer>
    
</body>
</html>