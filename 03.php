<html>
	<head><title>Ejercicios 2</title></head>
		<body>
		<h3>Ejercicio 2:</h3>
		<?php
		$valor1=random_int(1,10);
		$valor2=random_int(1, 10);
		
		include_once 'funcionesvar.php ';  
		echo "Suma : $valor1 + $valor2 = ".               calSuma($valor1,$valor2)."<br>";
		echo "Resta : $valor1 - $valor2 = ".              calresta($valor1,$valor2) ."<br>";
		echo "Multiplicacion : $valor1 * $valor2 = ".     calmulti($valor1,$valor2)   ."<br>";
		echo "Division : $valor1 / $valor2 = ".           caldivision($valor1,$valor2)    ."<br>";
		echo "Modulo : $valor1 % $valor2 = ".             calmodulo($valor1,$valor2)  ."<br>";
		echo"Potencia del ciclo: $valor1**$valor2 = ".    calpotencia($valor1, $valor2)   ."<br>";

		?>
		
        
		</body>
</html>