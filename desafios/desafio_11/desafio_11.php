<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio_onze</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $price_ = $_GET['price'];
        $adjust_ = $_GET['adjust'];
    ?>
    <main>
        <h1>Digit the price of your product</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="price">Price of product</label>
            <input type="number" name="price" id="price" min="0.10" pattern="[0-9]+([,\,][0-9]+)?" step="0.01">
            <label for="adjust">Adjust (<strong><span id="porcent">?</span>%</strong>)</label>
            <input type="range" name="adjust" id="adjust" min="0" max="100" step="1" oninput="Change_value()">
            <input type="submit" value="New Value">
        </form>
    </main>
    <section>
        <h2>New Value of product</h2>
        <?php
        $default_ = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "New price after the adjust: <strong>".(numfmt_format_currency($default_, ((($adjust_*$price_)/100)+$price_), "BRL"))."</strong>"
        ?>
    </section>
    <script>
        Change_value();
        // Automatic Declarations
        function Change_value(){
            porcent.innerText = adjust.value
        }
    </script>
</body>
</html>