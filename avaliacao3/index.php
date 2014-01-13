<style>
    .vermelho{
        color: red;
    }
    .verde{
        color: green;
    }
    .azul{
        color: blue;
    }
</style>
<?php
    require_once("menu.php");
    
    session_start();
    
    if (isset($_SESSION["cadastros"])){
          
         $cadastros = $_SESSION ["cadastros"];
         
         echo "<dl>";
         foreach ($cadastros as $produto) {
            $ProdutoNovo = $produto["ProdutoNovo"];
            $cor = $produto["cor"];
            
            if ($produto != null){
                echo"<dt class='$cor'>" . $produto["nome"] . "</dt>";
                echo"<dd>Cor: " . $cor . "</dd>";     
                echo "<dd>Produto Novo: ";
                if ($ProdutoNovo){
                    echo "Sim";
                }
                else{
                    echo "Não";
                }
                echo "</dd>";
            }
         }
         echo"</dl>";
    }
    else {
        echo "Não existem produto cadastradas" ;
    }
?>
