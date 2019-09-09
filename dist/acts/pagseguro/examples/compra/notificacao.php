<?php
//=============================================//
//           Consultando uma notificação      //
//=============================================//
require dirname(__FILE__)."/../_autoload.class.php";
use CWG\PagSeguro\PagSeguroCompras;

$email = "contato@gacc-rc.org.br";
$token = "E0245B4263074B3A9E5556881F20670D";
$sandbox = true;

$pagseguro = new PagSeguroCompras($email, $token, $sandbox);

//$_POST['notificationType'] = 'transaction';
//$_POST['notificationCode'] = 'EAE8FB-5A36423642F4-0224220F8642-FB6C4D';

//Caso seja uma notificação de compra (transaction)
if ($_POST['notificationType'] == 'transaction') {
    $codigo = $_POST['notificationCode']; //Recebe o código da notificação e busca as informações de como está a assinatura
    $response = $pagseguro->consultarNotificacao($codigo);
    print_r($response);die;
}