<?php
namespace SistemaVenda\PHP\Modelo;

class Cliente{

    private string $nome;
    private string $endereco;
    private string $telefone;
    private string $dataNascimento;
    private string $login;
    private string $senha;

    public function __construct(string $login, string $senha, string $nome, string $endereco, string $telefone, string $dataNascimento){
        $this->login = $login;
        $this->senha = $senha;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->dataNascimento = $dataNascimento;
       
    }//fim do construtor  

    public function entrar(string $loginInserido, string $senhaInserido){
        echo 'Insira seu login e senha!<br><br>';
        if($this->login == $loginInserido || $this->senha == $senhaInserido){
            echo "Bem-vindo ao sistema, $this->nome !";
       }
       else{
        echo '<br>Login ou senha incorretos.';
       }
    }

}

?>