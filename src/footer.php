		<footer class="footer">
			<div class="container-fluid">
				<div class="row doacao">
					<div class="col-sm-2"></div>
					<div class="col-sm-5">
						<h2>Faça sua doação agora mesmo</h2>						
					</div>
					<div class="col-sm-3">
						<a href="doacao.php" class="btn btn-lg btn-doacao">Doar para o GACC</a>
					</div>
				</div><!-- row -->
				<div class="row footer-menu">
					<div class="col-sm-4 logo-footer">
						<img src="img/logo-footer.png">
						<nav class="nav flex-column">				
							<a class="nav-link nav-footer" href=""><i class="fas fa-envelope"></i> contato@gacc-rc.org.br</a>
							<a class="nav-link nav-footer" href=""><i class="fas fa-phone"></i> (19) 3534-5612 / (19) 99621-9518</a>							
							<a class="nav-link nav-footer" href="contato.php"><i class="fas fa-map-marker-alt"></i> Av P17, 253, Vila Paulista - Rio Claro/SP</a>
							<p class="social-footer">
								<a href="https://www.facebook.com/gaccrioclaro/" target="_blank"><i class="fab fa-facebook-square"></i></a>
								<a href="https://www.instagram.com/gaccrc/?hl=pt-br" target="_blank"><i class="fab fa-instagram"></i></a>
								<a href=""><i class="fab fa-youtube"></i></a>						
							</p>
						</nav>
					</div>
					<div class="col-sm-4">
					<h4 class="footer-title">Links Uteis</h4>	
						<nav class="nav flex-column">				
							<a class="nav-link nav-footer" href="gacc.php">GACC</a>
							<a class="nav-link nav-footer" href="como-atuamos.php">Como Atuamos</a>
							<a class="nav-link nav-footer" href="doacao.php">Faça sua doação</a>
							<a class="nav-link nav-footer" href="empresa-parceira.php">Empresa Parceira</a>
							<a class="nav-link nav-footer" href="formas-ajudar.php">Outras formas de ajudar</a>
						</nav>
					</div>	
					<div class="col-sm-4">
					<h4 class="footer-title">Certificações</h4>	
						<nav class="nav flex-column">
							<a class="nav-link nav-footer" href="http://cebas.mec.gov.br/" target="_blank">CEBAS</a>
							<a class="nav-link nav-footer" href="https://www.fartura.sp.gov.br/transparencia/osaaf/41" target="_blank">CMDCA</a>
						</nav>
					</div>								
				</div><!-- row-->
				<div class="row fix">
					<div class="contato-fix" data-toggle="modal" data-target="#exampleModal">
						<i class="far fa-envelope"></i>
					</div>
				</div>
				<div class="row copy">
					<div class="col-sm-4">
						<p>Todos os direitos reservados &copy; 2019</p>
					</div>
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<p><i class="fas fa-laptop-code"></i> Desenvolvido por: <span>Bruno Gomes</span> <br> <i class="fas fa-mobile-alt"></i> (19) 99897-0090</p>
					</div>
				</div>
			</div><!-- container -->
		</footer>		
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header modal-contact">
		        <h5 class="modal-title" id="exampleModalLabel">Envie-nos uma mensagem</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<form class="footer-contact">
				  <div class="form-group row">						    
				    <div class="col-sm-10 offset-1">
				      <input type="text" class="form-control col-form-label-sm" id="inputEmail3" placeholder="Nome" required>
				    </div>
				  </div>
				  <div class="form-group row">						    
				    <div class="col-sm-10 offset-1">
				      <input type="email" class="form-control col-form-label-sm" id="inputPassword3" placeholder="E-mail" required>
				    </div>
				  </div>
				  <div class="form-group row">
				    <div class="col-sm-10 offset-1">
				      <textarea class="form-control col-form-label-sm" name="" id="" cols="10" rows="2" placeholder="Mensagem..." required></textarea>
				    </div>
				  </div>
				  <div class="form-group row">
				    <div class="col-sm-7 offset-1">
				      <button type="submit" class="btn btn-md btn-doacao">Enviar</button>
				    </div>
				  </div>
				</form>
		      </div>
		      <div class="modal-footer">		      	
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>		        
		      </div>
		    </div>
		  </div>
		</div>
		<script src="js/main.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/app.js" type="text/javascript" charset="utf-8"></script>		
		<script src='js/moment.min.js' type="text/javascript" charset="utf-8"></script>			
		<script src="js/textext.core.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/textext.plugin.autocomplete.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/textext.plugin.ajax.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
		<script src="js/jquery.mask.js"></script>
		<script src="js/lightbox-plus-jquery.min.js"></script>
		<script type="text/javascript"
		src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js">
		</script>
		<script>
		$(document).on("scroll",function(){
		    if($(document).scrollTop()>300){ 		        	
		        $("#header-menu").removeClass("header-menu").addClass("header-menu-2");
		        $("#header-top").removeClass("header-top").addClass("header-top-2");		        	        
		    } else{
		    	$("#header-menu").removeClass("header-menu-2").addClass("header-menu");
		        $("#header-top").removeClass("header-top-2").addClass("header-top");
		    }
		});
		</script>
		<script>			
			$("#telefone").mask("(00) 0000-0000");
			$("#celular").mask("(00) 0000-00009");
		</script>
	</body>
</html>