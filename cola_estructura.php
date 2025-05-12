<?php
	$supermercado_cola = array();
	
	array_push($supermercado_cola, "papas");
	array_push($supermercado_cola, "pepinos");
	array_push($supermercado_cola, "arroz");
	array_push($supermercado_cola, "zanahorias");
	array_push($supermercado_cola, "frijoles");
	array_push($supermercado_cola, "remolacha");
	array_push($supermercado_cola, "aceite");
	array_push($supermercado_cola, "arvejas");
	array_push($supermercado_cola, "papa pobre");
	
	$mostrar = array_shift($supermercado_cola);
	
	echo "el primer elemento que llegó al supermercado es " .$mostrar

?>