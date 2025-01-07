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
           //Conversão completa com API e diversas moedas
           /*if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
            }*/

 /* Minha forma de consumir o api de cotação do dólar           
            // URL da API do Banco Central para pegar o último valor do dólar
        
            $url = "https://api.bcb.gov.br/dados/serie/bcdata.sgs.1/dados/ultimos/1?formato=csv";

            // Inicializa o cURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            // Executa a requisição
            $response = curl_exec($ch);

            // Fecha cURL
            curl_close($ch);

            // Verifica se obteve uma resposta válida
            if ($response) {
                // Imprime a resposta da API para debug
                //echo "Resposta da API: " . $response . "<br><br>";

                // A resposta vem no formato CSV. Vamos separar e pegar o valor.
                $data = explode(';', $response);
                
                // Exibe os dados que foram retornados
                //print_r($data);

                // O valor do dólar estará na segunda posição (índice 1)
                // Remove as aspas e espaços em branco ao redor da cotação
                $cotacao = trim($data[2], ' "');
                // Substitui a vírgula por ponto e converte para float
                $cotacao = (float) str_replace(',', '.', $cotacao);
                
                // Arredonda a cotação para duas casas decimais
                $cotacao = round($cotacao, 2);
            } else {
                echo "Erro ao buscar cotação do dólar.";
                exit;
            }

            // Recebe o valor em reais enviado pelo usuário
            $real = $_REQUEST['real'];
            $real = (float) $real; // Converte para float

            // Verifica se a cotação e o valor em reais são numéricos
            if (!is_numeric($cotacao) || !is_numeric($real)) {
                echo "Valor inválido para a conversão.";
                exit;
            }

            // Realiza a conversão de reais para dólares
            $dolar = $real / $cotacao;

            // Define o formato para moeda brasileira (BRL)
            $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

            // Exibe o resultado da conversão
            echo "<h1>Resultado da Conversão</h1>";
            echo "<p><br>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " reais é equivalente a <strong>" . numfmt_format_currency($padrao, $dolar, 'USD') . " dólares</strong>.</p><br>";
            echo "<p><em>Cotação do dólar: " . numfmt_format_currency($padrao, $cotacao, "BRL") . "</em></p>";
*/

//forma do Professor Gustavo Guanabara de Resolução do exercício

            $inicio = date("m-d-Y", strtotime("-5 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            // Recebe o valor em reais enviado pelo usuário
            $real = $_REQUEST['real'];

            $dolar = $real / $cotacao;

            // Define o formato para moeda brasileira (BRL)
            $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

            // Exibe o resultado da conversão
            echo "<h1>Resultado da Conversão</h1>";
            echo "<p><br>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " reais é equivalente a <strong>" . numfmt_format_currency($padrao, $dolar, 'USD') . " dólares</strong>.</p><br>";
            echo "<p><em>Cotação do dólar: " . numfmt_format_currency($padrao, $cotacao, "BRL") . "</em></p>";


        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
        <!--<p><a href="javascript:history.go(-1)">Voltar</a></p>-->

        </section>
    </main>
    <footer></footer>
    
</body>
</html>