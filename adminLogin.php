<?php
    require_once "db.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Administração</title>
</head>
<body>
    <section>
        <form method="post">
            <h2>Login - Admin</h2>
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Preencha com seu Email"> 
            <label for="senha">Senha:</label>
            <input type="password" name="senha" placeholder="Preencha a Senha">
            <input type="submit" class="justify-content-center" id="botao2" name="Entrar" value="Entrar">
        </form>
    </section>
    <?php 
        require "adminEntrar.php";  
    ?>
</body>

</html>