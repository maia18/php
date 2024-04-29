<!-- Antes -->

<!-- <!DOCTYPE html>
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
        //</?php 
            // $num = $_GET["numero"];
            // $num_real = intval($num);
            // $num_fraç = round($num - floor($num), 6);
            // echo "Número digitado: <strong>$num</strong> <br>Parte Real: <strong>$num_real</strong></br> <br>Parte Fracionária: <strong>$num_fraç</strong> </br>"
        ?>
        <p style="font-size: 10px;"><a href="javascript:history.go(-1)">Retornar</a></p>
    </main>
</body>
</html> -->

<!-- Depois -->
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
            $num = $_REQUEST["numero"];
            $num_real = (int) $num;
            $num_fraç = $num - $num_real;
            echo "Número digitado: <strong>$num</strong><ul><li>Parte Real: <strong>".(number_format($num_real, 0,",", "."))."</strong></li></ul><ul><li>Parte Fracionária: <strong>".(number_format($num_fraç, 
            4, ",", "."))."</strong></li></ul>"
        ?>
        <p style="font-size: 10px;"><a href="javascript:history.go(-1)">Retornar</a></p>
    </main>
</body>
</html>