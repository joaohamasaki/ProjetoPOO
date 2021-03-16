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
    <title>Serviço - Editar</title>
</head>
<?php
     if (isset($_GET['id_up']))//Se o usuario clicou no botão editar;
    {
        $id_update = $_GET['id_up'];

        $res = [];

        $cmd = $pdo->prepare("SELECT * FROM serviço WHERE id = :id");

        $cmd-> bindParam(":id",  $id_update);

        $cmd-> execute();
        
        $res = $cmd->fetch(PDO::FETCH_ASSOC);
        
         
    }
?>
<body>
<form method="post">
            <h2>Serviço - Editar</h2>
            

            <label for="descrição">Descrição:</label>
            <input type="text" name="descrição" id="textarea" placeholder="Descrição do Serviço"

            value="<?php if(isset($res)){echo $res['descrição'];}?>">

            <input type="submit" name="Atualizar" value="<?php if(isset($res)){echo "Atualizar";}?>" class="botaoLogin">

            <br>

            <a href="service.php">VOLTAR</a>
            
        </form>
        <?php
    
    if (isset($_POST['Atualizar']))
    
    {
        
        $descricao = $_POST['descrição'];

        $cmd = $pdo->prepare("UPDATE serviço SET descrição = :d WHERE id = :id"); 

        $cmd->bindParam(":d", $descricao);

        $cmd->bindParam(":id", $id_update);

        $resultado = $cmd->execute();
        

        if ($resultado) 
        
        {

            header("location: service.php");

        } else {
            //tratar a mensagem
            echo "Não foi possivel fazer atualização do Serviço";
        }

       
    }

        
    ?>
</body>
</html>