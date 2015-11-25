<?php
class Usuario{
    public $nome, $telefone, $email, $assunto, $mensagem;
    
    public function __construct($nome, $telefone, $email, $assunto, $mensagem){
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->assunto = $assunto;
        $this->mensagem = $mensagem;
    }
}      