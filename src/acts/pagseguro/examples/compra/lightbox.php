<?php

$valor = $_POST['valor'];
//=============================================//
//   Criando uma compra Usando Lightbox	       //
//=============================================//
require dirname(__FILE__)."/../_autoload.class.php";
use CWG\PagSeguro\PagSeguroCompras;

$email = "contato@gacc-rc.org.br";
$token = "E0245B4263074B3A9E5556881F20670D";
$sandbox = true;

$pagseguro = new PagSeguroCompras($email, $token, $sandbox);

//Nome do comprador (OPCIONAL)
//$pagseguro->setNomeCliente("CARLOS W GAMA");	
//Email do comprovador (OPCIONAL)
//$pagseguro->setEmailCliente("c73062863531198591643@sandbox.pagseguro.com.br");
//Código usado pelo vendedor para identificar qual é a compra (OPCIONAL)
//$pagseguro->setReferencia("D001");	
//Adiciona os itens da compra (ID do ITEM, DESCRICAO, VALOR, QUANTIDADE)
$pagseguro->adicionarItem('DOA0001', 'Doar', $valor, 1);
//$pagseguro->adicionarItem('ITEM0002', 'Item 2', 15.50, 1);

//JavaScript caso a compra seja realizada (OPCIONAL)
$success = "window.location.href='../../../../obrigado.php'";

//JavaScript caso o lightbox seja fechado sem concluir a compra (OPCIONAL)
$abort = "window.location.href='../../../../index.php'";

try{
    $jsLightbox = $pagseguro->gerarLightbox($success, $abort);
    echo $jsLightbox;
} catch (Exception $e) {
    echo $e->getMessage();
}
