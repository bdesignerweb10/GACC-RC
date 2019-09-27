<?php
	require_once('header.php');
	$eventos = $conn->query("select * from tbl_eventos order by realizado") or trigger_error($conn->error);
?>
<main class="maintable">
	<div class="container">
		<div class="row ger-default">
			<div class="col-sm-8"></div>
			<div class="col-sm-4">
				<button type="button" class="btn btn-default btn-lg btn-add" id="btn-add-evento"><i class="fas fa-plus"></i> Novo Evento</button>
			</div><!-- col-sm-4-->
			<div class="col-sm-12 ger-servicos">
				<table class="table table-hover">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Nome do evento</th>
				      <th scope="col">Capa</th>
				      <th scope="col">Data do evento</th>			      
				      <th scope="col">Ativo</th>
				      <th scope="col">Realizado</th>
				      <th scope="col">Opções</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php if ($eventos && $eventos->num_rows > 0) {
			    		while($ev = $eventos->fetch_object()) {
			    		$id = $ev->id_evento;
				    ?>
				    <tr>
				      <th scope="row"><?php echo $ev->id_evento; ?></th>
				      <td><?php echo $ev->nome; ?></td>
				      <td><img src="../img/eventos/<?php echo $ev->img; ?>" style="width: 70px;"></td>
				      <td><?php if($ev->data_hora != null) {$timestamp = strtotime($ev->data_hora); echo date('d/m/Y', $timestamp);} else {echo 'Sem data';} ?></td>
				      <?php if ($ev->ativo == 1) { 
			        	$ativo ='fas fa-check text-success'; 
				      	} else { 
				      		$ativo ='fas fa-times text-danger';
				      	} 
				      ?>
				      <td><span><i class='<?php echo $ativo; ?>'></span></td>
				      <?php if ($ev->realizado == 1) { 
			        	$realizado ='fas fa-check text-success'; 
				      	} else { 
				      		$realizado ='fas fa-times text-danger';
				      	} 
				      ?>	
				      <td><span><i class='<?php echo $realizado; ?>'></span></td>				      
				      <td>
				      	<span><a href="" class="text-primary btn-edit-evento" data-id="<?php echo $id;?>" alt="Editar evento<?php echo $ev->id_evento; ?>" title="Editar evento <?php echo $ev->id_evento; ?>"><i class="fas fa-edit"></i></a></span>
				      	<span><a href="ger-galeria.php?id=<?php echo $id;?>" class="text-success btn-gallery" data-id="<?php echo $id;?>" alt="Inserir Fotos na Galeria<?php echo $ev->id_evento; ?>" title="Inserir Fotos Galeria <?php echo $ev->id_evento; ?>"><i class="far fa-images" ></i></span>
				      	<span><a href="" class="text-danger btn-del-evento" data-id="<?php echo $id;?>" alt="Remover evento<?php echo $ev->id_evento; ?>" title="Remover evento <?php echo $ev->id_evento; ?>"><i class="fas fa-trash-alt"></i></a></span>				      	
				      </td>
				    </tr>
				    <?php } ?>			        	
						<?php } else { ?>					
							<tr>
					        	<td colspan="6" align="center">Não há dados a serem exibidos para a listagem.</td>
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
				<button type="button" class="btn btn-default btn-lg btn-voltar" id="btn-voltar-evento"><i class='fa fa-arrow-left'></i> Voltar</button>
			</div><!-- col-sm-4-->	
			<div class="col-sm-8 form-border">	
				<h3>Gerenciamento de postagens do evento</h3>			
				<form class="form-row" id="form-evento" data-toggle="validator" action="acts/acts.eventos.php" method="POST">
					<div class="form-group col-sm-1">
						<label for="id">ID</label>
				    	<input type="number" class="form-control" id="id" name="id" aria-describedby="id" maxlength="11" disabled />
					</div>
					<div class="form-group col-sm-4">
						<label for="formGroupExampleInput">Data (2019-09-20 14:00:00)</label>
					    <input type="text" class="form-control" id="data_hora" name="data_hora" placeholder="Data do evento" required>
					</div>
			      	<div class="form-group col-sm-7">
						<label for="formGroupExampleInput">Nome do Evento</label>
					    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do evento" required>
					</div>
					<div class="form-group col-sm-12">
					    <label for="img">Imagem (Capa)</label>
					    <input type="file" class="form-control-file" id="img" name="img" aria-describedby="img" placeholder="Insira a imagem" required>				    
					</div>				  
				  	<div class="form-group col-sm-12">
				    	<textarea class="form-control" id="descricao" name="descricao" rows="5" placeholder="Descrição do evento" required></textarea>
				  	</div>
				  	<div class="form-group col-sm-12">				      
				    	<div class="checkbox" style="margin-left: 20px;">
							<label>
								<input type="checkbox" id="ativo" name="ativo" data-toggle="toggle" data-on="Sim" data-off="Não" data-onstyle="success" data-offstyle="danger">
							Se o estiver ativo, aparecerá na página inicial do site
							</label>
					   	</div>
			      	</div>	
			      	<div class="form-group col-sm-12">				      
				    	<div class="checkbox" style="margin-left: 20px;">
							<label>
								<input type="checkbox" id="realizado" name="realizado" data-toggle="toggle" data-on="Sim" data-off="Não" data-onstyle="success" data-offstyle="danger">
							Se o estiver sim, siginifica q o evento já foi realizado.
							</label>
					   	</div>
			      	</div>		      	
				  	<div class="col-sm-8"></div>
				  	<div class="col-sm-8"></div>
				  	<div class="col-sm-4">
				  		<button type="submit" class="btn btn-form btn-primary mb-2" id="btn-salvar-evento">Salvar Evento</button>
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