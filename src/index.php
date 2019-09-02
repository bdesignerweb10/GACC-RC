<?php
	require_once('header.php');
	$slides = $conn->query("select nome, link, img from tbl_slides where ativo = 1") or trigger_error($conn->error);
	$noticias = $conn->query("select * from tbl_noticias where ativo = 1 order by id_noticia desc LIMIT 2") or trigger_error($conn->error);
	$blog = $conn->query("select * from tbl_blog where ativo = 1 order by id_blog desc LIMIT 4 ") or trigger_error($conn->error);
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
	<div class="container">
		<div class="row default">		
		<div class="col-sm-8">
			<h2 class="title">Últimas notícias</h2>
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
				<a href="noticias.php" class="btn btn-default">Ver todas as notícias</a>
			</div>
			</div><!-- row -->
		</div><!-- col-sm-8-->
		<div class="col-sm-4">	
			<div class="col-sm-12">
				<h2 class="title-blog">Blog</h2>
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
						    	<p class="card-text"><a href="post.php?id=<?php echo $post->id_blog; ?>"> <?php echo nl2br (substr ($post->nome, 0, 35)); ?> ...</a></p>
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
		</div><!-- row --.
	</div><!-- container -->
</main>
<?php
	require_once('footer.php');
?>