<?php
namespace SistemaVenda\PHP\DAO;

require_once("Conexao.php");
use SistemaVenda\PHP\DAO\Conexao;

class Excluir{
    public function deletar(Conexao $conexao, string $nomeTabela, int $codigo){
        try{
            $conn = $conexao->conectar();
            $sql = "delete from $nomeTabela where codigo = '$codigo'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            if($result){
                echo "Deletado com sucesso!";
                return;
            }
            echo "Não deu certo!";
        }catch(Except $erro){
            echo $erro;
        }
    }
}

?>