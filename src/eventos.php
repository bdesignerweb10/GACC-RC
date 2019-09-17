<?php
	require_once('header.php');
	$id = $_GET["id"];
	$eventos = $conn->query("select * from tbl_eventos where ativo = 1 order by id_evento") or trigger_error($conn->error);
?>
<main>
	<div class="container">
		<div class="row ajuda">
			<?php								
				if ($eventos && $eventos->num_rows > 0) {
			  	while($ev = $eventos->fetch_object()) {	
		 	?>
		 	<div class="col-sm-4 margin-default">
				<img src="img/eventos/<?php echo $ev->img; ?>" alt="..." class="img-thumbnail">
			</div>
			<div class="col-sm-8 margin-default">
				<h1 class="title-page"><?php echo $ev->nome; ?></h1>	
				<p><strong>Data do evento: <?php echo date('d/m/Y H:i', strtotime($ev->data_hora)); ?> hs</strong></p>
				<p><?php echo nl2br (substr ($ev->descricao, 0,100)); ?></p>
				<a href="evento.php?id=<?php echo $ev->id_evento; ?>" class="btn btn-participe" style="margin:10px 0;">Conferrir evento</a>			
			</div>			
				<?php } ?> 
			<?php } ?>
		</div><!-- row-->		
	</div><!-- container-->
</main>
<?php
	require_once('footer.php');
?>