<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor simples</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de moedas simples</h1>
    </header>
    <main>
        <?php
            // 1 dólar = 5,12R$
            // 1 euro = 5.47R$
            $num = $_GET["valor"] ?? "Sem número";
            $valor_dol = (($num)/5.12) ?? "0";
            $valor_eur = (($num) / 5.47) ?? "0";
            echo "<strong>R$$num BRL</strong> = <strong>$$valor_dol USD </strong>";
            print "<br><strong>R$$num BRL</strong> = <strong>€$valor_eur EUR</strong></br>"
        ?>
        <p style="font-size: 10px;"><a href="javascript:history.go(-1)">Retornar</a></p>
    </main>
</body>
</html>