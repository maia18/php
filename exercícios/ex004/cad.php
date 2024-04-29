<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $name = $_GET["nome"] ?? "Sem nome";
            $last_name = $_GET["sobrenome"] ?? "Sem sobrenome";
            echo "É um prazer te conhecer, <strong>$name $last_name</strong>!";
        ?>
        <p style="font-size:12px;"><a href="javascript:history.go(-1)">Voltar à página anterior</a></p>
    </main>
</body>
</html>