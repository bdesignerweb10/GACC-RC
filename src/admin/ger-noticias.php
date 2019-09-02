<?php
	require_once('header.php');
	$noticias = $conn->query("select id_noticia, titulo, ativo, data_publicacao from tbl_noticias") or trigger_error($conn->error);	
?>
<main class="maintable">
	<div class="container">
		<div class="row ger-default">
			<div class="col-sm-8"></div>
			<div class="col-sm-4">
				<button type="button" class="btn btn-default btn-lg btn-add" id="btn-add-noticia"><i class="fas fa-plus"></i> Nova Noticia</button>
			</div><!-- col-sm-4-->
			<div class="col-sm-12 ger-servicos">
				<table class="table table-hover">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Título da notícia</th>				      
				      <th scope="col">Data postagem</th>				      
				      <th scope="col">Ativo</th>
				      <th scope="col">Opções</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php if ($noticias && $noticias->num_rows > 0) {
			    		while($news = $noticias->fetch_object()) {
			    		$id = $news->id_noticia;
				    ?>
				    <tr>
				      <th scope="row"><?php echo $news->id_noticia; ?></th>
				      <td><?php echo $news->titulo; ?></td>				      
				      <td><?php if($news->data_publicacao != null) {$timestamp = strtotime($news->data_publicacao); echo date('d/m/Y', $timestamp);} else {echo 'Sem data';} ?></td>
				      <?php if ($news->ativo == 1) { 
			        	$ativo ='fas fa-check text-success'; 
				      	} else { 
				      		$ativo ='fas fa-times text-danger';
				      	} 
				      ?>
				      <td><span><i class='<?php echo $ativo; ?>'></span></td>				      
				      <td>
				      	<span><a href="" class="text-primary btn-edit-noticia" data-id="<?php echo $id;?>" alt="Editar Noticia<?php echo $news->id_noticia; ?>" title="Editar Noticia <?php echo $news->id_noticia; ?>"><i class="fas fa-edit"></i></a></span>
				      	<span><a href="" class="text-danger btn-del-noticia" data-id="<?php echo $id;?>" alt="Remover Noticia <?php echo $news->id_noticia; ?>" title="Remover Noticia <?php echo $post->id_noticia; ?>"><i class="fas fa-trash-alt"></i></a></span>
				      </td>
				    </tr>
				    <?php } ?>			        	
						<?php } else { ?>					
							<tr>
					        	<td colspan="5" align="center">Não há dados a serem exibidos para a listagem.</td>
				            </tr>
					<?php } ?>
				  </tbody>
				</table>
			</div><!-- col-sm-12-->
		</div><!-- row -->
	</div><!-- container-->
</main>

<main class="mainform">
	<div class="container">
		<div class="row ger-default">
			<div class="col-sm-8"></div>
			<div class="col-sm-4">
				<button type="button" class="btn btn-default btn-lg btn-voltar" id="btn-voltar-noticia"><i class='fa fa-arrow-left'></i> Voltar</button>
			</div><!-- col-sm-4-->	
			<div class="col-sm-8 form-border">	
				<h3>Gerenciamento de postagens de Noticia</h3>			
				<form class="form-row" id="form-noticia" data-toggle="validator" action="acts/acts.noticias.php" method="POST">
					<div class="form-group col-sm-1">
						<label for="id">ID</label>
				    	<input type="number" class="form-control" id="id" name="id" aria-describedby="id" maxlength="11" disabled />
					</div>						
			      	<div class="form-group col-sm-11">
						<label for="formGroupExampleInput">Titulo</label>
					    <input type="text" class="form-control" id="nome" name="nome" placeholder="Titulo do post" required>
					</div>
					<div class="form-group col-sm-12">
					    <label for="img">Imagem do Slide</label>
					    <input type="file" class="form-control-file" id="img" name="img" aria-describedby="img" placeholder="Insira a imagem" required>				    
					</div>				  
				  	<div class="form-group col-sm-12">
				    	<textarea class="form-control" id="descricao" name="descricao" rows="5" placeholder="Descrição do post" required></textarea>
				  	</div>
				  	<div class="form-group col-sm-12">				      
				    	<div class="checkbox" style="margin-left: 20px;">
							<label>
								<input type="checkbox" id="ativo" name="ativo" data-toggle="toggle" data-on="Sim" data-off="Não" data-onstyle="success" data-offstyle="danger">
							Se o estiver ativo, aparecerá na página inicial do site
							</label>
					   	</div>
			      	</div>			      	
				  	<div class="col-sm-8"></div>
				  	<div class="col-sm-8"></div>
				  	<div class="col-sm-4">
				  		<button type="submit" class="btn btn-form btn-primary mb-2" id="btn-salvar-noticia">Salvar Noticia</button>
				  	</div>
				</form>
			</div><!-- col-sm-8-->
			<div class="col-sm-4 access">
				<?php
					require_once('acesso-rapido.php');
				?>
			</div>
		</div><!-- row -->
	</div><!-- container-->
</main>
<?php
	require_once('footer.php');
?>