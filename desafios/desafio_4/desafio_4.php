<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor 2.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor 2.0</h1>
    </header>
    <main>
        <?php
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'04-20-2024\'&@dataFinalCotacao=\'04-27-2024\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
            $dados = json_decode(file_get_contents($url, true));
            var_dump($dados);


            $num = $_GET["valor"];



        ?>
        <p style="font-size: 10px;"><a href="javascript:history.go(-1) ">Retornar</a></p>
    </main>
</body>
</html>