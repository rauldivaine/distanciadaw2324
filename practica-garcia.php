<?php
/**
* @package PracticaGarcia
* @version 1.0
* @author Raúl Garcia
*/

/** Función para calcular el  doble de un número
* @param int %num El número a duplicar.
* @return int El número duplicado
*/

function duplicar ($num) {
	return $num*2;
}

/** Función para calcular el área de un círculo
* @param float $radio El radio del círculo.
* @return float El área del círculo.
*/

function calcularAreaCirculo($radio) {
	return M_PI*pow($radio,2);
}

// @internal Esta función es solo para uso interno.
?>
