<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Analisador de Números Reais</h1>
    </header>
    <main>
        <?php 
            $num = $_GET["numero"];
            $num_real = intval($num);
            $num_fraç = round($num - floor($num), 6);
            echo "Número digitado: <strong>$num</strong> <br>Parte Real: <strong>$num_real</strong></br> <br>Parte Fracionária: <strong>$num_fraç</strong> </br>"
        ?>
        <p style="font-size: 10px;"><a href="javascript:history.go(-1)">Retornar</a></p>
    </main>
</body>
</html>