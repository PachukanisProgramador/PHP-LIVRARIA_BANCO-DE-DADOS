<?php

namespace SistemaVenda\PHP;

use SistemaVenda\PHP\Modelo\Cliente;
use SistemaVenda\PHP\Modelo\Livro;
use SistemaVenda\PHP\Controle\Pedido;

require_once('Modelo/Livro.php');
require_once('Modelo/Cliente.php');
require_once('Controle/Pedido.php');

$login = "Henrique10";
$senha = 'senha123';
$nome = 'Henrique';
$endereco = 'Rua dos Bobos, n° 09';
$dataNascimento = date("02/02/2002");
$telefone = 11968161630;

$clienteCadastrado = new Cliente($login,$senha,$nome,$endereco,$dataNascimento,$telefone);

$livro1 = new Livro("O Gato de Botas","Ana Maria Machado",150.5, 10);
$livro2 = new Livro("Os três Mosqueteiros","Alexandre Dumas, pai",80.5, 2);
$livro3 = new Livro("Leviatã","Thomas Hobbes",23.0, 25);
$livro4 = new Livro("Política", "Aristóteles", 18.9, 1);
$livro5 = new Livro("Salário, Preço e Lucro","Karl Marx",0, 0);
$livro6 = new Livro("Deus está morto","Friedrich Nietzsche",189.8, 255);
echo "Olá! Acesse o sistema!<br><br>";

$clienteCadastrado->entrar($login, $senha);

echo "<br><br>Escolha um livro de nossa prateleira:<br><br>";

echo $livro1->disporLivro($livro1);
echo "<br>";
echo $livro2->disporLivro($livro2);
echo "<br>";
echo $livro3->disporLivro($livro3);
echo "<br>";
echo $livro4->disporLivro($livro4);
echo "<br>";
echo $livro5->disporLivro($livro5);
echo "<br>";
echo $livro6->disporLivro($livro6);
echo "<br>";

$novoPedido1 = new Pedido($clienteCadastrado, $livro1);

$novoPedido1->realizarPedido(3);

$novoPedido2 = new Pedido($clienteCadastrado, $livro5);

$novoPedido2->realizarPedido(3);
echo $livro1->nome;

?>