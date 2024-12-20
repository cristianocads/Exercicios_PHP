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
            <a class="menu" href="/desafio3/conversor.html">Conversor de Moeda</a>
            <a class="menu" href="#exercicio1">Prática 4</a>
        </nav>
    </header>
    <main>
        <section class="container">
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $fromCurrency = $_POST['currencyFrom'];
                $toCurrency = $_POST['currencyTo'];
                $amount = floatval($_POST['amount']);

                if ($amount <= 0) {
                    echo "Digite um valor válido.";
                    exit;
                }

                // Realizar requisição para a API de conversão de moedas
                $apiUrl = "https://api.exchangerate-api.com/v4/latest/$fromCurrency";

                $response = file_get_contents($apiUrl);
                if ($response === FALSE) {
                    echo "Erro ao buscar dados da API.";
                    exit;
                }

                $data = json_decode($response, true);

                if (isset($data['rates'][$toCurrency])) {
                    $rate = $data['rates'][$toCurrency];
                    $convertedAmount = $amount * $rate;

                    echo "<h1>Resultado da Conversão</h1>";
                    echo "<p>$amount $fromCurrency é equivalente a " . number_format($convertedAmount, 2) . " $toCurrency.</p>";
                } else {
                    echo "Conversão não disponível.";
                }
            } else {
                echo "Acesso inválido.";
            }
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
        <!--<p><a href="javascript:history.go(-1)">Voltar</a></p>-->

        </section>
    </main>
    <footer></footer>
    
</body>
</html>