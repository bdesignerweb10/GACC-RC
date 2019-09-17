<?php
	require_once('header.php');
	$slides = $conn->query("select nome, link, img from tbl_slides where ativo = 1") or trigger_error($conn->error);
	$noticias = $conn->query("select * from tbl_noticias where ativo = 1 order by id_noticia desc LIMIT 2") or trigger_error($conn->error);
	$blog = $conn->query("select * from tbl_blog where ativo = 1 order by id_blog desc LIMIT 4 ") or trigger_error($conn->error);

	$eventos = $conn->query("select * from tbl_eventos where ativo = 1 order by id_evento LIMIT 4 ") or trigger_error($conn->error);
?>
<main>
	<div class="container-fluid">
		<div class="row">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	  			<div class="carousel-inner">
			  	<?php 		
			  		$count = 0;								
					if ($slides && $slides->num_rows > 0) {
					  	while($banner = $slides->fetch_object()) {	
				 ?>
	    			<div class="carousel-item <?php if($count == 0) echo 'active'; ?>" data-interval="10000">	      	
	      				<a href="<?php echo $banner->link; ?>"><img src="img/slides/<?php echo $banner->img; ?>" class="d-block w-100" alt="..."></a>
	    			</div>
			    	<?php $count++; } ?> 
				<?php } ?>		    
	  			</div>
	  			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    			<span class="sr-only">Previous</span>
	  			</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				</a>
			</div>
		</div><!-- row -->		
	</div><!-- container-->
	<div class="container-fluid">
		<div class="row video">	
			<div class="col-sm-7 media">
				<div class="row">
					<div class="col-sm-4 quem-somos">
						<h1>Quem Somos</h1>
					</div>
					<div class="col-sm-8 apresentacao">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent semper, velit non pellentesque facilisis, risus risus dapibus nisl, vitae dignissim arcu massa quis purus. Etiam et diam quam. Fusce facilisis interdum turpis, fermentum consequat eros scelerisque id.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent semper, velit non pellentesque facilisis, risus risus dapibus nisl, vitae dignissim arcu massa quis purus. Etiam et diam quam. Fusce facilisis interdum turpis, fermentum consequat eros scelerisque id.</p>
						<a href="gacc.php" class="btn btn-default">Saiba mais</a>
					</div>
				</div>
			</div>
			<div class="col-sm-5 media">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/KV16f_tXMdU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div><!-- row -->
		<div class="row atuar">
			<div class="col-sm-12 atuacao-gacc">
				<div class="row">
					<div class="col-sm-3 como-atuamos">
						<h1>Como Atuamos</h1>
					</div>
					<div class="col-sm-3">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent semper, velit non pellentesque facilisis, risus risus dapibus nisl, vitae dignissim arcu massa quis purus. Etiam et diam quam. Fusce facilisis interdum turpis, fermentum consequat eros scelerisque id.</p>
					</div>
					<div class="col-sm-3">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent semper, velit non pellentesque facilisis, risus risus dapibus nisl, vitae dignissim arcu massa quis purus. Etiam et diam quam. Fusce facilisis interdum turpis, fermentum consequat eros scelerisque id.</p>
					</div>
					<div class="col-sm-3">
						<img src="img/quem-somo1.png" alt="..." class="img-thumbnail" width="120">
						<img src="img/quem-somos2.png" alt="..." class="img-thumbnail" width="120">
						<a href="como-atuamos.php" class="btn btn-default">Conheça mais</a>
					</div>
				</div><!-- row -->
			</div>
		</div><!-- row -->	
		<div class="row resume">
			<div class="col-sm-12">
				<h1 class="title-resume">Em 2019</h1>
			</div>			
			<div class="col-sm-2 icons">
				<p><i class="fas fa-suitcase"></i></p>
				<p class="qtd">10</p>
				<p>Viagens</p>
			</div>
			<div class="col-sm-2 icons">
				<p><i class="fas fa-utensils"></i></p>
				<p class="qtd">10</p>
				<p>Suplementos <br>
				Alimentares</p>
			</div>
			<div class="col-sm-2 icons">
				<p><i class="fas fa-glass-whiskey"></i></p>
				<p class="qtd">10</p>
				<p>Litros de Leite</p>
			</div>
			<div class="col-sm-2 icons">
				<p><i class="fas fa-shopping-basket"></i></p>
				<p class="qtd">10</p>
				<p>Cestas Básicas</p>
			</div>
			<div class="col-sm-2 icons">
				<p><i class="fas fa-tooth"></i></p>
				<p class="qtd">10</p>
				<p>Consultas <br>
				Odontológicas</p>
			</div>
		</div> <!-- row -->
		<div class="row participe">
			<div class="col-sm-12">
				<h2>Participe</h2>
				<p>Você também pode ajudar o GACC participando de nossos eventos</p>
			</div>
			<div class="col-sm-2"></div>
			<?php								
				if ($eventos && $eventos->num_rows > 0) {
		  			while($ev = $eventos->fetch_object()) {	
	 		?>
			<div class="col-sm-2">
				<a href="evento.php?id=<?php echo $ev->id_evento; ?>"><img src="img/eventos/<?php echo $ev->img; ?>" class="img-thumbnail"></a>
			</div>
				<?php } ?> 
			<?php } ?>							
			<div class="col-sm-12 botao">
				<a href="eventos.php" class="btn btn-participe">Saiba mais</a>
			</div>
		</div><!-- row-->
	</div>		
	<div class="container">	
		<div class="row">	
			<div class="col-sm-8">
				<h2 class="title">Destaques</h2>
				<p class="border-news"></p>
				<div class="row">
				<?php								
					if ($noticias && $noticias->num_rows > 0) {
						while($news = $noticias->fetch_object()) {	
				?>						
					<div class="col-sm-6 news">
						<div class="card" style="width: 20rem;">
						  <img src="img/noticias/<?php echo $news->img; ?>" class="card-img-top" alt="...">
						  <div class="card-body">
						    <h5 class="card-title"><?php echo $news->titulo; ?></h5>
						    <p class="card-text"><?php echo nl2br (substr ($news->descricao, 0, 65)); ?> <a href="noticia-post.php?id=<?php echo $news->id_noticia; ?>">[...]</a></p>				    
						  </div>
						</div><!-- card-->								
					</div><!-- col-sm-6-->
					<?php } ?> 
				<?php } ?>
				<div class="col-sm-11 btns news">
					<a href="noticias.php" class="btn btn-default">Ver todas os destaques</a>
				</div>
				</div><!-- row -->
			</div><!-- col-sm-8-->
			<div class="col-sm-4">	
				<div class="col-sm-12">
					<h2 class="title-blog">Fique Informado</h2>
					<p class="border-blog"></p>
					<div class="card blog-card" style="width: 20rem; height: 329px;">
						<div class="card-body">	
							<?php								
								if ($blog && $blog->num_rows > 0) {
						  			while($post = $blog->fetch_object()) {	
					 		?>
							<div class="row blog">
						  		<div class="col-sm-5">
						  			<img src="img/blog/<?php echo $post->img; ?>">
						  		</div>	
						  		<div class="col-sm-7">					  					    				    
							    	<p class="card-text p-blog"><a href="post.php?id=<?php echo $post->id_blog; ?>"> <?php echo nl2br (substr ($post->nome, 0, 35)); ?></a></p>
						 		</div>
						 	</div>
								<?php } ?> 
					  		<?php } ?>						
					 	</div>
					</div>
					<div class="col-sm-12 btns">
						<a href="blog.php" class="btn btn-blog">Acessar Blog</a>
					</div>
				</div><!-- col-sm-4-->	
			</div><!-- col-sm-4-->			
		</div><!-- row -->		
	</div><!-- container -->
	<div class="container-fluid index-parceiros">
		<div class="row">
			<div class="col-sm-10">
				<h1 class="title-parceiros">Nossos Parceiros</h1>
			</div>	
			<div class="col-sm-2">
				<a href="empresa-parceira.php" class="btn btn-lg btn-doacao" style="width: 100%;">Faça Parte</a>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<img src="img/parceiros/asl.png" alt="..." class="img-thumbnail">
			</div>	
			<div class="col-sm-2">
				<img src="img/parceiros/auditec.png" alt="..." class="img-thumbnail">
			</div>	
			<div class="col-sm-2">
				<img src="img/parceiros/biotron.png" alt="..." class="img-thumbnail">
			</div>	
			<div class="col-sm-2">
				<img src="img/parceiros/centro-medico.png" alt="..." class="img-thumbnail">
			</div>	
			<div class="col-sm-2">
				<img src="img/parceiros/cja.png" alt="..." class="img-thumbnail">
			</div>	
			<div class="col-sm-2">
				<img src="img/parceiros/conatril.png" alt="..." class="img-thumbnail">
			</div>	
			<div class="col-sm-2">
				<img src="img/parceiros/cpa.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/crb.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/crios.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/demarchi.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/destaque.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/estacao-beleza.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/farmacia-rhaizes.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/farmacia-saojoao.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/fly.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/fricok.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/gaspa.png" alt="..." class="img-thumbnail">
			</div>			
			<div class="col-sm-2">
				<img src="img/parceiros/gera.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/hidraulica-saojudas.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/huna.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/jl.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/jobe.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/jog.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/john-crane.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/junior.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/kbt.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/kibarato.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/lab-paulista.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/ligatex.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/locastec.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/logo-brahma.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/logo-cartorio.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/logo-fuzza.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/logo-jaw.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/logo-primos.png" alt="..." class="img-thumbnail">
			</div>			
			<div class="col-sm-2">
				<img src="img/parceiros/logo-locaazul.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/logo-refrata.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/logo-riotec.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/logo-semprel.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/logo-tecnologia.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/logo-stamaria.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/logo-cacique.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/logo-watertec.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/logo-naturalle.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/logo-timoni.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/logo-mercadoqualidade.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/motohobby.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/nardini.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/orion.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/papelaria-contadores.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/pazetto.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/rancho-verde.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/targa-som.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/terra-hidro.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/tirreno.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/a-schulman.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/andorinha.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/beltrati.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/borracharia-baiano.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-2">
				<img src="img/parceiros/gml.png" alt="..." class="img-thumbnail">
			</div>
		</div>
	</div>
</main>
<?php
	require_once('footer.php');
?>