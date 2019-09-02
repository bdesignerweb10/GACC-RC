<?php
	require_once('header.php');
?>
<main>
	<div class="container">
		<div class="row ajuda">
			<div class="col-sm-12 margin-default">
				<h2 class="title-page" style="text-align: center;">“Os cabelos podem cair, mas ainda sobrará um fio. De esperança”</h2>
			</div>
			<div class="col-sm-12">
				<div class="card card-doacao">
					<p style="text-align: center;">Doando o valor referente ao pedágio de uma viagem,<br /> você contribuirá para que nossas crianças deem mais um passo em direção à cura.</p>
				  	<div class="card-body">
				    	<a href="https://pag.ae/7VbSnURxP" target="_blank" class="btn btn-lg btn-doacao">Doação Pontual</a>
				    	<a href="" class="btn btn-lg btn-doacao">Doação Mensal</a>
				  	</div>
				  	<p>Escolha um valor</p>
				  	<div class="row doacao-valor">
				  		<div class="col-sm-3">
				  			<div class="card" style="height: 247px;">
							  <div class="card-body">
							    <h4>R$12,00</h4>
							    <p class="mensal">Valor mensal*</p>
							    <p class="mensal">Viagem ida e volta de Rio Claro para a Santa Casa de Piracicaba</p>
							  </div>
							  <div class="divider"></div>
							  <a href="http://pag.ae/7VbSoSbnR" target="_blank" class="btn btn-doar"> Doar Agora</a>
							</div>
				  		</div>
				  		<div class="col-sm-3">
				  			<div class="card">
							  <div class="card-body">
							    <h4>R$30,00</h4>
							    <p class="mensal">Valor mensal*</p>
							    <p class="mensal">Viagem ida e volta de Rio Claro para o Centro Infantil Boldrini em Campinas</p>
							  </div>
							  <div class="divider"></div>
							  <a href="http://pag.ae/7VbSpk7b1" target="_blank" class="btn btn-doar"> Doar Agora</a>
							</div>
				  		</div>
				  		<div class="col-sm-3">
				  			<div class="card">
							  <div class="card-body">
							    <h4>R$51,00</h4>
							    <p class="mensal">Valor mensal*</p>
							    <p class="mensal">Viagem ida e volta de Rio Claro para o Hospital Amaral Carvalho em Jaú</p>
							  </div>
							  <div class="divider"></div>
							  <a href="http://pag.ae/7VbSpAvw8" target="_blank" class="btn btn-doar"> Doar Agora</a>
							</div>
				  		</div>
				  		<div class="col-sm-3">
				  			<div class="card" style="height: 247px;">
							  <div class="card-body">
							    <div class="input-group">
							    	<div class="input-group-prepend">
							    		<div class="input-group-text">R$</div>
							    	</div> 
							    	<input type="text" placeholder="Outro Valor" class="form-control mask-money">
							    </div>
							  </div>
							  <div class="divider"></div>
							  <a href="http://pag.ae/7VbSpAvw8" target="_blank" class="btn btn-doar"> Doar Agora</a>
							</div>
				  		</div>
				  	</div>
				</div>
				<br />
				<p>Prefere que nosso mensageiro colete sua doação em dinheiro? sem problemas!</p>
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
					</div><!-- card-body-->
				</div><!-- card-->
			</div><!-- col-sm-12-->	
		</div><!-- row -->
	</div><!-- container-->
</main>
<?php
	require_once('footer.php');
?>