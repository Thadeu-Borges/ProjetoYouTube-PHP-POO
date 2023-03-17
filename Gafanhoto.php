<?php
require_once 'Pessoa.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Gafanhoto
 *
 * @author AAAA
 */
class Gafanhoto extends Pessoa {
    //put your code here
    //Atributos
    private $login;
    private $totAssistido;
    
    //Construtor
    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }

    //Métodos Especiais
    public function getLogin() {
        return $this->login;
    }

    public function getTotAssistido() {
        return $this->totAssistido;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setTotAssistido($totAssistido) {
        $this->totAssistido = $totAssistido;
    }

    //Métodos    
    public function assistirMaisUm() {
        $this->totAssistido ++;
    }
}
