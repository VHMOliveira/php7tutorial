<?php

    /**
     * para receber os valores do input são necessários name
     * 
     * echo '<pre>';
     * print_r($_POST);
     * echo '</pre>';
     */

     session_start();

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);
    
    //$texto = $titulo .'#'. $categoria .'#'. $descricao .'|';
    $texto = $_SESSION['id'] .'#'. $titulo .'#'. $categoria .'#'. $descricao . PHP_EOL;

     //abri o arquivo e cria se ele não existir
    $arquivo = fopen('arquivo.hd','a');
    //escrevendo o texto
    fwrite($arquivo, $texto);
    //fechando o arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php');

?>