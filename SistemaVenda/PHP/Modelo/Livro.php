<?php

namespace SistemaVenda\PHP\Modelo;

class Livro{
    public string $nomeLivro;
    public string $autorLivro;
    public float $valorLivro;
    public float $quantidadeLivro;

    public function __construct(string $nomeLivro, string $autor, float $valor, float $quantidade){
        $this->nomeLivro = $nomeLivro;
        $this->autorLivro = $autor;
        $this->valorLivro = $valor;
        $this->quantidadeLivro = $quantidade;
    }//fim do construtor
    
    public function __get(string $var) : string{
        return $this->var;     
    }

    public function disporLivro(Livro $livroADispor){
        return "Nome: $livroADispor->nomeLivro | Autor: $livroADispor->autorLivro | Valor: R$ $livroADispor->valorLivro | Quantidade: $livroADispor->quantidadeLivro";
    }
}
?>