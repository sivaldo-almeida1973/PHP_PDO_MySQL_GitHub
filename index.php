<?php 

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    // tratando erros

    try {
        $conexao = new PDO( $dsn, $usuario, $senha);

        $query = '
         
            create table if not exists tb_usuarios(
                id int not null primary key auto_increment,
                nome varchar(50) not null,
                email varchar(100) not null,
                senha varchar(32) not null



            )
        
        ';
        $retorno = $conexao ->exec($query);
        //0
        echo $retorno;

        //inserir dados na tabela
        // $query = '
        
        //      insert into tb_usuarios(
        //         nome, email, senha 
        //         )values (
        //             "sivaldo Vieira ", "sivaldo@teste.com.br", "12345"

        //      )
        // ';

        //deletar
        $query = '
           delete from tb_usuarios

        
        '; 

        $retorno = $conexao->exec($query);
        echo $retorno;

              
    }catch(PDOException $e) {
        echo 'Erro:' .$e->getCode(). 'Mensagem: '.$e->getMessage();
        //registrar erro
    
    }
  

?>