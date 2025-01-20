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
            <a class="menu" href="#">#</a>
        </nav>
    </header>
    <?php 
            $dividendo = $_GET['Dendo'] ?? 0;
            $divisor = $_GET['Dsor'] ?? 1;
        ?>
    <main>
        <h1>Anatomia da Divisão</h1>
        <form action="divisao.php" method="get">
            <label for="Dendo">Dividendo</label>
            <input type="number" name="Dendo" id="Dendo" value="<?=$dividendo?>">
            <label for="Dsor">Divisor</label>
            <input type="number" name="Dsor" id="Dsor" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        
        <h2>Estrutura da divisão</h2>
        <p>
            <?php 
                
                if ($divisor == 0) {
                    echo "<p style='color: red;'>Erro: O divisor não pode ser zero.</p>";
                } else {
                $quociente = intdiv($dividendo, $divisor);
                $resto = $dividendo % $divisor;

                echo "<ul><li>Dividendo: <strong>$dividendo</strong></li>";
                echo "<li>Divisor: <strong>$divisor</strong></li>";
                echo "<li>Quociente: <strong>$quociente</strong></li>";
                echo "<li>Resto: <strong>$resto</strong></li></ul>";

                }
            ?>
        </p>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$quociente?></td>
                <td><?=$resto?></td>
            </tr>
        </table>
    </section>
    <footer></footer>
    
</body>
</html>