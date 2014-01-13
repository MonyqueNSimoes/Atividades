<?php
    require_once("menu.php");
    session_start();
    
    if(!isset($_SESSION ["cadastros"])){
        echo "Não existem produto para editar";
    }
    else{
        $id = $_REQUEST ["id"];
        $nome = $_REQUEST ["nome"];
        $cor = $_REQUEST["cor"];
        $prazo = $_REQUEST["prazo"];
        $detalhes = $_REQUEST["detalhes"];
        
        $aceito = false;
    if (isset($_REQUEST["aceito"])){
        $aceito = true;
        
        $produto = array();
        $produto["nome"] = $nome;
        $produto["aceito"] = $aceito;
        $produto["cor"] = $cor;
        $produto["prazo"] = $prazo;
        $produto["ProdutoNovo"] = $ProdutoNovo;
        $produto["detalhes"] = $detalhes;
        
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = $produto;
        
        echo "Edição efetuada com sucesso!";
    }
    
?>
