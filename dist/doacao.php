<?php
	require_once('header.php');
?> <main><div class="container"><div class="row ajuda"><div class="col-sm-12 margin-default"><img src="img/doacao.png" alt="Psicologia" class="img-thumbnail"></div><div class="col-sm-12 margin-default"><h2 class="title-page" style="text-align: center;">“Os cabelos podem cair, mas ainda sobrará um fio. De esperança”</h2></div><div class="col-sm-12"><div class="card card-doacao"><p style="text-align: center;">Doando o valor referente ao pedágio de uma viagem,<br>você contribuirá para que nossas crianças deem mais um passo em direção à cura.</p><iframe width="560" height="315" src="https://www.youtube.com/embed/qUFdZRxv3SU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><div class="card-body"><button name="tipo" value="0" class="btn btn-lg btn-doacao active" id="btn-pontual">Doação Pontual</button> <button name="tipo" value="1" class="btn btn-lg btn-doacao" id="btn-mensal">Doação Mensal</button></div><p>Escolha um valor</p></div><!-- card--><div class="row doacao-valor doacao-pontual" style="display: flex;"><div class="col-sm-3"><div class="card"><!--<form action="acts/pagseguro/examples/compra/lightbox.php" method="post">--><div class="card-body"><h4>R$12,00</h4><input type="hidden" name="valor" id="valor" value="12.00" class="form-control mask-money"><p class="mensal">Viagem ida e volta de Rio Claro para a Santa Casa de Piracicaba</p></div><div class="divider"></div><!--<button class="btn btn-doar" type="submit"> Doar Agora</button>
						</form>--><!-- INICIO FORMULARIO BOTAO PAGSEGURO --><form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;"><!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO --> <input type="hidden" name="code" value="22FA9610B3B38170043A1FA4A9A4D793"> <input type="hidden" name="iot" value="button"> <button class="btn btn-doar" type="submit">Doar Agora</button></form><script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script><!-- FINAL FORMULARIO BOTAO PAGSEGURO --></div></div><div class="col-sm-3"><div class="card"><!--<form action="acts/pagseguro/examples/compra/lightbox.php" method="post">--><div class="card-body"><h4>R$30,00</h4><input type="hidden" name="valor" id="valor" value="30.00" class="form-control mask-money"><p class="mensal">Viagem ida e volta de Rio Claro para o Centro Infantil Boldrini em Campinas</p></div><div class="divider"></div><!--<button class="btn btn-doar" type="submit"> Doar Agora</button>
						</form>--><!-- INICIO FORMULARIO BOTAO PAGSEGURO --><form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;"><!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO --> <input type="hidden" name="code" value="FBE33E2C3A3ABA966484EFA8338208EF"> <input type="hidden" name="iot" value="button"> <button class="btn btn-doar" type="submit">Doar Agora</button></form><script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script><!-- FINAL FORMULARIO BOTAO PAGSEGURO --></div></div><div class="col-sm-3"><div class="card"><!--<form action="acts/pagseguro/examples/compra/lightbox.php" method="post">--><div class="card-body"><h4>R$51,00</h4><input type="hidden" name="valor" id="valor" value="51.00" class="form-control mask-money"><p class="mensal">Viagem ida e volta de Rio Claro para o Hospital Amaral Carvalho em Jaú</p></div><div class="divider"></div><!--<button class="btn btn-doar" type="submit"> Doar Agora</button>
						</form>--><!-- INICIO FORMULARIO BOTAO PAGSEGURO --><form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;"><!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO --> <input type="hidden" name="code" value="CE77B2B8ADAD421CC447AF80FFC53130"> <input type="hidden" name="iot" value="button"> <button class="btn btn-doar" type="submit">Doar Agora</button></form><script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script><!-- FINAL FORMULARIO BOTAO PAGSEGURO --></div></div><div class="col-sm-3"><div class="card" style="height: 213px;"><!--<form action="" method="post">--><div class="card-body"><div class="input-group"><div class="input-group-prepend"><div class="input-group-text">R$</div></div><input type="text" name="valor" id="valor" placeholder="Outro Valor" class="form-control mask-money"></div></div><div class="divider" style="margin-top: 66px;"></div><a href="https://pag.ae/7VbSnURxP"><button class="btn btn-doar" type="submit">Doar Agora</button></a><!--</form>--></div></div></div><!-- row--><div class="row doacao-valor doacao-mensal" style="display: flex !important ; display: none !important;"><div class="col-sm-4"><div class="card"><form action="http://pag.ae/7Vdhqdiga" method="post"><div class="card-body"><h4>R$12,00</h4><input type="hidden" name="valor" id="valor" value="12.00" class="form-control mask-money"><p class="mensal">Viagem ida e volta de Rio Claro para a Santa Casa de Piracicaba</p></div><div class="divider"></div><button class="btn btn-doar" type="submit" style="margin: 10px 60px;">Doar Agora</button></form></div></div><div class="col-sm-4"><div class="card"><form action="http://pag.ae/7Vedwq4-q" method="post"><div class="card-body"><h4>R$30,00</h4><input type="hidden" name="valor" id="valor" value="30.00" class="form-control mask-money"><p class="mensal">Viagem ida e volta de Rio Claro para o Centro Infantil Boldrini em Campinas</p></div><div class="divider"></div><button class="btn btn-doar" type="submit" style="margin: 10px 60px;">Doar Agora</button></form></div></div><div class="col-sm-4"><div class="card"><form action="http://pag.ae/7VedCaMm5" method="post"><div class="card-body"><h4>R$51,00</h4><input type="hidden" name="valor" id="valor" value="51.00" class="form-control mask-money"><p class="mensal">Viagem ida e volta de Rio Claro para o Hospital Amaral Carvalho em Jaú</p></div><div class="divider"></div><button class="btn btn-doar" type="submit" style="margin: 10px 60px;">Doar Agora</button></form></div></div><!--<div class="col-sm-3">
			  			<div class="card" style="height: 213px;">
			  			  <form action="" method="post">	
							  <div class="card-body">							  	
							    <div class="input-group">
							    	<div class="input-group-prepend">
							    		<div class="input-group-text">R$</div>
							    	</div> 
							    	<input type="text" name="valor" id="valor" placeholder="Outro Valor" class="form-control mask-money">
							    </div>
							  </div>
							  <div class="divider" style="margin-top: 66px;"></div>
							  <button class="btn btn-doar" type="submit"> Doar Agora</button>
						  </form>  
						</div>
			  		</div>--></div><!-- row--></div><!-- col-sm-12--></div><!-- row --></div><!-- container--></main> <?php
	require_once('footer.php');
?> <script>$('#btn-pontual').click(function(e) {
		e.preventDefault();

		$('.doacao-mensal').hide();
		$('.doacao-pontual').show();
		$(this).addClass('active');
		$('#btn-mensal').removeClass('active');		
		    		
    });

    $('#btn-mensal').click(function(e) {
		e.preventDefault();

		$('.doacao-pontual').hide();
		$('.doacao-mensal').show();	
		$(this).addClass('active');
		$('#btn-pontual').removeClass('active');
		    		
    });</script>