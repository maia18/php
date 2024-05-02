<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio_sete</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salary_ = $_POST['salary'] ?? 1;
        $salary_atually = 1412; 
        $_default = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>How much is your salary?</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="salary">Digit your Salary (R$)</label>
            <input type="number" name="salary" id="salary" min="0" pattern="[0-9]+([,\,][0-9]+)?" step="any">
            <input type="submit" value="Result">
            <p>Knowing it that the minimum salary is <strong><?=numfmt_format_currency($_default, $salary_atually, "BRL")?></strong></p>
        </form>
    </main>
    <section>
        <h2>Result</h2>
        <?php 
            if ($salary_ <= $salary_atually){
                echo "Salary: <strong>".(numfmt_format_currency($_default, $salary_, "BRL"))."</strong><br><br>Your salary is equivalent to <strong>".(number_format(($salary_/$salary_atually), 3, ",", "."))." minimum salarys</strong>";
            } else {
                echo "Salary: <strong>".(numfmt_format_currency($_default, $salary_, "BRL"))."</strong><br><br>Your salary is equivalent to <strong>".(intdiv($salary_,$salary_atually))." minimum salarys</strong> + ".(numfmt_format_currency($_default, ($salary_%$salary_atually), "BRL"))."";   
            }
        ?>
    </section>
</body>
</html>