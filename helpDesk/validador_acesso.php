<?php
    session_start();
    
    //caso a sessão não seja criada ou diferente de sim
    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != "SIM"){
      header('Location: index.php?login=erro2');
    }
?>