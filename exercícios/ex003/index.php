<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // $num = 0x1A;
        // echo "O número digitado foi $num";

        // $v = "Kaue";
        // var_dump($v);

        // $num = (int) 3e2; //3*10^2 // Coerção
        // // echo "O número é: $num"
        // var_dump($num) // ---> Saída ( sem coerção ): float(300)

        // $num = (float) "950";
        // var_dump($num);

        // $casado = false;
        // echo "O valor para casado é $casado"; // Saída: O valor para casado é
        // var_dump($casado) // Saída: bool(false)

        // $vet = [1, 2, 3, 4, 5, 6];
        // echo "O vetor é $vet" // Saída: Warning: Array to string conversion in C:\xampp\htdocs\Php\PHP\ex003\index.php on line 29
        // var_dump($vet) // Saóda: array(6) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) [5]=> int(6) }

        // class Pessoa {
        //     private string $nome;
        // }
        // $p = new Pessoa;
        // var_dump($p) // Saída: object(Pessoa)#1 (0) { ["nome":"Pessoa":private]=> uninitialized(string) }
    ?>
</body>
</html>