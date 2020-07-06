<?php

    session_start();

    session_destroy();
    header('Location: index.php');
    //remover indeces do array de sessão
    /**
     * pode ser utilizada para remover qualquer índice
     * unset()
     */

    //unset($_SESSION['x']);
    //destruir a variável de sessão
    /**
     * para essa opreção existe uma função específica
     * session_destroy()
     */
?>