<html>
	<head><title>Ejercicios 2</title></head>
		<body>
		<h3>Ejercicio 1:</h3>
		<?php
		$A;
		$B;
		$C=0;
		function elMayor($A,$B,&$C){
		
		    if($A>$B){
		       $C=$A;
		    }
		    elseif ($A<$B){
		       $C=$B;
		    }
		    else{
		      $C=0;
		    }
		}
		
		
		?>
		<form action="01.php" method="POST">
		<p>A: <input type="number" name="A"></p>
		<p>B: <input type="number" name="B"></p>
		<p><input type="submit" value="Guardar"></p>
		</form>
		<?php
        $A=$_POST["A"];
        $B=$_POST["B"];
       
        
        elMayor($A,$B,$C);
        echo "El resultado de C es:".$C;
        ?>
		</body>
</html>