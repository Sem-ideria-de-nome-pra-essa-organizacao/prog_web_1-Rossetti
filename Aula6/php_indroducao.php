<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
</head>
<body>
    <?php 
    $nome = "Rossetti";
    $idade = 18;
    echo "hello world! ".$nome ."<br> Idade: ".$idade. "<br>";

    if($idade>=18){
        echo"<br> de maior <br><br>";
    }
    else{
        echo"<br> de menor <br><br>";
    }

    $pessoas = [
        "Ana", "Chaves", "Kiko" ];

    for($i = 0; $i < count($pessoas); $i++){
        echo "$pessoas[$i] <br>";
    }

    $idades = [
        18, 75, 65, 6, 5, 90
    ];

    for($i=0; $i < count($idades); $i++){

        if($idades[$i] >= 18){
            echo "<br>" .$idades[$i]. " de maior <br>";
        }

        else{
            echo "<br>" .$idades[$i]. " de menor <br>";
        }
    };

    $opcao = "/";
    $num1 = 3;
    $num2 = 2;
    

    switch ($opcao) {
        case '/':
            echo "<br> divisão: ".$num1 / $num2;
            break;
        
        case '*':
            echo "<br> multiplicação: ".$num1 * $num2;
            break;

        case '+':
            echo "<br> adição: ".$num1 + $num2; 
            break;
        case '-':
            echo "<br> subtração: ".$num1 - $num2;
                
        default:
            echo "deu B.O.";
            break;
    }
    ?>
</body>
</html>