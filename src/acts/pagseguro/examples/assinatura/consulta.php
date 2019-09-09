<?php
//=============================================//
//           Cancelando assinatura		       //
//=============================================//
require dirname(__FILE__)."/../_autoload.class.php";
use CWG\PagSeguro\PagSeguroAssinaturas;

$email = "contato@gacc-rc.org.br";
$token = "E0245B4263074B3A9E5556881F20670D";
$sandbox = true;

$pagseguro = new PagSeguroAssinaturas($email, $token, $sandbox);

$codeAssinatura = '131F919E44449D62244DEFAA0FEB334C';
$response = $pagseguro->consultaAssinatura($codeAssinatura);
print_r($response);die;
