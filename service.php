<?php
    require_once 'db.php';
    //require 'session.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloAdmin.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Serviços</title>
</head>

<body>
    <?php

    if (isset($_POST['descrição'])) {


        $descricao = addslashes($_POST['descrição']);
      

        if ( empty($descricao)) {

            echo "Por favor!, Preencher o campo.";

        } else {


            $sql = $pdo->prepare("INSERT INTO serviço (descrição) VALUES (:d)");

            $sql->bindParam(":d", $descricao);

            $sql->execute();

            header("location: service.php");
        }
    }
    ?>
    <section id="left">
        <form method="post">
            <h2>Admin - Serviço</h2>
            
            <label for="descrição">Descrição:</label>
            <input type="text" name="descrição" id="descrição" placeholder="Descrição do Serviço">

            <input type="submit" name="Cadastrar" value="Cadastrar" class="botaoLogin">

            <br>

            <a href="admin.php" style="color: #E2CFB9; background: #77492D; border-radius: 1rem;">VOLTAR</a>
            <a href="logout.php" style="color: #E2CFB9; background: #77492D; border-radius: 1rem;">SAIR</a>
        </form>
    </section>
    <section id="right">
        <table>
            <tr id="title">
                <td>DESCRIÇÃO SERVIÇO</td>
                <td>AÇÂO</td>
            </tr>
            <?php
            
            $res = [];

            $cmd = $pdo->query("SELECT * FROM serviço");

            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);

            if (count($res) > 0) {
               
                for ($i = 0; $i < count($res); $i++) {
                    
                    echo "<tr>";
                    //array aqui é matricial por isso necessidade do for e do forach!
                    foreach ($res[$i] as $c => $v) {
                        //preencher a tabela com a variavel(coluna) trazendo todos os campos menos id!
                        if ($c != 'id') {
                            
                            echo "<td>" . $v . "</td>";
                        }
                    }
                    ?>
                    <td>
                        <a href="serviceEditar.php?id_up=<?php echo $res[$i]['id']; ?> " style="color: #E2CFB9; background: #77492D; border-radius: 1rem;">Editar</a>
                        <a href="service.php?id=<?php echo $res[$i]['id']; ?>" style="color: #E2CFB9; background: #77492D; border-radius: 1rem;">Excluir</a>
                    </td>
                    <?php
                    echo "</tr>";
                }


            } else {

                ?>
                <div id="msg-error">
                    Ainda não há serviços cadastrados!
                </div>
            <?php
            }
            ?>
        </table>
    </section>
</body>
</html>
<?php
if (isset($_GET['id']))
{
    $id_service = $_GET['id']  ;
    
    $cmd = $pdo->prepare("DELETE FROM serviço WHERE id = :id");

    $cmd-> bindParam(":id", $id_service);

    $cmd-> execute();

    //ao deletar o id a pagina será renderizada!!
    header("location: service.php");
}
?>