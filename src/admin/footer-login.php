		<div id="alert" class="modal" data-backdrop="static">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 id="alert-title" class="modal-title"></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p id="alert-content"></p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="confirm" class="modal" data-backdrop="static">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 id="confirm-title" class="modal-title">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<div class="modal-body">
					<p id="confirm-content"></p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-danger" id="btn-confirm-modal">Continuar</button>
					</div>
				</div>
			</div>
		</div>
		<div id="loading" class="modal" data-backdrop="static">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Aguarde! Processando seus dados...</h5>
					</div>
					<div class="modal-body">
						<p id="alert-content" style="text-align: center;">
						<img src="../img/loading-pop.gif" border="0"><br />
						Sua requisição foi enviada e está sendo processada pelo nosso sistema! Aguarde alguns instantes....
						</p>
					</div>
				</div>
			</div>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="../js/main.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/app.js" type="text/javascript" charset="utf-8"></script>		
		<script src="../js/jquery.datetimepicker.js"></script>
		<script src="../js/jquery.mask.js"></script>
		<script>
			$("#data_inicio").mask('00/00/0000');
		</script>
		<?php if($conn) $conn->close(); ob_end_flush(); ob_clean(); ?>
	</body>
</html>