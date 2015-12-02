<html>
<meta charset="UTF-8">
<?php
function suma($v){
	$suma=0;
	for ($i=0; $i<sizeof($v); $i++) { 
		$suma=$suma+$v[$i];
	}
	return "La suma és: $suma.<br>";
}
function media($v){
	$media=0;
	$suma=0;
	for ($i=0; $i<sizeof($v); $i++) { 
		$suma=$suma+$v[$i];
	}
	$media=$suma/sizeof($v);
	return "La media és: $media.<br>";
}
function sumpa($v){
	$suma=0;
	for ($i=0; $i<sizeof($v); $i++) { 
		if($v[$i]%2==0){
			$suma=$suma+$v[$i];
		}
	}
	return "La suma de los números pares és: $suma.<br>";

}
function mediapa($v){
	$media=0;
	$suma=0;
	$cont=0;
	for ($i=0; $i<sizeof($v); $i++) { 
		if($v[$i]%2==0){
			$suma=$suma+$v[$i];
			$cont++;
		}
	}
	$media=$suma/$cont;
	return "La media de los números pares és: $media.<br>";
}
function sumapo($v,$pos){
	$suma=0;
	if($pos==1){
		$i=1;
	}else{
		$i=0;
	}
	for( ;$i<sizeof($v);$i=$i+2){
	$suma= $suma+$v[$i];
	}
	/*return $suma;
	
	if($pos=="pares"){
		for ($i=0; $i<sizeof($v); $i++) { 
			if($i%2==0){
				$suma=$suma+$v[$i];
			}
		}
	}
		elseif($pos=="impares"){
			for ($i=0; $i<sizeof($v); $i++) { 
				if($i%2!=0){
					$suma=$suma+$v[$i];
				}
			}
		}*/
	return "La suma de los números de las posiciones $pos és: $suma.<br>";
}
function mayorque($v,$num){
	$cont=0;
	for ($i=0; $i<sizeof($v); $i++) {
		if($num<$v[$i]){
			$cont++;
		}
	}
	return "Hay $cont números mayores que $num.<br>";
}
function menorque($v,$num){
	$cont=0;
	for ($i=0; $i<sizeof($v); $i++) {
		if($num>$v[$i]){
			$cont++;
		}
	}
	return "Hay $cont números menores que $num.<br>";
}
function maximo($v){
	$max=0;
	for ($i=0; $i<sizeof($v); $i++) {
		if($max<$v[$i]){
			$max=$v[$i];
		}
	}
	return "El máximo és: $max.<br>";
}
function minimo($v){
	$min=$v[0];
	for ($i=0; $i<sizeof($v); $i++) {
		if($min>$v[$i]){
			$min=$v[$i];
		}
	}
	return "El mínio és: $min.<br>";
}
?>
</html>