<?php
//=============================================//
//           Criando uma assinatura		       //
//=============================================//
require dirname(__FILE__)."/../../_autoload.class.php";
use CWG\PagSeguro\PagSeguroCompras;

$email = "contato@gacc-rc.org.br";
$token = "E0245B4263074B3A9E5556881F20670D";
$sandbox = true;

$pagseguro = new PagSeguroCompras($email, $token, $sandbox);

//Desabilita as outras formas de pagamento, caso não queira
$pagseguro->habilitaDebito(false)
          ->habilitaCartao(false);

//URL para onde os dados da compra será realizado para confirmar com o PagSeguro
$urlFinalizar = 'http://localhost/pagseguro/examples/compra/checkout-transparente/finalizar_compra.php';

//JavaScript opcional para realizar ao receber os dados de retorno da URL final
$jsOpcional = 'alert("Alerta do $jsOpcional"); if (response.success) alert("URL Boleto: " + response.url);';

//Informa URL para completar a compra, JS (opcional) a ser feito e TRUE (OPCIONAL) caso queira importar JQuery
$js = $pagseguro->preparaCheckoutTransparente($urlFinalizar, $jsOpcional, true);
?>
<!--=========================== BOLETO ===========================-->
<h1>Boleto</h1>
<!-- Use A classe pagseguro-pagar-boleto para completar via Boleto -->
<button id="botao_comprar" class="pagseguro-pagar-boleto">Comprar Boleto</button>


<?=$js['completo']; //Importa o Código do CheckoutTransparente?>