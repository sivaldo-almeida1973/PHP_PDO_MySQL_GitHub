<?php 

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    // tratando erros

    try {
        $conexao = new PDO( $dsn, $usuario, $senha);

    }catch(PDOException $e) {
        echo 'Erro:' .$e->getCode(). 'Mensagem: '.$e->getMessage();
        //registrar erro
    
    }
  

?>