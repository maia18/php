<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "SEGUNDA",time()+3600);
                session_start();
                $_SESSION["Teste"] = "Funcionou!";
                echo "<h1>Super Global GET</h1>";
                var_dump($_GET);
                echo "<h1>Super Global POST</h1>";
                var_dump($_POST);
                echo "<h1>Super Global REQUEST</h1>";
                var_dump($_REQUEST);
                echo "<h1>Super Global COOKIE</h1>";
                var_dump($_COOKIE);
                echo "<h1>Super Global SESSION</h1>";
                var_dump($_SESSION);
                echo "<h1>Super Global ENV</h1>";
                var_dump($_ENV);
                echo "<h1>Super Global SERVER</h1>";
                var_dump($_SERVER);
                echo "<h1>Super Global GLOBALS</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>