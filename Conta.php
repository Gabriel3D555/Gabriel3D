<?php
class Conta{ 
    private $numero; 
    private $nome; 
    private $saldo; 
    function __construct(int $numero, string $nome, float $saldo){ 
        $this->definirNumero($numero); 
        $this->definirNome($nome); 
        $this->definirSaldo($saldo); 
    } 
    public function definirNumero($numero) {
        $this->numero = $numero;
    } 
    public function retornarNumero() {
        return $this->numero;
    } 
    public function definirNome($nome){
        $this->nome = $nome;
    } 
    public function retornarNome(){
        return $this->nome;
    } 
    public function definirSaldo($saldo){
        $this->saldo = $saldo;
    } 
    public function retornarSaldo(){
        return $this->saldo;
    } 
    public function retornarConta(){ 
        $this->retornarNumero();
        $this->retornarNome(); 
        $this->retornarSaldo(); 
    } 
} 
?>