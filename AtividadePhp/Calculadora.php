<?php
    $ValorUm = 0;
    $ValorDois = 0;
    $resultado = 0;
    $opcao = 0;

    if(isset($_POST['Num1']) && isset($_POST['Num2']) && isset($_POST['operador'])){
        $ValorUm = $_POST['Num1'];
        $ValorDois = $_POST['Num2'];
        $opcao = $_POST['operador'];
        
    }
    function soma($n1,$n2){
        $resultado = $n1 + $n2;
        echo ("resultado é: $resultado");
    }
    
    function subt($n1,$n2){
        $resultado = $n1 - $n2;
        echo ("resultado é: $resultado");
    }

    function div($n1,$n2){
        $resultado = $n1 / $n2;
        echo ("resultado é: $resultado");
    }

    function mult($n1,$n2){
        $resultado = $n1 * $n2;
        echo ("resultado é: $resultado");
    }

    
    
?>

<html>
    <head>
    
    </head>

    <body>
    <H1><center>
 	  <form action='' method='post'>
 	      <label for="Num1">Insira Primeiro Valor</label>
 	      <input type="text" name="Num1" id="Num1"><br/>
 	      <label for="Num2">Insira segundo Valor</label>
 	      <input type="text" name="Num2" id="Num2"><br/>
          <select name="operador">
            <option>selecione operação</option>  
            <option value="1">Soma</option>
            <option value="2">subtração</option>
            <option value="3">Divisão</option>
            <option value="4">multiplicação</option>  
          </select>    
 	      <input type="submit">
 	</form>
        <div>
        Resultado:
	       <?php
	 	         switch($opcao){
        case 1: {
            soma($ValorUm,$ValorDois);
            break;
        }
            
        case 2: {
            subt($ValorUm,$ValorDois);
            break;
        } 
        case 3:{
            div($ValorUm,$ValorDois);
            break;
        }
        case 4: {
         mult($ValorUm,$ValorDois);
            break;
        }      
    }
            ?>
	</div>
        
        
        
        </center></H1>    
    
    </body>
</html>