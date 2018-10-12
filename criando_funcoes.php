<?php

//função sem retorno
function exibir_boas_vindas($nome){
	//codigo de execução da função
	echo "bem vindo ao curso de php, ".$nome;
}

//função com retorno
function calcular_soma($numero1, $numero2){
	return $numero1+$numero2;
}

// chamar função
exibir_boas_vindas('Leonardo');
echo '<br />';
echo calcular_soma(10,10);
?>