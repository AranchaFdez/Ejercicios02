<html>
	<head>
	<title>Ejercicios 2</title>
	<style>
	
        	table,th,td,caption {
            border: 1px solid black;
            border-collapse: collapse;
        }
        caption{
            background: black;
            color: white;
        }
        #grande{
        padding-right:150;
        }
        #peque{
        padding-left:25;
        text-align: right;
        }
	</style>
	</head>
		<body>
		<h3>Ejercicio 4:</h3>
		<?php
		define('MAX',100);
		define('NUM',50);
		$maximo=0;
		$minimo=MAX;
		$suma=0;
		for ($i=0;$i<=NUM; $i++){
		     $valor1=random_int(20,MAX);
		     if ($valor1 > $maximo){
		         $maximo=$valor1;
		     }
		     if($valor1<$minimo){
		         $minimo=$valor1;
		     }
		     $suma+=$valor1; 
		}
        $media=$suma/NUM;
		?>
		<table>
		<caption>Generacion de 50 valores aleatorios</caption>
		<tr>
			<td id="grande">Minimo</td>
			<td  id="peque"><?php echo $minimo ?></td>
		</tr>
		<tr>
			<td id="grande">Maximo</td>
			<td  id="peque"><?php echo $maximo ?></td>
		</tr>
		<tr>
			<td id="grande">Media</td>
			<td  id="peque"><?php echo $media ?></td>
		</tr>
		</table>
		
        
		</body>
</html>