<?php
    require_once("menu.php");
    session_start();
    
    if(!isset($_SESSION["cadastros"])){
        $_SESSION["cadastros"] = array();  
    }
    
    $nome = $_REQUEST["nome"];
    $cor = $_REQUEST["cor"];
    $prazo = $_REQUEST["prazo"];
    $detalhes = $_REQUEST["detalhes"];
    
    $aceito = false;
    if (isset($_REQUEST["aceito"])){
        
    }
    
    $produto = array();
    $produto["nome"] = $nome;
    $produto["cor"] = $cor;
    $produto["prazo"] = $prazo;
    $produto["ProdutoNovo"] = $ProdutoNovo;
    $produto["detalhes"] = $detalhes;
    
    array_push($_SESSION["cadastros"],$produto);

    echo "Cadastro efetuado com sucesso!";
    
?>
