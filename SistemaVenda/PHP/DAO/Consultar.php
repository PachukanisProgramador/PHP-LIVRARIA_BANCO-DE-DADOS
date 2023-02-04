<?php
namespace SistemaVenda\PHP\DAO;

require_once("Conexao.php");
use SistemaVenda\PHP\DAO\Conexao;

class Consultar{
    public function consultarIndividualCliente(Conexao $conexao, string $nomeTabela, int $codigo){
        try{
            $conn = $conexao->conectar();
            $sql = "select * from $nomeTabela where codigo = '$codigo'";
            $result = mysqli_query($conn,$sql);

            while($dados = mysqli_fetch_array($result)){
                if($dados["codigo"] == $codigo){
                    echo "<br>Código: ".$dados["codigo"]."<br>Nome: ".$dados["nome"]."<br>Endereço: ".$dados["endereco"]."<br>Telefone: ".$dados["telefone"]."<br>Data de nascimento: ".date($dados['dataNascimento']);
                    echo "<br>Login: ".$dados['login']."<br>Senha: ".$dados['senha'];
                    return;//Encerrando a operação
                }
                echo "Código digitado não encontrado.";
            }
        }catch(Except $erro){
            echo $erro;
        }
    }

    public function consultarTudoCliente(Conexao $conexao, string $nomeTabela){
        try{
            $conn = $conexao->conectar();
            $sql = "select * from $nomeTabela";
            $result = mysqli_query($conn,$sql);

            while($dados = mysqli_fetch_array($result)){
                if(isset($dados)){
                    echo "<br>Código: ".$dados["codigo"]."<br>Nome: ".$dados["nome"]."<br>Endereço: ".$dados["endereco"]."<br>Telefone: ".$dados["telefone"]."<br>Data de nascimento: ".date($dados['dataNascimento']);
                    echo "<br>Login: ".$dados['login']."<br>Senha: ".$dados['senha'];
                }
                else{
                    echo "Banco de dados vazio!";
                }
            }
            return;//Encerrando a operação
        }catch(Except $erro){
            echo $erro;
        }
    }

    public function consultarIndividualLivro(Conexao $conexao, string $nomeTabela, int $codigo){
        try{
            $conn = $conexao->conectar();
            $sql = "select * from $nomeTabela where codigo = '$codigo'";
            $result = mysqli_query($conn,$sql);

            while($dados = mysqli_fetch_array($result)){
                if($dados["codigo"] == $codigo){
                    echo "<br>Código: ".$dados["codigo"]."<br>Nome: ".$dados["nomeLivro"]."<br>Autor: ".$dados["autorLivro"]."<br>Valor: ".$dados["valorLivro"]."<br>Quantidade: ".$dados['quantidadeLivro'];
                    return;//Encerrando a operação
                }
                echo "Código digitado não encontrado.";
            }
        }catch(Except $erro){
            echo $erro;
        }
    }

    public function consultarTudoLivro(Conexao $conexao, string $nomeTabela){
        try{
            $conn = $conexao->conectar();
            $sql = "select * from $nomeTabela";
            $result = mysqli_query($conn,$sql);

            while($dados = mysqli_fetch_array($result)){
                if(isset($dados)){
                    echo "<br>Código: ".$dados["codigo"]."<br>Nome: ".$dados["nomeLivro"]."<br>Autor: ".$dados["autorLivro"]."<br>Valor: ".$dados["valorLivro"]."<br>Quantidade: ".$dados['quantidadeLivro'];
                }
                else{
                    echo "Banco de dados vazio!";
                }
            }
            return;//Encerrando a operação
        }catch(Except $erro){
            echo $erro;
        }
    }
}
?>