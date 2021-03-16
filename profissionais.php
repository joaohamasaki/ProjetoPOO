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
    <title>Profissionais</title>
</head>

<body>
<?php
    
    if (isset($_POST['nome'])) {

        $nome = addslashes($_POST['nome']);

        $whatsapp = addslashes($_POST['whatsapp']);

        $email = addslashes($_POST['email']);

        //Query para verificar o email ja é cadastrado
        $sql = $pdo->prepare("SELECT id FROM profissionais WHERE email = :e");

        $sql->bindParam(":e", $email);

        $sql->execute();

        $res = $sql->fetch(PDO::FETCH_ASSOC);

        if (empty($nome) && empty($whatsapp) && empty($email)) {

            //tratar o a mensagem
            echo "Por favor!, Preencher todos os campos.";
        
        } else if ($res > 0) {

            //tratar o a mensagem
            echo "Email já existe!";
        
        } else if ($sql->rowCount() > 0) {

            return false;
        
        } else {

            $sql = $pdo->prepare("INSERT INTO profissionais (nome, whatsapp, email) VALUES (:n, :w, :e)");

            $sql->bindParam(":n", $nome);

            $sql->bindParam(":w", $whatsapp);

            $sql->bindParam(":e", $email);

            $sql->execute();

            header("location: profissionais.php");
        }
    }
    ?>
    <section id="left">
        <form method="post">
            <h2>Admin - Profissionais</h2>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Nome Completo">

            <label for="telefone">Telefone:</label>
            <input type="text" name="whatsapp" placeholder="Número de Whatsapp">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="E-mail">

            <input type="submit" value="Cadastrar" id="botao2">

            <br>
            <a href="logout.php" style="color: #E2CFB9; background: #77492D; border-radius: 1rem;">Sair</a>
            <a href="admin.php" style="color: #E2CFB9; background: #77492D; border-radius: 1rem;">admin</a>
        </form> 
    </section>

    <section id="right">
        <table>
            <tr id="title">
                <td>NOME COMPLETO</td>
                <td>TELEFONE</td>
                <td>EMAIL</td>
                <td>AÇÃO</td>
            </tr>
            <?php

            $res = [];
        
            $cmd = $pdo->query("SELECT * FROM profissionais ORDER BY nome");

            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);

            if(count($res) > 0)
            {
                for ($i=0; $i < count($res); $i++) 
                { 
                    echo "<tr>";
                    //array aqui é matricial por isso necessidade do for e do forach!
                    foreach ($res[$i] as $c => $v)
                    {    
                        //preencher a tabela com a variavel(coluna) trazendo todos os campos menos id!
                        if($c != 'id')
                        {
                            echo "<td>".$v."</td>";
                        }
                    }
                    ?>       
                    <td>
                        <!-- aletarar os links -->
                        <a href="profissionaisEditar.php?id_up=<?php echo $res[$i]['id']; ?>" style="color: #E2CFB9; background: #77492D; border-radius: 1rem;">Editar</a>
                        <a href="profissionais.php?id=<?php echo $res[$i]['id']; ?>" style="color: #E2CFB9; background: #77492D; border-radius: 1rem;">Excluir</a>
                    </td>
                    <?php
                     echo "</tr>";
                }
                
                // Resolver o problema da mensagem de erro colocando dentro da tabela.

            } else {

                ?>
                <div id="msg-error">
                    Ainda não há Profissionais cadastrados!
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
    $id_prof = $_GET['id']  ;
    
    $cmd = $pdo->prepare("DELETE FROM profissionais WHERE id = :id");

    $cmd-> bindParam(":id", $id_prof);

    $cmd-> execute();

    //ao deletar o id a pagina será renderizada!!
    header("location: profissionais.php");
}
?>