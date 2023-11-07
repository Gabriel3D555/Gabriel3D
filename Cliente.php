<?php
class Cliente extends Conta {
    private $nomeCLiente;
    private $idade;
    private $genero;
    
    public function __construct(int $numero,string $nome, float $saldo, string $nomeCliente, string $idade, string $genero) {
        parent::__construct($numero, $nome, $saldo);
        $this->definirNomeCliente($nomeCliente);
        $this->definirIdade($idade);
        $this->definirGenero($genero);
    }

    public function definirNomeCliente($nomeCliente) {
        $this->nomeCliente = $nomeCliente;
    }
    public function definirIdade($idade) {
        $this->idade = $idade;
    }
    public function definirGenero($genero) {
        $this->genero = $genero;
    }
    public function retornarNomeCliente() {
        return $this->nomeCliente;
    }
    public function retornarIdade() {
        return $this->idade;
    }
    public function retornarGenero() {
        return $this->genero;
    }

}