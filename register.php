<?php
ini_set('displya_erros', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

//session_start();

    if (isset($_POST['Cadastrar']))
    
    {   
        $nome =  $_POST['nome'];
        
        $whatsapp = $_POST['whatsapp'];
    
        $email = $_POST['email'];
        
        $senha = $_POST['senha'];

        $confirmarSenha = $_POST['confPass'];


        if (empty($nome) && empty($whatsapp) && empty($email) && empty($senha)) 
        
        {
             echo "Por favor!, Preencher todos os campos.";
        }

        if ($senha != $confirmarSenha)
        
        {

            echo "Senha e Confirmar Senha são diferentes";
            exit();
        }
           
            $sql = $pdo->prepare("SELECT id FROM cliente WHERE email = :e");
            $sql->bindParam(":e", $email);
            $sql->execute();
            $res = $sql->fetch(PDO::FETCH_ASSOC);

            if ($res) {
        
                echo " Email já cadastrado";   
        
                } else {
        
                $sql = $pdo->prepare("INSERT INTO cliente (nome, whatsapp, email, senha) VALUES (:n, :w, :e, :s)");
    
                $sql->bindParam(":n", $nome);
    
                $sql->bindParam(":w", $whatsapp);
    
                $sql->bindParam(":e", $email);
    
                $sql->bindParam(":s", $senha);
    
                $sql->execute();
    
                ?>
                <div id="msg-sucess">
                Credênciais Aceitas!!
                </div>
                <?php
        
            }       

    }