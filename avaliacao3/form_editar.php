<html>
    <head>
        <title>Cadastro de produto</title>
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>
        <form action="editar.php" method="post">
            <label>Digite o codigo da produto para editar:</label>
            <br/>
            <input type="text" name="id" />
            <br/>
            <label>Digite o novo nome da produto:</label>
            <br/>
            <?php require_once("campos_pessoa.php");?>
            <input type="submit" value="Editar" />
        </form>
    </body>
</html>   
<?php
    require_once("menu.php");
    
    session_start();
    
    if (isset($_SESSION["cadastros"])){
          
         $cadastros = $_SESSION ["cadastros"];
         
         foreach ($cadastros as $id => $produto) {
            if($produto != null){
                echo "[$id] => " . $produto["nome"] . "<br/>";
            }
         }
    }
    else{
        echo "Não existem produto cadastradas";
    }
?>
