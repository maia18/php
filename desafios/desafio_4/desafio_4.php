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

            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
            $dados = json_decode(file_get_contents($url), true);
            // var_dump($dados);

            $cotação = $dados["value"][0]["cotacaoCompra"];

            $num = $_GET["num"];
            $num_conv = $num / $cotação;

            echo "R$$num = US$$num_conv";
        ?>
        <p style="font-size: 10px;"><a href="javascript:history.go(-1) ">Retornar</a></p>
    </main>
</body>
</html>