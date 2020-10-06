<?php
function generarHTMLTable ( $filas, $columnas){
  
    echo '<table>';
    for ($i = 1; $i <= $filas; $i++) {
        echo '<tr>';
            for ($j = 1; $j <= $columnas; $j++) {
                $contenido=color();
                echo '<td bgcolor="'.$contenido.'" ></td>';
                
            }
        
        echo '</tr>';
    }
  
    echo '</table>';
}
function color() {
    $colors=mt_rand(1,15);
    
    switch ($colors) {
        case 1:
            return "red";
            break;
        case 2:
            return "blue";
            break;
        case 3:
            return "green";
            break;
        case 4:
            return "white";
            break;
        case 5:
            return "black";
            break;
    }
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