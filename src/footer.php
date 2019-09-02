		<footer class="footer">
			<div class="container-fluid">
				<div class="row doacao">
					<div class="col-sm-2"></div>
					<div class="col-sm-5">
						<h2>Faça sua doação agora mesmo</h2>						
					</div>
					<div class="col-sm-3">
						<a href="doacao.php" class="btn btn-lg btn-doacao">Doar agora para o GACC</a>
					</div>
				</div><!-- row -->
				<div class="row footer-menu">
					<div class="col-sm-3">
						<h4 class="footer-title">Como ajudar ?</h4>
						<nav class="nav flex-column">				
							<a class="nav-link nav-footer" href="doacao.php">Faça sua doação</a>
							<a class="nav-link nav-footer" href="empresa-parceira.php">Projeto Empresa Parceira</a>
							<a class="nav-link nav-footer" href="formas-ajudar.php">Outras formas de ajudar</a>
							<a class="nav-link nav-footer" href="seja-voluntario.php">Seja um voluntário</a>
						</nav>
					</div>
					<div class="col-sm-5">
					<h4 class="footer-title localizacao" style="margin-left: 0;">Localização</h4>	
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3688.369362529507!2d-47.552932285573036!3d-22.41511952614544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c7da410b7ba4f7%3A0x1a0fbb7b3869db63!2sAv.+P+17%2C+253+-+Vila+Paulista%2C+Rio+Claro+-+SP%2C+13506-827!5e0!3m2!1spt-BR!2sbr!4v1566330453070!5m2!1spt-BR!2sbr" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>	
					<div class="col-sm-4">
						<h4 class="footer-title fale-conosco">Fale Conosco</h4>
						<form class="footer-contact">
						  <div class="form-group row">						    
						    <div class="col-sm-7 offset-1">
						      <input type="text" class="form-control col-form-label-sm" id="inputEmail3" placeholder="Nome" required>
						    </div>
						  </div>
						  <div class="form-group row">						    
						    <div class="col-sm-7 offset-1">
						      <input type="email" class="form-control col-form-label-sm" id="inputPassword3" placeholder="E-mail" required>
						    </div>
						  </div>
						  <div class="form-group row">
						    <div class="col-sm-7 offset-1">
						      <textarea class="form-control col-form-label-sm" name="" id="" cols="10" rows="2" placeholder="Mensagem..." required></textarea>
						    </div>
						  </div>
						  <div class="form-group row">
						    <div class="col-sm-7 offset-1">
						      <button type="submit" class="btn btn-sm btn-doacao">Enviar</button>
						    </div>
						  </div>
						</form>
					</div>					
				</div><!-- row-->
			</div><!-- container -->
		</footer>
		<p style="text-align: center;">Todos os direitos reservados &copy; 2019</p>
		<script src="js/main.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/app.js" type="text/javascript" charset="utf-8"></script>		
		<script src='js/moment.min.js' type="text/javascript" charset="utf-8"></script>			
		<script src="js/textext.core.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/textext.plugin.autocomplete.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/textext.plugin.ajax.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
		<script src="js/jquery.mask.js"></script>
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