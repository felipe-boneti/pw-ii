<html>
    <head>
        <meta charset="utf-8">
        <title>Contato - Atividade avaliativa</title>
        <link rel="stylesheet" href="css/geral.css">
    </head>
    <body>
        <?php include('menu.php') ?>

        <div class="titulo">Entre em contato conosco:</div>
        
        <form method="POST" action="res_contato.php">
            <label for="nome">Seu nome:</label><br>
            <input type="text" id="nome" name="nome" required>
            <br>
            <label for="nome">Sua mensagem:</label><br>
            <textarea id="msg" name="msg" required></textarea>
            <br>
            <input type="submit" value="Enviar" class="bt_form">
        </form>
    </body>
</html>