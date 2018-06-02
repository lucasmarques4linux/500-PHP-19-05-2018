<?php 

function fatorial($x){
	return $x * fatorial($x - 1);
}

echo fatorial(4);