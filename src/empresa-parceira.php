<?php
	require_once('header.php');
?>
<main>
	<div class="container">
		<div class="row ajuda">
			<div class="col-sm-12 margin-default">
				<h1 class="title-page">Projeto Empresa Parceira</h1>
			</div>
			<div class="col-sm-12">				
				<p>A consciência cidadã se tornou mais presente na vida das pessoas. De um lado colaboradores cada vez mais engajados e participativos e do outro, consumidores exigentes que se sentem mais confortáveis comprando produtos que geram algum impacto para uma causa social.</p>
				<p>Diante desse cenário, o diferencial das empresas deixou de ser o preço e passou a ser o relacionamento com a sociedade. O quanto sua empresa se preocupa com a comunidade em que está inserida? </p>
				<p>Pensando nisso, o GACC desenvolveu o projeto “Empresa Parceira”, uma iniciativa que visa aproximar-se de empresas com valores éticos e humanitários, que se sensibilizam com a missão da Instituição e, sobretudo, confiam em um futuro repleto de oportunidades às crianças atendidas.</p>
				<p><strong>Faça parte!</strong></p>
				<p>Preencha os campos abaixo para receber a proposta detalhada e todos os benefícios.</p>
				<div class="card">
  					<div class="card-body">
						<form>
						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4">Empresa</label>
						      <input type="text" class="form-control" name="empresa" id="empresa" placeholder="Informe a empresa" required>
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputPassword4">Responsável</label>
						      <input type="text" class="form-control" name="responsavel" id="responsavel" placeholder="Informe o responsável" required>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputAddress">E-mail</label>
						    <input type="email" class="form-control" name="email" id="email" placeholder="Informe o E-mail" required>
						  </div>				  
						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="telefone">Telefone</label>
						      <input type="tel" class="form-control" name="telefone" id="telefone" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" maxlength="16" placeholder="Telefone" required>
						    </div>
						    <div class="form-group col-md-6">
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
				<br/>
				<p>Se preferir, entre em contato: <span><i class="fas fa-phone-square"></i> (19) 3534.5612</span> | <span><i class="fas fa-phone-square"></i> (19) 99621.9518</span></p>
			</div>	
		</div><!-- row -->
	</div><!-- container-->
</main>
<?php
	require_once('footer.php');
?>