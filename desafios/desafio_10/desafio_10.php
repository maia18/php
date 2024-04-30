<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio_dez</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $year_old = $_GET['year_old'] ?? 0;
        $year_des = $_GET['year_des'] ?? 0;
        $year_att = date('Y');
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="year_old">Year of birth</label>
            <input type="number" name="year_old" id="year_old" pattern=".{4}">
            <label for="year_des">Year that you wish know your age ( year actually: <?=$year_att?> )</label>
            <input type="number" name="year_des" id="year_des" pattern=".{4}">
            <input type="submit" value="Show Age">
        </form>
    </main>
    <section>
            <?php 
                if($year_des == $year_att) {
                    $age = $year_att - $year_old;
                    echo "Age: <strong>$age</strong>";
                }else if($year_des < $year_old){
                    user_error("<strong>($year_des < $year_old)</strong>");
                }else{
                    $age = $year_des - $year_old;
                    echo "Age: <strong>$age</strong>";
                }
            ?>
    </section>
</body>
</html>