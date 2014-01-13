<?php
    require_once("menu.php");
    
    
    session_start();
    
    if(!isset($_SESSION["cadastros"])){
        echo "Não existem produto para remover"; 
    }
    else{
        $id = $_REQUEST["id"];
     
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = null;
        
        echo "Remoção efetuada com sucesso!";
    }
    

    
?>
