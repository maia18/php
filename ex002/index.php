<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <h1>Exemplo de php</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); //GMT-3
        echo "Hoje é dia ". date("d/M/Y");
        echo "E a hora atual é " . date('g:i:s T');
    ?>
</body>
</html>