<?php
ini_set('displya_erros', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=db_eh';
$usuario = 'sa';
$senha = 'pipoca';


try {

    $pdo = new PDO($dsn, $usuario, $senha);

} catch (PDOException $e) {
    
    echo "Erro no banco de dados: ".$e->getMessage();
    
    exit();

} catch (Exception $e) {
    
    echo "Erro generico: ".$e->getMessage();
    
    exit();
}

