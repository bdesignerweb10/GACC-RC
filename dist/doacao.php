<?php
	require_once('header.php');
?> <main><div class="container"><div class="row ajuda"><div class="col-sm-12 margin-default"><img src="img/doacao.png" alt="Psicologia" class="img-thumbnail"></div><div class="col-sm-12 margin-default"><h2 class="title-page" style="text-align: center;">“Os cabelos podem cair, mas ainda sobrará um fio. De esperança”</h2></div><div class="col-sm-12"><div class="card card-doacao"><p style="text-align: center;">Doando o valor referente ao pedágio de uma viagem,<br>você contribuirá para que nossas crianças deem mais um passo em direção à cura.</p><iframe width="560" height="315" src="https://www.youtube.com/embed/qUFdZRxv3SU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><div class="card-body"><form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST"><button name="tipo" value="0" class="btn btn-lg btn-doacao">Doação Pontual</button> <button name="tipo" value="1" class="btn btn-lg btn-doacao">Doação Mensal</button></form></div> <?php
				  		$tipo = $_POST["tipo"];				  			
				  	?> <p>Escolha um valor</p><div class="row doacao-valor"><div class="col-sm-3"><div class="card"> <?php 
							  	if ($tipo == 0) {
							  		$urlp12 = 'acts/pagseguro/examples/compra/lightbox.php';
							  		$urlp30 = 'acts/pagseguro/examples/compra/lightbox.php';
							  		$urlp51 = 'acts/pagseguro/examples/compra/lightbox.php';
							  		$urlpv = 'acts/pagseguro/examples/compra/lightbox.php';
							  	} else {
							  		$urlp12 = 'http://pag.ae/7Vdhqdiga';
							  		$urlp30 = 'http://pag.ae/7Vedwq4-q';
							  		$urlp51 = 'http://pag.ae/7VedCaMm5';
							  	}
							  ?> <form action="<?php echo $urlp12; ?>" method="post"><div class="card-body"><h4>R$12,00</h4><input type="hidden" name="valor" id="valor" value="12.00" class="form-control mask-money"><p class="mensal">Viagem ida e volta de Rio Claro para a Santa Casa de Piracicaba</p></div><div class="divider"></div><button class="btn btn-doar" type="submit">Doar Agora</button></form></div></div><div class="col-sm-3"><div class="card"><form action="<?php echo $urlp30; ?>" method="post"><div class="card-body"><h4>R$30,00</h4><input type="hidden" name="valor" id="valor" value="30.00" class="form-control mask-money"><p class="mensal">Viagem ida e volta de Rio Claro para o Centro Infantil Boldrini em Campinas</p></div><div class="divider"></div><button class="btn btn-doar" type="submit">Doar Agora</button></form></div></div><div class="col-sm-3"><div class="card"><form action="<?php echo $urlp51; ?>" method="post"><div class="card-body"><h4>R$51,00</h4><input type="hidden" name="valor" id="valor" value="51.00" class="form-control mask-money"><p class="mensal">Viagem ida e volta de Rio Claro para o Hospital Amaral Carvalho em Jaú</p></div><div class="divider"></div><button class="btn btn-doar" type="submit">Doar Agora</button></form></div></div><div class="col-sm-3"><div class="card" style="height: 213px;"><form action="<?php echo $urlp51; ?>" method="post"><div class="card-body"><div class="input-group"><div class="input-group-prepend"><div class="input-group-text">R$</div></div><input type="text" name="valor" id="valor" placeholder="Outro Valor" class="form-control mask-money"></div></div><div class="divider" style="margin-top: 66px;"></div><button class="btn btn-doar" type="submit">Doar Agora</button></form></div></div></div></div><br><!--<p>Prefere que nosso mensageiro colete sua doação em dinheiro? sem problemas!</p>
				<p>Preencha os campos abaixo que entraremos em contato.</p>

				<div class="card">
  					<div class="card-body">
						<form>						  				  
						  <div class="form-row">
						  	<div class="form-group col-md-6">
						      <label for="nome">Nome</label>
						      <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
						    </div>
						    <div class="form-group col-md-3">
						      <label for="telefone">Telefone</label>
						      <input type="tel" class="form-control" name="telefone" id="telefone" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" placeholder="Telefone" maxlength="16" required>
						    </div>
						    <div class="form-group col-md-3">
						      <label for="celular">Celular</label>
						      <input type="tel" class="form-control" name="celular" id="celular" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" maxlength="16" placeholder="Celular" required>
						    </div>				    
						  </div>
						  <div class="col-sm-12 btns">				  
						  	<button type="submit" class="btn btn-ajuda">Enviar</button>
						  </div>	
						</form>
					</div>
				</div>--></div><!-- col-sm-12--></div><!-- row --></div><!-- container--></main> <?php
	require_once('footer.php');
?>