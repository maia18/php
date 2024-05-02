<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio_doze</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // 1m = 60s, 1h = 3600s, 24h = 86400s , 1week =  604800s
        $seconds_ = $_GET['seconds'] ?? 0;
        const WEEK = 604800;
        const DAY = 86400;
        const HOUR = 3600;
        const MIN = 60;
    ?>
    <main>
        <h1>Calculator of time</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seconds">How many seconds do you wish for the test?</label>
            <input type="number" name="seconds" id="seconds" min="0">
            <input type="submit" value="Generate time">
        </form>
    </main>
    <section>
        <h2>Time</h2>
        <?php 
            $week = $seconds_/WEEK;
            $day =($seconds_%WEEK)/DAY;
            $hour=(($seconds_%WEEK)%DAY)/HOUR;
            $min =((($seconds_%WEEK)%DAY)%HOUR)/MIN;
            $sec =(((($seconds_%WEEK)%DAY)%HOUR)%MIN);
            echo "<p>You write a time of the: <strong>".(number_format($seconds_, 2, ",", "."))."s</strong></p><ul><li>".((((int)$week)))." weeks</li><li>".(((int)$day))." days</li><li>".(((int)$hour))." hours</li><li>".(((int)$min))." minutes</li><li>".(((int)$sec))." seconds</li></ul>";
        ?>
    </section>
</body>
</html>