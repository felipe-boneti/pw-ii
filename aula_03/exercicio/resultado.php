<?php

    $nota1 = $_POST ["nota1"];
    $nota2 = $_POST ["nota2"];
    $nota3 = $_POST ["nota3"];
    $nota4 = $_POST ["nota4"];


    $media = ($nota1 + $nota2 + $nota3 + $nota4 ) / 4;

    if($media>=6){
        echo "<div style = 'color: blue'> Você foi aprovado, meu mugiwara! Sua nota foi $media! </div>";
        echo "<img src= 'img/luffy.gif'>";
    }else{
        echo "<div style = 'color: red'> Você foi reprovado pelo akainu! Sua nota foi $media! </div>";
        echo "<img src= 'img/akainu.gif'>";
    }


?>

32