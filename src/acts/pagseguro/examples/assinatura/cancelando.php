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

$codePagSeguro = '324CE6D30505CFB3344E1F8C5CFF9926';

try {
    print_r($pagseguro->cancelarAssinatura($codePagSeguro));
} catch (Exception $e) {
    echo $e->getMessage();
}