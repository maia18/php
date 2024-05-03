<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio_treze</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 60px;
            margin: 5px;
        }
        p#value_remaining {
            text-align: center;
            margin: 10px;
        }
    </style>
</head>
<body>
    <?php 
        $value_ = $_GET['value']; $remaining_ = $value_;
        $notes_100 = floor($remaining_/100); $remaining_ %= 100;
        $notes_50 = floor($remaining_/50); $remaining_ %= 50;
        $notes_20 = floor($remaining_/20); $remaining_ %= 20;
        $notes_10 = floor($remaining_/10); $remaining_ %= 10;
        $notes_5 = floor($remaining_/5); $remaining_ %= 5;
        $default_ = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Automated Teller Machine(ATM)</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="value">Digit a Value(only integer numbers!)<sup>*</sup>: </label>
            <input type="number" name="value" id="value" min="0">
            <p>There are only notes of R$100, R$50, R$20, R$10 and R$5<sup>*</sup></p>
            <input type="submit" value="Generate">
        </form>
    </main>
    <section>
        <h2>Withdraw of <?="".(numfmt_format_currency($default_, $value_, "BRL")).""?></h2>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="100-reais.jpg" class="nota"><?=".($notes_100)."?></li>
            <li><img src="imagens/50-reais.jpg" alt="50-reais.jpg" class="nota"><?=".($notes_50)."?></li>
            <li><img src="imagens/20-reais.jpg" alt="20-reais.jpg" class="nota"><?=".($notes_20)."?></li>
            <li><img src="imagens/10-reais.jpg" alt="10-reais.jpg" class="nota"><?=".($notes_10)."?></li>
            <li><img src="imagens/5-reais.jpg" alt="5-reais.jpg" class="nota"><?=".($notes_5)."?></li>
        </ul>
        <p id="value_remaining"><?="<strong>".(numfmt_format_currency($default_, $remaining_, "BRL"))." remaining to withdraw...</strong>"?></p>
    </section>
</body>
</html>