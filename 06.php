<html>
	<head><title>Ejercicios 2</title></head>
		<body>
		<h3>Ejercicio 2:</h3>
		<?php
		$filas=mt_rand(1,10);
		$total=$filas*4+$filas;
		echo "<p>$total"."<br>";
		echo $filas."<br>";
		for ($i = 1; $i <=3 ; $i++) {
		    for ($j = 1; $j <=$total ; $j++) {
		        if($i==3){
		           echo '*'; 
		        }
		        else{
		            if($j%5==0){
		                echo "&nbsp";
		            }
		            else{
		                echo "*";
		            }
		        }
		    }
		  
		    echo "<p>";
		}
	
		?>
		
        
		</body>
</html>
    