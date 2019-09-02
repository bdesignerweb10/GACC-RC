<?php
	require_once('header.php');
	$id = $_GET["id"];
	$noticia = $conn->query("select * from tbl_noticias where ativo = 1 and id_noticia = $id") or trigger_error($conn->error);
	$noticias = $conn->query("select * from tbl_noticias where ativo = 1 order by id_noticia desc LIMIT 5") or trigger_error($conn->error);
?> <main><div class="container"><div class="row history"> <?php								
				if ($noticia && $noticia->num_rows > 0) {
			  	while($post = $noticia->fetch_object()) {	
		 	?> <div class="col-sm-6 margin-default"><h1 class="title-page"><?php echo $post->titulo; ?></h1></div><div class="col-sm-3 margin-default"><p class="card-title headline-sub" style="text-align: right; padding: 20px 0;"><?php echo $post->categoria; ?> Publicado em <?php if($post->data_publicacao != null) {$timestamp = strtotime($post->data_publicacao); echo date('d/m/Y', $timestamp);} else {echo 'Sem data';} ?></p></div><div class="col-sm-9"><p><?php echo nl2br (substr ($post->descricao, 0)); ?></p><p><img class="blog-img" src="img/noticias/<?php echo $post->img; ?>"></p></div> <?php } ?> <?php } ?> <div class="col-sm-3"><h4 class="title-page">Outras notícias</h4><div class="card blog-card" style="width: 20rem; height: 329px;"><div class="card-body"> <?php								
							if ($noticias && $noticias->num_rows > 0) {
					  			while($news = $noticias->fetch_object()) {	
				 		?> <div class="row blog"><div class="col-sm-5"><img src="img/noticias/<?php echo $news->img; ?>"></div><div class="col-sm-7"><p class="card-text"><a href="noticia-post.php?id=<?php echo $news->id_noticia; ?>"> <?php echo nl2br (substr ($news->titulo, 0, 35)); ?> ...</a></p></div></div> <?php } ?> <?php } ?> </div></div></div></div><!-- row --></div><!-- container--></main> <?php
	require_once('footer.php');
?>