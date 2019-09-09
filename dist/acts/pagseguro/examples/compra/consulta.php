<?php
//=============================================//
//           Consultando Compra	    	       //
//=============================================//
require dirname(__FILE__)."/../_autoload.class.php";
use CWG\PagSeguro\PagSeguroCompras;

$email = "contato@gacc-rc.org.br";
$token = "E0245B4263074B3A9E5556881F20670D";
$sandbox = true;

$pagseguro = new PagSeguroCompras($email, $token, $sandbox);

echo "<h2>Consulta pelo código de Transação</h2>";
//Pelo cóigo da transação
$codigoTransacao = '7483D421FE7E451DB6E35A43FF35D344'; //È o código gerado no ato da compra pelo PagSeguro
$response = $pagseguro->consultarCompra($codigoTransacao);
print_r($response);

echo "<br/><hr/>";

echo "<h2>Consulta pelo código de Referencia</h2>";
//Pelo Código da Referencia
$referencia = 'CWG004'; //È o código gerado no seu site ao criar a solicitação de compra
$response = $pagseguro->consultarCompraByReferencia($referencia);
print_r($response);

