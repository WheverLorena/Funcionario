<?php
	if(isset($_POST['ladoA']) && isset($_POST['ladoB'])){
		$valor1 = $_POST['ladoA'];
		$valor2 = $_POST['ladoB'];
		$result = $valor1 * $valor2;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Calculo de Area</title>		
</head>
<body>
 <H1><center>
 	<form action='' method='post'>
 	<label for="ladoA">LadoA</label>
 	<input type="text" name="ladoA" id="ladoA"><br/>
 	<label for="ladoB">LadoB</label>
 	<input type="text" name="ladoB" id="ladoB"><br/>
 	<input type="submit">
 	</form>
	<div>
	 Resultado:
	 <?php
	 	if (isset($result)) {
	 		echo ($result);
	 	}else{
	 		echo "null";
	 	}
	   ?>
	</div>

 </center></H1><br/>
</body>
</html>