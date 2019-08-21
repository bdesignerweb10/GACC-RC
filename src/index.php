<?php
	require_once('header.php');
?>
<main>
	<div class="container-fluid">
		<div class="row">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>			    
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="img/banners/banner1.png" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="img/banners/banner2.png" class="d-block w-100" alt="...">
			    </div>			    
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div><!-- row -->		
	</div><!-- container-->
	<div class="container">
		<div class="row default">		
		<div class="col-sm-8">
			<h2 class="title">Últimas notícias</h2>
			<p class="border-news"></p>
			<div class="row">						
				<div class="col-sm-6 news">
					<div class="card" style="width: 20rem;">
					  <img src="img/noticias/noticia1.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content <a href="#">[...]</a></p>				    
					  </div>
					</div><!-- card-->								
				</div><!-- col-sm-4-->
				<div class="col-sm-6 news">	
					<div class="card" style="width: 20rem;">
					  <img src="img/noticias/noticia1.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content <a href="#">[...]</a></p>				    
					  </div>
					</div><!-- card-->
					<div class="col-sm-11 btns">
						<a href="#" class="btn btn-default">Ver todas as notícias</a>
					</div>				
				</div><!-- col-sm-4-->
			</div><!-- row -->
		</div><!-- col-sm-8-->
		<div class="col-sm-4">	
			<div class="col-sm-12">
				<h2 class="title-blog">Blog</h2>
				<p class="border-blog"></p>
				<div class="card blog-card" style="width: 20rem; height: 329px;">
					<div class="card-body">	
						<div class="row blog">	
					  		<div class="col-sm-5">
					  			<img src="img/blog/blog-2.jpg">
					  		</div>	
					  		<div class="col-sm-7">					  					    				    
						    	<p class="card-text"><a href=""> Lorem ipsum dolor sit amet, consect ...</a></p>
					 		</div>
					 	</div>
						
						<div class="row blog">	
					  		<div class="col-sm-5">
					  			<img src="img/blog/blog-2.jpg">
					  		</div>	
					  		<div class="col-sm-7">					  					    				    
						    	<p class="card-text"><a href=""> Lorem ipsum dolor sit amet, consect ...</a></p>
					 		</div>
					 	</div>

					 	<div class="row blog">	
					  		<div class="col-sm-5">
					  			<img src="img/blog/blog-2.jpg">
					  		</div>	
					  		<div class="col-sm-7">					  					    				    
						    	<p class="card-text"><a href=""> Lorem ipsum dolor sit amet, consect ...</a></p>
					 		</div>
					 	</div>

					 	<div class="row blog">	
					  		<div class="col-sm-5">
					  			<img src="img/blog/blog-2.jpg">
					  		</div>	
					  		<div class="col-sm-7">					  					    				    
						    	<p class="card-text"><a href=""> Lorem ipsum dolor sit amet, consect ...</a></p>
					 		</div>
					 	</div>
				 	</div>
				 	
				</div>
				<div class="col-sm-12 btns">
					<a href="#" class="btn btn-blog">Acessar Blog</a>
				</div>
			</div><!-- col-sm-4-->	
		</div><!-- col-sm-4-->			
		</div><!-- row --.
	</div><!-- container -->
</main>
<?php
	require_once('footer.php');
?>