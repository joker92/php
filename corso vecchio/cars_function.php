<?php


function auto_marca($marca,$car) {
	$result=[];

	foreach ($car as $m) {
	if ($m["marca"] == $marca) {
		$result[]=$m;
	
		}
	}
	
	
	return $result;
}

function auto_prezzo($prezzo, $cars) {
	$result=[];
	
	
	foreach ($cars as $c) {
			if ($c["prezzo"] <= $prezzo) {
							$result[]=$c;
						}
					}

	return $result;
}
?>
