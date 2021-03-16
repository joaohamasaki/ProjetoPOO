<?php
require_once "db.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Entrar - Usuário</title>
</head>

<body>
    <section>
        <div class="form-group col-md-6 mt-5">
            <h2 class="mb-3" style="text-align:center">Agendar um serviço</h2>
            <form id="login" method="post">
                <div class="form-group">
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" placeholder="Digite seu nome e sobrenome" required>
                    </div>
                    <div class=" form-group">
                        <label for="telefone">Whastapp</label>
                        <input type="text" name="whatsapp" class="form-control" placeholder="Informe seu número">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Digite seu email">
                    </div>
                </div>
                <div class="form-row">
                    <div class=" form-group col-md-6">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" class="form-control" placeholder="Digite sua senha">
                    </div>
                    <div class=" form-group col-md-6">
                        <label for="confPass">Confirme sua Senha</label>
                        <input type="password" name="confPass" class="form-control" placeholder="Digite novamente sua senha">
                    </div>
                </div>
                <div class="row">
                    <div class=" row col-md-6">
                        <input id="botao" type="submit" name="Cadastrar" class="btn btn-primary" value="Cadastrar">
                        <input id="botao" type="submit" class="btn btn-primary" value="Voltar">
                    </div>
                </div>
            </form>

        </div>
    </section>
    <?php
    var_dump($_POST);
    require "register.php";
    ?>
</body>

</html>