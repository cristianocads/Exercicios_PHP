<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Super Globais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "Quinta", time() + 3600);

                session_start();
                $_SESSION["teste"] = "Funcionou!";

                echo "<h1>Super Global GET</h1>";
                var_dump($_GET);

                echo "<h1>Super Global POST</h1>";
                var_dump($_POST);

                echo "<h1>Super GLobal REQUEST</h1>";
                var_dump($_REQUEST);

                echo "<h1> Super Global Cookie</h1>";
                var_dump($_COOKIE);

                echo "<h1>Super Global Session</h1>";
                var_dump($_SESSION);

                echo "<h1>Super Global SERVER</h1>";
                var_dump($_SERVER);
            ?>
        </pre>
    </main>
</body>
</html>