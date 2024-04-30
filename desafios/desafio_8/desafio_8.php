<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio_oito</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $value = $_GET['valor'];
    ?>
    <main>
        <h1>Escreva um número</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Valor</label>
            <input type="number" name="valor" id="valor" pattern="[0-9]+([,\,][0-9]+)?" step="any">
            <input type="submit" value="Gerar Raízes">
        </form>
    </main>
    <section>
        <h1>Raízes</h1>
        <?php 
            echo "Número digitado: <strong>".(number_format($value, 3, ",", "."))."</strong> <br><ul><li>Raíz Quadrada: <strong>".(number_format($value**(1/2), 3, ",", "."))."</strong></li></ul><ul><li>Raíz Cúbica: <strong>".(number_format($value**(1/3), 3, ",", "."))."</strong></il></ul>"
        ?>
    </section>
</body>
</html>