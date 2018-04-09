<?php

class carro{
	private $nome;
	private $preco;

	// public function __construct($nome, $preco){
	// 	$this->nome = $nome;
	// 	$this->preco = $preco;
	// }

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getPreco(){
		return $this->preco;
	}

	public function setPreco($preco){
		$this->preco = $preco;
	}

	
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

