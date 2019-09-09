<?php
//=============================================//
//           Criando uma assinatura		       //
//=============================================//
require dirname(__FILE__)."/../_autoload.class.php";
use CWG\PagSeguro\PagSeguroAssinaturas;

$email = "contato@gacc-rc.org.br";
$token = "E0245B4263074B3A9E5556881F20670D";
$sandbox = true;

$pagseguro = new PagSeguroAssinaturas($email, $token, $sandbox);

$codigoPlano = '0A92CF65-3737-39F9-945C-6F80E8501774';
$url = $pagseguro->assinarPlanoCheckout($codigoPlano);

echo 'URL para o Checkout: ' . $url;

