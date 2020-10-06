<html>
	<head><title>Ejercicios 2</title></head>
		<body>
		<h3>Ejercicio 2:</h3>
		<?php
		$filas=mt_rand(1,5);
		$total=$filas*4+$filas;
		echo "<p>$total"."<br>";
		echo $filas."<br>";
		for ($i = 1; $i <=3 ; $i++) {
		    for ($j = 1; $j <=$total ; $j++) {
		        if($i==3){
		           echo '<img src="ladrillo.jpg" style="width: 20px;height:20px;" />'; 
		        }
		        else{
		            if($j%5==0){
		                echo "&nbsp";
		            }
		            else{
		                echo '<img src="ladrillo.jpg" style="width: 20px;height:20px;" />'; 
		            }
		        }
		    }
		  
		    echo "<p>";
		}
	
		?>
		
        
		</body>
</html>