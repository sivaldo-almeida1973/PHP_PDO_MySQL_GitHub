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

        // $stmt = $conexao->query($query);
        // $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);//indices associativos
        //$lista = $stmt->fetchAll(PDO::FETCH_NUM);//indices numericos
        // $lista = $stmt->fetchAll(PDO::FETCH_BOTH);//indices numericos e associatiovs
        // $lista = $stmt->fetchAll(PDO::FETCH_OBJ);//array de obj
        // $lista_usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);//recupera apenas 1 rg

        foreach($conexao->query($query) as $key => $value){
            print_r($value[1]);
            echo '<hr>';
        };


        // echo '<pre>';
        // print_r($lista_usuarios);
        // echo '</pre>';


        // echo $lista[1]['nome'];
        // echo '<pre>';
        // echo $lista[2]['email'];

        // recuperar do array de obj
        // echo $usuario['nome'];

        // foreach($lista_usuarios as $key => $value) {
        //     print_r($value['nome']);
        //     echo '<hr>';
        // }


              
    }catch(PDOException $e) {
        echo 'Erro: ' .$e->getCode(). 'Mensagem: '.$e->getMessage();
        //registrar erro
    
    }
  

?>