<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio_nove</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $value_1 = $_GET['v1'];
        $weight_1 = $_GET['w1'];
        $value_2 = $_GET['v2'];
        $weight_2 = $_GET['w2'];
    ?>
    <main>
        <h1>Valores para cálculo das médias</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1ºValor</label>
            <input type="number" name="v1" id="v1" pattern="[0-9]+([,\,][0-9]+)?" step="any">
            <label for="w1">1ºPeso</label>
            <input type="number" name="w1" id="w1" pattern="[0-9]+([,\,][0-9]+)?" step="any">
            <label for="v2">2ºValor</label>
            <input type="number" name="v2" id="v2" pattern="[0-9]+([,\,][0-9]+)?" step="any">
            <label for="w2">2ºpeso</label>
            <input type="number" name="w2" id="w2" pattern="[0-9]+([,\,][0-9]+)?" step="any">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Médias</h1>
        <?php
            $_med = (($value_1 + $value_2)/2); 
            $_med_pond = ((($value_1*$weight_1) + ($value_2*$weight_2)) / ($weight_1 + $weight_2));
            echo "1ºValor: <strong>".(number_format($value_1, 3))."</strong><br>1ºPeso: <strong>".(number_format($weight_1, 3))."</strong><br>2ºValor: <strong>".(number_format($value_2, 3))."</strong><br>2ºPeso: <strong>".(number_format($weight_2, 3))."</strong><br><ul><li>Média Aritmética: ".(number_format($_med, 3))."</br></li><br><li>Média Ponderada: ".(number_format($_med_pond, 3))."</li></ul>"
        ?>
    </section>
</body>
</html>