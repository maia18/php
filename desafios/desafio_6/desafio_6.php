<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio_seis</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividend_ = $_GET['div1'] ?? 0;
        $divider_ = $_GET['div2'] ?? 1;
    ?>
    <main>
        <h1>Digit some value</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="div1">Dividend</label>
            <input type="number" name="div1" id="div1" min="0">
            <label for="div2">Divider</label>
            <input type="number" name="div2" id="div2" min="1">
            <input type="submit" value="Calcule">
        </form>
    </main>
    <section>
        <h2>Division</h2>
        <table class="divisao">
            <tr>
                <td><?=$dividend_?></td>
                <td><?=$divider_?></td>
            </tr>
            <tr>
                <td><?=($dividend_%$divider_)?></td>
                <td><?=(intdiv($dividend_, $divider_))?></td>
            </tr>
        </table>
    </section>
</body>
</html>