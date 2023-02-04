<?php
namespace SistemaVenda\PHP\Controle;

require_once("Modelo/Cliente.php");
require_once("Modelo/Livro.php");

use SistemaVenda\PHP\Modelo\Livro;
use SistemaVenda\PHP\Modelo\Cliente;

class Pedido{
    
    private Livro $livro;
    private Cliente $cliente;

    public function __construct(Cliente $clienteParam, Livro $livroParam){
        $this->cliente = $clienteParam;
        $this->livro = $livroParam;
    }

    public function realizarPedido(float $pedido){
        if($pedido > $this->$livro->quantidadeLivro){
            echo"Não há a quantidade informada. Faça uma reserva!<br>";
        }
        else{
            echo "Compra efetuada com sucesso!";
        }
    }
}
?>
