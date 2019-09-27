<?php
	require_once('header.php');
	$id = $_GET['id'];
	$eventos = $conn->query("select * from tbl_eventos where id_evento = $id and ativo = 1") or trigger_error($conn->error);
	$galeria = $conn->query("select * from tbl_galeria_eventos where id_evento = $id") or trigger_error($conn->error);
?>
<main>	
	<div class="container">
 		<div class="row ger-default">
 			<form enctype="multipart/form-data" method="POST" action="upload.php"> 			
 				<div class="row">
 				<?php if ($eventos && $eventos->num_rows > 0) {
		    		while($ev = $eventos->fetch_object()) {
		    		$id = $ev->id_evento;
				?>	
 					<div class="form-group col-sm-1">
				    	<label for="id">id</label>
				      	<input type="text" class="form-control" id="id" name="id" value="<?php echo $ev->id_evento; ?>" disabled>
				      	<input name="id" type="hidden" id="id" value="<?php echo $ev->id_evento; ?>">
			      	</div>
 					<div class="form-group col-sm-4">
				    	<label for="grupo">Evento</label>
				      	<input type="text" class="form-control" id="evento" name="evento" value="<?php echo $ev->nome; ?>" disabled>
			      	</div>
			    	<?php } ?>
			    <?php } ?>	  				      	
	 				<div class="col-md-9">
	 					<input type="file" name="arquivo[]" multiple="multiple" /><br><br>	 					
	 				</div>
	 				<div class="col-md-3">
	 					<input class="btn btn-form btn-primary mb-2" name="enviar" type="submit" value="Salvar">
	 				</div>
 				</div>
 			</form>
 		</div>
 		<div class="row ger-default">
 		<?php if ($galeria && $galeria->num_rows > 0) {
    		while($fotos = $galeria->fetch_object()) {
    		$id = $fotos->id_galeria;
		?>	
			<div class="col-sm-3" style="margin: 10px 0;">
				<img src="../img/eventosgaleria/<?php echo $fotos->img; ?>" alt="..." class="img-thumbnail">
				<div class="card-footer text-muted">
					<span><a href="del-image.php?id=<?php echo $id;?>" class="text-danger btn-del-foto" data-id="<?php echo $id;?>" alt="Remover foto<?php echo $fotos->id_galeria; ?>" title="Remover foto <?php echo $fotos->id_galeria; ?>"><i class="fas fa-trash-alt"></i> Remover Foto</a></span>
				</div>
			</div>	
			<?php } ?>
		<?php } ?>	
 		</div><!-- row -->
	</div>
</main>
<?php
	require_once('footer.php');
?>