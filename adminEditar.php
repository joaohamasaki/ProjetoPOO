<?php
    require_once 'db.php';
    //require 'session.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloEditar.css">
    <title>Editar</title>
</head>
<?php
     if (isset($_GET['id_up']))//Se o usuario clicou no botão editar;
    {
        $id_update = $_GET['id_up'];

        $res = [];

        $cmd = $pdo->prepare("SELECT * FROM cliente WHERE id = :id");

        $cmd-> bindParam(":id",  $id_update);

        $cmd-> execute();
        
        $res = $cmd->fetch(PDO::FETCH_ASSOC);
         
    }
?>

<body>
    <form method="post">
        <h2>Editar - Usuário</h2>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome Completo"
        
        value="<?php if(isset($res)){echo $res['nome'];}?>">

        <label for="telefone">Telefone:</label>
        <input type="text" name="whatsapp" placeholder="Número de Whatsapp"
        
        value="<?php if(isset($res)){echo $res['whatsapp'];}?>">

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="E-mail" 
        
        value="<?php if(isset($res)){echo $res['email'];}?>">

        <input type="submit" name="Atualizar" class="botaoLogin" style="justify-content: center;" value="<?php if(isset($res)){echo "Atualizar";}?>">

        <br>

        <a id="btnVoltar" href="admin.php" style="text-decoration: none; color: #E2CFB9">Voltar</a>
    </form>
    <?php
    
    if (isset($_POST['Atualizar'])){
        
        $nome = $_POST['nome'];

        $whatsapp = $_POST['whatsapp'];

        $email = $_POST['email'];

        $cmd = $pdo->prepare("UPDATE cliente SET nome = :n, whatsapp = :w,  email = :e WHERE id = :id"); 

        $cmd->bindParam(":n", $nome);

        $cmd->bindParam(":w", $whatsapp);

        $cmd->bindParam(":e", $email);

        $cmd->bindParam(":id", $id_update);

        $resultado = $cmd->execute();
        

        if ($resultado) {

            header("location: admin.php");

        } else {

            echo "Não foi possivel atualiuzar as credenciais!";
        }

       
    }

        
    ?>

</body>
</html>