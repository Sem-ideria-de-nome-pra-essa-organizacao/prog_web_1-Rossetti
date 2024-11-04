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
    echo "hello world! ".$nome ."<br> Idade: ".$idade;

    if($idade>=18){
        echo"<br> de maior <br>";
    }
    else{
        echo"<br> de menor";
    }

    $pessoas = [
        "Ana", "Chaves", "Kiko" ];

    for($i = 0; $i < count($pessoas); $i++){
        echo $pessoas[$i];
    }
    ?>
</body>
</html>