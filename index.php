<?php 

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    // tratando erros

    try {
        $conexao = new PDO( $dsn, $usuario, $senha);

        $query = '
            select * from tb_usuarios
        
        ';

        $stmt = $conexao->query($query);
        $lista = $stmt->fetchAll();

        echo '<pre>';
        print_r($lista);
        echo '</pre>';


        echo $lista[0]['nome'];
        echo '<pre>';
        echo $lista[2]['email'];

              
    }catch(PDOException $e) {
        echo 'Erro: ' .$e->getCode(). 'Mensagem: '.$e->getMessage();
        //registrar erro
    
    }
  

?>