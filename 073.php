<?php
function generarHTMLTable ( $filas, $columnas){
    $rojo=colorRojo();
    $verde=colorVerde();
    $azul=colorAzul();
    $contenido=formarColor($rojo,$verde,$azul);
    echo '<table>';
    for ($i = 1; $i <= $filas; $i++) {
        echo '<tr>';
            for ($j = 1; $j <= $columnas; $j++) {
                echo '<td style="background-color:rgb('.$contenido.');"></td>';
                $contenido= degradar($rojo,$verde,$azul);
            }
        
        echo '</tr>';
    }
  
    echo '</table>';
}
function degradar(&$red,&$green,&$blue){
    $red+=2;
    $green+=2;
    $blue+=2;
   return $contenido=formarColor($red,$green,$blue); 
}
function colorRojo() {
    $red=mt_rand(0,255);
    return $red;
}
function colorAzul() {

    $blue=mt_rand(0,255);
    return $blue;
}
function colorVerde() {
   return $green=mt_rand(0,255);   
}
function formarColor($red,$green,$blue){
    return $rgb=$red.",".$green.",".$blue;
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