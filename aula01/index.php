<?php
    echo "<h1>ola php!</h1>";
    $nome = "Lufe";
    $escola = "SENAC";
    $ano = 2025;

    echo "Olá $nome! Bem vindo ao $escola - Turma $ano.<br>";

    $v1 = 2;
    $v2 = 3;

    echo "A soma de $v1 + $v2 = " . ($v1+$v2);
    echo"<br>";
    var_dump($nome);
    echo"<br>";
    $carros = array(
        "Palio",
        "Gol",
        "Fiesta",
        "Carro de viado"
    );
    echo"<br>";
    var_dump($carros[2]);
    echo"<br>";
    $n1= 1;
    $n2= "1";

    if($n1===$n2){
        echo"<br>Verdadeiro";
    } else{
        echo"<br>Falso";

    }