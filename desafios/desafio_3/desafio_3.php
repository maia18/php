<!-- Antes -->

<!-- <!DOCTYPE html>
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
        //</?php
            // 1 dólar = 5,12R$
            // 1 euro = 5.47R$
        //     $num = $_GET["valor"] ?? "Sem número";
        //     $valor_dol = (($num)/5.12) ?? "0";
        //     $valor_eur = (($num) / 5.47) ?? "0";
        //     echo "<strong>R$$num BRL</strong> = <strong>$$valor_dol USD </strong>";
        //     print "<br><strong>R$$num BRL</strong> = <strong>€$valor_eur EUR</strong></br>"
        // ?>
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
            // echo "<strong>R$".(number_format($num, 2, ",", "."))."</strong> = <strong>$".(number_format($valor_dol, 2, ",", "."))."</strong>";
            // print "<br><strong>R$".(number_format($num, 2, ",", "."))."</strong> = <strong>€".(number_format($valor_eur, 2, ",", "."))."</strong></br>";
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "<strong>". numfmt_format_currency($padrao, $num, "BRL")." = ". numfmt_format_currency($padrao, $valor_dol, "USD")."</strong><strong><br>".numfmt_format_currency($padrao, $num, "BRL")."</strong> = <strong>".numfmt_format_currency($padrao, $valor_eur, "EUR")."</strong></br>"


        ?>
        <p style="font-size: 10px;"><a href="javascript:history.go(-1)">Retornar</a></p>
    </main>
</body>
</html>