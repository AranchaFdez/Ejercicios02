<?php
function generarHTMLTable ( $filas, $columnas){
  
    echo '<table>';
    for ($i = 1; $i <= $filas; $i++) {
        echo '<tr>';
            for ($j = 1; $j <= $columnas; $j++) {
                $contenido=color();
                echo '<td style="background-color:'.$contenido.';"></td>';
                
            }
        
        echo '</tr>';
    }
  
    echo '</table>';
}
function color() {
    $red=mt_rand(0,255);
    $green=mt_rand(0,255);
    $blue=mt_rand(0,255);
    return $rgb="rgb(".$red.",".$green.",".$blue.")";
   
}
?>
<html>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="5">
    <link href="css07.css" rel="stylesheet" type="text/css" />
	<title>Ejercicios Simples PHP</title></head>
		<body>
		<div id="main">
			<div id="azul">
				<h1> Tabla de colores<br></h1>
			</div>
			<div id="blanco">
			<?php
			$filas=10;
			$columnas=10;
			generarHTMLTable($filas, $columnas);
			?>
			
		
			</div>
		</div>
		</body>
</html>