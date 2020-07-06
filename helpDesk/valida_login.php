<?php

    //quando se está tarabalhando com sessão é fundamental utilizar o comando session_start()
    //essa sessão deve ser criada, sempre antes de qualquer impressão de dados no navegador
    session_start();

    //variavel que verifica se a autentificação foi realizada
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = array(1=> 'Administrativo', 2 => 'Usuario');

    //usuários do sistema
    $usuarios_app = array(
        array('id'=>1, 'email'=> 'adm1@teste.com.br', 'senha' => '12345', 'perfil_id' => 1),
        array('id'=>2, 'email'=> 'adm2@teste.com.br', 'senha' => '12345', 'perfil_id' => 1),
        array('id'=>3, 'email'=> 'user1@teste.com.br', 'senha' => '12345', 'perfil_id' => 2),
        array('id'=>4, 'email'=> 'user2@teste.com.br', 'senha' => '12345', 'perfil_id' => 2),
    );

    foreach($usuarios_app as $user){
        
        if($user['email'] == $_POST['email'] && $user['senha']==$_POST['senha']){
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado){
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
    }
    else{
        //para passar a informação de conexão inválida ao formulário se usa a função header
        //nesse caso nós forçamos a ida para index.php com um parametro
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }echo '<br/>';

    /*print_r($_GET);
    echo '<br/>';
    //cada parametro recebe uma array que é representado pelo índice
    echo $_GET['email'];echo '<br/>';
    echo $_GET['senha'];
    */
    //cada parametro recebe uma array que é representado pelo índice
    
?>