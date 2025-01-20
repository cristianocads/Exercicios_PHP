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
            <a class="menu" href="/desafio3/conversor.html">Conversor de Moeda</a>
            <a class="menu" href="/desafio4/analisador.html">Analisador de Número</a>
            <a class="menu" href="desafios.html">Outros Desafios</a>
        </nav>
    </header>
    <main>
        <h1>Resultado da análise</h1>
        <p>
            <?php 
                $numero = $_REQUEST["num"] ?? 0;

                $inteira = (int) $numero;

                $fracionada = $numero - $inteira;

                

                echo "<br>Analisando o número <strong>". number_format($numero, 2, ",", ".") ."</strong> informado pelo usuário:<br><br>";
                echo "<ul><li>Parte inteira: <strong>". number_format($inteira, 0, ",", ".") ."</strong></li><br>";
                echo "<li>Parte fracionada: <strong>". number_format($fracionada, 2, ",", ".") ."</strong></li></ul><br>";

/*                Outra forma - Converter para string e separar pelo ponto decimal
                list($inteira, $fracionada) = explode('.', (string)$numero);*/

/*
// Outra forma de fazer a separação da parte inteira e fracionada
                // Parte inteira
                $parte_inteira = floor($numero);

                // Parte fracionada
                $parte_fracionada = $numero - $parte_inteira;

                // Exibir
                echo "Parte inteira: $parte_inteira\n";
                echo "Parte fracionada: $parte_fracionada\n";*/


            ?>
            <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
            <!--<p><a href="javascript:history.go(-1)">Voltar</a></p>-->
        </p>
    </main>
    
</body>

</html>