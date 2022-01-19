<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAYS EN PHP</title>
</head>
<body>
    <h3>Definición de Arrays en PHP</h3>

    <?php
    //Array indexado
    $amigos=array("Antón","Rosalía","Xoán");
    echo "O terceiro amigo é: " . $amigos[2]."<br/>";
    
    //Array asociativo
    $dnisAmigos=array("Antón"=>"12345678X","Rosalía"=>"11112222X","Xoan"=>"99997777X");
    echo "O DNI de Rosalía é: " . $dnisAmigos['Rosalía']."<br/>";

    //Array de dúas dimensións
    $cochesAmigos = array
    (
    "Antón"=>array("Fiat 500","Audi A3","Peugeot 208"),
    "Rosalía"=>array("Audi TT"),
    "Xoan"=>array("Jaguar XF","BMW 520d","Seat Ibiza")    
    );
    ?>
</body>
</html>