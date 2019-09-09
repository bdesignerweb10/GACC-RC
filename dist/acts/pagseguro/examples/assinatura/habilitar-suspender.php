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

$codePagSeguro = '1BA8C57CD4D4F3F114A8FFB47768EA2F';

try {
    print_r($pagseguro->setHabilitarAssinatura($codePagSeguro, true));
} catch (Exception $e) {
    echo $e->getMessage();
}