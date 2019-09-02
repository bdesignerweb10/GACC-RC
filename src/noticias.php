<?php
	require_once("header.php");	
	$noticias = $conn->query("select * from tbl_noticias where ativo = 1") or trigger_error($conn->error);
?>
<main>
	<div class="container-fluid capa">
		<div class="row diagnosticos">
			<div class="col-sm-10 offset-1 margin-default">
				<h1 class="title-page">Notícias</h1>
			</div>			
		</div><!-- row -->
	</div><!-- container -->
	<div class="container default">
		<div class="row">
			<div class="col-sm-11"></div>			
			<div class="col-sm-1">
				<a href="index.php" class="btn btn-card"> Voltar</a>				
			</div><!-- col-sm-4-->
			<div class="col-sm-2"></div>
			<div class="col-sm-10 border">
		</div><!-- row-->					
	</div><!--container -->	
	<div class="container default">
		<div class="row">
			<?php								
				if ($noticias && $noticias->num_rows > 0) {
			  	while($news = $noticias->fetch_object()) {	
		 	?>
		 	<div class="col-sm-2"></div>
		 	<div class="col-sm-3">
		 		<img class="blog-img" src="img/noticias/<?php echo $news->img; ?>">
		 	</div>
			<div class="col-sm-7">
				<h5 class="card-title headline"><?php echo $news->titulo; ?></h5>
				<p class="post-text"><?php echo nl2br (substr ($news->descricao, 0, 250)); ?> [...]</p>
				<p><a href="noticia-post.php?id=<?php echo $news->id_noticia; ?>" class="blog-link">Saiba Mais</a></p>
			</div>
			<div class="col-sm-10 offset-2">
				<hr>
			</div>
				<?php } ?> 
			<?php } ?>
		</div><!-- row -->	
	</div>
</main>
<?php
	require_once("footer.php");
?>