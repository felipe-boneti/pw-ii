<?php

    $nome = $_POST['txNome']; 
    $idade = $_POST['txIdade'];
    $verificacao ="";

    if($idade<=10){
        $verificacao = "Criança e menor de idade";
    }
    else if($idade>10 and $idade<=17){
        $verificacao = "Menor de idade";
    }
    if($idade>17){
        $verificacao = "Maior de idade";
    }

    echo "Seu nome é $nome, Você tem $idade anos e é $verificacao";
  
?>