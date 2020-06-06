<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of questao3
 *
 * @author Helbert
 */
class questao3 {

    private $numero1;
    private $numero2;
    private $numero3;

    function getNumero1() {
	return $this->numero1;
    }

    function getNumero2() {
	return $this->numero2;
    }

    function getNumero3() {
	return $this->numero3;
    }

    function setNumero1($numero1) {
	$this->numero1 = $numero1;
    }

    function setNumero2($numero2) {
	$this->numero2 = $numero2;
    }

    function setNumero3($numero3) {
	$this->numero3 = $numero3;
    }

    public function mutiplicaAtributos() {
	return $this->numero1 * $this->numero2 * $this->numero3;
    }
}

$objeto = new questao3();

$objeto->setNumero1(20);
$objeto->setNumero2(30);
$objeto->setNumero3(40);

echo $objeto->mutiplicaAtributos();
