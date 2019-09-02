<?php
	require_once('header.php');
?>
<main>
	<div class="container">
		<div class="row ajuda">
			<div class="col-sm-12 margin-default">
				<h1 class="title-page">Outras Formas de Ajudar</h1>
			</div>
			<div class="col-sm-12">
				<p>O GACC possui inúmeras iniciativas para garantir a continuidade e melhoria dos serviços prestados gratuitamente às famílias assistidas.</p>
				<h3>DOAÇÃO DE ALIMENTOS</h3>
				<p>Entregamos todo mês cerca de 25 cestas básicas a partir dos alimentos que recebemos. Por isso, ficaremos imensamente agradecidos se puder doar algum dos itens: arroz, feijão, açúcar, óleo, pó de café, achocolatado, bolacha doce, bolacha salgada, macarrão, molho de tomate, fubá, farinha de trigo e leite.</p>
				<h3>DOAÇÃO DE SUPLEMENTOS ALIMENTARES</h3>
				<p>Devido à falta de apetite e perda de peso, algumas crianças, sob orientação médica, utilizam suplementos alimentares. Fazemos uso dos seguintes suplementos: Pediasure, Nutren, Sustagen e Ensure.</p>
				<h3>DOAÇÃO DE BENS MATERIAIS</h3>
				<p>Todo mês nós realizamos um bazar em nossa sede. Vendemos roupas, acessórios, calçados, brinquedos, eletroeletrônicos e eletro portáteis. Aceitamos a doação desses itens em bom estado. Se preferir, podemos retirar sua doação. Gentileza solicitar a retirada pelo telefone: <strong>(19) 3534.5612</strong>.</p>
				<p class="text-info">OBS: por questão de espaço, não coletamos doações de itens de grande porte. Pedimos a compreensão de todos.</p>
				<h3>GACC EM FESTA</h3>
				<p>Ganhar presentes é muito bom, mas poder compartilhá-los e ajudar outras pessoas é melhor ainda!
Aniversário, casamento, bodas, enfim, todo evento é uma oportunidade para presentear quem mais precisa. </p>
				<p>Você pode angariar donativos ou recursos financeiros e revertê-los integralmente à nossa Instituição. </p>
				<p>Ficamos a disposição para ajudar na divulgação do seu evento e no suporte que precisar.</p>
				<h3>TIVE UMA IDEIA PRO GACC!</h3>
				<p>Pensou em alguma iniciativa para nossa Instituição? Maravilha! Conte-nos mais sobre sua ideia.</p>
				<div class="card">
  					<div class="card-body">
						<form>
						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="nome">Nome</label>
						      <input type="text" class="form-control" name="nome" id="nome" placeholder="Informe seu nome" required>
						    </div>
						    <div class="form-group col-md-6">
						      <label for="email">E-mail</label>
						      <input type="text" class="form-control" name="email" id="email" placeholder="Informe seu e-mail" required>
						    </div>
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
						  <div class="form-row">
						  	<textarea class="form-control" name="mensagem" id="mensagem" cols="30" rows="10" required></textarea>
						  </div>	
						  <div class="col-sm-12 btns">				  
						  	<button type="submit" class="btn btn-ajuda">Enviar</button>
						  </div>	
						</form>
					</div><!-- card-body-->
				</div><!-- card-->
			</div>	
		</div><!-- row -->
	</div><!-- container-->
</main>
<?php
	require_once('footer.php');
?>