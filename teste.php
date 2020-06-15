<?php
$s = 5000;
//variavel unica de salário
function d($s){
	//function para calculo do bonus de 20%
	$b = ($s*20)/100;//variavel unica de cada function do bonus
    echo "O diretor recebe $b de bonus <br/>";
}
function f($s){
	//function para calculo do bonus de 10%
	$b = ($s*10)/100;//variavel unica de cada function do bonus
	echo "O funcionario recebe $b de bonus <br/>";
}
function e($s){
	//function para calculo do bonus de 5%
	$b = ($s*5)/100;//variavel unica de cada function do bonus
	echo "O estagiario recebe $b de bonus";
}
d($s);
f($s);
e($s);
?>