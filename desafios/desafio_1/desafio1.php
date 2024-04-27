<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1ºDesafio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
            $num = $_GET['numero'];
            $num_su = $num + 1;
            $num_antec = $num - 1;
            echo "O sucessor e antecessor de <strong>$num</strong> são, respectivamente, <strong>$num_su</strong> e <strong>$num_antec</strong>";
        ?>
        <p style="font-size: 10px;"><a href="Javascript:history.go(-1)">Retornar</a></p>
    </main>
</body>
</html>