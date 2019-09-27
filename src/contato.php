<?php
	require_once('header.php');
?>
<main>
	<div class="container">
		<div class="row contato">
			<div class="col-sm-12 margin-default">
				<h1 class="title-page">Fale Conosco</h1>
			</div>
			<div class="col-sm-6">
				<p>Envie uma mensagem e entreremos em contato com você.</p>
				<div class="card">
  					<div class="card-body">
						<form action="acts/acts.contato.php" method="post" enctype="multipart/form-data">
						  <div class="form-row">
						    <div class="form-group col-md-12">
						      <label for="nome">Nome</label>
						      <input type="text" class="form-control" name="nome" id="nome" placeholder="Informe seu nome" required>
						    </div>
						    <div class="form-group col-md-12">
						      <label for="assunto">Assunto</label>
						      <input type="text" class="form-control" name="assunto" id="assunto" placeholder="Informe o asssunto" required>
						    </div>
						    <div class="form-group col-md-12">
						      <label for="email">E-mail</label>
						      <input type="email" class="form-control" name="email" id="email" placeholder="Informe seu e-mail" required>
						    </div>
						  </div>						  				  
						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="telefone">Telefone</label>
						      <input type="tel" class="form-control" name="telefone" id="telefone" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" maxlength="16" placeholder="Telefone" required>
						    </div>
						    <div class="form-group col-md-6">
						      <label for="celular">Celular</label>
						      <input type="text" class="form-control" name="celular" id="celular" maxlength="16" placeholder="Celular" required>
						    </div>				    
						  </div>
						  <div class="form-row">
						  	<textarea class="form-control" name="mensagem" id="mensagem" cols="30" rows="7" placeholder="Mensagem..." required></textarea>
						  </div>	
						  <div class="col-sm-12 btns">				  
						  	<button type="submit" class="btn btn-contato">Enviar</button>
						  </div>	
						</form>
					</div><!-- card-body-->
				</div><!-- card-->
			</div><!-- col-sm-6-->
			<div class="col-sm-6 contato-info">
				<p><i class="fas fa-envelope"></i> contato@gacc-rc.org.br</p>
				<p><i class="fas fa-phone"></i> (19) 3534-5612</p>
				<p><i class="fas fa-phone"></i> (19) 99621-9518</p>
				<p><i class="fas fa-map-marker-alt"></i> Av P17, 253, Vila Paulista</p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3688.369362529507!2d-47.55293228557301!3d-22.41511952614544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c7da410b7ba4f7%3A0x1a0fbb7b3869db63!2sAv.+P+17%2C+253+-+Vila+Paulista%2C+Rio+Claro+-+SP%2C+13506-827!5e0!3m2!1spt-BR!2sbr!4v1566406752733!5m2!1spt-BR!2sbr" width="540" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div><!-- col-sm-6-->
		</div><!-- row -->
	</div><!-- container-->
</main>
<?php
	require_once('footer.php');
?>