<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Sorteador de números</h1>
    </header>
    <main>
        <?php 
            $min = $_GET["num_min"];
            $max = $_GET["num_max"];
            $num = rand($min, $max);
            echo "O número escolhido entre <strong>$min</strong> e <strong>$max</strong> foi <strong>$num</strong>";
        ?>
        <input type="button" value="Gerar Valor" onclick="window.location.reload()">
        <p style="font-size: 10px;"><a href="javascript:history.go(-1)">Retornar</a></p>
    </main>
</body>
</html>