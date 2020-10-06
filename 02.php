<html>
	<head><title>Ejercicios 2</title></head>
		<body>
		<h3>Ejercicio 2:</h3>
		<?php
		$valor1=random_int(1,10);
		$valor2=random_int(1, 10);
		
		require_once 'funcionesvar.php ';
		$suma = calSuma($valor1,$valor2); 
		$resta = calresta($valor1,$valor2); 
		$multi = calmulti($valor1,$valor2); 
		$divi = caldivision($valor1,$valor2); 
		$modulo = calmodulo($valor1,$valor2); 
		echo "Suma : $valor1 + $valor2 = ".$suma."<br>";
		echo "Resta : $valor1 - $valor2 = ".$resta."<br>";
		echo "Multiplicacion : $valor1 * $valor2 = ".$multi."<br>";
		echo "Division : $valor1 / $valor2 = ".$divi."<br>";
		echo "Modulo : $valor1 % $valor2 = ".$modulo."<br>";
		echo"Potencia del ciclo: $valor1**$valor2 = ".calpotencia($valor1, $valor2)."<br>";

		?>
		
        
		</body>
</html>