<?php
function generarHTMLTable ( $filas, $columnas, $borde,$contenido){
    echo ' <tbody>';
    echo '<table border="'.$borde.'">';
    for ($i = 1; $i <= $filas; $i++) {
        echo '<tr>';
            for ($j = 1; $j <= $columnas; $j++) {
                echo "<td>$contenido </td>";
                
            }
        
        echo '</tr>';
    }
    echo ' </tbody>';
    echo '</table>';
}
?>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Ejercicios Simples PHP</title></head>
		<body>
		
			<?php
			$filas=mt_rand(1,5);
			$columnas=mt_rand(1,5);
			
			$contenido="Tabla";
            $borde=1;
            echo "filas : $filas";
            echo "columnas:$columnas";
			
			generarHTMLTable($filas, $columnas, $borde, $contenido);
			
			?>
			
		</body>
</html>