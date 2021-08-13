<?php

function SeculoAno($ano){
	return ceil($ano / 100);
}

$ano = 1700;
$seculo = SeculoAno($ano);
echo "O século de ".$ano." é: ".$seculo;