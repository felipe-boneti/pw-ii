<html>
    <head>
        <meta charset="UTF-8">
        <title>Operadores</title>

        <style>
            .div1{
                color: blue;
            }

            .div2{
                color: red;
            }

            .div3{
                color: green;
            }
        </style>

    </head>

    <body>
        
        <?php
            $nome = "João";
            $idade = 48;
            $salario = 4000;

            $aumento = 200;

            echo "<p>";

            echo "<spam class=\"div1\">Nome: $nome </spam>";
            echo "<br>";
            echo "<spam class=\"div2\">Idade: $idade </spam>";
            echo "<br>";
            echo "<spam class=\"div3\">Salario: R$ " . ($salario+$aumento) . " </spam>";

            echo "</p>"
        ?>
        
    </body>
</html>